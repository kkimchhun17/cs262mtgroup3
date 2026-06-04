@extends('layouts.app')
@section('content')
<main class="container">
    @include('layouts.nav-filter')

    <div class="row ">

  <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 food-card shadow-sm position-relative">
            <img src="https://thidaskitchen.com/wp-content/uploads/cambodian-food/stir-fries/lemongrass-chicken.jpg" class="card-img-top" alt="img">
            <div class="card-body d-flex flex-column">
                <div class="text-warning mb-2 fs-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                
                <h5 class="card-title mb-1">Lemongrass Chicken</h5>
                <p class="text-muted small mb-2">Author: Faris Sahayat</p>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">Lemongrass chicken is a dish of Southeast Asian origin, in which various cuts of chicken serve as the main protein, and lemongrass is the primary (but not the sole) source of flavor. Lemongrass affords this chicken dish a citrusy flavor that’s usually balanced with the sweetness of oyster sauce, and the subtle charred aromas derived from frying or grilling the dish..</p>
                
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> 29 min
                        </div>
                        <div class="small fw-bold">Easy</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 food-card shadow-sm position-relative">
            <img src="https://thidaskitchen.com/wp-content/uploads/2023/11/lok-lak.jpg" class="card-img-top" alt="img">
            <div class="card-body d-flex flex-column">
                <div class="text-warning mb-2 fs-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                
                <h5 class="card-title mb-1">Lok Lak / Shaking Beef</h5>
                <p class="text-muted small mb-2">Author: Phanith Pop</p>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">Lok Lak is a Cambodian stir fry that features fried beef nestled atop a crisp medley of fresh veggies and finished with a helping of savory, peppery gravy.</p>
                
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> 20 min
                        </div>
                        <div class="small fw-bold">Easy</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


</main>
@endsection