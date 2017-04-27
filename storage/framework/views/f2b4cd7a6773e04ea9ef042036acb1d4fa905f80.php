<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="page-header">Liên hệ
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <?php if(session('thongbao')): ?>
            <div class="alert alert-success">
                <?php echo e(session('thongbao')); ?>

            </div>
            <?php endif; ?>
            <div class="row excel">
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                    <a href="#" class="btn btn-danger">Delete All</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Export</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu" id="export-menu">
                            <li id="export-to-excel"><a href="exportContact">Export to Excel</a></li>
                            <li id="export-to-excel"><a href="pdfExportContact">Export to PDF</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Other</a></li>
                        </ul>
                    </div>
                    <label class="btn btn-primary btn-file">
                        Browse...<input type="file" name="importProduct" style="display: none;"/>
                    </label> 
                    <input type="submit" class="btn btn-success" value="Import">                                     
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Tên người gửi</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Tin nhắn</th>
                        <th>Ngày gửi</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="odd gradeX deleteItem" align="center" id="<?php echo e($r->Contact_ID); ?>" url="http://localhost/jteam/public/admin/contact/contact_delete/">
                        <td><?php echo e($r->Contact_Name); ?></td>
                        <td><?php echo e($r->Contact_Email); ?></td>
                        <td><?php echo e($r->Contact_Mobile); ?></td>
                        <td><?php echo e($r->Contact_Message); ?></td>
                        <td><?php echo e($r->Contact_Datetime); ?></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/contact/contact_delete/<?php echo e($r->Contact_ID); ?>" id="deleteItem" idDelete="<?php echo e($r->Contact_ID); ?>"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/contact/contact_edit/<?php echo e($r->Contact_ID); ?>">Sửa</a></td>
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