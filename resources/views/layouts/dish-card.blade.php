<div class="row px-5">

    @foreach($dishes as $dish)
    <div class="col-12 col-md-6 col-lg-4 mb-4">

        <div class="card h-100 dish-card shadow-sm position-relative">

            <img src="{{ $dish->image_url ? asset('storage/' . $dish->image_url) : 'https://via.placeholder.com/400x300' }}"
                class="card-img-top h-100" alt="{{ $dish->name }}">

            <div class="card-body d-flex flex-column">

                <!-- rating stars -->
                <div class="text-warning mb-2 fs-6">
                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$dish->rating)
                        <i class="bi bi-star-fill"></i>
                        @else
                        <i class="bi bi-star"></i>
                        @endif
                        @endfor
                        <span class="text-muted small ms-1">{{ $dish->rating }}</span>
                </div>

                <h5 class="card-title mb-1">{{ $dish->name }}</h5>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">{{ $dish->description }}</p>

                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> {{ $dish->duration }} min
                        </div>
                        <div class="small fw-bold">{{ $dish->difficulty }}</div>
                    </div>

                    @auth
                    <div class="d-flex gap-2 mt-3">
                        <a href="/edit-dish/{{ $dish->id }}" class="btn btn-sm btn-outline-primary flex-grow-1">Edit</a>
                        <form action="/delete-dish/{{ $dish->id }}" method="POST" class="flex-grow-1">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger w-100"
                                onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </div>
                    @endauth
                </div>

            </div>

        </div>

    </div>
    @endforeach
</div>