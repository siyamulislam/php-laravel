<div class="nav">
    <div class="sb-sidenav-menu-heading">Core</div>
    <a class="nav-link" href="{{route('dashboard')}}">
        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
        Dashboard
    </a>
    <div class="sb-sidenav-menu-heading">Interface</div>
    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#categoryLayout" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Category
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="categoryLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{route('category.add')}}">Add Category</a>
            <a class="nav-link" href="{{route('category.manage')}}">Manage Category</a>
        </nav>
    </div>


    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#brandLayout" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
        Brand
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="brandLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{route('brand.add')}}">Add Brand</a>
            <a class="nav-link" href="{{route('brand.manage')}}">Manage Brand</a>
        </nav>
    </div>

    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#productLayout" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
        Product
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="productLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="{{route('product.add')}}">Add Product</a>
            <a class="nav-link" href="{{route('product.manage')}}">Manage Product</a>
        </nav>
    </div>



</div>
