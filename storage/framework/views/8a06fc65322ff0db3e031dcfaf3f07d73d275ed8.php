<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Slide
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                      <?php if(session('thongbao')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('thongbao')); ?>

                        </div>
                        <?php endif; ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                               <th>Slide_ID</th>
                                <th>Slide_Title</th>
                                <th>Slide_Description</th>
                                <th>Slide_Image</th>
                               
                                 <th>Slide_Order</th>
                                 
                                   <th></th>
                                  <th></th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="odd gradeX" align="center">
       
                                <td><?php echo e($r->Slide_ID); ?></td>
                                <td><?php echo e($r->Slide_Title); ?></td>
                                <td><?php echo e($r->Slide_Description); ?></td>
                                <td><img width="100px" src="<?php echo e(asset('assets/data/'.$r->Slide_Image)); ?>"></td>
                                
                                <td><?php echo e($r->Slide_Order); ?></td>
                                
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="quanly/slide/xoa/<?php echo e($r->Slide_ID); ?>"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="quanly/slide/sua/<?php echo e($r->Slide_ID); ?>">Edit</a></td>
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