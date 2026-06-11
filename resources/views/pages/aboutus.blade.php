@extends('layouts.app')
@section('content')

<div class="container-fluid p-0">
   <div class="row g-0">
      
      <div class="col-lg-6 bg-ink hero-left-wrap d-flex flex-column justify-content-center p-5 p-lg-5">
         <div class="px-md-4 position-relative z-1">
            <div class="section-eyebrow text-saffron">Our story</div>
            <h1 class="font-serif text-white fw-semibold mb-4 lh-sm" style="font-size: clamp(36px,4.5vw,58px);">
               The people behind<br><em class="text-saffron fst-italic">Krorya</em>
            </h1>
            <p class="text-white-50 mb-0" style="max-width: 400px; line-height: 1.75;">
               A group of students at Paragon International University, united by one belief: that Cambodian cuisine deserves a platform as rich as the food itself.
            </p>
        </div>
      </div>
      
      <div class="col-lg-6 hero-right-wrap">
        <img src="https://www.experiencetravelgroup.com/wp-content/uploads/2025/07/ChefNak.webp" alt="Cambodian kitchen">
        <div class="hero-quote position-absolute bottom-0 start-0 end-0 m-4 p-4 rounded-4">
          <blockquote class="font-serif fst-italic text-white-50 mb-2 lh-base" style="font-size: 15px; color: rgba(255,255,255,.85)!important;">
            "Cambodian cooking is not just food — it is memory, identity, and the smell of home."
          </blockquote>
          <cite class="d-block text-uppercase fw-normal" style="font-size: 11px; color: rgba(255,255,255,.4); letter-spacing: .8px;">Krorya Team, CS262 Group 3</cite>
        </div>
      </div>
   </div>
</div>

<section class="container-fluid px-4 px-lg-5 py-5 my-5">
    <div class="row gx-lg-5 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="story-img-stack w-100 mx-auto" style="max-width: 500px;">
          
         <div class="story-img-main">
            <img src="https://i.pinimg.com/736x/55/3b/0c/553b0cdad4655861edf2e2b12762f136.jpg" alt="Amok Trey dish">
         </div>
         <div class="story-img-accent">
            <img src="https://asianinspirations.com.au/wp-content/uploads/2023/07/TA-26.jpg" alt="Khmer soup">
         </div>
        </div>
      </div>
      <div class="col-lg-6 px-md-4">
        <div class="section-eyebrow">Our mission</div>
        <h2 class="font-serif fw-semibold text-dark mb-4 lh-sm" style="font-size: clamp(30px,3.5vw,44px);">Preserving what matters most</h2>
        <p class="text-muted-custom mb-3 lh-lg">Krorya was born out of a simple worry: that the beautiful complexity of authentic Khmer cuisine might be lost to modern convenience. Cambodian cooking is a true art form — defined by the careful pounding of fresh <strong class="text-dark">Kroeung</strong>, the sweet aroma of coconut custard, and a flawless balance of savory, citrus, and spice.</p>
        <div class="pull-quote py-3 px-4 my-4">
          <p class="font-serif fst-italic text-dark m-0 fs-5 lh-base">"We bridge ancient culinary traditions with modern life — one recipe at a time."</p>
        </div>
        <p class="text-muted-custom mb-0 lh-lg">Our platform gives every home cook, grandmother, and passionate chef a place to document and share the dishes they love. Every recipe added is a small act of cultural preservation — ensuring that future generations can taste what their grandparents made.</p>
      </div>
   </div>
</section>

<section class="container-fluid px-4 px-lg-5 py-5 mb-4">
   <div class="section-eyebrow">The team</div>
   <h2 class="font-serif fw-semibold text-dark lh-sm" style="font-size: clamp(30px,3.5vw,44px);">Meet <em class="text-terra fst-italic">Group 3</em></h2>

   <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4 mt-4">
      
      <!-- Team Member 1 -->
      <div class="col team-col">

        <div class="card team-card bg-white h-100 rounded-4 border-0 text-center">

            <div class="pt-4 pb-0 d-flex justify-content-center">
               <div class="team-avatar-wrap">
                  <img src="./asset/img/kimchhun.jpeg" class="team-avatar-img" alt="kimchhun ">
               </div>

            </div>

            <div class="card-body p-4 pt-3 d-flex flex-column">

               <h5 class="font-serif fw-semibold text-dark mb-1 fs-5">Kimchhun Khemara</h5>
               <div class="text-terra text-uppercase fw-medium mb-3" style="font-size: 12px; letter-spacing: .6px;">Project Lead</div>
               <p class="text-muted-custom mb-4 lh-lg flex-grow-1" style="font-size: 13px;">Coordinates the team, sets milestones, and ensures every part of the project comes together on time.</p>
            
            </div>

         </div>
      </div>

      <!-- Team Member 2 -->

      <div class="col team-col">

        <div class="card team-card bg-white h-100 rounded-4 border-0 text-center">

            <div class="pt-4 pb-0 d-flex justify-content-center">
               <div class="team-avatar-wrap">
                  <img src="./asset/img/sokheng.jpeg" class="team-avatar-img" alt="sokheng">
               </div>

            </div>

            <div class="card-body p-4 pt-3 d-flex flex-column">

               <h5 class="font-serif fw-semibold text-dark mb-1 fs-5">Sokheng Chan</h5>
               <div class="text-terra text-uppercase fw-medium mb-3" style="font-size: 12px; letter-spacing: .6px;">Backend — Database</div>
               <p class="text-muted-custom mb-4 lh-lg flex-grow-1" style="font-size: 13px;">Sets up the MySQL connection, writes the foods migration and Food model, and seeds the database with sample dishes.</p>
            
            </div>

         </div>
      </div>

      <!-- Team Member 3 -->

      <div class="col team-col">

        <div class="card team-card bg-white h-100 rounded-4 border-0 text-center">

            <div class="pt-4 pb-0 d-flex justify-content-center">
               <div class="team-avatar-wrap">
                  <img src="./asset/img/faris.jpeg" class="team-avatar-img" alt="faris">
               </div>

            </div>

            <div class="card-body p-4 pt-3 d-flex flex-column">

               <h5 class="font-serif fw-semibold text-dark mb-1 fs-5">Faris Fy</h5>
               <div class="text-terra text-uppercase fw-medium mb-3" style="font-size: 12px; letter-spacing: .6px;">Backend — Controllers</div>
               <p class="text-muted-custom mb-4 lh-lg flex-grow-1" style="font-size: 13px;">Builds the FoodController and AuthController — CRUD, category filtering, login, logout, and image handling.</p>
            
            </div>

         </div>
      </div>

      <!-- Team Member 4 -->

      <div class="col team-col">

        <div class="card team-card bg-white h-100 rounded-4 border-0 text-center">

            <div class="pt-4 pb-0 d-flex justify-content-center">
               <div class="team-avatar-wrap">
                  <img src="./asset/img/nary.jpg" class="team-avatar-img" alt="nary">
               </div>

            </div>

            <div class="card-body p-4 pt-3 d-flex flex-column">

               <h5 class="font-serif fw-semibold text-dark mb-1 fs-5">Sovannary Ratanak</h5>
               <div class="text-terra text-uppercase fw-medium mb-3" style="font-size: 12px; letter-spacing: .6px;">Frontend — Public Pages</div>
               <p class="text-muted-custom mb-4 lh-lg flex-grow-1" style="font-size: 13px;">Builds the shared layout, navbar, footer, dish card grid, and category filter.</p>
            
            </div>

         </div>
      </div>

      <!-- Team Member 5 -->

      <div class="col team-col">

        <div class="card team-card bg-white h-100 rounded-4 border-0 text-center">

            <div class="pt-4 pb-0 d-flex justify-content-center">
               <div class="team-avatar-wrap">
                  <img src="./asset/img/.jpeg" class="team-avatar-img" alt="vichey">
               </div>

            </div>

            <div class="card-body p-4 pt-3 d-flex flex-column">

               <h5 class="font-serif fw-semibold text-dark mb-1 fs-5">Daravichhey Sokha</h5>
               <div class="text-terra text-uppercase fw-medium mb-3" style="font-size: 12px; letter-spacing: .6px;">Frontend — Forms</div>
               <p class="text-muted-custom mb-4 lh-lg flex-grow-1" style="font-size: 13px;">Builds the add and edit forms, delete confirmation, login and register pages, and all form validation error messages.</p>
            
            </div>

         </div>
      </div>

      <!-- Team Member 6 -->

      <div class="col team-col">

        <div class="card team-card bg-white h-100 rounded-4 border-0 text-center">

            <div class="pt-4 pb-0 d-flex justify-content-center">
               <div class="team-avatar-wrap">
                  <img src="./asset/img/reaksmey.jpg" class="team-avatar-img" alt="reaksmey">
               </div>

            </div>

            <div class="card-body p-4 pt-3 d-flex flex-column">

               <h5 class="font-serif fw-semibold text-dark mb-1 fs-5">Reak Smey Meas</h5>
               <div class="text-terra text-uppercase fw-medium mb-3" style="font-size: 12px; letter-spacing: .6px;">Content</div>
               <p class="text-muted-custom mb-4 lh-lg flex-grow-1" style="font-size: 13px;">Writes and curates all recipe descriptions, category copy, and ensures every dish reflects authentic Khmer culinary tradition.</p>
            
            </div>

         </div>
      </div>

      <!-- Team Member 7 -->

      <div class="col team-col">

        <div class="card team-card bg-white h-100 rounded-4 border-0 text-center">

            <div class="pt-4 pb-0 d-flex justify-content-center">
               <div class="team-avatar-wrap">
                  <img src="./asset/img/visal.jpeg" class="team-avatar-img" alt="visal">
               </div>

            </div>

            <div class="card-body p-4 pt-3 d-flex flex-column">

               <h5 class="font-serif fw-semibold text-dark mb-1 fs-5">Bunvisal Ou</h5>
               <div class="text-terra text-uppercase fw-medium mb-3" style="font-size: 12px; letter-spacing: .6px;">Quality Assurance</div>
               <p class="text-muted-custom mb-4 lh-lg flex-grow-1" style="font-size: 13px;">Tests every user flow — from browsing recipes to submitting forms — and reports bugs before the final submission.</p>
            
            </div>

         </div>
      </div>

      <!-- Team Member 8 -->

      <div class="col team-col">

        <div class="card team-card bg-white h-100 rounded-4 border-0 text-center">

            <div class="pt-4 pb-0 d-flex justify-content-center">
               <div class="team-avatar-wrap">
                  <img src="./asset/img/viphou.PNG" class="team-avatar-img" alt="viphou">
               </div>

            </div>

            <div class="card-body p-4 pt-3 d-flex flex-column">

               <h5 class="font-serif fw-semibold text-dark mb-1 fs-5">Viphou Somneang</h5>
               <div class="text-terra text-uppercase fw-medium mb-3" style="font-size: 12px; letter-spacing: .6px;">Quality Assurance</div>
               <p class="text-muted-custom mb-4 lh-lg flex-grow-1" style="font-size: 13px;">Verifies responsiveness across devices, checks edge cases in forms and auth, and validates category filtering behaviour.</p>
            
            </div>

         </div>
      </div>


      
       

   </div>
</section>


@endsection