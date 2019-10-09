<?php $__env->startSection('content'); ?>
    <style>
        @import  url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);
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

        .activate-menu{
            background: #ffd200;
            color: white;
        }
        .custom-menu{
            border-bottom: 1px dashed #ffd200;padding: 5px 3px 5px 3px;text-align: center;color: black;
        }

    </style>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2><?php echo e($categories->name); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12" style="border: 2px solid #ffd200">
                            <?php $__empty_1 = true; $__currentLoopData = $list_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="custom-menu <?php echo e($l->id == $id ? 'activate-menu' : ''); ?>">
                                <a href="<?php echo e($l->id); ?>"><?php echo e($l->name); ?></a></div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li>No Category Found</li>
                            <?php endif; ?>

                </div>
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <div class="item">
                        <div class="row">
                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $f_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="col-sm-3" style="margin-bottom: 14px;">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img src="<?php echo e(asset('images/backend_images/products/medium/'.$f_product->image)); ?>" class="img-responsive" alt="a" />
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-6">
                                                    <h5>
                                                        <?php echo e($f_product->product_name); ?></h5>
                                                    
                                                    
                                                </div>
                                                <div class="rating hidden-sm col-md-6">
                                                    <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                    </i><i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="separator clear-left">
                                                
                                                
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo e($products->links()); ?>

        </div>
    </div> <!-- End main content area -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontLayouts.front_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>