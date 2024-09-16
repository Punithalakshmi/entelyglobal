<html lang="en"><head>
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
   <body class="inner_page login forgetmain">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="300" src="<?php echo e(asset('images/logo.png')); ?>" alt="#">
                     </div>
                  </div>
                  <div class="login_form">
				  <h2 class="reglog forgetpsw">Forgot Password?</h2>
				  <p>Enter your email and we'll send you instructions to reset your password</p>
                      <!-- Session Status -->
                   
                     <?php if(session('status')): ?>
                                <div class="alert" style="color:white; margin-left: 155px !important;"><?php echo e(session('status')); ?></div>
                     <?php endif; ?>
                     <form method="POST" action="<?php echo e(route('password.email')); ?>" >
                     <?php echo csrf_field(); ?>
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input id="email" placeholder="Enter Your E-mail" type="email" name="email" :value="old('email')" autofocus>
                           </div>
                             <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="alert" style="color:red; margin-left: 125px !important;"><?php echo e($message); ?></div>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Send Reset Link</button>
                           </div>
                        </fieldset>
						<p><a class="signup" href="<?php echo e(route('login')); ?>"> &lt; Back to Login</a></p>
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
   
</body></html><?php /**PATH D:\xampp\htdocs\entelyglobal\resources\views/auth/forgot-password.blade.php ENDPATH**/ ?>