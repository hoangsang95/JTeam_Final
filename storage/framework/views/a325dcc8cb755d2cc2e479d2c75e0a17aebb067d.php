<div class="container" id="columns">
<div class="row banner-bottom">
            <div class="col-sm-6 item-left">
                <div class="banner-boder-zoom2">
                    <a href="#"><img alt="ads" class="img-responsive" src="assets/images/gom/banner01.jpg"></a>
                </div>
            </div>
            <div class="col-sm-6 item-right">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="assets/images/gom/banner02.jpg"></a>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12" id="center_column">
               
                <!-- subcategories -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="#">Sản phẩm mới</a>
                        </li>
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">






                        <?php $__currentLoopData = $product_latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="">
                                        <img class="img-responsive" alt="product" src="assets/data/<?php echo e($r->Product_Thumbnail); ?>" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($r->Product_ID); ?>"></a>
                                            
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="mua-hang/<?php echo e($r->Product_ID); ?>">Thêm vào giỏ</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href=""><?php echo e($r->Product_Name); ?></a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price"><?php echo e(number_format($r->Product_Price)); ?></span>
                                        <span class="price old-price"><?php echo e(number_format($r->Product_PriceMarket)); ?></span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Mã sản phẩm: <?php echo e($r->Product_MID); ?></p>
                                        <?php if($r->Product_InStock == 1): ?>
                                        <p class="availability">Availability: <span>Còn hàng</span></p>
                                        <?php else: ?>
                                        <p class="availability">Availability: <span>Hết hàng</span></p>
                                        <?php endif; ?>
                                        <div class="product-desc">
                                            <?php echo e($r->Product_Description); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
               
            </div>
            <!-- ./ Center colunm -->
        </div>

        <div class="row">
            <!-- Left colunm -->
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12" id="center_column">
               
                <!-- subcategories -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="#">Bán chạy nhất</a>
                        </li>
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                        

                        <?php $__currentLoopData = $product_hot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="">
                                        <img class="img-responsive" alt="product" src="assets/data/<?php echo e($r->Product_Thumbnail); ?>" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($r->Product_ID); ?>"></a>
                                            
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="mua-hang/<?php echo e($r->Product_ID); ?>">Thêm vào giỏ</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href=""><?php echo e($r->Product_Name); ?></a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price"><?php echo e(number_format($r->Product_Price)); ?></span>
                                        <span class="price old-price"><?php echo e($r->Product_PriceMarket); ?></span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: <?php echo e($r->Product_MID); ?></p>
                                        <?php if($r->Product_InStock == 1): ?>
                                        <p class="availability">Availability: <span>Còn hàng</span></p>
                                        <?php else: ?>
                                        <p class="availability">Availability: <span>Hết hàng</span></p>
                                        <?php endif; ?>
                                        <div class="product-desc">
                                            <?php echo e($r->Product_Description); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
               
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->


        <?php $__currentLoopData = $cat_parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="row">
            <!-- Left colunm -->
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12" id="center_column">
               
                <!-- subcategories -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="chuyen-muc-<?php echo e($r1->Cat_ID); ?>"><?php echo e($r1->Cat_Name); ?></a>
                        </li>
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">



                    <?php $__currentLoopData = $products[$r1->Cat_ID]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="">
                                        <img class="img-responsive" alt="product" src="assets/data/<?php echo e($r->Product_Thumbnail); ?>" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($r->Product_ID); ?>"></a>
                                           
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#add">Thêm vào giỏ</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href=""><?php echo e($r->Product_Name); ?></a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price"><?php echo e(number_format($r->Product_Price)); ?></span>
                                        <span class="price old-price"><?php echo e($r->Product_PriceMarket); ?></span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: <?php echo e($r->Product_MID); ?></p>
                                        <?php if($r->Product_InStock == 1): ?>
                                        <p class="availability">Availability: <span>Còn hàng</span></p>
                                        <?php else: ?>
                                        <p class="availability">Availability: <span>Hết hàng</span></p>
                                        <?php endif; ?>
                                        <div class="product-desc">
                                            <?php echo e($r->Product_Description); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        


                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
               
            </div>
            <!-- ./ Center colunm -->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




    </div>