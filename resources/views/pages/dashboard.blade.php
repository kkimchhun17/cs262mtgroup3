@extends('layouts.app')
@section('content')
@auth
<div class="container py-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4 d-flex align-items-center justify-content-between" role="alert">
            <div class="d-flex align-items-center">
                <i class="bi bi-balloon-heart-fill me-2 text-danger"></i> 
                <span>{{ session('success') }}</span>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-1">
        <div class="mb-4">
            <h1 class="fw-bold text-dark mb-1">Welcome back, {{ $user->name }}!</h1>
        </div>
        <div>
            <a href="/food/create" class="btn btn-dark btn-lg px-4 py-2.5 rounded-pill shadow-sm fw-bold tracking-wider text-uppercase fs-7">
                <i class="bi bi-plus-lg me-2"></i> Upload New Dish
            </a>
        </div>
    </div>
    <div class="mb-4">
        <label class="form-label text-muted fw-semibold small text-uppercase mb-3">Filter by Category</label>
        <div class="d-flex flex-wrap gap-2">
            <a href="/food" class="btn {{ !request('category') ? 'btn-secondary text-white' : 'btn-light text-dark' }} border px-3 py-2 rounded-pill shadow-sm btn-sm">
                All Dishes
            </a>
            <a href="/food?category=Rice_Dishes" class="btn {{ request('category') == 'Rice Dishes' ? 'btn-secondary text-white' : 'btn-light text-dark' }} border px-3 py-2 rounded-pill shadow-sm btn-sm">
                Rice Dishes
            </a>
            <a href="/food?category=Noodle_Dishes" class="btn {{ request('category') == 'Noodle Dishes' ? 'btn-secondary text-white' : 'btn-light text-dark' }} border px-3 py-2 rounded-pill shadow-sm btn-sm">
                Noodle Dishes
            </a>
            <a href="/food?category=Soups_and_Curries" class="btn {{ request('category') == 'Soups & Curries' ? 'btn-secondary text-white' : 'btn-light text-dark' }} border px-3 py-2 rounded-pill shadow-sm btn-sm">
                Soups & Curries
            </a>
            <a href="/food?category=Grilled_and_Stir-Fried_Dishe" class="btn {{ request('category') == 'Grilled & Stir-Fried Dishe' ? 'btn-secondary text-white' : 'btn-light text-dark' }} border px-3 py-2 rounded-pill shadow-sm btn-sm">
                Grilled & Stir-Fries
            </a>
            <a href="/food?category=Desserts_and_Snacks" class="btn {{ request('category') == 'Desserts & Snacks' ? 'btn-secondary text-white' : 'btn-light text-dark' }} border px-3 py-2 rounded-pill shadow-sm btn-sm">
                Desserts & Snacks
            </a>
        </div>
    </div>
    <hr class="border-light-subtle my-4">
    <div class="row g-4">
        @forelse($dishes as $dish)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-light d-flex flex-column justify-content-between p-3">
                    <div>
                        <div class="bg-secondary-subtle rounded-4 overflow-hidden mb-3" style="height: 200px;">
                            @if($dish->image_url)
                                <img src="{{ asset('storage/' . $dish->image_url) }}" alt="{{ $dish->name }}" class="w-100 h-100 object-fit-cover">
                            @else
                                <div class="w-100 h-100 d-flex align-items-center justify-content-center text-muted">
                                    <p>no image</p>
                                </div>
                            @endif
                        </div>
                        <span class="badge bg-white text-secondary border px-2.5 py-1.5 rounded-pill font-monospace shadow-sm mb-2 d-inline-block small fw-bold">
                            {{ $dish->category }}
                        </span>
                        <h4 class="fw-bold text-dark text-truncate mb-2" title="{{ $dish->name }}">
                            {{ $dish->name }}
                        </h4>
                        <p class="text-muted small text-break mb-3" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; min-height: 60px;">
                            {{ $dish->description }}
                        </p>
                    </div>
                    <div class="border-top pt-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted small">
                                <span class="me-2"><i class="bi bi-clock me-1"></i> {{ $dish->duration ?? '0' }} min</span>
                                <span class="badge bg-secondary-subtle text-dark border-0 rounded-pill px-2 py-1 fs-8">{{ $dish->difficulty ?? 'Easy' }}</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="/food/{{ $dish->id }}/edit" class="btn btn-sm btn-outline-dark rounded-pill px-3">
                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                </a>
                                <form action="/food/{{ $dish->id }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-pill px-3">
                                        <i class="bi bi-trash-fill me-1"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5 my-5">
                <h3 class="fw-bold text-dark">Nothing here</h3>
                <p class="text-muted">You haven't posted anything yet</p>
            </div>
        @endforelse
    </div>
</div>
@else
<div class="container">
    <h1 class="text-danger">not login yet why you here?</h1>
</div>
@endauth
@endsection