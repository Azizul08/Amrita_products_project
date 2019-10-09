


<?php $__env->startSection('content'); ?>
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Settings</a> </div>
            <h1>Admin Settings</h1>
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

                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                <h5>Update Password</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form class="form-horizontal" method="post" action="<?php echo e(url('/admin/update-pwd')); ?>" name="password_validate"
                                      id="password_validate" novalidate="novalidate">
                                    <?php echo e(csrf_field()); ?>

                                    <div class="control-group">
                                        <label class="control-label">Current Password</label>
                                        <div class="controls">
                                            <input type="password" name="current_pwd" id="current_pwd" />
                                            <span id="chkPwd"></span>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">New Password</label>
                                        <div class="controls">
                                            <input type="password" name="new_pwd" id="new_pwd" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Confirm password</label>
                                        <div class="controls">
                                            <input type="password" name="confirm_pwd" id="confirm_pwd" />
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" value="Update password" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminLayouts.admin_design', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>