<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>

    ;
</script>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="/" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Liên hệ</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Liên hệ với chúng tôi</span>
        </h2>
        <!-- ../page heading-->
        <div id="contact" class="page-content page-contact">
            <div id="message-box-conact"></div>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="page-subheading">Liên Hệ</h3>

                    <form method="post" action="<?php echo e(url('lien-he')); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
                        <div class="contact-form-box">
                            <div class="form-selector<?php echo e($errors->has('Contact_Name') ? ' has-error' : ''); ?>">
                                <label>Họ tên</label>
                                <input type="text" name="Contact_Name" class="form-control input-sm" id="title" value="<?php echo e(old('Contact_Name')); ?>">
                                <?php if($errors->has('Contact_Name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Contact_Name')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-selector<?php echo e($errors->has('Contact_Email') ? ' has-error' : ''); ?>">
                                <label>Email</label>
                                <input type="text" name="Contact_Email" class="form-control input-sm" id="email" value="<?php echo e(old('Contact_Email')); ?>">
                                <?php if($errors->has('Contact_Name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Contact_Email')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-selector<?php echo e($errors->has('Contact_Mobile') ? ' has-error' : ''); ?>">
                                <label>Số điện thoai</label>
                                <input type="tel" name="Contact_Mobile" class="form-control input-sm" id="phone" value="<?php echo e(old('Contact_Mobile')); ?>">
                                <?php if($errors->has('Contact_Name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Contact_Mobile')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-selector<?php echo e($errors->has('Contact_Message') ? ' has-error' : ''); ?>">
                                <label>Lời nhắn</label>
                                <textarea class="form-control input-sm" name="Contact_Message" rows="10" id="message"><?php echo e(old('Contact_Message')); ?></textarea>
                                <?php if($errors->has('Contact_Name')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('Contact_Message')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-selector<?php echo e($errors->has('Contact_Name') ? ' has-error' : ''); ?>">
                                <button type="submit" id="btn-send-contact" class="btn">Gửi</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-xs-12 col-sm-6" id="contact_form_map">
                    <h3 class="page-subheading">Thông tin liên hệ</h3>
                    <br>
                    <ul class="store_info">
                        <li><i class="fa fa-home"></i>Our business address is 1063 Freelon Street San Francisco, CA 95108</li>
                        <li><i class="fa fa-phone"></i><span>+ 021.343.7575</span></li>
                        <li><i class="fa fa-phone"></i><span>+ 020.566.6666</span></li>
                        <li><i class="fa fa-envelope"></i>Email: <span><a href="">support@kutetheme.com</a></span></li>
                    </ul> 
                    <h3 class="page-subheading">Bản đồ</h3>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1Xb8aRDr70jrZkUuWsGnbbZ3WmP4" width="640" height="480" frameborder="0" ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
