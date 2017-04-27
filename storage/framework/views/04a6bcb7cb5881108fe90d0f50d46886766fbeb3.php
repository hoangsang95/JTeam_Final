<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="page-header">Vật tư
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
            
            <?php if(session('warning')): ?>
            <div class="row alert alert-warning">
                <?php echo e(session('warning')); ?>

            </div>
            <?php endif; ?>
            
             <?php if(session('error')): ?>
            <div class="row alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
            <?php endif; ?>
            <div class="row excel" >
                <form action="importExcelProduct" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <div class="btn-group">
                    <button type="button" class="btn btn-info">Xuất File</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" id="export-menu">
                        <li id="export-to-excel"><a href="exportProduct">Xuất Excel</a></li>
                        <li id="export-to-excel"><a href="pdfExportProduct">Xuất PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </div>
                
                   
                   <label class="btn btn-primary btn-file">
                        Browse...<input type="file" name="importProduct" style="display: none;"/>
                    </label> 
                    <input type="submit" class="btn btn-success" value="Nhập File">                                     
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên vật tư</th>
                        <th>Mô tả</th>
                        <th>Số lượng</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $supplies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX deleteItem" align="center" id="<?php echo e($r->Supplies_ID); ?>" url="http://localhost/jteam/public/admin/product/product_delete/">
                        <td><?php echo e($r->Supplies_ID); ?></td>
                        <td><?php echo e($r->Supplies_Name); ?></td>
                        <td><?php echo e($r->Supplies_Description); ?></td>
                        <td><?php echo e($r->Supplies_Quantity); ?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/supplies/supplies_delete/<?php echo e($r->Supplies_ID); ?>" id="deleteItem" idDelete="<?php echo e($r->Supplies_ID); ?>"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/supplies/supplies_edit/<?php echo e($r->Supplies_ID); ?>">Sửa</a></td>
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