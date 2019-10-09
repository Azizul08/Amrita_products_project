@extends('layouts.adminLayouts.admin_design')

@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Discounts</a> <a href="#" class="current">View Discounts</a> </div>
            <h1>Coupons</h1>
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
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>View Discounts</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Product Code</th>
                                    <th>Product Name</th>
                                    <th>Discount(Percentage)</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $sl=1; ?>
                                @foreach( $discounts as $discount)
                                <?php if (!empty($discount->discount)){?>
                                    <tr class="gradeX">
                                        <td>{{$sl++}}</td>
                                        <td>{{$discount->product_code}}</td>
                                        <td>
                                            {{$discount->product_name}}
                                            
                                        </td>
                                        <td>{{$discount->discount}}</td>
                                        <td class="center">

                                            <a href="{{url('/admin/edit-discount/'.$discount->id)}}" class="btn btn-primary btn-mini" title="Edit Coupon">Edit</a>
                                            <a rel="{{$discount->id}}"  rel1="delete-coupon"
                                            href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Coupon">Delete</a></td>
                                    </tr>
                                <?php } ?>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection