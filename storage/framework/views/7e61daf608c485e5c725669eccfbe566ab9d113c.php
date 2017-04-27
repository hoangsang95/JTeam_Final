<div class="columns-container">
    <div class="container" id="columns">
       
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">Lọc sản phẩm</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                
                            </div>
                        </div>
                        <!-- ./layered -->
                        <p style="margin-bottom: 20px">
                            <label for="amount">Giá:</label>
                            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        </p>
                        <form action="<?php echo e(url('search')); ?>" method="get"  >
                            <input type="hidden" name="tukhoa" value="<?php echo e($tukhoa); ?>" />
                            <div class="row" style="margin-bottom: 10px; display: none">
                                <div class="col-md-6 col-xs-6 col-sm-6">
                                    <input  type="text" name="minval" id="minval" value="<?php echo e(old('minval')); ?>" class="form-control" />
                                </div>
                                <div class="col-md-6 col-xs-6 col-sm-6">
                                    <input  type="text" name="maxval" id="maxval" value="<?php echo e(old('maxval')); ?>"  class="form-control" />
                                </div>
                            </div>
                            <div id="slider-range"></div> 
                            <button type="submit" class="btn btn-primary" name="filter" value="filter" style="margin:10px 0px 10px 0px; float: right">Lọc</button>
                        </form>
                        
                              
                            
                    </div>
                </div>
                <!-- ./block category  -->



            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">


                <div id="view-product-list" class="view-product-list" style="margin-top: 0">
                    <h2 class="page-heading">
                        <span class="page-heading-title" style="padding: 0">Kết quả tìm kiếm: <?php echo e($tukhoa); ?></span>      
                    </h2>
                    <?php if(\Request::has('filter')): ?>
                        <strong>Lọc theo giá: <?php echo e(\Request::get('minval')); ?> -  <?php echo e(\Request::get('maxval')); ?></strong>
                    <?php endif; ?>
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
                                        <img class="img-responsive" alt="product" src="<?php echo e(asset('assets/data/'.$pro->Product_Thumbnail)); ?>" />
                                    </a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#add">Thêm vào giỏ</a>
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
                                        <span class="price product-price"><?php echo e($pro->Product_Price); ?></span>
                                        <span class="price old-price"><?php echo e($pro->Product_PriceMarket); ?></span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Mã sản phẩm: #<?php echo e($pro->Product_MID); ?></p>
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
                        Không tìm thấy sản phẩm nào, vui lòng thử lại.
                        <?php endif; ?>
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
                <?php if(count($product)): ?>
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
                <?php endif; ?>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>

<?php $__env->startSection('script'); ?>
<script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 1200000,
                values: [ 0, 1200000],
                slide: function( event, ui ) {
                    $("#minval").val(ui.values[0]);
                    $("#maxval").val(ui.values[1]);
                    $( "#amount" ).val(  ui.values[ 0 ] + " - " + ui.values[ 1 ] );
                }
            });
            $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ) + " - " + $( "#slider-range" ).slider( "values", 1 ) );
          });
</script>
<?php $__env->stopSection(); ?>