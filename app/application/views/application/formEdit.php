    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login'); ?>">Home</a></li>

                <li class="breadcrumb-item active"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>
                
                <li class="breadcrumb-item active">Form Edit</li>

            </ol>

        </div>

        <div class="col-md-6 col-12 align-self-center">
            <div class="alert alert-danger"></div>
        </div>

    </div>



    <!-- JS // For selecting date range Start-->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- For date Range End-->

    <div class="row">

        <div class="col-lg-12">

            <div class="card card-outline-info">

                <div class="card-header">

                    <h4 class="m-b-0 text-white">Application Form</h4>

                </div>

                <div class="card-body"> 

                    <?php

                        foreach($data1 as $row) {

                    ?>

                    <form class="form-horizontal" 
                        id="form"
                        method="post" 
                        action="<?php echo site_url('application/update');?>"
                        enctype="multipart/form-data" >
                    
                        <div class="form-body">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Application No.</label>

                                        <input type='text' class="form-control" id="appl_no" name="appl_no"
                                         value="<?php echo $row->appl_no; ?>" readonly />

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Application Status</label>

                                        <input type='text' class="form-control" id="apl_sts" name="apl_sts"
                                            value="<?php  

                                                    if($row->status=='U'){

                                                        echo "New Application"; 

                                                       }elseif($row->status=='A'){

                                                        echo "Approved";

                                                       }elseif($row->status=='R'){

                                                        echo "Rejected";

                                                       }
                                                       elseif($row->status=='H'){

                                                        echo "In Process";

                                                       }else{

                                                        echo "Resubmitted";

                                                       }
                                                ?>" readonly/>
                                        
                                        <input type="hidden" name= "appl_status" value= "<?php echo $row->status; ?>" >

                                    </div>

                                </div>

                            </div>

                            <?php if($row->admin_remarks != ''){ ?>

                                <div class="row">

                                    <div class="col-lg-12">

                                        <div class="form-group">

                                            <label class="control-label">Admin Message: </label>
                                            <textarea name="adminRemarks" class="form-control" id="adminRemarks" cols="30" rows="2" readonly><?php echo isset($row->admin_remarks)?$row->admin_remarks:'' ; ?></textarea>
                                            
                                        </div>
    
                                    </div>

                                </div>

                            <?php } ?>

                            <h3 class="box-title">DETAILS OF THE ORGANISATION</h3>
                            <span>
                                <font id="addMessage1" color= "blue">Click to add </font>
                                <font id="removeMessage1" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection1"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection1"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span>
                            <hr class="m-t-0 m-b-40">

                            <div id= "section1">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Organisation Type</label>

                                            <select class="form-control" 
                                                    id="org_type"
                                                    name="org_type"
                                                    required
                                                >

                                                <option value="V" <?php if($row->org_type == "V") echo "selected"?>>Vestigo</option> 

                                                <option value="P" <?php if($row->org_type == "P") echo "selected"?>>Petronas</option>

                                                <option value="C" <?php if($row->org_type == "C") echo "selected"?>>Contractor</option>

                                                <option value="O" <?php if($row->org_type == "O") echo "selected"?>>Other</option>                                           

                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Organisation Name</label>

                                            <input type='text' class="form-control" id="org_name" name="org_name"
                                            value = "<?php echo $row->org_name; ?>"/>
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Organisation Address</label>

                                            <textarea class="form-control" id="org_adr" name="org_adr"
                                            ><?php echo $row->org_address; ?></textarea>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No (Fixed Line)</label>

                                            <input type='text' class="form-control" id="org_cnct" name="org_cnct"
                                            value="<?php echo $row->org_ph_no; ?>" >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <!--<div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Email</label>

                                            <input type='email' class="form-control" id="org_email" name="org_email"
                                            >
                        
                                        </div>

                                    </div>-->

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Website</label>

                                            <input type='text' class="form-control" id="org_web" name="org_web"
                                            value="<?php echo $row->org_web_add; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Application For</label>

                                        <select class="form-control" 
                                                    id="apl_for"
                                                    name="apl_for"
                                                    required
                                                >


                                                <option value="S" <?php if($row->appl_for=='S') echo "selected"?>>Self</option>

                                                <option value="O" <?php if($row->appl_for=='O') echo "selected"?>>On Behalf</option>

                                            </select>
                        
                                        </div>

                                    </div>

                                </div>

                                <h6 class="box-title"><font color= "green">*If application is on behalf, please fill in the following:</font></h6><br>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your First Name</label>

                                            <input type='text' class="form-control" id="yf_name" name="yf_name"
                                            value="<?php echo $row->your_f_name; ?>">
                                            
                                        </div>

                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Middle Name</label>

                                            <input type='text' class="form-control" id="ym_name" name="ym_name"
                                            value="<?php echo $row->your_m_name; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Last Name</label>

                                            <input type='text' class="form-control" id="yl_name" name="yl_name"
                                            value="<?php echo $row->your_l_name; ?>">
                                            
                                        </div>

                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your Position / Title</label>

                                            <input type='text' class="form-control" id="ypt" name="ypt"
                                            value="<?php echo $row->your_position; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your Email</label>

                                            <input type='email' class="form-control" id="yemail" name="yemail"
                                            value="<?php echo $row->your_email; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your Contact No (Mobile)</label>

                                            <input type='text' class="form-control" id="ycnct" name="ycnct"
                                            value="<?php echo $row->your_cnct; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>

                           
                            <h3 class="box-title">DETAILS OF THE SPONSOR</h3>
                            <span>
                                <font id="addMessage2" color= "blue">Click to add </font>
                                <font id="removeMessage2" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection2"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection2"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span>
                            <hr class="m-t-0 m-b-40">

                            <div id= "section2">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Sponsor Name</label>

                                            <input type='text' class="form-control" id="spn_name" name="spn_name"
                                            value="<?php echo $row->sponsor_name; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Sponsor Department</label>

                                            <input type='text' class="form-control" id="spn_dpt" name="spn_dpt"
                                            value="<?php echo $row->sponsor_dept; ?>">
                        
                                        </div>

                                    </div>

                                </div>

                            </div>
                             
                            <h3 class="box-title">DETAILS OF THE APPLICANT</h3>
                            <span>
                                <font id= "addMessage3" color= "blue">Click to add </font>
                                <font id="removeMessage3" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection3"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection3"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span>
                            <hr class="m-t-0 m-b-40">
                            <div id= "section3">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">First Name</label>

                                            <input type='text' class="form-control" id="apl_name" name="apl_name"
                                            value="<?php echo $row->appl_name; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Middle Name</label>

                                            <input type='text' class="form-control" id="apl_mid_name" name="apl_mid_name"
                                            value="<?php echo $row->appl_mid_name; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Last Name</label>

                                            <input type='text' class="form-control" id="apl_lst_name" name="apl_lst_name"
                                            value="<?php echo $row->appl_last_name; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-lg-4">
                                    
                                        <label class="control-label">Upload Photo</label>
                                        <div class="card">

                                            <div class="card-body">

                                                <center class="m-t-10">

                                                    <img src="<?php echo base_url($row->appl_photo_path); ?>" alt="" width="150">
                                                    
                                                </center>

                                            </div>

                                            <input type='hidden' value= "<?php echo ($row->appl_photo_path); ?>"  class="form-control" id="apl_name_path_prev" name="apl_name_path_prev">

                                            <input type='file' width="120" class="form-control" id="apl_name_path" name="apl_name_path">
                                            
                                        </div>

                                    </div>

                                    <!--<div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Photo</label>

                                            <input type='file' class="form-control" id="apl_name_path" name="apl_name_path"
                                            >
                                            
                                        </div>

                                    </div>-->

                                </div>
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Position / Title</label>

                                            <input type='text' class="form-control" id="pos_tit" name="pos_tit"
                                            value="<?php echo $row->position_title; ?>">
                                            
                                        </div>

                                    </div>
                                </div> 

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">NRIC No (Compulsory for Malaysians)</label>

                                            <input type='text' class="form-control" id="nric_no" name="nric_no"
                                            value="<?php echo $row->nric_no; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload NRIC</label>

                                            <input type='file' class="form-control" id="nric_path" name="nric_path">

                                            <input type='hidden' value="<?php echo ($row->nric_path); ?>" id="nric_path_prev" name="nric_path_prev">
                                            <?php if($row->nric_path != ''){ ?>
                                                <a href="<?php echo base_url($row->nric_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                        </div>

                                    </div>

                                </div>   


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Passport No.(Compulsory for Non-Malaysians)</label>

                                            <input type='text' class="form-control" id="apl_pp_no" name="apl_pp_no"
                                            value="<?php echo $row->applcnt_pasprt_no; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Passport</label>

                                            <input type='file' class="form-control" id="pp_no" name="pp_no">
                                            
                                            <input type='hidden' value="<?php echo ($row->appl_pp_path); ?>" id="appl_pp_path_prev" name="appl_pp_path_prev">
                                            <?php if($row->appl_pp_path != ''){ ?>
                                                <a href="<?php echo base_url($row->appl_pp_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Birth</label>

                                            <input type='date' class="form-control" id="apl_dob" name="apl_dob"
                                            value="<?php echo $row->applcnt_dob; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Gender</label>

                                            <select class="form-control" 
                                                    id="apl_gen"
                                                    name="apl_gen"
                                                    required
                                                >

                                                <option value="M"<?php if($row->gender=='M') echo "selected"?>>Male</option>

                                                <option value="F"<?php if($row->gender=='F') echo "selected"?>>Female</option>

                                                <option value="P"<?php if($row->gender=='P') echo "selected"?>>Prefer Not To Say</option>

                                            </select>
                        
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Address</label>

                                            <textarea class="form-control" id="apl_adr" name="apl_adr"
                                            ><?php echo $row->applcnt_add ?></textarea>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Nationality</label>

                                            <select class="form-control" 
                                                    id="apl_ntl"
                                                    name="apl_ntl"
                                                    
                                                >

                                                <option value="">Select</option>

                                                <?php
                                                    foreach($country as $row1){
                                                ?>

                                                <option <?php if($row1->country_name== $row->appl_nation)echo "selected" ?> value="<?php echo $row1->country_name;?>">
                                                    <?php echo $row1->country_name; ?>
                                                        
                                                </option>

                                                <?php 
                                                    }
                                                ?>

                                            </select>

                                            <!--<input type='text' class="form-control" id="apl_ntl" name="apl_ntl"
                                            >-->
                                            
                                        </div>

                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Job Position / Title</label>

                                            <input type='text' class="form-control" id="job_pos" name="job_pos"
                                            value="<?php echo $row->job_pos_tit; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Email</label>

                                            <input type='email' class="form-control" id="apl_email" name="apl_email"
                                            value="<?php echo $row->applcnt_email; ?>">
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No (Fixed Line)</label>

                                            <input type='text' class="form-control" id="cnt_fxd" name="cnt_fxd"
                                            value="<?php echo $row->apl_cnt_fxd; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No (Mobile)</label>

                                            <input type='text' class="form-control" id="cnt_mob" name="cnt_mob"
                                            value="<?php echo $row->apl_cnt_mob; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">DETAILS OF THE NEXT OF KIN</h3>
                            <span>
                                <font id= "addMessage4" color= "blue">Click to add </font>
                                <font id="removeMessage4" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection4"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection4"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span>
                            <hr class="m-t-0 m-b-40">
                            <div id= "section4">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">First Name</label>

                                            <input type='text' class="form-control" id="kin_name" name="kin_name"
                                            value="<?php echo $row->kin_name; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Middle Name</label>

                                            <input type='text' class="form-control" id="kin_mid_name" name="kin_mid_name"
                                            value="<?php echo $row->kin_mid_name; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Last Name</label>

                                            <input type='text' class="form-control" id="kin_lst_name" name="kin_lst_name"
                                            value="<?php echo $row->kin_last_name; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">NRIC No (Compulsory for Malaysians)</label>

                                            <input type='text' class="form-control" id="kin_nric" name="kin_nric"
                                            value="<?php echo $row->kin_nric_no; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload NRIC</label>

                                            <input type='file' class="form-control" id="kin_nric_path" name="kin_nric_path">
                                            
                                            <input type='hidden' value="<?php echo ($row->kin_nric_path); ?>" id="kin_nric_path_prev" name="kin_nric_path_prev">
                                            <?php if($row->kin_nric_path != ''){ ?>
                                                <a href="<?php echo base_url($row->kin_nric_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Passport No (Compulsory for Non-Malaysians)</label>

                                            <input type='text' class="form-control" id="kin_pp" name="kin_pp"
                                            value="<?php echo $row->kin_psprt_no; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Passport</label>

                                            <input type='file' class="form-control" id="kin_pp" name="kin_pp">
                                            
                                            <input type='hidden' value="<?php echo ($row->kin_pp_path); ?>" id="kin_pp_path_prev" name="kin_pp_path_prev">
                                            <?php if($row->kin_pp_path != ''){ ?>
                                                <a href="<?php echo base_url($row->kin_pp_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Birth</label>

                                            <input type='date' class="form-control" id="kin_dob" name="kin_dob"
                                            value="<?php echo $row->kin_dob; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Gender</label>

                                            <select class="form-control" 
                                                    id="kin_gen"
                                                    name="kin_gen"
                                                    required
                                                >

                                                <option value="M"<?php if($row->gender=='M') echo "selected"?>>Male</option>

                                                <option value="F"<?php if($row->gender=='F') echo "selected"?>>Female</option>

                                                <option value="P"<?php if($row->gender=='P') echo "selected"?>>Prefer Not To Say</option>
                                            
                                            </select>
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Address</label>

                                            <textarea class="form-control" id="kin_adr" name="kin_adr"
                                            ><?php echo $row->kin_add;?></textarea>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Nationality</label>

                                            <select class="form-control" 
                                                    id="kin_ntn"
                                                    name="kin_ntn"
                                                    
                                                >

                                                <option value="">Select</option>

                                                <?php
                                                    foreach($country as $row2){
                                                ?>

                                                <option <?php if($row2->country_name== $row->appl_nation)echo "selected" ?> value="<?php echo $row2->country_name;?>">
                                                    <?php echo $row2->country_name; ?>
                                                        
                                                </option>

                                                <?php 
                                                    }
                                                ?>

                                            </select>
                                            
                                        </div>

                                    </div>

                                </div>



                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Relationship with Applicant</label>

                                            <input type='text' class="form-control" id="reln" name="reln"
                                            value="<?php echo $row->applcnt_kin_reltion; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Email</label>

                                            <input type='email' class="form-control" id="kin_email" name="kin_email"
                                            value="<?php echo $row->kin_email; ?>">
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No.(Fixed Line)</label>

                                            <input type='text' class="form-control" id="kin_cnct" name="kin_cnct"
                                            value="<?php echo $row->kin_ph; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No.(Mobile)</label>

                                            <input type='text' class="form-control" id="kin_mob" name="kin_mob"
                                            value="<?php echo $row->kin_mob; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">MEDICAL DETAILS</h3>
                            <span>
                                <font id= "addMessage5" color= "blue">Click to add </font>
                                <font id="removeMessage5" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection5"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection5"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span>
                            <hr class="m-t-0 m-b-40">
                            <div id= "section5">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Medical Test Centre / Clinic Name</label>

                                            <input type="text"class="form-control" id="med_crt" name="med_crt"
                                            value="<?php echo $row->med_center; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Medical Certificate No.</label>

                                            <input type='text' class="form-control" id="med_crt_no" name="med_crt_no"
                                            value="<?php echo $row->med_cert_no; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">AME Name</label>

                                            <input type="text"class="form-control" id="ame_name" name="ame_name"
                                            value="<?php echo $row->ame_name; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">AME No.</label>

                                            <input type='text' class="form-control" id="ame_no" name="ame_no"
                                            value="<?php echo $row->ame_no; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Examination</label>

                                            <input type="date"class="form-control" id="exam_dt" name="exam_dt"
                                            value="<?php echo $row->exam_dt; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Blood Group</label>

                                            <select class="form-control" 
                                                    id="bld_grp"
                                                    name="bld_grp"
                                                    required
                                                >

                                                <option value="">Select</option>

                                                <option value="A+" <?php if($row->blood_grp=='A+') echo "selected"?>>A+</option>

                                                <option value="A-" <?php if($row->blood_grp=='A-') echo "selected"?>>A-</option>

                                                <option value="B+" <?php if($row->blood_grp=='B+') echo "selected"?>>B+</option>

                                                <option value="B-" <?php if($row->blood_grp=='B-') echo "selected"?>>B-</option>

                                                <option value="O+" <?php if($row->blood_grp=='O+') echo "selected"?>>O+</option>

                                                <option value="O-" <?php if($row->blood_grp=='O-') echo "selected"?>>O-</option>

                                                <option value="AB+" <?php if($row->blood_grp=='AB+') echo "selected"?>>AB+</option>

                                                <option value="AB-" <?php if($row->blood_grp=='AB-') echo "selected"?>>AB-</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Alergies</label>

                                            <select class="form-control" 
                                                    id="alergies"
                                                    name="alergies"
                                                    required
                                                >

                                                <option value="Y" <?php if($row->alergies=='Y') echo "selected"?>>Yes</option>

                                                <option value="N" <?php if($row->alergies=='N') echo "selected"?>>No</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">If Yes please state</label>

                                            <input type='text' class="form-control" id="alg_dtl" name="alg_dtl"
                                            value="<?php echo $row->alergy_dtls; ?>">
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Expiry Date of Medical Certificate</label>

                                            <input type="date"class="form-control" id="mexp_dt" name="mexp_dt"
                                            value="<?php echo $row->med_exp_dt; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Medical Examination Certificate</label>

                                            <input type='file' class="form-control" id="kin_med_cert" name="kin_med_cert">
                                            
                                            <input type='hidden' value="<?php echo ($row->med_cert_path); ?>" id="med_cert_path_prev" name="med_cert_path_prev">
                                            <?php if($row->med_cert_path != ''){ ?>
                                                <a href="<?php echo base_url($row->med_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">DETAILS OF BOSIET</h3>
                            <span>
                                <font id= "addMessage6" color= "blue">Click to add </font>
                                <font id="removeMessage6" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection6"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection6"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span>
                            <hr class="m-t-0 m-b-40">
                            <div id= "section6">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Name</label>

                                            <input type="text"class="form-control" id="inst_name" name="inst_name"
                                            value="<?php echo $row->inst_name; ?>"> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Address</label>

                                            <textarea class="form-control" id="inst_adr" name="inst_adr"
                                            ><?php echo $row->inst_adr;?></textarea>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Course Title</label>

                                            <input type="text"class="form-control" id="course_tit" name="course_tit"
                                            value="<?php echo $row->course_title; ?>"> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Certificate No</label>

                                            <input type="text" class="form-control" id="inst_cert_no" name="inst_cert_no"
                                            value="<?php echo $row->tr_cert_no; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Attended From</label>

                                            <input type="date"class="form-control" id="atnd_from" name="atnd_from"
                                            value="<?php echo $row->attend_dt_from; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Attended To</label>

                                            <input type="date"class="form-control" id="atnd_to" name="atnd_to"
                                            value="<?php echo $row->attend_dt_to; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Validity</label>

                                            <input type="date"class="form-control" id="hexp_dt" name="hexp_dt"
                                            value="<?php echo $row->huit_exp_dt; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate</label>

                                            <input type='file' class="form-control" id="kin_huet_cert" name="kin_huet_cert">
                                            
                                            <input type='hidden' value="<?php echo ($row->huit_cert_path); ?>" id="huit_cert_path_prev" name="huit_cert_path_prev">
                                            <?php if($row->huit_cert_path != ''){ ?>
                                                <a href="<?php echo base_url($row->huit_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label class="control-label">Remarks</label>

                                        <textarea class="form-control" name="remarks" required><?php echo $row->remarks; ?></textarea>

                                    </div>

                                </div>
                                
                            </div>

                            <div>

                                <?php
                                }
                                if($data2){
                                    foreach($data2 as $key2){
                                ?>

                                    
                                <h3 class="box-title">Training Details 1 :</h3>
                                <span>
                                    <font color= "blue">Click to add  </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection7"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection7"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>

                                <hr class="m-t-0 m-b-40">
                                <div id= "section7">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name1" value= "<?php echo $key2->inst_name1; ?>" id= "inst_name1" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr1" name="adr1" col= "30" row= "2"
                                                ><?php echo $key2->adr1; ?></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->course1; ?>" id="course1" name="course1"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->cert_no1; ?>" id="cert_no1" name="cert_no1"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->from_dt1; ?>" id="from_dt1" name="from_dt1"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->to_dt1; ?>" id="to_dt1" name="to_dt1"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->validity1; ?>" id="validity1" name="validity1"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate1" name="certificate1"
                                                >
                                                
                                            </div>

                                        </div>
                                        <?php if($key2->certificate1_path != ''){ ?>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Uploaded Certificate</label>

                                                <div><a href="<?php echo base_url($key2->certificate1_path); ?>" target= "blank">View Certificate</a></div>
                                                <input type="hidden" name= "certificate1_path" value= "<?php echo $key2->certificate1_path; ?>" id= "certificate1_path" >
                                                
                                            </div>

                                        </div>

                                        <?php } ?>

                                    </div>
                                </div>

                                <br>
                                <h3 class="box-title">Training Details 2 :</h3>
                                <span>
                                    <font color= "blue">Click to add </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection8"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection8"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>
                                
                                <hr class="m-t-0 m-b-40">

                                <div id= "section8">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name2" value= "<?php echo $key2->inst_name2; ?>" id= "inst_name2" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr2" name="adr2" col= "30" row= "2"
                                                ><?php echo $key2->adr2; ?></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->course2; ?>" id="course2" name="course2"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->cert_no2; ?>" id="cert_no2" name="cert_no2"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->from_dt2; ?>" id="from_dt2" name="from_dt2"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->to_dt2; ?>" id="to_dt2" name="to_dt2"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->validity2; ?>" id="validity2" name="validity2"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate2" name="certificate2"
                                                >
                                                
                                            </div>

                                        </div>
                                        <?php if($key2->certificate2_path != ''){ ?>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Uploaded Certificate</label>

                                                <div><a href="<?php echo base_url($key2->certificate2_path); ?>" target= "blank">View Certificate</a></div>
                                                <input type="hidden" name= "certificate2_path" value= "<?php echo $key2->certificate2_path; ?>" id= "certificate1_path" >
                                                
                                            </div>

                                        </div>

                                        <?php } ?>

                                    </div>

                                </div>

                                <br>
                                <h3 class="box-title">Training Details 3 :</h3>
                                <span>
                                    <font color= "blue">Click to add </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection9"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection9"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>

                                <hr class="m-t-0 m-b-40">

                                <div id= "section9">
                                
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name3" value= "<?php echo $key2->inst_name3; ?>" id= "inst_name3" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr3" value= "<?php echo $key2->adr3; ?>" name="adr3" col= "30" row= "2"
                                                ></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->course3; ?>" id="course3" name="course3"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->cert_no3; ?>" id="cert_no3" name="cert_no3"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->from_dt3; ?>" id="from_dt3" name="from_dt3"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->to_dt3; ?>" id="to_dt3" name="to_dt3"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->validity3; ?>" id="validity3" name="validity3"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate3" name="certificate3"
                                                >
                                                
                                            </div>

                                        </div>
                                        <?php if($key2->certificate3_path != ''){ ?>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Uploaded Certificate</label>

                                                <div><a href="<?php echo base_url($key2->certificate3_path); ?>" target= "blank">View Certificate</a></div>
                                                <input type="hidden" name= "certificate3_path" value= "<?php echo $key2->certificate3_path; ?>" id= "certificate1_path" >
                                                
                                            </div>

                                        </div>

                                        <?php } ?>

                                    </div>

                                </div>


                                <br>
                                <h3 class="box-title">Training Details 4 :</h3>
                                <span>
                                    <font color= "blue">Click to add </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection10"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection10"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>

                                <hr class="m-t-0 m-b-40">

                                <div id= "section10">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name4" value= "<?php echo $key2->inst_name4; ?>" id= "inst_name4" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr4" name="adr4" col= "30" row= "2"
                                                ><?php echo $key2->adr4; ?></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->course4; ?>" id="course4" name="course4"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->cert_no4; ?>" id="cert_no4" name="cert_no4"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->from_dt4; ?>" id="from_dt4" name="from_dt4"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->to_dt4; ?>" id="to_dt4" name="to_dt4"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->validity4; ?>" id="validity4" name="validity4"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate4" name="certificate4"
                                                >
                                                
                                            </div>

                                        </div>

                                        <?php if($key2->certificate4_path != ''){ ?>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Uploaded Certificate</label>

                                                <div><a href="<?php echo base_url($key2->certificate4_path); ?>" target= "blank">View Certificate</a></div>
                                                <input type="hidden" name= "certificate4_path" value= "<?php echo $key2->certificate4_path; ?>" id= "certificate1_path" >
                                                
                                            </div>

                                        </div>

                                        <?php } ?>

                                    </div>

                                </div>


                                <br>
                                <h3 class="box-title">Training Details 5 :</h3>
                                <span>
                                    <font color= "blue">Click to add </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection11"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection11"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>

                                <hr class="m-t-0 m-b-40">

                                <div id= "section11">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name5" value= "<?php echo $key2->inst_name5; ?>" id= "inst_name5" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr5" name="adr5" col= "30" row= "2"
                                                ><?php echo $key2->adr5; ?></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->course5; ?>" id="course5" name="course5"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" value= "<?php echo $key2->cert_no5; ?>" id="cert_no5" name="cert_no5"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->from_dt5; ?>" id="from_dt5" name="from_dt5"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->to_dt5; ?>" id="to_dt5" name="to_dt5"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" value= "<?php echo $key2->validity5; ?>" id="validity5" name="validity5"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate5" name="certificate5"
                                                >
                                                
                                            </div>

                                        </div>

                                        <?php if($key2->certificate5_path != ''){ ?>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Uploaded Certificate</label>

                                                <div><a href="<?php echo base_url($key2->certificate5_path); ?>" target= "blank">View Certificate</a></div>
                                                <input type="hidden" name= "certificate5_path" value= "<?php echo $key2->certificate5_path; ?>" id= "certificate1_path" >
                                                
                                            </div>

                                        </div>

                                        <?php } ?>

                                    </div>

                                </div>

                                    <?php
                                    }
                                }else{ ?>

                                <h3 class="box-title">Training Details 1 :</h3>
                                <span>
                                    <font color= "blue">Click to add  </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection7"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection7"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>

                                <hr class="m-t-0 m-b-40">
                                <div id= "section7">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name1" value= "" id= "inst_name1" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr1" name="adr1" col= "30" row= "2"
                                                ></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" value= "" id="course1" name="course1"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" id="cert_no1" name="cert_no1"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" id="from_dt1" name="from_dt1"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" id="to_dt1" name="to_dt1"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" id="validity1" name="validity1"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate1" name="certificate1"
                                                >

                                                <input type='hidden' class="form-control" id="certificate1_path" name="certificate1_path" value= ""
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <br>
                                <h3 class="box-title">Training Details 2 :</h3>
                                <span>
                                    <font color= "blue">Click to add </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection8"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection8"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>
                                
                                <hr class="m-t-0 m-b-40">

                                <div id= "section8">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name2" id= "inst_name2" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr2" name="adr2" col= "30" row= "2"
                                                ></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" id="course2" name="course2"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" id="cert_no2" name="cert_no2"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" id="from_dt2" name="from_dt2"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" id="to_dt2" name="to_dt2"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" id="validity2" name="validity2"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate2" name="certificate2"
                                                >

                                                <input type='hidden' class="form-control" id="certificate2_path" name="certificate2_path"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <br>
                                <h3 class="box-title">Training Details 3 :</h3>
                                <span>
                                    <font color= "blue">Click to add </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection9"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection9"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>

                                <hr class="m-t-0 m-b-40">

                                <div id= "section9">
                                
                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name3" id= "inst_name3" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr3" name="adr3" col= "30" row= "2"
                                                ></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" id="course3" name="course3"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" id="cert_no3" name="cert_no3"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" id="from_dt3" name="from_dt3"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" id="to_dt3" name="to_dt3"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" id="validity3" name="validity3"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate3" name="certificate3"
                                                >

                                                <input type='hidden' class="form-control" id="certificate3_path" name="certificate3_path"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <br>
                                <h3 class="box-title">Training Details 4 :</h3>
                                <span>
                                    <font color= "blue">Click to add </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection10"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection10"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>

                                <hr class="m-t-0 m-b-40">

                                <div id= "section10">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name4" id= "inst_name4" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr4" name="adr4" col= "30" row= "2"
                                                ></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>


                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" id="course4" name="course4"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" id="cert_no4" name="cert_no4"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" id="from_dt4" name="from_dt4"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" id="to_dt4" name="to_dt4"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" id="validity4" name="validity4"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate4" name="certificate4"
                                                >

                                                <input type='hidden' class="form-control" id="certificate4_path" name="certificate4_path"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <br>
                                <h3 class="box-title">Training Details 5 :</h3>
                                <span>
                                    <font color= "blue">Click to add </font>
                                    <button class="btn btn-success" type= "button" title="Add" id="addSection11"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    <button class="btn btn-danger" type= "button" title="remove" id="removeSection11"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </span>

                                <hr class="m-t-0 m-b-40">

                                <div id= "section11">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Institution's Name</label>

                                                <input type="text" name= "inst_name5" id= "inst_name5" class= "form-control" >

                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Address</label>

                                                <textarea class="form-control" id="adr5" name="adr5" col= "30" row= "2"
                                                ></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">
                                    
                                            <div class="form-group">

                                                <label class="control-label">Course Title</label>

                                                <input type='text' class="form-control" id="course5" name="course5"
                                                />
                                                    
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Certificate No.</label>

                                                <input type='text' class="form-control" id="cert_no5" name="cert_no5"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date(From)</label>

                                                <input type='date' class="form-control" id="from_dt5" name="from_dt5"
                                                >
                            
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">

                                                <label class="control-label">Training Date (To)</label>

                                                <input type='date' class="form-control" id="to_dt5" name="to_dt5"
                                                >
                                                
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Training Valid Upto</label>

                                                <input type='date' class="form-control" id="validity5" name="validity5"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Upload Certificate</label>

                                                <input type='file' class="form-control" id="certificate5" name="certificate5"
                                                >

                                                <input type='hidden' class="form-control" id="certificate5_path" name="certificate5_path"
                                                >
                                                
                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <?php 
                                } ?>

                            </div>


                            <?php
                                foreach($data1 as $row) {
                            ?>
                                <div class="form-actions">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="row">

                                                <div class="col-md-offset-3 col-md-9">
                                                    <?php if($row->status == 'A'){ ?>
                                                        <button type="submit" id="submit" class="btn btn-success" onclick= "<?php echo site_url('application/apln'); ?>">Back</button>
                                                    <?php }else{ ?>
                                                        <button type="submit" id="submit" class="btn btn-success"><?php if($row->status == 'R'){echo "Re Submit";}else {echo "Submit";} ?></button>
                                                    <?php } ?>

                                                </div>

                                                <!-- <div class="col-md-offset-3 col-md-9">

                                                    <button type="submit" id="submit" class="btn btn-success">Submit</button>

                                                </div> -->

                                            </div>

                                        </div>

                                        <div class="col-md-6"> </div>

                                    </div>

                                </div>
                                                
                            <?PHP } ?>

                        </div>   
                     
                    </form>

                   
                </div>

            </div>


        </div>

    </div>

        <!-- </div> -->

     
 

<!-- For alert table -->
<script>

    $(document).ready(function(){

        $('.alert').hide();

        $('#adminRemarks').css('border-color', '#007bff');
    });

</script>



<!-- For showing and hiding sections -->
<script>

    $(document).ready(function(){

        $('#section1').show();
        $('#addSection1').hide();
        $('#addMessage1').hide();
        $('#removeMessage1').show();
        $('#section2').hide();
        $('#addMessage2').show();
        $('#removeMessage2').hide();
        $('#section3').hide();
        $('#addMessage3').show();
        $('#removeMessage3').hide();
        $('#section4').hide();
        $('#addMessage4').show();
        $('#removeMessage4').hide();
        $('#section5').hide();
        $('#addMessage5').show();
        $('#removeMessage5').hide();
        $('#section6').hide();
        $('#addMessage6').show();
        $('#removeMessage6').hide();

        $('#removeSection1').show();
        $('#removeSection2').hide();
        $('#removeSection3').hide();
        $('#removeSection4').hide();
        $('#removeSection5').hide();
        $('#removeSection6').hide();
        
        //////////////////////////

        $('#addSection1').on("click", function(){
            $('#section1').show();
            $('#addSection1').hide();
            $('#removeSection1').show();
            $('#addMessage1').hide();
            $('#removeMessage1').show();
        })

        $('#addSection2').on("click", function(){
            $('#section2').show();
            $('#addSection2').hide();
            $('#removeSection2').show();
            $('#addMessage2').hide();
            $('#removeMessage2').show();
        })

        $('#addSection3').on("click", function(){
            $('#section3').show();
            $('#addSection3').hide();
            $('#removeSection3').show();
            $('#addMessage3').hide();
            $('#removeMessage3').show();
        })

        $('#addSection4').on("click", function(){
            $('#section4').show();
            $('#addSection4').hide();
            $('#removeSection4').show();
            $('#addMessage4').hide();
            $('#removeMessage4').show();
        })

        $('#addSection5').on("click", function(){
            $('#section5').show();
            $('#addSection5').hide();
            $('#removeSection5').show();
            $('#addMessage5').hide();
            $('#removeMessage5').show();
        })

        $('#addSection6').on("click", function(){
            $('#section6').show();
            $('#addSection6').hide();
            $('#removeSection6').show();
            $('#addMessage6').hide();
            $('#removeMessage6').show();
        })

        //////////////////////

        $('#removeSection1').on("click", function(){
            $('#section1').hide();
            $('#addSection1').show();
            $('#removeSection1').hide();
            $('#addMessage1').show();
            $('#removeMessage1').hide();
        })

        $('#removeSection2').on("click", function(){
            $('#section2').hide();
            $('#addSection2').show();
            $('#removeSection2').hide();
            $('#addMessage2').show();
            $('#removeMessage2').hide();
        })

        $('#removeSection3').on("click", function(){
            $('#section3').hide();
            $('#addSection3').show();
            $('#removeSection3').hide();
            $('#addMessage3').show();
            $('#removeMessage3').hide();
        })

        $('#removeSection4').on("click", function(){
            $('#section4').hide();
            $('#addSection4').show();
            $('#removeSection4').hide();
            $('#addMessage4').show();
            $('#removeMessage4').hide();
        })

        $('#removeSection5').on("click", function(){
            $('#section5').hide();
            $('#addSection5').show();
            $('#removeSection5').hide();
            $('#addMessage5').show();
            $('#removeMessage5').hide();
        })

        $('#removeSection6').on("click", function(){
            $('#section6').hide();
            $('#addSection6').show();
            $('#removeSection6').hide();
            $('#addMessage6').show();
            $('#removeMessage6').hide();
        })

    })

</script>


<!-- To hide and show extra training sections -->
<script>

    $(document).ready(function(){

        $('#section7').hide();
        $('#section8').hide();
        $('#section9').hide();
        $('#section10').hide();
        $('#section11').hide();

        $('#removeSection7').hide();
        $('#removeSection8').hide();
        $('#removeSection9').hide();
        $('#removeSection10').hide();
        $('#removeSection11').hide();
        
        //////////////////////////

        $('#addSection7').on("click", function(){
            $('#section7').show();
            $('#addSection7').hide();
            $('#removeSection7').show();
        })

        $('#addSection8').on("click", function(){
            $('#section8').show();
            $('#addSection8').hide();
            $('#removeSection8').show();
        })

        $('#addSection9').on("click", function(){
            $('#section9').show();
            $('#addSection9').hide();
            $('#removeSection9').show();
        })

        $('#addSection10').on("click", function(){
            $('#section10').show();
            $('#addSection10').hide();
            $('#removeSection10').show();
        })

        $('#addSection11').on("click", function(){
            $('#section11').show();
            $('#addSection11').hide();
            $('#removeSection11').show();
        })

        //////////////////////

        $('#removeSection7').on("click", function(){
            $('#section7').hide();
            $('#addSection7').show();
            $('#removeSection7').hide();
        })

        $('#removeSection8').on("click", function(){
            $('#section8').hide();
            $('#addSection8').show();
            $('#removeSection8').hide();
        })

        $('#removeSection9').on("click", function(){
            $('#section9').hide();
            $('#addSection9').show();
            $('#removeSection9').hide();
        })

        $('#removeSection10').on("click", function(){
            $('#section10').hide();
            $('#addSection10').show();
            $('#removeSection10').hide();
        })

        $('#removeSection11').on("click", function(){
            $('#section11').hide();
            $('#addSection11').show();
            $('#removeSection11').hide();
        })


    })

</script>
