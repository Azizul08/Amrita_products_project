<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Banner;
use DB;
//use App\Product;

class IndexController extends Controller
{
    public function index(){
    $sub = Product::orderBy('product_code','ASC');

    $featured_products = DB::table(DB::raw("({$sub->toSql()}) as sub"))
    ->where('feature_products',1)
    ->groupBy('product_code')
    ->get();
        $categories=Category::where('status',1)->get();
        $products=Product::where('status',1)->get();
        $banners = DB::table("banners")->where(["status" => 1])->get();
        return view('front_ui.index',compact('products','categories','banners'));
    }

    public function underConstruction(){
         return view('under_construction');
    }
    public function contactUs(){
         return view('front_ui.contact');
    }

    public function uiMenu(){
    	$categories=Category::where('status',1)->get();
    	$products=Product::where('status',1)->get();
        
    	return view('front_ui.menu',compact('products','categories'));
    }

    public function uiCategorisedProducts($id){
    	$categories=Category::where('id', $id)->first();
    	$list_categories=Category::where('status', 1)->get();
    	$products=Product::where(['status'=>1, "category_id" => $id])->paginate(16);

    	return view('front_ui.shop_product',compact('products','categories','list_categories','id'));
    }



}






















