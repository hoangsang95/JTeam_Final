<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-12">
                <h1 class="page-header">Kho hàng
                    <small>Lịch sử</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(session('thongbao')): ?>
            <div class="alert alert-success">
                <?php echo e(session('thongbao')); ?>

            </div>
            <?php endif; ?>
            <div class="row excel" >
                <div class="btn-group">
                    <button type="button" class="btn btn-info">Xuất</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" id="export-menu">
                        <li id="export-to-excel"><a href="#">Xuất Excel</a></li>
                        <li id="export-to-excel"><a href="#">Xuất PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </div>
            </div>    
            <table class="table table-striped table-bordered table-hover " id="dataTables-example" >
                <thead>
                    <tr align="center">
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Người thực hiện</th>
                        <th>Thời gian</th>

                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $warehouse_history; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX" align="center">

                        <td><?php echo e($r->Product_Name); ?></td>
                        <td><?php echo e($r->Warehouse_Count); ?></td>
                        <td><?php echo e($r->Warehouse_User); ?></td>
                        <td><?php echo e($r->Warehouse_Datetime); ?></td>


                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Edit</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>