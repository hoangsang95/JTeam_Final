<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
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
                            <tr class="odd gradeX" align="center">
                                <td><?php echo e($r->id); ?></td>
                                <td><?php echo e($r->name); ?></td>
                                <td><?php echo e($r->email); ?></td>
                                <td>
                                    <?php if( $r->admin ==1): ?>
                                    <?php echo e("Quản trị"); ?>

                                    <?php else: ?>
                                    <?php echo e("Người dùng"); ?>

                                    <?php endif; ?>
                                </td>
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="quanly/user/xoa/<?php echo e($r->id); ?>"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="quanly/user/sua/<?php echo e($r->id); ?>">Sửa</a></td>
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
<?php echo $__env->make('layouts.quanly.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>