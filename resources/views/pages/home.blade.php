@extends('layouts.app')
@section('content')

<section class="container hero-section mt-1">
   <div class="row align-items-center">
      
      <div class="col-lg-6 col-md-12 pe-lg-5">
         <h1 class="hero-title">
            <span class="text-title">Discover</span> the 
            <span>Flavors</span><br>
            of <span class="text-title">Cambodia</span>
         </h1>
          
         <p class="hero-subtitle">
            Explore authentic recipes or share your own Khmer creations with the world.
         </p>
          
         <a href="/all-food" class="btn btn-browse shadow-sm">Browse more</a>
         
      </div> 

      <div class="col-lg-6 col-md-12 position-relative text-center mt-5 mt-lg-0">
          <img src="https://i.pinimg.com/1200x/d3/b1/30/d3b130cac83df1091ccec611e3c03fef.jpg" alt="img" class="w-100 rounded-5" style="max-width: 600px; object-fit:cover">
      </div>

   </div>
</section>
@endsection