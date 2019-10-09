

<?php $__env->startSection('content'); ?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Products</a> <a href="#" class="current">View Products</a> </div>
            <h1>Products</h1>
            <?php if(Session::has('flash_message_error')): ?>

                <div class="alert alert-error alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo Session('flash_message_error'); ?></strong>
                </div>
            <?php endif; ?>
            <?php if(Session::has('flash_message_success')): ?>

                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong><?php echo Session('flash_message_success'); ?></strong>
                </div>
            <?php endif; ?>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                            <h5>View Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Product Id</th>
                                    <th>Category Id</th>
                                    <th>Category Name</th>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Product Color</th>
                                    <th>price</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="gradeX">
                                        <td><?php echo e($product->id); ?></td>
                                        <td><?php echo e($product->category_id); ?></td>
                                        <td><?php echo e($product->category_name); ?></td>
                                        <td><?php echo e($product->product_name); ?></td>
                                        <td><?php echo e($product->product_code); ?></td>
                                        <td><?php echo e($product->product_color); ?></td>
                                        <td><?php echo e($product->price); ?></td>
                                        <td>
                                            <?php if(!empty($product->image)): ?>
                                        <img src="<?php echo e(asset('/images/backend_images/products/small/'.$product->image)); ?>" style="width: 60px;">
                                            <?php endif; ?>
                                        </td>
                                        <td class="center">
                                            <a href="#myModal<?php echo e($product->id); ?>" data-toggle="modal" class="btn btn-success btn-mini" title="View Product">View</a>
                                            <a href="<?php echo e(url('/admin/edit-product/'.$product->id)); ?>" class="btn btn-primary btn-mini" title="Edit Product">Edit</a>
                                            <a href="<?php echo e(url('/admin/add-attributes/'.$product->id)); ?>"  class="btn btn-success btn-mini" title="Add Attribute">Add</a>
                                            <a href="<?php echo e(url('/admin/add-images/'.$product->id)); ?>"  class="btn btn-info btn-mini" title="Add Images">Add</a>
                                            <a rel="<?php echo e($product->id); ?>"  rel1="delete-product" <?php /*href="{{url('/admin/delete-product/'.$product->id)}}" */?>
                                            href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Product">Delete</a></td>
                                    </tr>

                                    <div id="myModal<?php echo e($product->id); ?>" class="modal hide">
                                        <div class="modal-header">
                                            <button data-dismiss="modal" class="close" type="button">×</button>
                                            <h3><?php echo e($product->product_name); ?>Full Details</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>Product ID:<?php echo e($product->id); ?></p>
                                            <p>Category ID:<?php echo e($product->category_id); ?></p>
                                            <p>Product Code:<?php echo e($product->product_code); ?></p>
                                            <p>Product Color:<?php echo e($product->product_color); ?></p>
                                            <p>Price:<?php echo e($product->price); ?></p>
                                            <p>Fabric:</p>
                                            <p>Material:</p>
                                            <p>Description:<?php echo e($product->description); ?></p>
                                        </div>
                                    </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayouts.admin_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>