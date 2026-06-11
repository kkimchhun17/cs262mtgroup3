
<nav class="navbar navbar-expand-lg border-bottom sticky-top" style="background-color: var(--ivory); border-color: rgba(28,20,16,.08) !important;">
    <div class="container-fluid px-4 px-lg-5 py-2">

        <a class="" href="/">
            <img src="./asset/img/logo.png" alt="logo" width="100" class="d-inline-block align-text-top">
        </a>
       
        <div class="collapse navbar-collapse justify-content-between">
            <ul class="navbar-nav mx-auto gap-lg-4">
                <li class="nav-item"><a class="nav-link text-muted-custom small nav-link-custom {{ request()->is('/') ? 'nav-active' : 'custom-muted' }}" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link text-muted-custom small nav-link-custom {{ request()->is('all-food', 'soups', 'grilled', 'rice-noodles', 'desserts', 'dishes') ? 'nav-active' : 'custom-muted' }}" href="/all-food">Dishes</a></li>
                <li class="nav-item"><a class="nav-link text-muted-custom small nav-link-custom {{ request()->is('aboutus') ? 'nav-active' : 'custom-muted' }}" href="/aboutus">About us</a></li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                @auth
                <a href="/dashboard" class="btn btn-filled shadow-sm px-3 py-1 text-light">Dashboard</a>
                <form action="/logout" method="POST" class="m-0">
                    @csrf
                    <button class="btn btn-ghost shadow-sm px-3 py-1 text-muted-custom">Logout</button>
                </form>
                @else
                <a class="btn btn-ghost shadow-sm px-3 py-1 text-muted-custom" href="/login">Log in</a>
                <a class="btn btn-filled shadow-sm px-3 py-1 text-light" href="/register">Sign up</a>
                @endauth
            </div>
        </div>

      </div>

    </div>
</nav>

