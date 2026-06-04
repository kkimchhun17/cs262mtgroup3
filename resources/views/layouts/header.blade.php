<header class="container pt-4 pb-2">
   <nav class="d-flex justify-content-between align-items-sm-center">
         <div>
            <a class="link-secondary text-decoration-none" href="/">Krorya</a>
        </div>

        <div class="d-flex gap-5">
                <a href="/" class="nav-link  custom-muted text-decoration-none">Home</a>
                <a href="/dishes" class="nav-link  custom-muted text-decoration-none">Dishes</a>
                <a href="/aboutus" class="nav-link  custom-muted text-decoration-none">About Us</a>
                @auth
                <a href="/dashboard" class="nav-link  custom-muted text-decoration-none">Dashboard</a>
                @endauth
        </div>

        <div class="d-flex align-items-center gap-3">
             @auth
            <form action="/logout" method="POST">
                @csrf
                <button class="btn   shadow-sm px-3 py-1">Logout</button>
            </form>
            @else

            <a class="btn   shadow-sm px-3 py-1" href="/login">Log in</a>
            <a class="btn   btn-primary shadow-sm px-3 py-1" href="/register">Sign up</a>
            @endauth
        </div>

           
    </div>
            
   </nav>
</header>