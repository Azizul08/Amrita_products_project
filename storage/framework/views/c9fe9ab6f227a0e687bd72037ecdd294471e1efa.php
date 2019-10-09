


<?php $__env->startSection('content'); ?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Products</a> <a href="#" class="current">Add Product</a> </div>
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
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Add Product</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form enctype="multipart/form-data" class="form-horizontal" method="post" action="<?php echo e(url('/admin/add-product')); ?>"
                                  name="add_product" id="add_product" novalidate="novalidate">
                                <?php echo e(csrf_field()); ?>


                                <div class="control-group">
                                    <label class ="control-label">Under Category</label>
                                    <div class="controls">
                                        <select name="category_id" id="category_id" style="width:220px">
                                        <?php echo $categories_dropdown ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Product Name</label>
                                    <div class="controls">
                                        <input type="text" name="product_name" id="product_name" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Product Code</label>
                                    <div class="controls">
                                        <input type="text" name="product_code" id="product_code" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Product Color</label>
                                    <div class="controls">
                                        <input type="text" name="product_color" id="product_color" >
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea  name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Material & Care</label>
                                    <div class="controls">
                                        <textarea  name="care" id="care"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Price</label>
                                    <div class="controls">
                                        <input type="text" name="price" id="price" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">View Style</label>
                                    <div class="controls">
                                        <select name="menu_style" required="">
                                            <option value="">--- select view ---</option>
                                            <option value="l">List View</option>
                                            <option value="g">Grid View(Image)</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Feature product</label>
                                    <div class="controls">
                                        <select name="feature_products" required="">
                                            <option value="">--- select value ---</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Enable </label>
                                    <div class="controls">
                                        <input type="checkbox" name="status" id="status" value="1">
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <input type="submit" value="Add Product" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayouts.admin_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>