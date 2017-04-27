<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
        <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/excel.css')); ?>">
    </head>
    <body>
        <h4>Tổng số người dùng : <?php echo e($total); ?></h4>
        <?php if(!empty($users)): ?> 
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Provider</th>
                    <th>Provider ID</th>
                </tr>
            </thead>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="10px" id="User_ID"><?php echo e($row->User_ID); ?></td>
                <td width="25px"><?php echo e($row->User_Name); ?></td>
                <td width="25px"> <?php echo e($row->User_Email); ?></td>
                <td width="20px"><?php echo e($row->User_Provider); ?></td>
                <td width="25px"><?php echo e($row->User_ProviderID); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </table> 
        <?php endif; ?>
    </body>
</html>