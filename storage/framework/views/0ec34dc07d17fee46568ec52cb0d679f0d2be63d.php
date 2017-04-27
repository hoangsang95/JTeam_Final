<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/excel.css')); ?>">
    </head>
    <body>
        <h4>Tổng số slide : <?php echo e($total); ?> </h4>
       
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên slide</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>                   
                </tr>
            </thead>
            <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="10px" id="User_ID"><?php echo e($row->Slide_ID); ?></td>
                <td width="25px"><?php echo e($row->Slide_Title); ?></td>
                 <td width="15px"><?php echo e($row->Slide_Description); ?></td>
                <td width="50px" style="text-align:center"><img width="100px" src="assets/data/<?php echo e($row->Slide_Image); ?>"></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </table> 
       
    </body>
</html>