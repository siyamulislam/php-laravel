<?php
require_once './vendor/autoload.php';
use App\classes\Blog;
if ($_GET['page']=='home'){
    include "pages/home.php";
}
else if ($_GET['page']=='blogs'){
    $blog= new Blog();
//    print_r($blog->allBlogs());
//    echo '<pre>';
//    print_r($blog->allBlogs());

    $blogs=$blog->allBlogs();
    include "pages/blogs.php";
}
else if ($_GET['page']=='details'){

    $blog= new Blog();
    $details=$blog->getBlogDetails($_GET['id']);
//    echo '<pre>';
//print_r($details);
    include "pages/details.php";
}
