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
          <a href="#" class="text-dark text-decoration-none fw-medium ms-2">Share yours <span class="fs-5 ms-1">→</span></a>
        </div>
      </div>

      <div class="col-lg-6 position-relative d-flex justify-content-lg-end mt-5 mt-lg-0">
         <img src="#" alt="img" class="hero-img-wrap w-100 shadow" style="max-width: 520px;">
      </div>

   </div>
</section>

<section class="container-fluid px-4 px-lg-5 py-5 my-4">
   <div class="d-flex justify-content-between align-items-end mb-5">
   <h2 class="font-serif display-6 fw-semibold text-dark mb-0 lh-sm">Recipes the community<br><span class="text-terra fst-italic">loves most</span></h2>
   <a href="/all-food" class="text-terra text-decoration-none fw-medium small d-none d-md-block">See all recipes →</a>
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
        <p class="mb-0 text-white-50" style="max-width: 480px;">Create a free account and add your own Khmer dishes to the collection. Every contribution keeps the tradition alive.</p>
      </div>

      <a href="#" class="btn btn-light rounded-pill px-5 py-3 text-terra fw-medium text-nowrap position-relative z-1 shadow-sm">Start sharing</a>
   
   </div>
</div>



@endsection