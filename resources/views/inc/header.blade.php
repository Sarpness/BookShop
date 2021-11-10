<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Library</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-5 mb-md-0">

                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle show" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="true">My books</a>
                            <ul class="dropdown-menu" id="dropdown02" aria-labelledby="dropdown03" data-bs-popper="none">
                                <li><a class="dropdown-item" href="#">Show all</a></li>
                                <li><a class="dropdown-item" href="#">Book 1</a></li>
                                <li><a class="dropdown-item" href="#">Book-2</a></li>
                            </ul>
                            <div class="mx-5"></div>
                        </li>

                    @else
                        <li class="hidden nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>

                        @if (Route::has('register'))
                            <li class="hidden nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
