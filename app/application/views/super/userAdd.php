    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Add Admin User</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                <li class="breadcrumb-item active">Add Admin User</li>

            </ol>

        </div>

    </div>

    <div class="row">

        <div class="col-lg-12">

            <div class="card card-outline-info">

                <div class="card-header">

                    <h4 class="m-b-0 text-white">Add Admin User</h4>
                    
                </div>

                <div class="card-body">

                    <form class="form-horizontal" 
                        id="form"
                        method="post" 
                        action="<?php echo site_url('super/addUser');?>"
                    >

                        <div class="form-body">

                            <h3 class="box-title">User Details</h3>
                            
                            <hr class="m-t-0 m-b-40">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">First Name</label>

                                        <input type='text' class="form-control" id="fname" name="fname" required
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Last Name</label>

                                        <input type='text' class="form-control" id="lname" name="lname" required
                                        >
                                        
                                    </div>

                                </div>

                         
                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">User ID</label>

                                        <input type='text'class="form-control" id="uid" name="uid" required
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Contact No.</label>

                                        <input type='text' class="form-control" id="mno" name="mno"
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">User Type</label>

                                        <input type='text' class="form-control" id="utype" name="utype" value="Admin" readonly
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="form-actions">

                                <div class="col-md-6">

                                    <div class="row">

                                        <div class="col-md-offset-3 col-md-9">

                                            <button type="submit" id="submit" class="btn btn-success">Submit</button>

                                        </div>

                                    </div>

                                </div>

                        </div>

                    </form>
                  
                </div>

            </div>

        </div>

    </div>

    <script>

        //Duplicate email entry
        $(document).ready(function(){
            $("#uid").on('change',function(){
                var email = $("#uid").val();

                $.get("<?php echo site_url('main/chkEmail')?>",{email:email},function(data){

                    if(data > 0){
                        $("#uid").val('');
                        $("#uid").css("border","1px solid red");
                        alert("User id already in use.");
                        return false;
                    }else{
                        $("#uid").css("border","1px solid #ccc");
                        return true;    
                    }
                });
            });
        });

    </script>

