@extends('layouts.app')
@section('content')
<main class="container">
    @include('layouts.nav-filter')

    <div class="row">

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
        </div> <div class="col-12 col-md-6 col-lg-4 mb-4">
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




    </div> 
</main>
@endsection