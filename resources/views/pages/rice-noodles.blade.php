@extends('layouts.app')
@section('content')
<main class="container">
    @include('layouts.nav-filter')

    <div class="row ">

  <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 food-card shadow-sm position-relative">
            <img src="https://thidaskitchen.com/wp-content/uploads/2022/09/Phnom-Penl-Noodles-1.jpg" class="card-img-top" alt="img">
            <div class="card-body d-flex flex-column">
                <div class="text-warning mb-2 fs-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                
                <h5 class="card-title mb-1">Kuy Teav</h5>
                <p class="text-muted small mb-2">Author: Vathana</p>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">Kuy Teav is traditionally served for breakfast in Cambodia. It takes on layers of flavor from shrimp, pork and vegetables. It combined with the rich stock over crisp lettuce leaves, herbs, sliced chiles, soy sauce and lime</p>
                
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> 40 min
                        </div>
                        <div class="small fw-bold">Medium </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 food-card shadow-sm position-relative">
            <img src="https://lostplate.com/wp-content/uploads/2020/11/Cambodian-Pork-Rice-Recipe-Plate.jpg" class="card-img-top" alt="img">
            <div class="card-body d-flex flex-column">
                <div class="text-warning mb-2 fs-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                
                <h5 class="card-title mb-1">Cambodian Pork & Rice</h5>
                <p class="text-muted small mb-2">Author: Molinza</p>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">Kuy Teav is traditionally served for breakfast in Cambodia. It takes on layers of flavor from shrimp, pork and vegetables. It combined with the rich stock over crisp lettuce leaves, herbs, sliced chiles, soy sauce and lime</p>
                
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> 40 min
                        </div>
                        <div class="small fw-bold">Medium </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    

</main>
@endsection