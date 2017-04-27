<div id="home-slider">
    <div class="container">
        <div class="section-home-top-6">
            <div class="box-left">
                <div class="homeslider">
                    <ul id="contenhomeslider-customPage">
                      <?php $__currentLoopData = $slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><img alt="<?php echo e($r->Slide_Title); ?>" width="785px" height="480" src="<?php echo e(asset('assets/images/gom/'.$r->Slide_Image)); ?>" title="<?php echo e($r->Slide_Title); ?>" /></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="bx-control">
                        <div class="slide-prev">
                            <span id="bx-prev"></span>
                        </div>
                        <div id="bx-pager" class="slide-pager">
                              <a data-slide-index="0" href="#">1</a>
                              <a data-slide-index="1" href="#">2</a>
                              <a data-slide-index="2" href="#">3</a>
                        </div>
                        <div class="slide-next">
                            <span id="bx-next"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-right">
                <div class="group-banner-slider left">
                    <div class="item banner-opacity">
                        <a href="#"><img width="183px" height="158px" src="assets/images/gom/right1.jpg" alt="Banner"></a>
                    </div>
                    <div class="item banner-opacity">
                        <a href="#"><img width="183px" height="158px" src="assets/images/gom/right2.jpg" alt="Banner"></a>
                    </div>
                    <div class="item banner-opacity">
                        <a href="#"><img width="183px" height="158px" src="assets/images/gom/right3.jpg" alt="Banner"></a>
                    </div>
                </div>
                <div class="group-banner-slider right">
                   <div class="item banner-opacity">
                        <a href="#"><img src="assets/data/option6/banner-top.jpg" alt="Banner"></a>
                    </div>
                    <div class="item banner-opacity">
                        <a href="#"><img src="assets/data/option6/banner12.jpg" alt="Banner"></a>
                    </div>
                    <div class="item banner-opacity">
                        <a href="#"><img width="198px" height="188px" src="assets/images/gom/right4.jpg" alt="Banner"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>