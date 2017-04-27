<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Compare</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">So sánh sản phẩm</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <table class="table table-bordered table-compare" id="talbe">
                <?php if(Session::has('product_compare') &&  count(Session::get('product_compare')) > 0): ?>
   
                <tr>
                    <td class="compare-label">Hình ảnh</td>
                       <?php $__currentLoopData = Session::get('product_compare'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><a href="#"><img width="250px" src="<?php echo e(asset('assets/data/'.$item['Product_Thumbnail'])); ?>" alt="Product"></a></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </tr>
                <tr>

                    <td class="compare-label">Tên sản phẩm</td>
                     <?php $__currentLoopData = Session::get('product_compare'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td>
                        <a href="#"><?php echo e($item['Product_Name']); ?></a>
                    </td>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
                
                <tr>
                    <td class="compare-label">Giá</td>
                  <?php $__currentLoopData = Session::get('product_compare'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="price">$<?php echo e($item['Product_Price']); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tr>
                <tr>
                    <td class="compare-label">Mô tả</td>
                    <?php $__currentLoopData = Session::get('product_compare'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($item['Product_Description']); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tr>

                <tr>
                    <td class="compare-label">Size</td>
                    <?php $__currentLoopData = Session::get('product_compare'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($item['Product_Size']); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>>

                </tr>
                <tr>
                    <td class="compare-label">Màu</td>
                    <?php $__currentLoopData = Session::get('product_compare'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($item['Product_Color']); ?></td>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tr>


                <tr>
                    <td class="compare-label">Chức năng</td>
                  <?php $__currentLoopData = Session::get('product_compare'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td class="action">
                       <a href="#" id="addItem" class="addItem">Thêm vào giỏ</a>
                        <a href="#" id="wishItem"><i class="fa fa-heart-o"></i></a>
                        <a href="so-sanh/xoa-<?php echo e($item['Product_ID']); ?>" id="deleteItem"><i class="fa fa-close"></i></a>
                    </td>
                   
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tr>
               <?php endif; ?>
            </table>
        </div>
    </div>
</div>

