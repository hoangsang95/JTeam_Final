<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/excel.css')); ?>">
    </head>
    <body>
        <h4>Tổng loại sản phẩm : <?php echo e($total); ?> </h4>
       
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm </th>
                    <th>Số lượng</th>
                    <th>Người thực hiện</th>
                    <th>Thời gian</th>
                    
                </tr>
            </thead>
            <?php $__currentLoopData = $warehouses_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="50px" id="User_ID"><?php echo e($row->Product_Name); ?></td>
                <td width="10px"><?php echo e($row->Warehouse_Count); ?></td>
                 <td width="20px" ><?php echo e($warehouses_user->User_Name); ?></td>
                <td width="25px"><?php echo e($row->Warehouse_Datetime); ?></td>
               
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </table> 
       
    </body>
</html>