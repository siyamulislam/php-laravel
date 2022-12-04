<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use DateTime;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $categories, $category, $blogs, $blog;

    public function index()
    {
        $this->categories = Category::all();
        $this->blogs = Blog::all();
        return view('home.index', ['blogs' => $this->blogs, 'categories' => $this->categories]);
//       return view('welcome');
    }

    public function detail($id)
    {
        $this->categories = Category::all();
        $this->blog = Blog::find($id);

        $lastUpdate = $this->getLastUpdateDate($this->blog);
        $this->blog['lastUpdate'] = $lastUpdate;

        return view('home.detail', ['blog' => $this->blog, 'categories' => $this->categories]);
    }

    public static function getLastUpdateDate($blog)
    {
        $dateDiff = date_diff(new DateTime(), $blog->updated_at);

        $dateFormat = '';
        if ($dateDiff->format('%y') != 0) $dateFormat = $dateFormat . '%y year';
        if ($dateDiff->format('%m') != 0) $dateFormat = $dateFormat . ' %m month';
        if ($dateDiff->format('%d') != 0) $dateFormat = $dateFormat . ' %d day';
        if ($dateDiff->format('%H') != 0) $dateFormat = $dateFormat . ' %Hh';
        if ($dateDiff->format('%I') != 0) $dateFormat = $dateFormat . ' %Im';
        if ($dateDiff->format('%S') != 0) $dateFormat = $dateFormat . ' %Ss';

        $lastUpdate = $dateDiff->format($dateFormat);
        return $lastUpdate;
    }
}
