<div class="nav-filter-wrap">
    <div class="nav-filter">

        <a href="/all-food"
           class="filter-tab {{ request()->is('all-food') ? 'filter-active' : '' }}">
            All dishes
        </a>

        <a href="/soups"
           class="filter-tab {{ request()->is('soups') ? 'filter-active' : '' }}">
            Soups &amp; Curries   
        </a>

        <a href="/grilled"
           class="filter-tab {{ request()->is('grilled') ? 'filter-active' : '' }}">
            Grilled &amp; Stir-Fries    
        </a>

        <a href="/rice-noodles"
           class="filter-tab {{ request()->is('rice-noodles') ? 'filter-active' : '' }}">
            Rice &amp; Noodles    
        </a>

        <a href="/desserts"
           class="filter-tab {{ request()->is('desserts') ? 'filter-active' : '' }}">
            Desserts &amp; Snacks    
        </a>

    </div>
</div>