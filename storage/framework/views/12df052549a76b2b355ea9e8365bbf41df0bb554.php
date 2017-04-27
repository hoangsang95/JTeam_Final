<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                 <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                          
                            <small> <?php echo e($r->Cat_Name); ?> 
                                
                         </small>
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
                        <form action="admin/cate/sua/<?php echo e($r->Cat_ID); ?>" method="POST">
                             <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                            <div class="form-group">
                                <label>Cat_Name</label>
                                <input class="form-control" name="Cat_Name" value="<?php echo e($r->Cat_Name); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Cat_Thumbnail</label>
                                <input class="form-control" name="Cat_Thumbnail" value="<?php echo e($r->Cat_Thumbnail); ?>"  />
                            </div>
                            <div class="form-group">
                                <label>Cat_Keywords</label>
                                <input class="form-control" name="Cat_Keywords" value="<?php echo e($r->Cat_Keywords); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Cat_Parent</label>
                                <input class="form-control" name="Cat_Parent" value="<?php echo e($r->Cat_Parent); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Cat_Order</label>
                                <input class="form-control" name="Cat_Order" value="<?php echo e($r->Cat_Order); ?>" />
                            </div>
                            <div class="form-group">
                                <label>Cat_Hot</label>
                                <input class="form-control" name="Cat_Hot" value="<?php echo e($r->Cat_Hot); ?>" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                            
                        <form>
                            
                    </div>
                </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>