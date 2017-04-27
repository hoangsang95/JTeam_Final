<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/excel.css')); ?>">
    </head>
    <body>
        <h4>Tổng số sản phẩm : <?php echo e($total); ?> </h4>
       
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="10px" id="User_ID"><?php echo e($row->Product_ID); ?></td>
                <td width="25px"><?php echo e($row->Product_Name); ?></td>
                <td width="50px" style="text-align:center"><img width="50px" src="assets/data/<?php echo e($row->Product_Thumbnail); ?>"></td>
                <td width="15px">$<?php echo e($row->Product_Price); ?></td>
                <td width="20px">
                    <?php if( $row->Product_InStock ==1): ?>
                    <?php echo e("Còn hàng"); ?>

                    <?php else: ?>
                    <?php echo e("Hết hàng"); ?>

                    <?php endif; ?>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </table> 
       
    </body>
</html>