<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Đăng nhập</title>
       
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css">
         <link href="<?php echo e(asset('assets/css/MyStyle.css')); ?>" rel="stylesheet" type="text/css">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                    'csrfToken' => csrf_token(),
            ]); ?>

            ;
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default login">
                        <div class="panel-heading">Login</div>
                        <div class="col-md-6  panel-body">
                            <?php if(session('thongbao')): ?>
                            <div class="alert alert-danger">
                                <strong><?php echo e(session('thongbao')); ?></strong>
                            </div>
                            <?php endif; ?>
                            <form class="form-horizontal" role="form" method="POST" action="">
                                <?php echo e(csrf_field()); ?>


                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"  autofocus>

                                        <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" >

                                        <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                               

                                <div class="form-group ">
                                    <div class="submit-forgot">
                                        <div class="col-md-2"></div>
                                        <button type="submit" class="col-xs-12 col-sm-12 col-md-2 btn btn-primary">
                                            Login
                                        </button>

                                        <a class="col-xs-12 col-sm-12 col-md-6 btn btn-link" href="">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <span class="col-md-6 socialLogin">

                                <div class="facebook"><a href="auth/facebook"><img src="<?php echo e(asset('socialLogin/images/facebook.png')); ?>" alt=""/><i>Sign In  Facebook</i></a></div>
                                <div class="google"><a href="auth/google"><img src="<?php echo e(asset('socialLogin/images/gplus.png')); ?>" alt=""/><i>Sign In with Google+</i></a></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>