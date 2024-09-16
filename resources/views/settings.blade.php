<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Welcome Jhon Smith</h2>
                           </div>
                        </div>
                     </div>
                     
                         <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Settings</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <div class="full dis_flex center_text">
                                          <div class="profile_img"><img width="180" class="rounded-circle" src="{{ asset('images/user_img.jpg')}}" alt="#"></div>
                                          <div class="profile_contant">
                                             <div class="contact_inner">
                                                <h3>John Smith</h3>
                                                <p><strong>About: </strong>Business Man</p>
                                                <ul class="list-unstyled">
                                                   <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                   <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                </ul>
												 <div class="field margin_0">
                             
                              <button class="main_bt">Edit</button>
                           </div>
                                             </div>
                                             
                                          </div>
                                       </div>
                                           <!-- profile contant section -->
                                     <div class="login_form register_form resetpass editprof">
				  
				  
                     <form>
                        <fieldset>
						 <div class="field">
                              <label class="label_field">Change First Name</label>
                              <input type="text" name="password" placeholder="Change Your First Name">
                           </div>
						   <div class="field">
                              <label class="label_field">Change Last Name</label>
                              <input type="text" name="password" placeholder="Change Your Last Name">
                           </div>
                           <div class="field">
                              <label class="label_field">Change Email Address</label>
                              <input type="email" name="password" placeholder="test@gmail.com" disabled="" style="background:#ccc;">
                           </div>
						   
						   <div class="field">
                              <label class="label_field">Change Your Password</label>
                              <input type="email" name="password" placeholder="Change Your Password">
                           </div>
						  
						   
						   <div class="field">
                              <label class="label_field">Change Phone Number</label>
                              <input type="text" name="Phone Number" placeholder="Enter Your Phone Number">
                           </div>
                           
                          
                           <div class="field margin_0">
                             
                              <button class="main_bt">Confirm</button>
                           </div>
                        </fieldset>
						
                     </form>
                  </div>
                                       <!-- end user profile section -->
								
                                       <!-- end user profile section -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2"></div>
                        </div>
                        <!-- end row -->
                     </div>
                  </div>

@endsection