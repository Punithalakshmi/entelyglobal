
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Entely Global</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/colors.css')); ?>" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-select.css')); ?>" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/perfect-scrollbar.css')); ?>" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
       
   </head>
   <body class="inner_page login register">
   
      <div class="full_container register_main">
         <div class="container register_div">
            <div class="center verticle_center registerver">
               <div class="login_section register_section">
                  <div class="logo_login register_login">
                     <div class="center">
                        <img width="300" src="<?php echo e(asset('images/logo.png')); ?>" alt="#" />
                     </div>
                  </div>
                  <div class="login_form register_form">
				  <h2 class="reglog">Registration Form</h2>
                <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>
                    <fieldset>
                        <div class="field">
                            <label class="label_field">First Name</label>
                            <input type="text" name="firstname" placeholder="First Name" :value="old('firstname')" autofocus autocomplete="firstname">
                        </div>
                        <?php $__errorArgs = ['firstname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert" style="color:red; margin-left: 155px !important;"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="field">
                            <label class="label_field">Last Name</label>
                            <input type="text" name="lastname" placeholder="Last Name" :value="old('lastname')" autofocus autocomplete="lastname">
                           
                        </div>
                        <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert" style="color:red; margin-left: 155px !important;"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="field">
                            <label class="label_field">Email Address</label>
                            <input type="email" name="email" placeholder="E-mail" :value="old('email')">
                          
                        </div>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert" style="color:red; margin-left: 155px !important;"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="field">
                            <label class="label_field">Phone Number</label>
                            <input type="number" name="phonenumber" placeholder="Phone Number" :value="old('phonenumber')">
                            
                        </div>
                        <?php $__errorArgs = ['phonenumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert" style="color:red; margin-left: 155px !important;"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="field">
                            <label class="label_field">Address</label>
                            <textarea class="form-control" name="address"></textarea>
                            
                        </div>
                        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert" style="color:red; margin-left: 155px !important;"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="field">
                            <label class="label_field">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password">
                            
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert" style="color:red; margin-left: 155px !important;"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="field">
                            <label class="label_field">Confirm Password</label>
                            <input type="password" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
                            
                        </div>
                           <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert" style="color:red; margin-left: 155px !important;"><?php echo e($message); ?></div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                        <div class="field margin_0">
                            <label class="label_field hidden">hidden label</label>
                            <button class="main_bt">Register</button>
                        </div>
                    </fieldset>
                    <p>Already have an account? <a class="signup" href="<?php echo e(route('login')); ?>">Sign in instead</a></p>
                </form>
             </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
      <!-- wow animation -->
      <script src="<?php echo e(asset('js/animate.js')); ?>"></script>
      <!-- select country -->
      <script src="<?php echo e(asset('js/bootstrap-select.js')); ?>"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo e(asset('js/perfect-scrollbar.min.js')); ?>"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>
</html><?php /**PATH D:\xampp\htdocs\entelyglobal\resources\views/auth/register.blade.php ENDPATH**/ ?>