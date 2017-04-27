<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="/" title="Về trang chủ">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Fashion</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
               
               
               
                <!-- TAGS -->
                <div class="block left-module">
                    <p class="title_block">Từ khóa</p>
                    <div class="block_content">
                        <div class="tags">
                            <?php if(count($keywords)): ?>
                                <?php $__currentLoopData = $keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="search"><span class="level1"><?php echo e($v); ?></span></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- ./TAGS -->
               
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- category-slider -->
                <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        <?php if(isset($slide)): ?>    
                            <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <img src="<?php echo e($sl->Slide_Image); ?>">
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- ./category-slider -->
                <!-- subcategories -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="#"><?php echo e($cate[0]->Cat_Name); ?></a>
                        </li>
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">Women</span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                    <?php if(count($product)): ?>
                        <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="san-pham-<?php echo e($pro->Product_ID); ?>">
                                        <img class="img-responsive" alt="product" src="<?php echo e($pro->Product_Thumbnail); ?>" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="san-pham-<?php echo e($pro->Product_ID); ?>"><?php echo e($pro->Product_Name); ?></a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price">$<?php echo e($pro->Product_Price); ?></span>
                                        <span class="price old-price">$<?php echo e($pro->Product_PriceMarket); ?></span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: #<?php echo e($pro->Product_MID); ?></p>
                                        <p class="availability">Availability: <span><?php echo e($pro->Product_InStock); ?></span></p>
                                        <div class="product-desc">
                                            <?php echo e($pro->Product_Description); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <br>
                        Mục này chưa có sản phẩm nào!
                    <?php endif; ?>
                        
                        
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            <?php echo $product->links(); ?>

                              
                          </ul>
                        </nav>
                    </div>
                    <div class="show-product-item">
                        <select name="">
                            <option value="">Show 18</option>
                            <option value="">Show 20</option>
                            <option value="">Show 50</option>
                            <option value="">Show 100</option>
                        </select>
                    </div>
                    <div class="sort-product">
                        <select>
                            <option value="">Product Name</option>
                            <option value="">Price</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>