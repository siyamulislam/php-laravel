<nav class="navbar navbar-expand-md bg-dark navbar-dark py-0">
    <div class="container">
        <a href="" class="navbar-brand "><img src="assets/img/logo.jpg" alt="" width="50" class="img-fluid ">My Blog</a>
        <ul class="navbar-nav">
            <li><a class="nav-link" href=" "> Home</a></li>


            <li class="dropdown">
                <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('category.add')}}" class="dropdown-item">Add Category</a></li>
                    <li><a href="{{route('category.manage')}}" class="dropdown-item">Manage Category</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href=" " class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brand</a>
                <ul class="dropdown-menu">
                    <li><a href="{{route('brand.add')}}" class="dropdown-item">Add Brand</a></li>
                    <li><a href="{{route('brand.manage')}}" class="dropdown-item">Manage Brand</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
