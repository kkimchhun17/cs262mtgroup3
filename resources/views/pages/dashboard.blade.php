@extends('layouts.app')

@section('content')
<div class="container py-5">
    
    @if(session('success'))
        <div class="alert alert-success border-0 shadow-sm rounded-3 mb-4">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="/food/create" enctype="multipart/form-data">
        @csrf
        <div class="row g-5">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-light h-100 d-flex flex-column justify-content-between align-items-center" style="min-height: 700px;">
                    <div class="w-100 mb-4 d-flex align-items-center justify-content-center bg-secondary-subtle rounded-4 overflow-hidden" style="height: 240px; min-height: 240px; position: relative;">
                        <div id="preview-placeholder" class="text-center p-3">
                            <i class="bi bi-image fs-2 text-secondary mb-1 d-block"></i>
                            <h5 class="fw-bold text-dark mb-1 small">Dish Image</h5>
                            <p class="text-muted small mb-0">(´▽`ʃ♡ƪ) here</p>
                        </div>
                        <img id="image-preview" src="#" alt="Dish Preview" class="w-100 h-100 object-fit-cover d-none">
                    </div>
                    <div class="w-100 mb-3">
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" required>
                        @error('image')
                            <span class="invalid-feedback mt-2" role="alert">
                                <strong class="text-danger">no image?!</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-2 pt-3 border-top w-100 text-start text-muted">
                        <p class="mb-2 fw-bold text-dark small text-uppercase tracking-wider">Live Card Preview State</p>
                        <div class="bg-white p-3 rounded-4 shadow-sm border border-light-subtle">
                            <h5 class="fw-bold text-dark mb-1 text-truncate" id="preview-title">Dish Title</h5>
                            <p class="text-muted small mb-2">Category: <span id="preview-category" class="fw-semibold text-secondary">None Chosen</span></p>
                            <p class="small text-muted mb-3" id="preview-description" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">No description provided yet...</p>
                            <div class="d-flex justify-content-between align-items-center border-top pt-2 text-muted small">
                                <span>
                                    <i class="bi bi-clock me-1"></i> 
                                    <span id="preview-duration">0</span> 
                                    min
                                </span>
                                <span class="badge bg-light text-dark border px-2 py-1.5 rounded-pill font-monospace" id="preview-difficulty">
                                    Easy
                                </span>
                            </div>
                        </div>
                        <span id="preview-status" class="text-xs text-success fw-semibold mt-2 d-block"></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8 d-flex flex-column justify-content-between">
                <div class="w-100">
                    <div class="mb-4">
                        <label id="name" class="form-label text-muted fw-semibold small text-uppercase">Title</label>
                        <input type="text" class="form-control form-control-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('name') is-invalid @enderror" id="name" name="name" placeholder="food name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label id="category" class="form-label text-muted fw-semibold small text-uppercase">Category Type</label>
                        <select class="form-select form-select-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('category') is-invalid @enderror" id="category" name="category" required>
                            <option value="" disabled selected>Choose food category...</option>
                            <option value="Soups" {{ old('category') == 'Soups' ? 'selected' : '' }}>Soups</option>
                            <option value="Stir-Fries" {{ old('category') == 'Stir-Fries' ? 'selected' : '' }}>Stir-Fries</option>
                            <option value="Curries" {{ old('category') == 'Curries' ? 'selected' : '' }}>Curries</option>
                            <option value="Desserts" {{ old('category') == 'Desserts' ? 'selected' : '' }}>Desserts</option>
                        </select>
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label id="description" class="form-label text-muted fw-semibold small text-uppercase">Description</label>
                        <textarea class="form-control bg-light border-0 p-3 rounded-3 shadow-sm @error('description') is-invalid @enderror" id="description" name="description" rows="7" placeholder="description for the food" required>{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-sm-5">
                            <label id="difficulty" class="form-label text-muted fw-semibold small text-uppercase">Difficulty</label>
                            <select class="form-select form-select-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('difficulty') is-invalid @enderror" id="difficulty" name="difficulty" required>
                                <option value="Easy" {{ old('difficulty') == 'Easy' ? 'selected' : '' }}>Easy</option>
                                <option value="Medium" {{ old('difficulty') == 'Medium' ? 'selected' : '' }}>Medium</option>
                                <option value="Hard" {{ old('difficulty') == 'Hard' ? 'selected' : '' }}>Hard</option>
                            </select>
                            @error('difficulty')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </strong>
                            @enderror
                        </div>
                        <div class="col-12 col-sm-7">
                            <label id="duration" class="form-label text-muted fw-semibold small text-uppercase">Duration (Minutes)</label>
                            <input type="number" class="form-control form-control-lg bg-light border-0 py-3 rounded-3 shadow-sm @error('duration') is-invalid @enderror" id="duration" name="duration" placeholder="e.g., 20" min="1" value="{{ old('duration') }}" required>
                            @error('duration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-dark btn-lg px-5 py-2.5 rounded-pill shadow-sm text-uppercase fs-7 fw-bold tracking-wider">
                        Post Dish
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('image').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const previewImg = document.getElementById('image-preview');
                        const placeholderDiv = document.getElementById('preview-placeholder');
                        const statusText = document.getElementById('preview-status');
                        previewImg.src = e.target.result;
                        previewImg.classList.remove('d-none');
                        placeholderDiv.classList.add('d-none');
                        statusText.innerText = "Showing ready preview state.";
                        statusText.classList.remove('opacity-75');
                        statusText.classList.add('text-success', 'fw-semibold');
                    }
                    reader.readAsDataURL(file);
                }
            });
            const inputs = {
                'name': 'preview-title',
                'category': 'preview-category',
                'description': 'preview-description',
                'difficulty': 'preview-difficulty',
                'duration': 'preview-duration'
            };
            Object.keys(inputs).forEach(inputId => {
                const inputEl = document.getElementById(inputId);
                const previewEl = document.getElementById(inputs[inputId]);
                if (inputEl && previewEl) {
                    const updateValue = () => {
                        if(inputId === 'duration') {
                            previewEl.innerText = inputEl.value || '0';
                        } else if (inputId === 'description') {
                            previewEl.innerText = inputEl.value || 'No description provided yet...';
                        } else if (inputId === 'category') {
                            previewEl.innerText = inputEl.value || 'None Chosen';
                        } else {
                            previewEl.innerText = inputEl.value || 'Dish Title';
                        }
                    };
                    inputEl.addEventListener('input', updateValue);
                    inputEl.addEventListener('change', updateValue);
                }
            });
        });
    </script>
@endsection