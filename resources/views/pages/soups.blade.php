@extends('layouts.app')
@section('content')
<main class="container">
    @include('layouts.nav-filter')

    <div class="row ">

    <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 food-card shadow-sm position-relative">
                <img src="https://grantourismotravels.com/wp-content/uploads/2020/05/Samlor-Korko-Recipe-Cambodian-Stirring-Pot-Soup-Copyright-2022-Terence-Carter-Grantourismo-T.jpg" class="card-img-top" alt="img">
                <div class="card-body d-flex flex-column">
                    <div class="text-warning mb-2 fs-6">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    
                    <h5 class="card-title mb-1">Samlor Korko</h5>
                    <p class="text-muted small mb-2">Author: Sochary Vanda</p>
                    <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">Samlor Korko is a complex and nutrient-rich traditional Khmer dish. This hearty soup combines a wide variety of vegetables, fish or meat, and prahok (fermented fish paste), resulting in a dish that truly represents the diversity of Cambodian cuisine.</p>
                    
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                            <div class="text-muted small d-flex align-items-center">
                                <i class="bi bi-clock me-2"></i> 45 min
                            </div>
                            <div class="small fw-bold">Difficult</div>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 food-card shadow-sm position-relative">
            <img src="https://thidaskitchen.com/wp-content/uploads/2022/11/Beef-shank-and-green-papaya-soup-1536x1024.jpg" class="card-img-top" alt="img">
            <div class="card-body d-flex flex-column">
                <div class="text-warning mb-2 fs-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                
                <h5 class="card-title mb-1">Beef Shank and Green Papaya Soup</h5>
                <p class="text-muted small mb-2">Author: Saory Soy</p>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">This beef shank and green papaya soup offers both a great way to stay warm and a quick way to get full during a quick break from the hard work in the rice fields.</p>
                
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> 30 min
                        </div>
                        <div class="small fw-bold">Medium</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 




</main>
@endsection