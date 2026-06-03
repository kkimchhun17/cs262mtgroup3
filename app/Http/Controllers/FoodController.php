<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
   
    public function index(Request $request) {
        $query = Food::query();
        if ($request->filled('category')) {
            $query->where('category', $request->category);

        }
        $dishes = $query->latest()->get();
        return view('food.index', ['dishes' => $dishes]);
    }
    public function showSingleDish(Food $food) {
        return view('food.show', [['dish' => $food]]);
    }
    public function createDish(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required', 
            'description' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'

        ]);
        $incomingFields['name'] =strip_tags($incomingFields['name ']);
        $incomingFields['description'] =strip_tags($incomingFields['description ']);
        $incomingFields['category'] =strip_tags($incomingFields['category ']);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('food', 'public');
            $incomingFields['image_url'] = $path;
        }
        Food::create($incomingFields);
        return redirect('/')->with('success', 'Dish added successfully!');


    }
    public function showEditScreen(Food $food) {
        return view('food.edit', ['dish' => $food]);
    }
    public function actuallyUpdateDish(Food $food, Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required', 
            'description' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $incomingFields['name'] = strip_tags($incomingFields['name']);
        $incomingFields['description'] = strip_tags($incomingFields['description']);
        $incomingFields['category'] = strip_tags($incomingFields['category']);
        if ($request->hasFile('image')) {
            if ($food->image_url) {
                Storage::disk('public')->delete($food->image_url);
            }
            $path = $request->file('image')->store('food', 'public');
            $incomingFields['image_url'] = $path;
        }
        $food->update($incomingFields);
        return redirect('/food' . $food->id)->with('success', 'Dish updated successfully!');

    }

    public function deleteDish(Food $food) {
        if ($food->image_url) {
            Storage::disk('pubilc')->delete($food->image_url);
        }
        $food->delete();
        return redirect('/')->with('success', 'Dish deleted');
    }







}
