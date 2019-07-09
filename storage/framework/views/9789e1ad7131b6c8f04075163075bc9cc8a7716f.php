<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AppDashboard| </title>

    <!-- Bootstrap -->
    <link href="<?php echo e(url('/')); ?>/public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(url('/')); ?>/public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(url('/')); ?>/public/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo e(url('/')); ?>/public/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(url('/')); ?>/public/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="login ">
<div class="container">
        <div class="login_wrapper">
                <div class="animate form login_form">
                  <section class="login_content">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <h1>Login Form</h1>
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="current-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div>
                                <button type="submit" class="btn btn-default submit">
                                    <?php echo e(__('Login')); ?>

                                </button>
                               
                                <?php if(Route::has('password.request')): ?>
                                    <a class="reset_pass" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                        <div>
                                <h1><i class="fa fa-paw"></i> App Dashboard!</h1>
                                <p>@ <?php echo e(now()->year); ?> All Rights Reserved. Privacy and Terms</p>
                              </div>
                        </div>
                    </form>
                  </section>
                </div>
            </div>
</div>

</body>
</html>

<?php /**PATH D:\wamp\www\firstapp\resources\views/auth/login.blade.php ENDPATH**/ ?>