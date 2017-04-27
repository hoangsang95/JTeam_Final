<!DOCTYPE html>
<html>
    <?php echo $__env->make('module.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
<body class="option6">
    <div id="header" class="header">
        <?php echo $__env->make('module.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
        <?php echo $__env->make('module.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
    </div>
        <?php echo $__env->yieldContent('content'); ?>
    
        <?php echo $__env->make('module.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   

        <?php echo $__env->make('module.js_v', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>   
</body>
</html>