@extends('layouts.app')
@section('content')
<main class="container">
    @include('layouts.nav-filter')

    <div class="row ">

  <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 food-card shadow-sm position-relative">
            <img src="https://thidaskitchen.com/wp-content/uploads/cambodian-food/desserts/banana-pudding.jpg" class="card-img-top" alt="img">
            <div class="card-body d-flex flex-column">
                <div class="text-warning mb-2 fs-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                
                <h5 class="card-title mb-1">Cambodian Tapioca Banana Pudding</h5>
                <p class="text-muted small mb-2">Author:</p>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">Cambodian Tapioca Banana Pudding, is a luscious velvety textured dessert hosting flavors of cinnamon, vanilla, coconut, and banana. Great to end a meal but also ideal for breakfast.</p>
                
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> 30 min
                        </div>
                        <div class="small fw-bold">Easy</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 


    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card h-100 food-card shadow-sm position-relative">
            <img src="https://d122axpxm39woi.cloudfront.net/images/guides/origin/63e8cc0bf2017.png" class="card-img-top" alt="img">
            <div class="card-body d-flex flex-column">
                <div class="text-warning mb-2 fs-6">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                
                <h5 class="card-title mb-1">Sang Khya L'peouv</h5>
                <p class="text-muted small mb-2">Author:</p>
                <p class="card-text text-secondary mb-4" style="font-size: 0.95rem;">Sang Khya L'peouv is hollow pumpkins filled with delicious coconut custard that Cambodians often use for dessert after each meal. Each piece reveals a creamy yellow custard that contrasts beautifully with the orange pumpkin flesh when the pumpkin is cut.</p>
                
                <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                        <div class="text-muted small d-flex align-items-center">
                            <i class="bi bi-clock me-2"></i> 45 min
                        </div>
                        <div class="small fw-bold">Medium </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 



</main>
@endsection