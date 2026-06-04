@extends('layouts.app')
@section('content')

<section class="container hero-section">
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
          
         <a href="/dishes" class="btn btn-browse shadow-sm">Browse more</a>
         
      </div> 

      <div class="col-lg-6 col-md-12 position-relative text-center mt-5 mt-lg-0">
          <img src="https://grantourismotravels.com/wp-content/uploads/2017/05/Authentic-Fish-Amok-Recipe-Steamed-Fish-Curry-Cambodia-Copyright-2022-Terence-Carter-Grantourismo-T-500x375.jpg" alt="img" class="img-fluid w-100 rounded-5" style="max-width: 600px;">
      </div>

   </div>
</section>
@endsection