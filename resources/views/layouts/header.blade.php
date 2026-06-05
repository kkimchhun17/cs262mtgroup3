<header class="container pt-4 pb-2">
   <nav class="d-flex justify-content-between align-items-sm-center">
         <div>
            <a class="link-secondary text-decoration-none" href="/">Krorya</a>
        </div>

        <div class="d-flex gap-5">
                <a href="/" class="nav-link custom-muted text-decoration-none">Home</a>
                <a href="/all-food" class="nav-link custom-muted text-decoration-none">All Food</a>
                <a href="/aboutus" class="nav-link custom-muted text-decoration-none">About Us</a>
                @auth
                <a href="/dashboard" class="nav-link  custom-muted text-decoration-none">Dashboard</a>
                @endauth
        </div>

        <div class="d-flex align-items-center gap-3">
             @auth
            <a href="/dashboard" class="btn btn-outline-dark shadow-sm px-3 py-1">Dashboard</a>
            <form action="/logout" method="POST" class="m-0">
                @csrf
                <button class="btn shadow-sm px-3 py-1">Logout</button>
            </form>
            @else
            <a class="btn shadow-sm px-3 py-1" href="/login">Log in</a>
            <a class="btn btn-primary shadow-sm px-3 py-1" href="/register">Sign up</a>
            @endauth
        </div>
   </nav>
</header>
