<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">

            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-expanded="false">
                    Welcome, back {{ auth()->user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/dashboard"><i class="bi bi-speedometer"> My Dashboard</i></a>
                    <div class="dropdown-divider"></div>

                    <form action="/logout" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="bi bi-box-arrow-left"> Log Out</i>
                        </button>
                    </form>
                </div>
            </li>
            @else

            <li class="nav-link">
                <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i
                        class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
            @endauth
        </ul>
    </div>
</nav>
