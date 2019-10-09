<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Image;

class CategoryController extends Controller
{
    public function addCategory(Request $request){

        if ($request->isMethod('post')){
            $data=$request->all();
            
            //echo "<pre>";print_r($data);die;
            if (empty($data['status'])){
                $status=0;
            }else{
                $status=1;
            }
            $category =new Category;
            $category->name= $data['category_name'];
            $category->parent_id=$data['parent_id'];
            $category->description= $data['description'];
            //print_r($request->hasFile('image'));exit();
            if ($request->hasFile('image')){
                
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='images/backend_images/products/large/'.$filename;
                    $medium_image_path='images/backend_images/products/medium/'.$filename;
                    $small_image_path='images/backend_images/products/small/'.$filename;
                    //Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    //store image name in category table

                    $category->image=$filename;
                }
            }
            
            $category->url= $data['url'];
            $category->status=$status;
            $category->save();
            return redirect('/admin/view-categories')->with('flash_message_success','Category Added Successfully!!');
        }
        $levels=Category::where(['parent_id'=>0])->get();
        return view('admin.categories.add_category')->with(compact('levels'));
    }


    public function editCategory(Request $request, $id=null){
        if ($request->isMethod('post')){
            $data=$request->all();
            //echo "<pre>";print_r($data);die;
            if (empty($data['status'])){
                $status=0;
            }else{
                $status=1;
            }
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='images/backend_images/products/large/'.$filename;
                    $medium_image_path='images/backend_images/products/medium/'.$filename;
                    $small_image_path='images/backend_images/products/small/'.$filename;
                    //Resize Images
                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);


                }
            }else{
                $filename=$data['current_image'];
            }

            Category::where(['id'=>$id])->update(['name'=>$data['category_name'],
                'description'=>$data['description'],'image'=>$filename,
                'url'=>$data['url'],'status'=>$status]);
            return redirect('/admin/view-categories')->with('flash_message_success','Category Updated Successfully!!');
        }
        $categoryDetails = Category::where(['id'=>$id])->first();
        $levels=Category::where(['parent_id'=>0])->get();
        return view('admin.categories.edit_category')->with(compact('categoryDetails','levels'));

    }
    public function deleteCategory(Request $request, $id=null){
        if (!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Category Deleted Successfully!!');
        }
    }


    public function viewCategories(){
        $categories= Category::get();
        //$categories=json_decode(json_encode('$categories'));
        return view('admin.categories.view_categories')->with(compact('categories'));
    }

}
























