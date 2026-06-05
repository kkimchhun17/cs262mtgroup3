@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h2 class="mb-4">Edit Dish: {{ $dish->name }}</h2>
    <form method="POST" action="/edit-dish/{{ $dish->id }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-5">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100 d-flex flex-column justify-content-between align-items-center">
                    <div class="w-100 mb-4 d-flex align-items-center justify-content-center bg-secondary-subtle rounded-4 overflow-hidden" style="height: 240px; min-height: 240px; position: relative;">
                        <img id="image-preview" src="{{ $dish->image_url ? asset('storage/' . $dish->image_url) : '#' }}" alt="Dish Preview" class="w-100 h-100 object-fit-cover {{ $dish->image_url ? '' : 'd-none' }}">
                    </div>
                    <div class="w-100 mb-3">
                        <label class="form-label text-muted small text-uppercase">Change Image (Optional)</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                        @error('image')
                            <span class="invalid-feedback mt-2" role="alert">
                                <strong class="text-danger">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8 d-flex flex-column justify-content-between">
                <div class="w-100">
                    <div class="mb-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">Title</label>
                        <input type="text" class="form-control form-control-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('name') is-invalid @enderror" name="name" placeholder="food name" value="{{ old('name', $dish->name) }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">Category Type</label>
                        <select class="form-select form-select-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('category') is-invalid @enderror" name="category" required>
                            <option value="dish" {{ old('category', $dish->category) == 'dish' ? 'selected' : '' }}>Rice Dishes</option>
                            <option value="rice-noodles" {{ old('category', $dish->category) == 'rice-noodles' ? 'selected' : '' }}>Noodle Dishes</option>
                            <option value="soup" {{ old('category', $dish->category) == 'soup' ? 'selected' : '' }}>Soups & Curries</option>
                            <option value="grilled" {{ old('category', $dish->category) == 'grilled' ? 'selected' : '' }}>Grilled & Stir-Fried Dishes</option>
                            <option value="dessert" {{ old('category', $dish->category) == 'dessert' ? 'selected' : '' }}>Desserts & Snacks</option>
                        </select>
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">Description</label>
                        <textarea class="form-control bg-light border-0 p-3 rounded-3 shadow-sm @error('description') is-invalid @enderror" name="description" rows="7" placeholder="description for the food" required>{{ old('description', $dish->description) }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-sm-5">
                            <label class="form-label text-muted fw-semibold small text-uppercase">Difficulty</label>
                            <select class="form-select form-select-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('difficulty') is-invalid @enderror" name="difficulty" required>
                                <option value="Easy" {{ old('difficulty', $dish->difficulty) == 'Easy' ? 'selected' : '' }}>Easy</option>
                                <option value="Medium" {{ old('difficulty', $dish->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
                                <option value="Hard" {{ old('difficulty', $dish->difficulty) == 'Hard' ? 'selected' : '' }}>Hard</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-7">
                            <label class="form-label text-muted fw-semibold small text-uppercase">Duration (Minutes)</label>
                            <input type="number" class="form-control form-control-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('duration') is-invalid @enderror" name="duration" placeholder="e.g., 20" min="1" value="{{ old('duration', $dish->duration) }}" required>
                        </div>
                    </div>
                </div>
                <div class="text-end mt-4">
                    <a href="/all-food" class="btn btn-light btn-lg px-5 py-2.5 rounded-pill shadow-sm text-uppercase fs-7 fw-bold tracking-wider me-2">Cancel</a>
                    <button type="submit" class="btn btn-dark btn-lg px-5 py-2.5 rounded-pill shadow-sm text-uppercase fs-7 fw-bold tracking-wider">
                        Update Dish
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImg = document.getElementById('image-preview');
                previewImg.src = e.target.result;
                previewImg.classList.remove('d-none');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
