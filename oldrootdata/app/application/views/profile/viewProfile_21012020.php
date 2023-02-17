    <div class="row page-titles">
        <div class="col-md-8 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Profile</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
        <div class="col-md-4 col-12 align-self-center">
            <div class="alert alert-<?php echo $this->session->flashdata('msg')['status']; ?>"></div>
        </div>
    </div>
    
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                    
                    <!--<form id="file" action="" method="post" enctype="multipart/form-data">
                        
                        <input type="file" id="imgID" name="imgfile" id="input-file-now-custom-1 user_img" class="dropify" data-default-file="<?php echo base_url($userDtls->img_path); ?>" width="120" /> 

                    </form>-->

                    <img src="<?php echo base_url($userDtls->img_path); ?>" alt="Logo" class="dark-logo" height="150px" width="150px"/>

                        <!--<h4 class="card-title m-t-10"><?php echo $name='Name'; ?></h4>-->
                        <!--<h6 class="card-subtitle"><?php echo $department='Department'; ?></h6>-->
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6><?php echo $userDtls->user_id; ?></h6> <small class="text-muted p-t-30 db">Phone</small>
                    <h6><?php echo $userDtls->mob_no; ?></h6> 
                </div>
            </div>
        </div>
        
        
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a> </li>
                </ul>
               
                <div class="tab-content">
                    
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $userDtls->user_name.' '.$userDtls->user_last_name; ?></p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $userDtls->mob_no; ?></p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                    <br>
                                    <p class="text-muted"><?php echo $userDtls->user_id; ?></p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                        <div class="card-body">
                            <form class="form-horizontal form-material" 
                                  method="post"
                                  action="<?php echo site_url('profile/editProfile')?>"
                                  enctype="multipart/form-data"
                                >
                                <div class="form-group">
                                    <label class="col-md-12">First Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="f_name" class="form-control form-control-line" value="<?php echo $userDtls->user_name;?>" required>

                                        <input type="hidden" name="uid" class="form-control form-control-line" value="<?php echo $userDtls->user_id;?>" id="userid">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Last Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="l_name" class="form-control form-control-line" value="<?php echo $userDtls->user_last_name;?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Contact No.</label>
                                    <div class="col-md-12">
                                        <input type="text" name="mob_no" class="form-control form-control-line" value="<?php echo $userDtls->mob_no;?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Old Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="old_pass" class="form-control form-control-line" id="upwd" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">New Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="new_pass" class="form-control form-control-line" id="pwd" required> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control form-control-line" id="cpwd" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="file" id="imgid" name="imgfile"
                                         width="120">
                                    </div>
                                </div>    

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" id="btnSubmit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <script>

       /* $(document).ready(function() {
            // Basic
            //$('.dropify').dropify();
            
            $('input[type="file"]'). change(function(){

                if(window.confirm('Do you really want to change this image?')){

                    $('#file').submit(); 

                }

            });
            
            $('form[id="file"]').submit(function(e){

                e.preventDefault();

                $.ajax({

                    url: "<?php echo site_url('profile/upload'); ?>",

                    type:"post",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false

                });

            });
        
        });*/

        $(document).ready(function(){

            $("#btnSubmit").click(function(){

                //document.getElementById("btnSubmit").type = 'submit';

                $("#btnSubmit").type = 'submit';

                return true;

            });

        });

    </script>

    <script>
   
        $(document).ready(function() {

        $('.alert').hide();

            <?php if($this->session->flashdata('msg')['message']){ ?>

                $('.alert').html('<?php echo $this->session->flashdata('msg')['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>').show();

            <?php } ?>

         });
        
    </script>
    

    <script>
    //pwd must be 8 charecter long
    $(document).ready(function(){
            $("#pwd").on('change',function(){
                var pwd = $("#pwd").val();
                if(pwd.length<8){
                    $("#pwd").val('');
                    $("#pwd").css("border","1px solid red");
                    alert("Password must be minimum 8 character long.");
                }else{
                    $("#pwd").css("border","1px solid #ccc");
                    return true;
                } 
            });
        });

    //Pwd and Cpwd must match
    $(document).ready(function(){
        $("#cpwd").on('change',function(){
            var cpwd = $("#cpwd").val();
            var pwd  = $("#pwd").val();

            if(cpwd != pwd){
                $("#cpwd").val('');
                $("#cpwd").css("border","1px solid red");
                alert("Password and Confirm Password must match");
                return false;
            }else{
                $("#cpwd").css("border","1px solid #ccc");
                return true;
            }
        });
    });

    //Invalid password
    $(document).ready(function(){
        $("#upwd").on('change',function(){
            var pwd         = $("#upwd").val();
            var userid      = $("#userid").val();
            $.get("<?php echo site_url('main/chk_pwd'); ?>",{user:userid,password:pwd},function(data){
                if(data==0){
                    $("#upwd").val('');
                    $("#upwd").css("border","1px solid red");
                    alert("Invalid password!");
                    return false;
                }else{
                    $("#upwd").css("border","1px solid #ccc");
                    return true;    
                }

            });
        });
    });
    </script>