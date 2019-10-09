@extends('layouts.adminLayouts.admin_design')


@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Discount</a> <a href="#" class="current">Edit Discount</a> </div>
            <h1>Discount</h1>
            @if(Session::has('flash_message_error'))

                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! Session('flash_message_error') !!}</strong>
                </div>
            @endif
            @if(Session::has('flash_message_success'))

                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! Session('flash_message_success') !!}</strong>
                </div>
            @endif
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Edit Discount</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form  class="form-horizontal" method="post" action="{{url('/admin/add-discount/')}}"
                                   name="add_discount" id="add_coupon" >
                                {{csrf_field()}}

                                <div class="control-group">
                                    <label class ="control-label">Select Product</label>
                                    <div class="controls">
                                        <select disabled name="product_id" id="amount_type" style="width:220px">
                                            <option value="">-- select product --</option>
                                            @forelse($products as $product)
                                            <option <?php if ($discountDetails->id==$product->id) {
                                                echo 'selected';
                                            } ?> value="{{$product->id}}">{{$product->product_name}}</option>
                                            @empty
                                            <p></p>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Discount (percentage only)</label>
                                    <div class="controls">
                                        <input type="number" value="{{!empty($discountDetails) ? $discountDetails->discount : '' }}" name="discount" id="discount" minlength="1" maxlength="3" required>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <input type="submit" value="Add Discount" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection