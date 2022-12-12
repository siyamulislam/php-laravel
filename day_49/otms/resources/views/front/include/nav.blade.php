<nav>
    <div class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="{{route('front.home')}}" class="navbar-brand">Logo</a>
            <ul class="navbar-nav ms-auto ">
                <li><a href="{{route('front.home')}}" class="nav-link">Home</a></li>
                <li class="dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Course Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Category One</a></li>
                        <li><a href="" class="dropdown-item">Category Two</a></li>
                    </ul>
                </li>
                <li><a href="{{route('front.about')}}" class="nav-link">About</a></li>
                <li><a href="{{route('front.contact')}}" class="nav-link">Contact</a></li>
                <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
                <li><a href="{{route('register')}}" class="nav-link">Register</a></li>
            </ul>
        </div>
    </div>
</nav>
