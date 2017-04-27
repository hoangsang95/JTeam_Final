<div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">Trang chủ</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <?php $__currentLoopData = $cat_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!--
                                         <li><a href="chuyen-muc-<?php echo e($r->Cat_ID); ?>"><?php echo e($r->Cat_Name); ?></a></li>
                                    -->
                                        <?php if($r->Cat_Parent == 0): ?>
                                         <li class="dropdown">
                                            <a href="chuyen-muc-<?php echo e($r->Cat_ID); ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo e($r->Cat_Name); ?></a>
                                            <ul class="dropdown-menu container-fluid">
                                                <li class="block-container">
                                                    <ul class="block">
                                                        <?php $__currentLoopData = $cat_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($r1->Cat_Parent == $r->Cat_ID): ?>
                                                            <li class="link_container"><a href="chuyen-muc-<?php echo e($r1->Cat_ID); ?>"><?php echo e($r1->Cat_Name); ?></a></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </li>
                                            </ul> 
                                        </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="lien-he">Liên hệ</a></li> 
                                        <li><a href="">Giới thiệu</a></li>         
                                     
                                </ul>
                                    <ul class="nav navbar-nav navbar-right">
                                        <?php if(Auth::check()): ?>
                                        <li><a class="link-buytheme" href="admin/logout"><i class="fa fa-angle-double-right"></i> Đăng xuất</a></li>
                                        
                                        <?php else: ?>
                                         <li><a class="link-buytheme" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-double-right"></i> Đăng nhập</a></li>
                                        <?php endif; ?>
                                  </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    
    
