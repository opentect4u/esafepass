    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Edit User</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>

                <li class="breadcrumb-item active">Edit User</li>

            </ol>

        </div>

    </div>

    <div class="row">

        <div class="col-lg-12">

            <div class="card card-outline-info">

                <div class="card-header">

                    <h4 class="m-b-0 text-white">Edit User</h4>
                    
                </div>

                <div class="card-body">

                    <?php 
                          foreach($userDtls as $row){
                    ?>

                    <form class="form-horizontal" 
                        id="form"
                        method="post" 
                        action="<?php echo site_url('super/editUser');?>"
                    >

                        <div class="form-body">

                            <h3 class="box-title">User Details</h3>
                            
                            <hr class="m-t-0 m-b-40">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">First Name</label>

                                        <input type='text' value= "<?php echo $row->user_name; ?>" class="form-control" id="fname" name="fname" readonly
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Last Name</label>

                                        <input type='text' value= "<?php echo $row->user_last_name; ?>" class="form-control" id="lname" name="lname" readonly
                                        >
                                        
                                    </div>

                                </div>

                         
                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Email</label>

                                        <input type='text' value= "<?php echo $row->user_id; ?>" class="form-control" id="uid" name="uid" readonly
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Contact No.</label>

                                        <input type='text' value= "<?php echo $row->mob_no; ?>" class="form-control" id="mno" name="mno" readonly onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">User Status</label>

                                        <input type='text' value= "<?php if($row->user_status=='A'){

                                                                            echo "Admin";

                                                                         }elseif($row->user_status=='O'){

                                                                            echo "General";    
                                                                         }

                                                                    ?>" class="form-control" id="status" name="status" readonly
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Status</label>


                                        <select class="form-control" 
                                                id="status"
                                                name="status"
                                                required
                                            >

                                            <option value="A" <?php if($row->verify_stat == "A") echo "selected"?>>Active</option>

                                            <option value="U" <?php if($row->verify_stat == "U") echo "selected"?>>Inactive</option>

                                        </select>

                                        
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
                    <?php
                        }
                     ?>
                </div>

            </div>

        </div>

    </div>

