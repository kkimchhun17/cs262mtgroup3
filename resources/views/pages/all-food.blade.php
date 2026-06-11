@extends('layouts.app')
@section('content')
<main>
   <div>
    
    <div class="page-hero bg-ink text-white py-5 px-4 px-lg-5">
      <div class="position-relative z-1" style="max-width: 600px;">
        <div class="hero-eyebrow text-saffron text-uppercase small fw-medium mb-3" style="letter-spacing: 2px;">Explore the collection</div>
        <h1 class="font-serif display-5 fw-semibold mb-3 lh-sm">All <em class="text-saffron fst-italic">Traditional</em> Dishes</h1>
        <p class="text-white-50 small mb-4 lh-lg">Browse the full collection of authentic Khmer recipes — from fragrant soups to charcoal-grilled street food and sweet coconut desserts.</p>
        <div class="d-flex gap-4 gap-md-5 mt-4">
          <div>
            <div class="font-serif fs-3 fw-semibold lh-1">117</div>
            <div class="text-white-50 small mt-1" style="font-size: 12px; letter-spacing: 0.5px;">Total recipes</div>
          </div>
          <div>
            <div class="font-serif fs-3 fw-semibold lh-1">5</div>
            <div class="text-white-50 small mt-1" style="font-size: 12px; letter-spacing: 0.5px;">Categories</div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
    @include('layouts.nav-filter')

    @include('layouts.dish-card')
</main>
@endsection


