<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">


        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-backpack2-fill"
            style="margin-left: 40pt" viewBox="0 0 16 16">
            <path d="M5 13h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5z" />
            <path
                d="M6 2v.341C3.67 3.165 2 5.388 2 8v1.191l-1.17.585A1.5 1.5 0 0 0 0 11.118V13.5A1.5 1.5 0 0 0 1.5 15h1c.456.607 1.182 1 2 1h7c.818 0 1.544-.393 2-1h1a1.5 1.5 0 0 0 1.5-1.5v-2.382a1.5 1.5 0 0 0-.83-1.342L14 9.191V8a6 6 0 0 0-4-5.659V2a2 2 0 1 0-4 0m2-1a1 1 0 0 1 1 1v.083a6 6 0 0 0-2 0V2a1 1 0 0 1 1-1m0 3a4 4 0 0 1 3.96 3.43.5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14A4 4 0 0 1 8 4M4.5 9h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5" />
        </svg>


        <div class="d-flex">
            <a href="/" class="btn btn-outline-success {{ request()->is('/') ? 'active' : '' }}"
                style="margin-right: 10pt">
                Home</a>
            <a href="{{ route('products.index') }}"
                class="btn btn-outline-success {{ request()->is('products') ? 'active' : '' }}"
                style="margin-right: 10pt">Product</a>
        </div>
        {{-- <a class="navbar-brand">Vanisa</a> --}}
    </div>
</nav>
