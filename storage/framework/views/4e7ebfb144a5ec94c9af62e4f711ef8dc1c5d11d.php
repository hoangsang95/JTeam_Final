	<?php $__env->startSection('head'); ?>
    <title>DoGom.VN - <?php echo e($cate[0]->Cat_Name); ?></title>
	<?php $__env->stopSection(); ?>
    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('module.content_list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>