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
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
       
   </head>
   <body class="inner_page login">
      <div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="300" src="{{ asset('images/logo.png') }}" alt="#">
                     </div>
                  </div>
                  <div class="login_form">
                      <!-- Session Status -->
<<<<<<< HEAD
                    
                         @if (session('status'))
                                <div class="alert" style="color:white; margin-left: 155px !important;">{{ session('status') }}</div>
                         @endif
=======
                         <x-auth-session-status class="mb-4" :status="session('status')" />
>>>>>>> 9ba24f8 (Authentication Design migration)
                     <form method="POST" action="{{ route('login') }}">
                     @csrf
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email Address</label>
                              <input type="email" id="email" name="email" placeholder="E-mail">
<<<<<<< HEAD
                             
                
                           </div>
                             @error('email')
                              <div class="alert" style="color:red; margin-left: 125px !important;">{{ $message }}</div>
                              @enderror
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" id="password" placeholder="Password"  autocomplete="current-password">
                              
                           </div>
                             @error('password')
                              <div class="alert" style="color:red; margin-left: 125px !important;">{{ $message }}</div>
                              @enderror
=======
                              <x-input-error :messages="$errors->get('email')" class="mt-2" :value="old('email')" required autofocus autocomplete="username" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                              <x-input-error :messages="$errors->get('password')" class="mt-2" />
                           </div>
>>>>>>> 9ba24f8 (Authentication Design migration)
                          
                           <div class="field">
                              <label class="label_field hidden"></label>
                              <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                              @if (Route::has('password.request'))
                               <a class="forgot" href="{{ route('password.request') }}">Forgotten Password?</a>
                              @endif
                           </div>
                           
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt">Sign In</button>
                           </div>
                        </fieldset>
						<p>New Customer? <a class="signup" href="{{ route('register') }}">Sign Up</a></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('js/bootstrap-select.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('js/custom.js') }}"></script>
   
</body></html>