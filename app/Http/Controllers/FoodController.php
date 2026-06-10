<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    public function index(Request $request) {
        $category = $request->route()->action['category'] ?? $request->category;
        $query = Food::query();
        if ($category) {
            $query->where('category', $category);
        }
        $dishes = $query->latest()->get();
        
        $view = 'pages.all-food';
        if ($category == 'dish') $view = 'pages.dishes';
        if ($category == 'soup') $view = 'pages.soups';
        if ($category == 'grilled') $view = 'pages.grilled';
        if ($category == 'dessert') $view = 'pages.desserts';
        if ($category == 'rice-noodles') $view = 'pages.rice-noodles';

        return view($view, ['dishes' => $dishes]);
    }

    public function createDish(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required', 
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
            'difficulty' => 'required',
            'duration' => 'required|integer',
            'rating' => 'nullable|integer|min:1|max:5'
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['category'] = strip_tags($incomingFields['category']);
        $incomingFields['rating'] = (int) $incomingFields['rating'];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('food', 'public');
            $incomingFields['image_url'] = $path;
        }

        Food::create($incomingFields);
        return redirect('/all-food')->with('success', 'Dish added successfully!');
    }

    public function showEditScreen(Food $food) {
        return view('pages.board.edit', ['dish' => $food]);
    }

    public function actuallyUpdateDish(Food $food, Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required', 
            'description' => 'required',
            'category' => 'required',
            'image' => 'nullable',
            'difficulty' => 'required',
            'duration' => 'required|integer',
            'rating' => 'nullable|integer|min:1|max:5'
        ]);

        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['category'] = strip_tags($incomingFields['category']);
        $incomingFields['rating'] = (int) $incomingFields['rating'];

        if ($request->hasFile('image')) {
            if ($food->image_url) {
                Storage::disk('public')->delete($food->image_url);
            }
            $path = $request->file('image')->store('food', 'public');
            $incomingFields['image_url'] = $path;
        }

        $food->update($incomingFields);
        return redirect('/all-food')->with('success', 'Dish updated successfully!');
    }

    public function deleteDish(Food $food) {
        if ($food->image_url) {
            Storage::disk('public')->delete($food->image_url);
        }
        $food->delete();
        return redirect('/all-food')->with('success', 'Dish deleted');
    }
}
