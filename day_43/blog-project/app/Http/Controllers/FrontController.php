<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use DateTime;
use Illuminate\Http\Request;

class FrontController extends Controller
{
//    protected $categories,$brands, $products, $product;
   public function home(){
       $products = Product::where('status',1)->orderBy('id', 'DESC')->get();
       $brands = Brand::where('status',1)->orderBy('id', 'DESC')->get();
//       print_r($category);
       return view ('front.home.home', ['products' => $products,'brands'=>$brands]);
   }

   public function productDetails($id){
       $this->product = Product::find($id);
       $lastUpdate = $this->getLastUpdateDate($this->product);
       $this->product['lastUpdate']=$lastUpdate;
       return view ('front.product.details', ['product' => $this->product]);
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
