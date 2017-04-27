    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('module.homeslider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
        <?php echo $__env->make('module.content_hotdeal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
        <?php echo $__env->make('module.content_1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
    <?php $__env->stopSection(); ?>
   
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>