

<?php $__env->startSection('content'); ?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                    Home</a> <a href="#">Banners</a> <a href="#" class="current">View Banners</a> </div>
            <h1>Banners</h1>
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
                            <h5>View Banners</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered data-table">
                                <thead>
                                <tr>
                                    <th>Banner Id</th>
                                    <th>Title</th>
                                    <th>Link</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="gradeX">
                                        <td><?php echo e($banner->id); ?></td >
                                        <td><?php echo e($banner->title); ?></td>
                                        <td><?php echo e($banner->link); ?></td>
                                        <td>
                                            <?php if(!empty($banner->image)): ?>
                                                <img src="<?php echo e(asset('/images/frontend_images/banners/'.$banner->image)); ?>" style="width: 240px;">
                                            <?php endif; ?>
                                        </td>
                                        <td class="center">
                                            <a href="<?php echo e(url('/admin/edit-banner/'.$banner->id)); ?>" class="btn btn-primary btn-mini" title="Edit Banner">Edit</a>
                                            <a id="delBanner" rel="<?php echo e($banner->id); ?>"  rel1="delete-banner"
                                            href="javascript:" class="btn btn-danger btn-mini deleteRecord" title="Delete Banner">Delete</a></td>
                                    </tr>

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