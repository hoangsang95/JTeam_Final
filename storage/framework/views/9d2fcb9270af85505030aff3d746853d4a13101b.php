<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>Sửa</small>
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
                <form action="admin/slide/slide_edit/<?php echo e($sl->Slide_ID); ?>" method="POST" enctype="multipart/form-data">  
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                    <div class="form-group">
                        <label>Slide_Title</label>
                        <input class="form-control" name="Slide_Title" value="<?php echo e($sl->Slide_Title); ?>" />
                    </div>
                    <div class="form-group">
                        <label>Slide_Description</label>
                        <textarea class="form-control" rows="3" name="Slide_Description" value=""><?php echo e($sl->Slide_Description); ?></textarea>
                    </div>
                    <div class="form-group">

                        <label>Image Current</label>

                        <p><img width="200px" src="<?php echo e(asset('assets/images/gom/'.$sl->Slide_Image)); ?>"></p>

                        <input type="hidden" name="Image_Current" multiple value="<?php echo e($sl->Slide_Image); ?>"/>
                    </div>
                    <div class="form-group">

                        <label>Image Update <span class="text-danger">*</span></label>
                        <input type="file" name="Slide_Image" multiple />
                    </div>
                    <div class="form-group">
                        <label>Slide_Link</label>
                        <textarea class="form-control" rows="3" name="Slide_Link" value="<?php echo e($sl->Slide_Link); ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Slide_Target</label>
                        <textarea class="form-control" rows="3" name="Slide_Target" value="<?php echo e($sl->Slide_Target); ?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Slide_Order</label>
                        <input class="form-control" name="Slide_Order" value="<?php echo e($sl->Slide_Order); ?>" type="number"/>
                    </div>
                    <div class="form-group">
                        <label>Slide_Cat</label>
                        <select class="form-control" name="Slide_Cat" value="<?php echo e($sl->Slide_Cat); ?>" >

                            <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option 
                                <?php if($sl->Slide_Cat == $r->Cat_ID): ?>
                                <?php echo e("selected"); ?>

                                <?php endif; ?>
                                value="<?php echo e($r->Cat_ID); ?>"><?php echo e($r->Cat_Name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
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