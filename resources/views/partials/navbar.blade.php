<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" style="font-size: 22px ; font-weight: bold" href="/">My Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="font-size: 19px">
                <li class="nav-item">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  {{ ($active === "blogs") ? 'active' : '' }}" href="/blog">Post List</a>
                </li>
                <li class="nav-item">
                <a class="nav-link  {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($active === "movies") ? 'active' : '' }}" href="/movies">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ ($active === "cuaca") ? 'active' : '' }}" href="/cuaca">Weather & Maps</a>
                </li>
            </ul>


            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                                </form>
                        </ul>
                    </li>

                    @else

                        <li class="nav-item">
                            <a href="/login" style="font-size: 20px;font-weight: bold;color: white" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-right"></i> Login</a>
                        </li>
                @endauth
            </ul>

            </div>
        </div>
    </nav>