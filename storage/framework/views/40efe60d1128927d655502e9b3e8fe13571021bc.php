<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="<?php echo e(url('/')); ?>" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Giỏ hàng</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Thông tin giỏ hàng</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content page-order">
            <div class="order-detail-content">

              <?php if(!session('cart')): ?>
                
              <strong> <?php echo e($thongbao); ?></strong>
                
              <?php endif; ?>

            
            <?php if(Session::has('cart')): ?>
            
                <div class="table-responsive">
            <table class="table table-bordered  cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Hình</th>
                            <th>Mô tả</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>

                    <tbody>
                           
                         <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="<?php echo e(asset('assets/data/'.$products['item']['Product_Thumbnail'])); ?>" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#"><?php echo e($products['item']['Product_Name']); ?></a></p>
                                <small class="cart_ref">SKU : <?php echo e($products['item']['Product_MID']); ?></small><br>
                                <small><a href="#">Color : <?php echo e($products['item']['Product_Color']); ?></a></small><br>   
                                <small><a href="#">Size : <?php echo e($products['item']['Product_Size']); ?></a></small>
                            </td>
                            <td class="price"><span><?php echo e($products['item']['Product_Price']); ?> VND</span></td>
                            <td class="qty">
                                <input class="form-control input-sm" disabled type="text" value="<?php echo e($products['qty']); ?>">
                                <a href="<?php echo e(route('tang',['id'=>$products['item']['Product_ID']])); ?>"><i class="fa fa-caret-up"></i></a>
                                <a href="<?php echo e(route('giam',['id'=>$products['item']['Product_ID']])); ?>"><i class="fa fa-caret-down"></i></a>
                            </td>
                            <td class="price">
                                <span><?php echo e($products['price']); ?> VND</span>
                            </td>
                            <td class="action">
                                <a href="<?php echo e(route('xoa',[$products['item']['Product_ID']])); ?>">Delete item</a>
                            </td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"><strong>Tổng tiền: </strong></td>
                            <td colspan="3"><strong><?php echo e($totalPrice); ?> €</strong></td>
                        </tr>
                    </tfoot>    
                </table>
                </div>

                <div class="row">
                
                    <div class="col-md-6">
                        

                <div class="cart_navigation">
                <?php if(Auth::check()): ?>
                     <a class="next-btn center-block" href="<?php echo e(url('dat-hang')); ?>">Đặt hàng</a>
                <?php else: ?>
                    <a class="next-btn center-block" data-toggle="modal" data-target="#myModal" >Vui lòng đăng nhập</a>
                <?php endif; ?>
                </div>

                    </div>
                    </div>


                    
                     <?php endif; ?>
                <div class="cart_navigation">
                    <a class="prev-btn" href="<?php echo e(URL::previous()); ?>" >Continue shopping</a>
                </div>
            </div>
        </div>
    </div>
</div>