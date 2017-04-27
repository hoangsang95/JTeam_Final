<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="page-header">Người dùng
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($err); ?><br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <?php endif; ?>

            <?php if(session('success')): ?>
            <div class="row alert alert-success">
                <?php echo e(session('thongbao')); ?>

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
            <div class="row excel">
                <form action="importExcelUser" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <a href="deleteAll" class="btn btn-danger">Delete All</a>
                <div class="btn-group">
                    <button type="button" class="btn btn-info">Export</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" id="export-menu">
                        <li id="export-to-excel"><a href="exportUser">Export to Excel</a></li>
                        <li id="export-to-excel"><a href="pdfExportUser">Export to PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </div>
                
                   
                   <label class="btn btn-primary btn-file">
                        Browse...<input type="file" name="importUser" style="display: none;"/>
                    </label> 
                    <input type="submit" class="btn btn-success" value="Import">                                     
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Quyền</th>

                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX deleteItem" align="center" id="<?php echo e($r->User_ID); ?>" url="http://localhost/jteam/public/admin/user/user_delete/">
                        <td><?php echo e($r->User_ID); ?></td>
                        <td><?php echo e($r->User_Name); ?></td>
                        <td><?php echo e($r->User_Email); ?></td>
                        <td>
                            <?php if( $r->User_RootAdmin ==1): ?>
                            <?php echo e("Quản trị"); ?>

                            <?php else: ?>
                            <?php echo e("Người dùng"); ?>

                            <?php endif; ?>
                        </td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/user_delete/<?php echo e($r->User_ID); ?>" id="deleteItem" idDelete="<?php echo e($r->User_ID); ?>"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/user_edit/<?php echo e($r->User_ID); ?>">Sửa</a></td>
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