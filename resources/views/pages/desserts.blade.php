@extends('layouts.app')
@section('content')
<main>
    <div class="page-hero text-white py-5 px-4 px-lg-5" style="background:linear-gradient(135deg,#1C1410 60%,#3a1a08)">

        <div class="position-relative z-1" style="max-width: 600px;">

            <div class="hero-eyebrow text-saffron text-uppercase small fw-medium mb-3" style="letter-spacing: 2px;">Category</div>

                <h1 class="font-serif display-5 fw-semibold mb-3 lh-sm">Desserts &amp; <em class="text-saffron fst-italic">Snacks</em></h1>
                <p class="text-white-50 small mb-4 lh-lg">
                    Palm sugar, coconut milk, and sticky rice — Cambodian sweets are gentle, fragrant, and impossible to eat just one of.
                </p>

            </div>

        </div>

    </div>

    @include('layouts.nav-filter')

    @include('layouts.dish-card')
</main>
@endsection
