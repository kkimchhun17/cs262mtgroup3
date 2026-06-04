@extends('layouts.app')
@section('content')
<main class="container">
    @include('layouts.nav-filter')

    <div class="row ">

  <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 food-card shadow-sm position-relative">
            <img src="..." class="card-img-top" alt="img">
            <div class="card-body d-flex flex-column">
                <div class="text-warning mb-2 fs-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                
                <h5 class="card-title mb-1">title</h5>
                <p class="text-muted small mb-2">Author:</p>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> Time
                        </div>
                        <div class="small fw-bold">Difficulty</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


</main>
@endsection