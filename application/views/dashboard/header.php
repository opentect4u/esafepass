<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>assets/images/safepass_logo.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('/assets/images/title.jpg'); ?>">
        <title><?php echo $title;?></title>
        <link href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <?php 

            if($link){

                echo "\n";

                foreach($link as $list){

                    echo "\t\t";

                    echo '<link href="'.base_url($list).'" rel="stylesheet">';

                    echo "\n";

                }

            }
        
        ?>
        
       <link href="<?php echo base_url('/css/style.css'); ?>" rel="stylesheet">

       <link href="<?php echo base_url('/css/colors/blue.css'); ?>" id="theme" rel="stylesheet">
        
    </head>

    <body class="fix-header fix-sidebar card-no-border">
        
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        
        <div id="main-wrapper">
            
            <header class="topbar">

                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo site_url('main/login'); ?>">
                            <b>
                                
                                <img src="<?php echo base_url('/assets/images/safepass_logo.png'); ?>" alt="Logo" class="dark-logo" width="100%" />
                                
                                <img src="<?php echo base_url('/assets/images/safepass_logo.png'); ?>" alt="Name" class="light-logo"  width="100%" />
                            </b>
                    </div>
                    
                    <div class="navbar-collapse">
                        
                        <ul class="navbar-nav mr-auto mt-md-0">
                            
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            
                        </ul>
                        
                        <ul class="navbar-nav my-lg-0">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('/assets/images/user.png'); ?>" height="30" width="30" alt="user" class="profile-pic" /></a>
                                <div class="dropdown-menu animated flipInY dropdown-menu-right">
                                    <ul class="dropdown-user">
                                        <li>
                                            <div class="dw-user-box">
                                                <div class="u-img"><img src="<?php echo base_url($userData->img_path); ?>" alt="Upload Profile Photo"></div>
                                                <div class="u-text">
                                                    <h4 style="width: 100px;"><?php echo $userName;?></h4>
                                                    <p class="text-muted"></p><a href="<?php echo site_url('Profile/viewProfile');?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                            </div>
                                        </li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?php echo site_url('main/logout');?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>

                    </div>

                </nav>

            </header>
            
            <aside class="left-sidebar">
                
                <div class="scroll-sidebar">
                    
                    <div class="user-profile" style="background: url(<?php echo base_url('/assets/images/background/user-info.jpg'); ?>) no-repeat;">
                        
                        <div class="profile-img"> <img src="<?php echo base_url($userData->img_path); ?>" alt="Profile picture not uploaded" height="50" width="50" /> </div>
                        
                        <div class="profile-text"> <a href="#" ><?php echo $userName;?></a>
                        </div>
                    </div>    
                     
                    <nav class="sidebar-nav">

                        <ul id="sidebarnav">
                            
                            <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo site_url('main/login');?>" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a> 
                            </li>
                            <li class="nav-small-cap"></li>

                            <?php 
                                 if($_SESSION['user_type']=='O') {
                            ?>            

                                <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo site_url('application/apln');?>" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Application</span></a>

                                </li>

                                <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo site_url('application/add');?>" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">New Application</span></a>

                                </li>

                            <?php
                                }
                            ?>  

                            
                            <?php 
                                 if($_SESSION['user_type']!='O') {
                            ?>         

                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Application</span></a>
                                <ul aria-expanded="false" class="collapse">
                            
                                <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo site_url('adminApp/application');?>" aria-expanded="false"><i class="fa fa-eye"></i><span class="hide-menu">View Applications</span></a>
                                </li>

                                <?php 
                                 if($_SESSION['user_type']=='S') {
                                ?>    

                                    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo site_url('application/add');?>" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">New Application</span></a>

                                    </li>

                                <?php
                                    }
                                ?>  

                                </ul>
                            </li>
                            <?php
                                }
                            ?>

                             <?php 
                                 if($_SESSION['user_type']=='S' || $_SESSION['user_type']=='A') {
                            ?>     

                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">User</span></a>
                                <ul aria-expanded="false" class="collapse">

                                <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo site_url('super/users');?>" aria-expanded="false"><i class="fa fa-address-book"></i><span class="hide-menu">View Users</span></a>
                                </li>
                                
                                <?php if($_SESSION['user_type']=='S'){ ?>
                                    <li> <a class="has-arrow waves-effect waves-dark" href="<?php echo site_url('super/addUser');?>" aria-expanded="false"><i class="fa fa-lock"></i><span class="hide-menu">Add New Admin</span></a>
                                    </li>
                                <?php } ?>
                                
                                </ul>
                            </li>
                            
                            <?php
                                }
                            ?>
                  
                            <?php 
                                if($_SESSION['user_type'] != 'O'){
                            ?>
                            <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-search"></i><span class="hide-menu">Search</span></a>
                                <ul aria-expanded="false" class="collapse">

                                    <li><a href="<?php echo site_url('search/byDate'); ?>">Search by date</a></li>
                                    <li><a href="<?php echo site_url('search/byAppNo'); ?>">Search by application</a></li>
                                    <li><a href="<?php echo site_url('search/byfname'); ?>">Search by First Name</a></li>
                                    <li><a href="<?php echo site_url('search/bylname'); ?>">Search by Last Name</a></li>
                                    <li><a href="<?php echo site_url('search/bynric'); ?>">Search by NRIC Number</a></li>
                                    <li><a href="<?php echo site_url('search/bypassort'); ?>">Search by Passport</a></li>

                                </ul>
                            </li>
                            <?php } ?>
                                
                        </ul>

                    </nav>
                    
                </div>
                 
                <div class="sidebar-footer">

                    <a href="<?php echo site_url('profile/viewProfile'); ?>" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                    <a href="" class="link" data-toggle="tooltip" title="Email"></i></a>
                    <a href="<?php echo site_url('main/logout'); ?>" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a> 
                    
                </div>

            </aside>
            
            <div class="page-wrapper">
                
                <div class="container-fluid">