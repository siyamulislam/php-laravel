<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use DateTime;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $categories,$category,$blogs,$blog;
    public function index(){
        $this->categories=Category::all();
        return view('blog.index',['categories'=>$this->categories]);
    }
    public function store(Request $request)
    {
      Blog::addBlog($request);
        return redirect('/blog/add')->with('message', 'Blog Added Successfully');
    }

    public function manage(){
        $this->categories=Category::all();
        $this->blogs = Blog::all();
        return view('blog.manage', ['blogs' => $this->blogs,'categories'=>$this->categories]);
    }
    public function edit($id)
    {
        $this->categories=Category::all();
        $this->blog = Blog::find($id);
        return view('blog.edit', ['blog' => $this->blog,'categories'=>$this->categories] );
    }
    public function update(Request $request, $id)
    {
//        echo '<pre>';
//        print_r($request);
        Blog::updateBlog($request, $id);
        return redirect('/blog/manage')->with('message', 'Blogs update successfully');
    }

    public function delete($id)
    {
        Blog::deleteBlog($id);
        return redirect('/blog/manage')->with('message_delete', 'Blogs delete successfully');
    }
    public function detail($id)
    {
        $this->categories=Category::all();
        $this->blog = Blog::find($id);
        $dateDiff=date_diff(new DateTime(),$this->blog->updated_at);
        $dateFormat='';
        if($dateDiff->format('%y')!=0) $dateFormat=$dateFormat.'%y year';
        if($dateDiff->format('%m')!=0) $dateFormat=$dateFormat.' %m month';
        if($dateDiff->format('%d')!=0) $dateFormat=$dateFormat.' %d day';
        if($dateDiff->format('%H')!=0) $dateFormat=$dateFormat.' %Hh';
        if($dateDiff->format('%I')!=0) $dateFormat=$dateFormat.' %Im';
        if($dateDiff->format('%S')!=0) $dateFormat=$dateFormat.' %Ss';

        $lastUpdate=$dateDiff->format($dateFormat);
        $this->blog['lastUpdate']=$lastUpdate;
//        echo '<pre>';
//        print_r($dateFormat);
        return view('blog.detail',['blog'=>$this->blog,'categories'=>$this->categories]);
    }


}
