<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function addDiscount(Request $request){
        $products=DB::table('products')->select('id','product_name')->get();
        if($request->isMethod('post')){
            $data=$request->all();
            $discount_data = Product::find($data['product_id']);
            //echo "<pre>";print_r($discount_data);die;
            $discount_data->discount = $data['discount'];
            $discount_data->update();
            return redirect('/admin/view-discount')->with('flash_message_success','Discount has been added Successfully!');
        }
        return view('admin.discount.add_discounts',compact('products'));
    }
    public function editDiscount($id){
        
        $discountDetails=Product::find($id);
        $products=DB::table('products')->select('id','product_name')->get();
        return view('admin.discount.edit_discounts')->with(compact('discountDetails','products'));
    }
    public function viewDiscount(){
        $discounts=Product::get();
        return view('admin.discount.view_discounts')->with(compact('discounts'));
    }
    public function deleteDiscount($id){
        $discount_data = Product::find($id);
        //echo "<pre>";print_r($discount_data);die;
        $discount_data->discount = '';
        $discount_data->update();
        return redirect()->back()->with('flash_message_success','Discount has been Deleted Successfully!');
    }
}























