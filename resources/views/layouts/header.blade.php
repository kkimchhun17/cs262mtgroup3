<header class="container pt-4 pb-2">
   <nav class="d-flex justify-content-between align-items-sm-center ">
        <div>
            <a class="navbar-brand" href="/">
                <img src="./asset/logo.png" alt="logo" width="150" class="d-inline-block align-text-top">
            </a>
        </div>

        <div class="d-flex gap-5">
            <a href="/" class="link-secondary custom-muted text-decoration-none">Home</a>
            <a href="/all-food" class="link-secondary custom-muted text-decoration-none">Dishes</a>
            <a href="/aboutus" class="link-secondary custom-muted text-decoration-none">About Us</a>
        </div>

        <div class="d-flex align-items-center gap-3">
            @auth
            <a href="/dashboard" class="btn btn-signup shadow-sm px-3 py-1">Dashboard</a>
            <form action="/logout" method="POST" class="m-0">
                @csrf
                <button class="btn shadow-sm px-3 py-1">Logout</button>
            </form>
            @else
            <a class="btn btn-login shadow-sm px-3 py-1" href="/login">Log in</a>
            <a class="btn btn-signup shadow-sm px-3 py-1" href="/register">Sign up</a>
            @endauth
        </div>
   </nav>
</header>
