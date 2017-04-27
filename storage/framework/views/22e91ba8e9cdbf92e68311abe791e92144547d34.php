<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Checkout</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Checkout</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content checkout-page">
            <h3 class="checkout-sep">3. Shipping Information</h3>
            <div class="box-border">
                <form method="POST" action="thanh-toan">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                <ul>
                                    
                    <li class="row">
                        
                        <div class="col-sm-6<?php echo e($errors->has('Cart_Name') ? ' has-error' : ''); ?>">
                            
                            <label for="first_name_1" class="required">Họ tên</label>
                            <input class="input form-control" type="text" name="Cart_Name" id="first_name_1" value="<?php echo e(old('Cart_Name')); ?>">
                            <?php if($errors->has('Cart_Email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Cart_Name')); ?></strong>
                                </span>
                            <?php endif; ?>

                        </div><!--/ [col] -->

                        <div class="col-sm-6<?php echo e($errors->has('Cart_Mobile') ? ' has-error' : ''); ?>">
                            
                            <label for="last_name_1" class="required">Số điện thoại</label>
                            <input class="input form-control" type="text" name="Cart_Mobile" id="last_name_1" value="<?php echo e(old('Cart_Mobile')); ?>">
                            <?php if($errors->has('Cart_Email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Cart_Mobile')); ?></strong>
                                </span>
                            <?php endif; ?>
                                             
                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                    <li class="row">
                        
                        <div class="col-sm-6<?php echo e($errors->has('Cart_Address') ? ' has-error' : ''); ?>">
                            
                            <label for="address_1" class="required">Địa chỉ</label>
                            <input class="input form-control" type="text" name="Cart_Address" id="address_1" value="<?php echo e(old('Cart_Address')); ?>">
                             <?php if($errors->has('Cart_Email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Cart_Address')); ?></strong>
                                </span>
                            <?php endif; ?>

                        </div><!--/ [col] -->

                        <div class="col-sm-6<?php echo e($errors->has('Cart_Email') ? ' has-error' : ''); ?>">
                            
                            <label for="email_address_1" >Email</label>
                            <input class="input form-control" type="text" name="Cart_Email" id="email_address_1" value="<?php echo e(old('Cart_Email')); ?>">
                            <?php if($errors->has('Cart_Email')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Cart_Email')); ?></strong>
                                </span>
                            <?php endif; ?>

                        </div><!--/ [col] -->

                    </li><!--/ .row -->

                </ul>
                   
                <button class="button">Thanh toán</button>
                 </form>
            </div>
                
            
            <h3 class="checkout-sep">6. Order Review</h3>
            <div class="box-border">
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

                    
                     <?php endif; ?>
                <button class="button pull-right">Thanh toán</button>
            </div>
        </div>
    </div>
</div>