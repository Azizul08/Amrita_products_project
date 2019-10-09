<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('css/backend_css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/backend_css/bootstrap-responsive.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/backend_css/uniform.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/backend_css/select2.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/backend_css/fullcalendar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/backend_css/matrix-style.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/backend_css/matrix-media.css')); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
    <link href="<?php echo e(asset('fonts/backend_fonts/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/backend_css/jquery.gritter.css')); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
<?php echo $__env->make('layouts.adminLayouts.admin_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layouts.adminLayouts.admin_sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>




<?php echo $__env->make('layouts.adminLayouts.admin_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script>
    window.baseUrl = 'http://localhost/ecoms/public';
</script>
<script src="<?php echo e(asset('js/backend_js/jquery.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/backend_js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/jquery.uniform.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/jquery.validate.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/matrix.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/form_validation.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/matrix.tables.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/matrix.popover.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $( function() {
        $( "#expiry_date" ).datepicker({
            minDate: 0,
            dateFormat: 'yy-mm-dd'
        });
    } );
</script>



</body>
</html>

