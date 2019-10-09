@extends('layouts.adminLayouts.admin_design')

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Categories</a> <a href="#" class="current">Edit Category</a> </div>
            <h1>Categories</h1>
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Edit Category</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{url('/admin/edit-category/'.$categoryDetails->id)}}"
                                  name="add_category" id="add_category" novalidate="novalidate">
                                {{csrf_field()}}

                                <div class="control-group">
                                    <label class="control-label">Category Name</label>
                                    <div class="controls">
                                        <input type="text" name="category_name" id="category_name" value="{{$categoryDetails->name}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Category Lavel</label>
                                    <div class="controls">
                                        <select name="parent_id" style="width:220px">
                                            <option value="0">Main Category</option>
                                            @foreach($levels as $val)
                                                <option value="{{$val->id}}" @if($val->id ==$categoryDetails->parent_id)selected @endif>{{$val->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea type="text" name="description" id="description" >{{$categoryDetails->description}} </textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" >
                                        <input type="hidden" name="current_image" value="{{$categoryDetails->image}}">
                                       @if(!empty($categoryDetails->image))
                                        <img style="width: 40px;"
                                             src="{{asset('/images/backend_images/products/small/'.$categoryDetails->image)}}">
                                        | <a href="{{url('/admin/delete-product-image/'.$categoryDetails->id)}}">Delete</a>
                                           @endif
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">URL </label>
                                    <div class="controls">
                                        <input type="text" name="url" id="url" value="{{$categoryDetails->url}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Enable </label>
                                    <div class="controls">
                                        <input type="checkbox" name="status" id="status" value= @if($categoryDetails->status=="1" )checked @endif value="1">
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Edit Category" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endsection