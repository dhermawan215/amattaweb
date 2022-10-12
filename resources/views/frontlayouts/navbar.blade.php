<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/front/img/logo/logo-header.png') }}" alt="Amatta" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-uppercase mx-auto">
                @if (request()->routeIs('welcome'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                @else
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                    </li>
                @endif

                @if (request()->routeIs('products'))
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('products') }}">Product</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products') }}">Product</a>
                    </li>
                @endif


                <li class="nav-item ">
                    <a class="nav-link" href="blog.html">Blog </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="about.html">About</a>
                </li>
            </ul>
            <button type="button" class="btn btn-light">Sign In</button>
            <button type="button" class="btn btn-primary">Sign Up</button>
        </div>
    </div>
</nav>
