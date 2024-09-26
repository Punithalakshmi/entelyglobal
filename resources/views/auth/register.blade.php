
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
   <body class="inner_page login register">
   
      <div class="full_container register_main">
         <div class="container register_div">
            <div class="center verticle_center registerver">
               <div class="login_section register_section">
                  <div class="logo_login register_login">
                     <div class="center">
                        <img width="300" src="{{ asset('images/logo.png') }}" alt="#" />
                     </div>
                  </div>
                  <div class="login_form register_form">
				  <h2 class="reglog">Registration Form</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <fieldset>
                        <div class="field">
                            <label class="label_field">First Name</label>
                            <input type="text" name="firstname" placeholder="First Name" :value="old('firstname')" autofocus autocomplete="firstname">
                        </div>
                        @error('firstname')
                                <div class="alert" style="color:red; margin-left: 155px !important;">{{ $message }}</div>
                            @enderror
                        <div class="field">
                            <label class="label_field">Last Name</label>
                            <input type="text" name="lastname" placeholder="Last Name" :value="old('lastname')" autofocus autocomplete="lastname">
                           
                        </div>
                        @error('lastname')
                                <div class="alert" style="color:red; margin-left: 155px !important;">{{ $message }}</div>
                            @enderror
                        <div class="field">
                            <label class="label_field">Email Address</label>
                            <input type="email" name="email" placeholder="E-mail" :value="old('email')">
                          
                        </div>
                        @error('email')
                                <div class="alert" style="color:red; margin-left: 155px !important;">{{ $message }}</div>
                            @enderror
                        <div class="field">
                            <label class="label_field">Phone Number</label>
                            <input type="number" name="phonenumber" placeholder="Phone Number" :value="old('phonenumber')">
                            
                        </div>
                        @error('phonenumber')
                                <div class="alert" style="color:red; margin-left: 155px !important;">{{ $message }}</div>
                            @enderror
                        <div class="field">
                            <label class="label_field">Address</label>
                            <textarea class="form-control" name="address"></textarea>
                            
                        </div>
                        @error('address')
                                <div class="alert" style="color:red; margin-left: 155px !important;">{{ $message }}</div>
                            @enderror
                        <div class="field">
                            <label class="label_field">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password">
                            
                        </div>
                        @error('password')
                                <div class="alert" style="color:red; margin-left: 155px !important;">{{ $message }}</div>
                            @enderror
                        <div class="field">
                            <label class="label_field">Confirm Password</label>
                            <input type="password" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
                            
                        </div>
                           @error('password_confirmation')
                                <div class="alert" style="color:red; margin-left: 155px !important;">{{ $message }}</div>
                            @enderror
                        
                        <div class="field margin_0">
                            <label class="label_field hidden">hidden label</label>
                            <button class="main_bt">Register</button>
                        </div>
                    </fieldset>
                    <p>Already have an account? <a class="signup" href="{{ route('login') }}">Sign in instead</a></p>
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
</body>
</html>