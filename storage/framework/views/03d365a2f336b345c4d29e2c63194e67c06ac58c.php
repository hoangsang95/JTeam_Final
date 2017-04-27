<div class="content-page">
    <div class="container">
        <!-- featured category fashion -->
        <div class="category-featured fashion">
            <nav class="navbar nav-menu show-brand">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-fashion.png" />fashion</a></div>
                    <span class="toggle-menu"></span>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">           
                        <ul class="nav navbar-nav">
                            <li><a data-toggle="tab" href="#tab-1">New Arrivals</a></li>
                            <li><a data-toggle="tab" href="#tab-2">Most Reviews</a></li>
                            <li><a data-toggle="tab" href="#tab-3">On Sales</a></li>                 
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </nav>
            <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <?php $__currentLoopData = $cate1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#"><?php echo e($c1->Cat_Name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-1">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img width="386px" height="572px" src="assets/data/catedogom1.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                           
                                            <?php $__currentLoopData = $product_latest_fashion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_l_f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="san-pham-<?php echo e($p_l_f->Product_ID); ?>"><?php echo e($p_l_f->Product_Name); ?></a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$<?php echo e($p_l_f->Product_Price); ?></span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="san-pham-<?php echo e($p_l_f->Product_ID); ?>"><img width="173px" height="211px" class="img-responsive" alt="product" src="<?php echo e(asset('assets/data/'.$p_l_f->Product_Thumbnail)); ?>" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($p_l_f->Product_ID); ?>"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-2">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/option6/banner3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <?php $__currentLoopData = $product_review_fashion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_r_f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="san-pham-<?php echo e($p_r_f->Product_ID); ?>"><?php echo e($p_r_f->Product_Name); ?></a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$<?php echo e($p_r_f->Product_Price); ?></span>
                                                          
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="san-pham-<?php echo e($p_r_f->Product_ID); ?>"><img width="173px" height="211px" class="img-responsive" alt="product" src="<?php echo e(asset('assets/data/'.$p_r_f->Product_Thumbnail)); ?>" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($p_r_f->Product_ID); ?>"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                               
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-3">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/option6/banner3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <?php $__currentLoopData = $product_onsales_fashion; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_o_f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="san-pham-<?php echo e($p_o_f->Product_ID); ?>"><?php echo e($p_o_f->Product_Name); ?></a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$<?php echo e($p_o_f->Product_Price); ?></span>
                                                        <span class="price old-price">$<?php echo e($p_o_f->Product_PriceMarket); ?></span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="san-pham-<?php echo e($p_o_f->Product_ID); ?>"><img width="173px" height="211px" class="img-responsive" alt="product" src="<?php echo e(asset('assets/data/'.$p_o_f->Product_Thumbnail)); ?>" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($p_o_f->Product_ID); ?>"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                               
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end featured category fashion -->
        <!-- featured category sports -->
        <div class="category-featured sports">
            <nav class="navbar nav-menu show-brand">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/icon-fashion.png" />fashion</a></div>
                    <span class="toggle-menu"></span>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">           
                        <ul class="nav navbar-nav">
                          
                            <li><a data-toggle="tab" href="#tab-7">New Arrivals</a></li>
                            <li><a data-toggle="tab" href="#tab-8">Most Reviews</a></li>
                            <li><a data-toggle="tab" href="#tab-9">On Sales</a></li>
                     
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </nav>
            <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <?php $__currentLoopData = $cate2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="#"><?php echo e($c2->Cat_Name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>
                    </div>
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <div class="tab-panel active" id="tab-7">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/option6/banner4.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                           
                                            <?php $__currentLoopData = $product_latest_sport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_l_s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="san-pham-<?php echo e($p_l_s->Product_ID); ?>"><?php echo e($p_l_s->Product_Name); ?></a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$<?php echo e($p_l_s->Product_Price); ?></span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="san-pham-<?php echo e($p_l_s->Product_ID); ?>"><img width="173px" height="211px" class="img-responsive" alt="product" src="<?php echo e(asset('assets/data/'.$p_l_s->Product_Thumbnail)); ?>" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($p_l_s->Product_ID); ?>"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            

                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-8">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/option6/banner3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <?php $__currentLoopData = $product_review_sport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_r_s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="san-pham-<?php echo e($p_r_s->Product_ID); ?>"><?php echo e($p_r_s->Product_Name); ?></a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$<?php echo e($p_r_s->Product_Price); ?></span>
                                                          
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="san-pham-<?php echo e($p_r_s->Product_ID); ?>"><img width="173px" height="211px" class="img-responsive" alt="product" src="<?php echo e(asset('assets/data/'.$p_r_s->Product_Thumbnail)); ?>" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($p_r_s->Product_ID); ?>"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                               
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-panel" id="tab-9">
                                    <div class="box-left">
                                        <div class="banner-img">
                                            <a href="#"><img src="assets/data/option6/banner3.jpg" alt="Banner Product"></a>
                                        </div>
                                    </div>
                                    <div class="box-right">
                                        <ul class="product-list row">
                                            <?php $__currentLoopData = $product_onsales_sport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_o_s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="col-sm-4">
                                                <div class="right-block">
                                                    <h5 class="product-name"><a href="san-pham-<?php echo e($p_o_s->Product_ID); ?>"><?php echo e($p_o_s->Product_Name); ?></a></h5>
                                                    <div class="content_price">
                                                        <span class="price product-price">$<?php echo e($p_o_s->Product_Price); ?></span>
                                                        <span class="price old-price">$<?php echo e($p_o_s->Product_PriceMarket); ?></span>
                                                    </div>
                                                </div>
                                                <div class="left-block">
                                                    <a href="san-pham-<?php echo e($p_o_s->Product_ID); ?>"><img width="173px" height="211px" class="img-responsive" alt="product" src="<?php echo e(asset('assets/data/'.$p_o_s->Product_Thumbnail)); ?>" /></a>
                                                    <div class="quick-view">
                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                        <a title="Add to compare" class="compare" href="so-sanh/them-<?php echo e($p_o_s->Product_ID); ?>"></a>
                                                        <a title="Quick view" class="search" href="#"></a>
                                                    </div>
                                                    <div class="add-to-cart">
                                                        <a title="Add to Cart" href="#">Add to Cart</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                               
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end featured category sports-->



    </div>
</div>

