@extends('layouts.app')
@section('content')
<main class="container">
    @include('layouts.nav-filter')
    <div class="page-hero">
  <div class="hero-inner">
    <div class="hero-eyebrow">Explore the collection</div>
    <h1>All <em>Traditional</em> Dishes</h1>
    <p>Browse the full collection of authentic Khmer recipes — from fragrant soups to charcoal-grilled street food and sweet coconut desserts.</p>
    <div class="hero-stats">
      <div>
        <div class="hero-stat-val">117</div>
        <div class="hero-stat-label">Total recipes</div>
      </div>
      <div>
        <div class="hero-stat-val">5</div>
        <div class="hero-stat-label">Categories</div>
      </div>
      <div>
        <div class="hero-stat-val">43</div>
        <div class="hero-stat-label">Contributors</div>
      </div>
    </div>
  </div>
</div>
    @include('layouts.dish-card')
</main>
@endsection
