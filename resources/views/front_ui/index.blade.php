@extends('layouts.frontLayouts.front_design')
@section('content')
    <style>
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
        .col-item
        {
            border: 1px solid #E1E1E1;
            border-radius: 5px;
            background: #FFF;
        }
        .col-item .photo img
        {
            margin: 0 auto;
            width: 100%;
        }

        .col-item .info
        {
            padding: 10px;
            border-radius: 0 0 5px 5px;
            margin-top: 1px;
        }

        .col-item:hover .info {
            background-color: #F5F5DC;
        }
        .col-item .price
        {
            /*width: 50%;*/
            float: left;
            margin-top: 5px;
        }

        .col-item .price h5
        {
            line-height: 20px;
            margin: 0;
        }

        .price-text-color
        {
            color: #219FD1;
        }

        .col-item .info .rating
        {
            color: #777;
        }

        .col-item .rating
        {
            /*width: 50%;*/
            float: left;
            font-size: 17px;
            text-align: right;
            line-height: 52px;
            margin-bottom: 10px;
            height: 52px;
        }

        .col-item .separator
        {
            border-top: 1px solid #E1E1E1;
        }

        .clear-left
        {
            clear: left;
        }

        .col-item .separator p
        {
            line-height: 20px;
            margin-bottom: 0;
            margin-top: 10px;
            text-align: center;
        }

        .col-item .separator p i
        {
            margin-right: 5px;
        }
        .col-item .btn-add
        {
            width: 50%;
            float: left;
        }

        .col-item .btn-add
        {
            border-right: 1px solid #E1E1E1;
        }

        .col-item .btn-details
        {
            width: 50%;
            float: left;
            padding-left: 10px;
        }
        .controls
        {
            margin-top: 20px;
        }
        [data-slide="prev"]
        {
            margin-right: 10px;
        }

    </style>
    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                @forelse($banners as $ban)
                <li>
                    <img src="{{ asset('images/frontend_images/banners')."/".$ban->image }}" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                             <span class="primary">{{$ban->title}} <strong></strong></span>
                        </h2>
                        <h4 class="caption subtitle">Amrita</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Buy now</a>
                    </div>
                </li>
                    @empty
                @endforelse

            </ul>
        </div>
        <!-- ./Slider -->
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            @forelse($categories as $cat_data)
            <div class="row">
                <div class="col-md-9">
                    <h3>
                        {{$cat_data->name}}</h3>
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right hidden-xs">
                        <a class="left fa fa-chevron-left text-warning" href="#carousel-example{{$cat_data->id}}"
                           data-slide="prev"></a><a class="right fa fa-chevron-right text-warning" href="#carousel-example{{$cat_data->id}}"
                                                    data-slide="next"></a>
                    </div>
                </div>
            </div>
                <?php
                $sub = App\Product::orderBy('product_code','ASC');

                $products = DB::table(DB::raw("({$sub->toSql()}) as sub"))
                    ->where('category_id',$cat_data->id)
                    ->groupBy('product_code')
                    ->get();
                ?>
            <div class="row" style="margin-bottom: 35px;">
                <div id="carousel-example{{$cat_data->id}}" class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                @forelse($products as $key => $f_product)
                                    <?php if ($key < 4){ ?>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="{{asset('images/backend_images/products/medium/'.$f_product->image)}}" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        {{$f_product->product_name}}</h5>
{{--                                                    <h5 class="price-text-color">--}}
{{--                                                        $199.99</h5>--}}
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-center">
{{--                                                <p class="btn-add">--}}
{{--                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>--}}
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <?php } ?>
                                    @empty
                                @endforelse
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                @forelse($products as $key => $f_product)
                                    <?php if ($key >= 4 && $key < 8){ ?>
                                <div class="col-sm-3">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="{{asset('images/backend_images/products/medium/'.$f_product->image)}}" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        {{$f_product->product_name}}</h5>
{{--                                                    <h5 class="price-text-color">--}}
{{--                                                        $199.99</h5>--}}
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
{{--                                                <p class="btn-add">--}}
{{--                                                    <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>--}}
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @empty
            <div></div>
                @endforelse
        </div>
    </div> <!-- End main content area -->

@endsection
@section('js')

@endsection