@extends('layouts.app')
@section('content')
<div class="container py-5">
    <h1>Editing Dish</h1>
    <form method="POST" action="/edit-dish/{{ $dish->id }}" enctype="multipart/form-data">
        @csrf
        <div class="row g-5">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-50 d-flex flex-column justify-content-between align-items-center"
                    style="min-height: 580px;">
                    <div class="w-100 mb-4 d-flex align-items-center justify-content-center bg-secondary-subtle rounded-4 overflow-hidden"
                        style="height: 240px; min-height: 240px; position: relative;">
                        <div id="preview-placeholder" class="text-center p-3 {{ $dish->image_url ? 'd-none' : '' }}">
                            <i class="bi bi-image fs-2 text-secondary mb-1 d-block"></i>
                            <h5 class="fw-bold text-dark mb-1 small">edit dish image</h5>
                            <p class="text-muted small mb-0">(´▽`ʃ♡ƪ) here</p>
                        </div>
                        <img id="image-preview"
                            src="{{ $dish->image_url ? asset('storage/' . $dish->image_url) : '#' }}" alt="Dish Preview"
                            class="w-100 h-100 object-fit-cover {{ $dish->image_url ? '' : 'd-none' }}">
                    </div>
                    <div class="w-100 mb-3">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                            name="image" accept="image/*">
                        @error('image')
                        <span class="invalid-feedback mt-2" role="alert">
                            <strong class="text-danger">idk</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mt-2 pt-3 border-top w-100 text-start text-muted">
                        <div class="bg-white p-3 rounded-4 shadow-sm border border-light-subtle">
                            <h5 class="fw-bold text-dark mb-1 text-truncate" id="preview-title">Dish Title</h5>
                            <div class="text-warning mb-2 fs-6" id="preview-rating">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="text-muted small mb-2">Category: <span id="preview-category"
                                    class="fw-semibold text-secondary">None Chosen</span></p>
                            <p class="small text-muted mb-3" id="preview-description"
                                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                No description provided yet...</p>
                            <div
                                class="d-flex justify-content-between align-items-center border-top pt-2 text-muted small">
                                <span>
                                    <i class="bi bi-clock me-1"></i>
                                    <span id="preview-duration">0</span> min
                                </span>
                                <span class="badge bg-light text-dark border px-2 py-1.5 rounded-pill font-monospace"
                                    id="preview-difficulty">
                                    Easy
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8 d-flex flex-column justify-content-between">
                <div class="w-100">
                    <div class="mb-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">Title</label>
                        <input type="text"
                            class="form-control form-control-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('name') is-invalid @enderror"
                            id="input-name" name="name" placeholder="food name" value="{{ old('name', $dish->name) }}"
                            required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">Category Type</label>
                        <select
                            class="form-select form-select-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('category') is-invalid @enderror"
                            id="input-category" name="category" required>
                            <option value="" disabled>Choose food category...</option>

                            <option value="rice-noodles"
                                {{ old('category', $dish->category) == 'rice-noodles' ? 'selected' : '' }}>Rice & Noodle
                                Dishes</option>
                            <option value="soup" {{ old('category', $dish->category) == 'soup' ? 'selected' : '' }}>
                                Soups & Curries</option>
                            <option value="grilled"
                                {{ old('category', $dish->category) == 'grilled' ? 'selected' : '' }}>Grilled &
                                Stir-Fried Dishes</option>
                            <option value="dessert"
                                {{ old('category', $dish->category) == 'dessert' ? 'selected' : '' }}>Desserts & Snacks
                            </option>
                        </select>
                        @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">Description</label>
                        <textarea
                            class="form-control bg-light border-0 p-3 rounded-3 shadow-sm @error('description') is-invalid @enderror"
                            id="input-description" name="description" rows="7" placeholder="description for the food"
                            required>{{ old('description', $dish->description) }}</textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                </div>
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">
                            Rating
                        </label>

                        <div class="btn-group w-100" role="group">
                            @for ($i = 1; $i <= 5; $i++) <input type="radio" class="btn-check rating-input"
                                name="rating" id="rating{{ $i }}" value="{{ $i }}"
                                {{ old('rating', $dish->rating) == $i ? 'checked' : '' }}>

                                <label class="btn btn-outline-warning" for="rating{{ $i }}">
                                    {{ $i }}
                                </label>
                                @endfor
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">
                            Difficulty
                        </label>

                        <select class="form-select form-select-lg bg-light border-0 py-3 rounded-3 shadow-sm"
                            id="input-difficulty" name="difficulty" old($dish->difficulty)
                            >
                            <option value="Easy" {{ old('difficulty', $dish->difficulty) == 'Easy' ? 'selected' : '' }}>
                                Easy</option>
                            <option value="Medium"
                                {{ old('difficulty', $dish->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="Hard" {{ old('difficulty', $dish->difficulty) == 'Hard' ? 'selected' : '' }}>
                                Hard</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label text-muted fw-semibold small text-uppercase">
                            Duration (Minutes)
                        </label>

                        <input type="number"
                            class="form-control form-control-lg bg-light border-0 py-3 rounded-3 shadow-sm"
                            id="input-duration" name="duration" min="1" value="{{ old('duration', $dish->duration) }}">
                    </div>
                </div>
                <div class="text-end mt-4">
                    <button type="submit"
                        class="btn btn-dark btn-lg px-5 py-2.5 rounded-pill shadow-sm text-uppercase fs-7 fw-bold tracking-wider">
                        Update Dish
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {

    // IMAGE
    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('image-preview').src = e.target.result;
                document.getElementById('image-preview').classList.remove('d-none');
                document.getElementById('preview-placeholder').classList.add('d-none');
            };
            reader.readAsDataURL(file);
        }
    });

    // TEXT PREVIEW
    const inputs = {
        'input-name': 'preview-title',
        'input-category': 'preview-category',
        'input-description': 'preview-description',
        'input-difficulty': 'preview-difficulty',
        'input-duration': 'preview-duration'
    };

    Object.keys(inputs).forEach(inputId => {
        const inputEl = document.getElementById(inputId);
        const previewEl = document.getElementById(inputs[inputId]);

        const update = () => {
            if (!inputEl || !previewEl) return;

            if (inputId === 'input-duration') {
                previewEl.innerText = inputEl.value || '0';
            } else if (inputId === 'input-description') {
                previewEl.innerText = inputEl.value || 'No description provided yet...';
            } else if (inputId === 'input-category') {
                previewEl.innerText = inputEl.value || 'None Chosen';
            } else {
                previewEl.innerText = inputEl.value || 'Dish Title';
            }
        };

        inputEl.addEventListener('input', update);
        inputEl.addEventListener('change', update);
        update();
    });

    function updateRating(rating) {
        const el = document.getElementById('preview-rating');

        let html = '';
        for (let i = 1; i <= 5; i++) {
            html += i <= rating ?
                '<i class="bi bi-star-fill"></i>' :
                '<i class="bi bi-star"></i>';
        }

        el.innerHTML = html;
    }

    document.querySelectorAll('.rating-input').forEach(radio => {
        radio.addEventListener('change', function() {
            updateRating(this.value);
        });
    });

    const initialRating =
        document.querySelector('.rating-input:checked')?.value || 5;

    updateRating(initialRating);
});
</script>
@endsection