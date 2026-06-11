@extends('layouts.app')
@section('content')

<section class="container-fluid px-4 px-lg-5 py-5 min-vh-100 d-flex align-items-center">
  <div class="row w-100 align-items-center g-5">
    <div class="col-lg-6 pe-lg-5">
      <div class="hero-eyebrow text-terra small fw-medium text-uppercase letter-spacing mb-4">Authentic Khmer Cuisine</div>
        <h1 class="font-serif display-3 fw-semibold mb-4 lh-sm text-dark">
          Discover the<br>flavors of<br>
          <em class="text-terra">Cambodia
            <svg class="underline" viewBox="0 0 220 10" preserveAspectRatio="none">
              <path d="M4 6 Q55 2 110 6 Q165 10 216 5"/>
            </svg>
          </em>
        </h1>
        <p class="text-muted-custom fs-6 mb-5" style="max-width: 420px;">Explore recipes passed down through generations — or share your own Khmer creations with a community that loves food as much as you do.</p>
        <div class="d-flex gap-3 align-items-center flex-wrap">
          <a href="/all-food" class="btn btn-filled rounded-pill px-4 py-3 fw-medium text-light">Browse recipes</a>
        </div>
    </div>

    <div class="col-lg-6 position-relative d-flex justify-content-lg-end mt-5 mt-lg-0">
      <img src="./asset/img/hero-img.png" alt="img" class="hero-img-wrap w-100 shadow" style="max-width: 520px;">
    </div>

  </div>
</section>

<section class="container-fluid px-4 px-lg-5 py-5 my-4">
  <div class="d-flex justify-content-between align-items-end mb-5">
    <h2 class="font-serif display-6 fw-semibold text-dark mb-0 lh-sm">Recipes the community<br><span class="text-terra fst-italic">loves most</span></h2>
    <a href="/all-food" class="text-terra text-decoration-none fw-medium small d-none d-md-block">See all recipes →</a>
  </div>

  <div class="row">

    <div class="col-12 col-md-6 col-lg-4 mb-4 ">
      <div class="card dish-card shadow-sm position-relative h-100">
        <img src="https://grantourismotravels.com/wp-content/uploads/2021/02/Authentic-Nom-Banh-Chok-Recipe-Cambodian-Khmer-Noodles-Copyright-2022-Terence-Carter-Grantourismo-T.jpg"
          class="card-img-top" alt="img">

          <div class="card-body d-flex flex-column">
          <!-- rating stars -->
          <div class="text-warning mb-2 fs-6">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i> 
            <i class="bi bi-star"></i>
          </div>

          <h5 class="card-title my-2">Nom Banh Chok</h5>
          <p class="card-text text-secondary my-2" style="font-size: 0.95rem;">Nom banh chok (simply “Khmer noodles”) comprises a fish curry served over a bed of fresh rice noodles, wild herbs, and vegetables. The curry broth is rich, with a delicate balance between sweetness and umami, and a distinct citrusy flavor that’s so prevalent in Cambodian cuisine.</p>

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

    <div class="col-12 col-md-6 col-lg-4 mb-4 ">
      <div class="card dish-card shadow-sm position-relative h-100">
        <img src="https://lostplate.com/wp-content/uploads/2020/11/Cambodian-Pork-Rice-Recipe-Plate.jpg"
          class="card-img-top" alt="img">

          <div class="card-body d-flex flex-column">
          <!-- rating stars -->
          <div class="text-warning mb-2 fs-6">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i> 
            <i class="bi bi-star"></i>
          </div>

          <h5 class="card-title my-2">Cambodian Pork & Rice</h5>
          <p class="card-text text-secondary my-2" style="font-size: 0.95rem;">Cambodian Pork and Rice consists of thin pork strips that have marinated overnight, grilled and served with steamed rice and a quick pickle of carrot and daikon. It makes one of Cambodia’s most popular breakfasts, along with the noodle soup kuy teav and nom banh chok.</p>

          <div class="mt-auto">
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <div class="text-muted small d-flex align-items-center">
                <i class="bi bi-clock me-2"></i>25 min
              </div>
              <div class="small fw-bold">Easy</div>
            </div>
          </div>

        </div>

      </div>

    </div>

    <div class="col-12 col-md-6 col-lg-4 mb-4 ">
      <div class="card  dish-card shadow-sm position-relative h-100">
        <img src="https://d122axpxm39woi.cloudfront.net/images/guides/origin/63e8cc0bf2017.png"
          class="card-img-top" alt="img">

          <div class="card-body d-flex flex-column">
          <!-- rating stars -->
          <div class="text-warning mb-2 fs-6">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i> 
            <i class="bi bi-star"></i>
          </div>

          <h5 class="card-title my-2">Sang Khya L'peouv</h5>
          <p class="card-text text-secondary my-2" style="font-size: 0.95rem;">Sang Khya L'peouv is hollow pumpkins filled with delicious coconut custard that Cambodians often use for dessert after each meal.
             Each piece reveals a creamy yellow custard that contrasts beautifully with the orange pumpkin flesh when the pumpkin is cut.</p>

          <div class="mt-auto">
            <div class="d-flex justify-content-between align-items-center pt-3 border-top">
              <div class="text-muted small d-flex align-items-center">
                <i class="bi bi-clock me-2"></i>40 min
              </div>
              <div class="small fw-bold">Medium</div>
            </div>
          </div>

        </div>

      </div>

    </div>


  </div>


</section>

<section class="bg-ink text-white py-5">
   <div class="container-fluid px-4 px-lg-5 my-4">

      <div class="d-flex align-items-center gap-3 mb-5">
        <div class="text-uppercase fw-medium" style="color: var(--saffron); font-size: 11px; letter-spacing: 2px;">Why Krorya</div>
        <div class="flex-grow-1" style="height: 1px; background: rgba(232,161,53,.25);"></div>
      </div>

      <div class="row row-cols-1 row-cols-lg-3 why-grid rounded-4">
        <div class="col bg-ink p-5 why-item">
          <div class="font-serif display-4 fw-semibold mb-3 lh-1" style="color: rgba(232,161,53,.3);">01</div>
          <h4 class="fs-5 fw-medium mb-3">Authentically Khmer</h4>
          <p class="small text-white-50 lh-lg mb-0">Every recipe is rooted in real Cambodian tradition — no fusion shortcuts, no substitutions that lose the soul of the dish.</p>
        </div>

        <div class="col bg-ink p-5 why-item">
          <div class="font-serif display-4 fw-semibold mb-3 lh-1" style="color: rgba(232,161,53,.3);">02</div>
          <h4 class="fs-5 fw-medium mb-3">Community-shared</h4>
          <p class="small text-white-50 lh-lg mb-0">Recipes come from home cooks and passionate chefs across Cambodia. Real people, real kitchens, real flavor.</p>
        </div>

        <div class="col bg-ink p-5 why-item">
          <div class="font-serif display-4 fw-semibold mb-3 lh-1" style="color: rgba(232,161,53,.3);">03</div>
          <h4 class="fs-5 fw-medium mb-3">Living heritage</h4>
          <p class="small text-white-50 lh-lg mb-0">Khmer cuisine is ancient and evolving. We document it so future generations can cook what their grandparents made.</p>
        </div>

      </div>

   </div>
</section>

<div class="container-fluid px-4 px-lg-5 py-5 my-4">

   <div class="cta-banner bg-terra text-white rounded-5 p-4 p-md-5 d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4 shadow-lg">
      
      <div class="position-relative z-1">
        <h2 class="font-serif display-6 fw-semibold mb-3 lh-sm">Have a recipe to share?</h2>
        @auth
        <p class="mb-0 text-white-50" style="max-width: 480px;">Welcome back! Jump straight to the dashboard and add your dish to the collection.</p>
        @else
        <p class="mb-0 text-white-50" style="max-width: 480px;">Create a free account and add your own Khmer dishes to the collection. Every contribution keeps the tradition alive.</p>
        @endauth
      </div>

      @auth
      <a href="/dashboard" class="btn btn-light rounded-pill px-5 py-3 text-terra fw-medium text-nowrap position-relative z-1 shadow-sm">Add a dish</a>
      @else
      <a href="/register" class="btn btn-light rounded-pill px-5 py-3 text-terra fw-medium text-nowrap position-relative z-1 shadow-sm">Start sharing</a>
      @endauth

   </div>
</div>


@endsection