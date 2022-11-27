<nav class="navbar navbar-expand-md bg-dark navbar-dark py-0">
    <div class="container">
        <a href="" class="navbar-brand "><img src="assets/img/logo.jpg" alt="" width="50" class="img-fluid ">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            @if(auth()->check())
            <li><a class="nav-link" href="{{route('home.index')}}"> Home</a></li>

            <li class="dropdown">
                <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('category.add')}}" class="dropdown-item">Add Category</a></li>
                    <li><a href="{{route('category.manage')}}" class="dropdown-item">Manage Category</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('blog.add')}}" class="dropdown-item">Add Blog</a></li>
                    <li><a href="{{route('blog.manage')}}" class="dropdown-item">Manage Blog</a></li>
                </ul>
            </li>

                <li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="nav-link bg-transparent w-100 border-0">Logout</button>
                    </form>
                </li>
            @else
            <li><a class="nav-link" href="{{route('login')}}"> Login</a></li>
            <li><a class="nav-link" href="{{route('register')}}"> Register</a></li>
            @endif
        </ul>
        </div>
    </div>
</nav>
