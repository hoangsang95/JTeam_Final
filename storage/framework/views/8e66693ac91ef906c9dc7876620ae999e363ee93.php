<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($err); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>
                        <?php endif; ?>
                        
                        <?php if(session('thongbao')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('thongbao')); ?>

                        </div>
                        <?php endif; ?>
                        <form action="admin/user/user_add" method="POST">
                              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" name="User_Name" placeholder="Tên người dùng" value="<?php echo e(old('User_Name')); ?>"/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="User_Email" placeholder="Email" value="<?php echo e(old('User_Email')); ?>"/>
                            </div>
                           
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" type="password" name="User_Password" placeholder="Mật khẩu" />
                            </div>
                           <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control" type="password" name="User_Repassword" placeholder="Nhập lại mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <label class="radio-inline">
                                    <input name="User_RootAdmin" value="0" checked="" type="radio">Người dùng
                                </label>
                                <label class="radio-inline">
                                    <input name="User_RootAdmin" value="1" type="radio">Quản trị
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Xóa trắng</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>