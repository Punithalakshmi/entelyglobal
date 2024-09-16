<!-- right content -->
<div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                       
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li>
								 <div class="notification-icon">
                                    <a href="#"><i class="fa fa-bell-o fa-2x"></i><span class="badge">2</span></a>
                                    <div class="notification-popup" id="notificationPopup">
                                        <h6>Notifications</h6>
                                        <div class="notification-item">
                                            <span>Notification 1: You have a new message</span>
                                            <span class="notification-time">2 minutes ago</span>
                                            <span class="close-btn">×</span>
                                        </div>
                                        <div class="notification-item">
                                            <span>Notification 2: Your order has been shipped</span>
                                            <span class="notification-time">1 hour ago</span>
                                            <span class="close-btn">×</span>
                                        </div>
                                    </div>
                                </div>
								 
								 
								 </li>
                                
                                 
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo e(asset('images/user_img.jpg')); ?>" alt="#"><span class="name_user">Jhon Smith</span></a>
                                    <div class="dropdown-menu">
                                      
                                       <a class="dropdown-item" href="<?php echo e(route('admin/settings')); ?>">Settings</a>
                                       <a class="dropdown-item" href="<?php echo e(route('admin/help')); ?>">Help</a>
                                       <form method="POST" action="<?php echo e(route('logout')); ?>">
                                         <?php echo csrf_field(); ?>
                                       <a class="dropdown-item" :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                          <span>Log Out</span> 
                                          <i class="fa fa-sign-out"></i>
                                       </a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar --><?php /**PATH D:\xampp\htdocs\entelyglobal\resources\views/layouts/_partials/header.blade.php ENDPATH**/ ?>