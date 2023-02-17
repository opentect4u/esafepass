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


        <!-- <img src="<?php //echo base_url("assets/images/safepass.jpg"); ?>" width="200" height="200"  alt="" class="img-fluid logo-img mt-1 img-circle"> -->

        <div class="card-body">

            <?php

                foreach($data1 as $row) {

            ?>

            <form class="form-horizontal" 
                id="form"
                method="post" 
                action="<?php echo site_url('adminApp/statusUpdation');?>"
                enctype="multipart/form-data"
            >

                <div class="form-body">

                    <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">

                                <label class="control-label">Application No.</label>

                                <input type='text' class="form-control" id="appl_no" name="appl_no"
                                 value="<?php echo $row->appl_no; ?>" readonly />

                            </div>

                        </div>

                        <div class="col-md-4">

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
                                
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">

                                <label class="control-label">Application Date.</label>

                                <input type='text' class="form-control" id="appl_dt" name="appl_dt"
                                 value="<?php $appl_dt = substr($row->created_dt,0,10); 
                                     $phpdate = strtotime($appl_dt) ;
                                    echo date('d/m/Y',$phpdate);   
                                          ?>" readonly
                                     />

                            </div>

                        </div>

                    </div>

                    <h3 class="box-title">DETAILS OF THE ORGANISATION</h3>
                    
                    <hr class="m-t-0 m-b-40">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Organisation Type</label>

                                <select class="form-control" 
                                        id="org_type"
                                        name="org_type"
                                        readonly
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
                                value = "<?php echo $row->org_name; ?>" readonly/>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Organisation Address</label>

                                <textarea class="form-control" id="org_adr" name="org_adr" readonly
                                ><?php echo $row->org_address; ?></textarea>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Contact No (Fixed Line)</label>

                                <input type='text' class="form-control" id="org_cnct" name="org_cnct"
                                value="<?php echo $row->org_ph_no; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Website</label>

                                <input type='text' class="form-control" id="org_web" name="org_web"
                                value="<?php echo $row->org_web_add; ?>" readonly>
                                
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
                                        readonly
                                    >


                                    <option value="S" <?php if($row->appl_for=='S') echo "selected"?>>Self</option>

                                    <option value="O" <?php if($row->appl_for=='O') echo "selected"?>>On Behalf</option>

                                </select>
            
                            </div>

                        </div>

                    </div>

                    <!-- <h6 class="box-title"><font color= "green">*If application is on behalf, please fill in the following:</font></h6><br> -->

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Your First Name</label>

                                <input type='text' class="form-control" id="yf_name" name="yf_name"
                                value="<?php echo $row->your_f_name; ?>" readonly>
                                
                            </div>

                        </div>
                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Middle Name</label>

                                <input type='text' class="form-control" id="ym_name" name="ym_name"
                                value="<?php echo $row->your_m_name; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Last Name</label>

                                <input type='text' class="form-control" id="yl_name" name="yl_name"
                                value="<?php echo $row->your_l_name; ?>" readonly>
                                
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Your Position / Title</label>

                                <input type='text' class="form-control" id="ypt" name="ypt"
                                value="<?php echo $row->your_position; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Your Email</label>

                                <input type='email' class="form-control" id="yemail" name="yemail"
                                value="<?php echo $row->your_email; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Your Contact No (Mobile)</label>

                                <input type='text' class="form-control" id="ycnct" name="ycnct"
                                value="<?php echo $row->your_cnct; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                   
                    <h3 class="box-title">DETAILS OF THE SPONSOR</h3>

                    <hr class="m-t-0 m-b-40">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Sponsor Name</label>

                                <input type='text' class="form-control" id="spn_name" name="spn_name"
                                value="<?php echo $row->sponsor_name; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Sponsor Department</label>

                                <input type='text' class="form-control" id="spn_dpt" name="spn_dpt"
                                value="<?php echo $row->sponsor_dept; ?>" readonly>
            
                            </div>

                        </div>

                    </div>

                     
                    <h3 class="box-title">DETAILS OF THE APPLICANT</h3>

                    <hr class="m-t-0 m-b-40">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">First Name</label>

                                <input type='text' class="form-control" id="apl_name" name="apl_name"
                                value="<?php echo $row->appl_name; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Middle Name</label>

                                <input type='text' class="form-control" id="apl_mid_name" name="apl_mid_name"
                                value="<?php echo $row->appl_mid_name; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Last Name</label>

                                <input type='text' class="form-control" id="apl_lst_name" name="apl_lst_name"
                                value="<?php echo $row->appl_last_name; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-lg-4">
                        
                            <label class="control-label"> Photo</label>
                            <div class="card">

                                <div class="card-body">

                                    <center class="m-t-10">

                                        <img src="<?php echo base_url($row->appl_photo_path); ?>" alt="" width="150">
                                        
                                    </center>

                                </div>

                                <input type='hidden' value= "<?php echo ($row->appl_photo_path); ?>"  class="form-control" id="apl_name_path_prev" name="apl_name_path_prev">

                                <!-- <input type='file' width="120" class="form-control" id="apl_name_path" name="apl_name_path"> -->
                                
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
                                value="<?php echo $row->position_title; ?>" readonly>
                                
                            </div>

                        </div>
                    </div> 

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">NRIC No (Compulsory for Malaysians)</label>

                                <input type='text' class="form-control" id="nric_no" name="nric_no"
                                value="<?php echo $row->nric_no; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label"> NRIC</label>

                                <!-- <input type='file' class="form-control" id="nric_path" name="nric_path"> -->

                                <input type='hidden' value="<?php echo base_url($row->nric_path); ?>" id="nric_path_prev" name="nric_path_prev">
                                <div>
                                    <?php if($row->nric_path != ''){ ?>
                                        <a href="<?php echo base_url($row->nric_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>   


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Passport No.(Compulsory for Non-Malaysians)</label>

                                <input type='text' class="form-control" id="apl_pp_no" name="apl_pp_no"
                                value="<?php echo $row->applcnt_pasprt_no; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label"> Passport</label>

                                <!-- <input type='file' class="form-control" id="pp_no" name="pp_no"> -->
                                
                                <input type='hidden' value="<?php echo base_url($row->appl_pp_path); ?>" id="appl_pp_path_prev" name="appl_pp_path_prev">
                                <div>
                                    <?php if($row->appl_pp_path != ''){ ?>
                                        <a href="<?php echo base_url($row->appl_pp_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Date of Birth</label>

                                <input type='date' class="form-control" id="apl_dob" name="apl_dob"
                                value="<?php echo $row->applcnt_dob; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Gender</label>

                                <select class="form-control" 
                                        id="apl_gen"
                                        name="apl_gen"
                                        readonly
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

                                <textarea class="form-control" id="apl_adr" name="apl_adr" readonly
                                ><?php echo $row->applcnt_add ?></textarea>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Nationality</label>

                                <select class="form-control" 
                                        id="apl_ntl"
                                        name="apl_ntl"
                                        readonly
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
                                value="<?php echo $row->job_pos_tit; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Email</label>

                                <input type='email' class="form-control" id="apl_email" name="apl_email"
                                value="<?php echo $row->applcnt_email; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Contact No (Fixed Line)</label>

                                <input type='text' class="form-control" id="cnt_fxd" name="cnt_fxd"
                                value="<?php echo $row->apl_cnt_fxd; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Contact No (Mobile)</label>

                                <input type='text' class="form-control" id="cnt_mob" name="cnt_mob"
                                value="<?php echo $row->apl_cnt_mob; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>



                    <h3 class="box-title">DETAILS OF THE NEXT OF KIN</h3>

                    <hr class="m-t-0 m-b-40">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">First Name</label>

                                <input type='text' class="form-control" id="kin_name" name="kin_name"
                                value="<?php echo $row->kin_name; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Middle Name</label>

                                <input type='text' class="form-control" id="kin_mid_name" name="kin_mid_name"
                                value="<?php echo $row->kin_mid_name; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Last Name</label>

                                <input type='text' class="form-control" id="kin_lst_name" name="kin_lst_name"
                                value="<?php echo $row->kin_last_name; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">NRIC No (Compulsory for Malaysians)</label>

                                <input type='text' class="form-control" id="kin_nric" name="kin_nric"
                                value="<?php echo $row->kin_nric_no; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label"> NRIC</label>

                                <!-- <input type='file' class="form-control" id="kin_nric_path" name="kin_nric_path"> -->
                                
                                <input type='hidden' value="<?php echo base_url($row->kin_nric_path); ?>" id="kin_nric_path_prev" name="kin_nric_path_prev">
                                <div>
                                    <?php if($row->kin_nric_path != ''){ ?>
                                        <a href="<?php echo base_url($row->kin_nric_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Passport No (Compulsory for Non-Malaysians)</label>

                                <input type='text' class="form-control" id="kin_pp" name="kin_pp"
                                value="<?php echo $row->kin_psprt_no; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label"> Passport</label>

                                <!-- <input type='file' class="form-control" id="kin_pp" name="kin_pp"> -->
                                
                                <input type='hidden' value="<?php echo base_url($row->kin_pp_path); ?>" id="kin_pp_path_prev" name="kin_pp_path_prev">
                                <div>
                                    <?php if($row->kin_pp_path != ''){ ?>
                                        <a href="<?php echo base_url($row->kin_pp_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Date of Birth</label>

                                <input type='date' class="form-control" id="kin_dob" name="kin_dob"
                                value="<?php echo $row->kin_dob; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Gender</label>

                                <select class="form-control" 
                                        id="kin_gen"
                                        name="kin_gen"
                                        readonly
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

                                <textarea class="form-control" id="kin_adr" name="kin_adr" readonly
                                ><?php echo $row->kin_add;?></textarea>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Nationality</label>

                                <select class="form-control" 
                                        id="kin_ntn"
                                        name="kin_ntn"
                                        readonly
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
                                value="<?php echo $row->applcnt_kin_reltion; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Email</label>

                                <input type='email' class="form-control" id="kin_email" name="kin_email"
                                value="<?php echo $row->kin_email; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Contact No.(Fixed Line)</label>

                                <input type='text' class="form-control" id="kin_cnct" name="kin_cnct"
                                value="<?php echo $row->kin_ph; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Contact No.(Mobile)</label>

                                <input type='text' class="form-control" id="kin_mob" name="kin_mob"
                                value="<?php echo $row->kin_mob; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <h3 class="box-title">MEDICAL DETAILS</h3>

                    <hr class="m-t-0 m-b-40">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Medical Test Centre / Clinic Name</label>

                                <input type="text"class="form-control" id="med_crt" name="med_crt"
                                value="<?php echo $row->med_center; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Medical Certificate No.</label>

                                <input type='text' class="form-control" id="med_crt_no" name="med_crt_no"
                                value="<?php echo $row->med_cert_no; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">AME Name</label>

                                <input type="text"class="form-control" id="ame_name" name="ame_name"
                                value="<?php echo $row->ame_name; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">AME No.</label>

                                <input type='text' class="form-control" id="ame_no" name="ame_no"
                                value="<?php echo $row->ame_no; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Date of Examination</label>

                                <input type="date"class="form-control" id="exam_dt" name="exam_dt"
                                value="<?php echo $row->exam_dt; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Blood Group</label>

                                <select class="form-control" 
                                        id="bld_grp"
                                        name="bld_grp"
                                        readonly
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
                                        readonly
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
                                value="<?php echo $row->alergy_dtls; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>


                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Expiry Date of Medical Certificate</label>

                                <input type="date"class="form-control" id="mexp_dt" name="mexp_dt"
                                value="<?php echo $row->med_exp_dt; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label"> Medical Examination Certificate</label>

                                <!-- <input type='file' class="form-control" id="kin_med_cert" name="kin_med_cert"> -->
                                
                                <input type='hidden' value="<?php echo base_url($row->med_cert_path); ?>" id="med_cert_path_prev" name="med_cert_path_prev">
                                <div>
                                    <?php if($row->med_cert_path != ''){ ?>
                                        <a href="<?php echo base_url($row->med_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>

                    <h3 class="box-title">DETAILS OF BOSIET/STCW/FOET</h3>

                    <hr class="m-t-0 m-b-40">

                     <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Training Institution Name</label>

                                <input type="text"class="form-control" id="inst_name" name="inst_name"
                                value="<?php echo $row->inst_name; ?>" readonly> 
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Training Institution Address</label>

                                <textarea class="form-control" id="inst_adr" name="inst_adr" readonly
                                ><?php echo $row->inst_adr;?></textarea>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Course Title</label>

                                <input type="text"class="form-control" id="course_tit" name="course_tit"
                                value="<?php echo $row->course_title; ?>" readonly> 
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Certificate No</label>

                                <input type="text" class="form-control" id="inst_cert_no" name="inst_cert_no"
                                value="<?php echo $row->tr_cert_no; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Training Attended From</label>

                                <input type="date"class="form-control" id="atnd_from" name="atnd_from"
                                value="<?php echo $row->attend_dt_from; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Training Attended To</label>

                                <input type="date"class="form-control" id="atnd_to" name="atnd_to"
                                value="<?php echo $row->attend_dt_to; ?>" readonly>
                                
                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Training Validity</label>

                                <input type="date"class="form-control" id="hexp_dt" name="hexp_dt"
                                value="<?php echo $row->huit_exp_dt; ?>" readonly>
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label"> Training Certificate</label>

                             
                                
                                <input type='hidden' value="<?php echo base_url($row->huit_cert_path); ?>" id="huit_cert_path_prev" name="huit_cert_path_prev">
                                <div>
                                    <?php if($row->huit_cert_path != ''){ ?>
                                        <a href="<?php echo base_url($row->huit_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Certificate Verification<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="trn_vrf_flg" name="trn_vrf_flg"
                                            value="<?php if($row->trn_vrf_flg=='Y'){
                                                            echo "Yes";
                                                    }else{
                                                            echo "No";
                                                    }
                                                    ?>" readonly>
                                             
                                                
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate Verification</label>

                                            
                                            <input type='hidden' value="<?php echo ($row->trn_vrf_cert_path); ?>" id="trn_vrf_cert_path_prev" name="trn_vrf_cert_path_prev">
                                            <div>
                                                <?php if($row->trn_vrf_cert_path != ''){ ?>
                                                    <a href="<?php echo base_url($row->trn_vrf_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                                <?php } ?>
                                            </div>
                                        </div>

                                    </div>

                            </div>

                   <h3 class="box-title">DETAILS OF H2S Training</h3>
                   <hr class="m-t-0 m-b-40">
                     <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Name</label>

                                            <input type="text"class="form-control" id="h2s_inst_name" name="h2s_inst_name" value="<?php echo $row->h2s_inst_name; ?>" readonly
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Address</label>

                                            <textarea class="form-control" id="h2s_inst_adr" name="h2s_inst_adr" readonly
                                            ><?php echo $row->h2s_inst_adr; ?></textarea>
                                            
                                        </div>

                                    </div>

                                </div>

                        <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Course Title</label>

                                            <input type="text"class="form-control" id="h2s_course" name="h2s_course" value="<?php echo $row->h2s_course; ?>" readonly
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Certificate No</label>

                                            <input type="text" class="form-control" id="h2s_cert_no" name="h2s_cert_no" value="<?php echo $row->h2s_cert_no; ?>" readonly
                                            >
                                            
                                        </div>

                                    </div>

                        </div>
          

                            <div class="row">
                       
                               <div class="col-md-12">
                             <div class="form-group">
                                  <input type="checkbox" id="declaration" name="declaration" value="Y" disabled  
                                 <?php if(isset($row->declaration) && $row->declaration == 'Y'){echo "checked"; }?> 

                                  >&nbsp;&nbsp;&nbsp;
                               I hereby confirm that the information provided herein is accurate, correct and complete and that the documents submitted along with this application form are genuine. I hereby undertake to provide to Vestigo Petroleum Sdn. Bhd. 
                                And / or its representatives with any additional documentation requested in order to support the applicant and its approval as deemed necessary.
                                </div> 

                               </div> 
                            </div>

                    <h3 class="box-title">DETAILS OF TRANING</h3>

                    <hr class="m-t-0 m-b-40">


                        <div class="form-body">

                            <h3 class="box-title">Training Details 1 :
                                <?php if(isset($key->certificate1_path) &&  $key->certificate1_path != ''){ ?>
                                    <span style= "font-size: 15px;"><font color="green">Document Uploaded</font></span>
                                <?php } ?>
                            </h3>
                            


                            <hr class="m-t-0 m-b-40">
                            <div id= "section1">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Institution's Name</label>

                     <input type="text" name= "inst_name1" value= "<?php if(isset($key->inst_name1)){echo $key->inst_name1;} ?>" id= "inst_name1" class= "form-control" readonly>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Address</label>

                                        <textarea class="form-control" id="adr1" name="adr1" col= "30" row= "2" readonly
                                        ><?php if(isset($key->adr1)){echo $key->adr1;} ?></textarea>
                                        
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-6">
                            
                                    <div class="form-group">

                                        <label class="control-label">Course Title</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->course1)){echo $key->course1;} ?>" id="course1" 
                                        readonly
                                        name="course1"
                                        />
                                            
                                </div>

                            </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Certificate No.</label>

                                        <input type='text' class="form-control" readonly
                                        value= "<?php if(isset($key->cert_no1)){echo $key->cert_no1;} ?>" id="cert_no1" name="cert_no1"
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date(From)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->from_dt1)){echo $key->from_dt1;} ?>" id="from_dt1" name="from_dt1" readonly
                                        >
                    
                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date (To)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->to_dt1)){echo $key->to_dt1;} ?>" id="to_dt1" name="to_dt1" readonly
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Training Valid Upto</label>

                                        <input type='date' class="form-control" value= "<?php if(isset( $key->validity1)){echo  $key->validity1;} ?>" id="validity1" name="validity1" readonly
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                           

                                <?php if(isset($key->certificate1_path) && $key->certificate1_path != ''){ ?>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label"> Certificate</label>

                                        <div><a href="<?php if(isset($key->certificate1_path)) { echo base_url($key->certificate1_path);} ?>" target= "blank">View Certificate</a></div>
                                        <input type="hidden" name= "certificate1_path" value= "<?php if(isset($key->certificate1_path)){ echo $key->certificate1_path; } ?>" id="certificate1_path" >
                                        
                                    </div>

                                </div>

                                <?php } ?>

                            </div>
                            </div>

                            <br>
                            <h3 class="box-title">Training Details 2 :
                                <?php if(isset($key->certificate2_path) && $key->certificate2_path != ''){ ?>
                                    <span style= "font-size: 15px;"><font color="green">Document Uploaded</font></span>
                                <?php } ?>
                            </h3>
                    
                            
                            <hr class="m-t-0 m-b-40">

                            <div id= "section2">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Institution's Name</label>

                                        <input type="text" name= "inst_name2" value= "<?php if(isset($key->inst_name2)){echo $key->inst_name2;} ?>" id= "inst_name2" class= "form-control" readonly >

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Address</label>

                                        <textarea class="form-control" id="adr2" name="adr2" col= "30" row= "2" readonly
                                        ><?php if(isset($key->adr2)){echo $key->adr2;} ?></textarea>
                                        
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-6">
                            
                                    <div class="form-group">

                                        <label class="control-label">Course Title</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->course2)){echo $key->course2;} ?>" id="course2" name="course2" readonly
                                        />
                                            
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Certificate No.</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->cert_no2)){echo $key->cert_no2;} ?>" id="cert_no2" name="cert_no2" readonly
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date(From)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->from_dt2)){echo $key->from_dt2;} ?>" id="from_dt2" name="from_dt2" readonly
                                        >
                    
                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date (To)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->to_dt2)){echo $key->to_dt2;} ?>" id="to_dt2" name="to_dt2" readonly
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Training Valid Upto</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->validity2)){echo $key->validity2;} ?>" id="validity2" name="validity2" readonly
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                              

                                <?php if(isset($key->certificate2_path) && $key->certificate2_path != ''){ ?>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label"> Certificate</label>

                                        <div><a href="<?php echo base_url($key->certificate2_path); ?>" target= "blank">View Certificate</a></div>
                                        <input type="hidden" name= "certificate2_path" value= "<?php if(isset($key->certificate2_path)){echo $key->certificate2_path;} ?>" id= "certificate1_path" >
                                        
                                    </div>

                                </div>

                                <?php } ?>

                            </div>
                            </div>


                            <br>
                            <h3 class="box-title">Training Details 3 :
                                <?php if(isset($key->certificate3_path) && $key->certificate3_path != ''){ ?>
                                    <span style= "font-size: 15px;"><font color="green">Document Uploaded</font></span>
                                <?php } ?>
                            </h3>
                       

                            <hr class="m-t-0 m-b-40">

                            <div id= "section3">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Institution's Name</label>

                                        <input type="text" name= "inst_name3" value= "<?php if(isset($key->inst_name3)){echo $key->inst_name3;} ?>" id= "inst_name3" class= "form-control" readonly>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Address</label>

                                        <textarea class="form-control" id="adr3" name="adr3" col= "30" row= "2" readonly><?php if(isset($key->inst_name3)){echo $key->inst_name3;} ?>
                                            
                                        </textarea>
                                        
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-6">
                            
                                    <div class="form-group">

                                        <label class="control-label">Course Title</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->course3)){echo $key->course3;} ?>" id="course3" name="course3" readonly
                                        />
                                            
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Certificate No.</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->cert_no3)){echo $key->cert_no3;} ?>" id="cert_no3" name="cert_no3" readonly
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date(From)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->from_dt3)){echo $key->from_dt3;} ?>" id="from_dt3" name="from_dt3" readonly
                                        >
                    
                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date (To)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->to_dt3)){echo $key->to_dt3;} ?>" id="to_dt3" name="to_dt3" readonly
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Training Valid Upto</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->validity3)){echo $key->validity3;} ?>" id="validity3" name="validity3" readonly
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                               

                                <?php if(isset($key->certificate3_path) && $key->certificate3_path != ''){ ?>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Uploaded Certificate</label>

                                        <div><a href="<?php echo base_url($key->certificate3_path); ?>" target= "blank">View Certificate</a></div>
                                        <input type="hidden" name= "certificate3_path" value= "<?php if(isset($key->certificate3_path)){echo $key->certificate3_path;} ?>" id= "certificate1_path" >
                                        
                                    </div>

                                </div>

                                <?php } ?>

                            </div>
                            </div>


                            <br>
                            <h3 class="box-title">Training Details 4 :
                                <?php if(isset($key->certificate4_path) && $key->certificate4_path != ''){ ?>
                                    <span style= "font-size: 15px;"><font color="green">Document Uploaded</font></span>
                                <?php } ?>
                            </h3>
                        

                            <hr class="m-t-0 m-b-40">

                            <div id= "section4">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Institution's Name</label>

                                        <input type="text" name= "inst_name4" value= "<?php if(isset($key->inst_name4)){echo $key->inst_name4;} ?>" id= "inst_name4" class= "form-control" readonly>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Address</label>

                                        <textarea class="form-control" id="adr4" name="adr4" col= "30" row= "2" readonly
                                        ><?php if(isset($key->adr4)){echo $key->adr4;} ?></textarea>
                                        
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-6">
                            
                                    <div class="form-group">

                                        <label class="control-label">Course Title</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->course4)){echo $key->course4;} ?>" 
                                        id="course4" name="course4" readonly
                                        />
                                            
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Certificate No.</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->cert_no4)){echo $key->cert_no4;} ?>" id="cert_no4" name="cert_no4" readonly
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date(From)</label>

                                        <input type='date' class="form-control" value="<?php if(isset($key->from_dt4)){echo $key->from_dt4;} ?>" id="from_dt4" name="from_dt4" readonly
                                        >
                    
                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date (To)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->to_dt4)){echo $key->to_dt4;} ?>" id="to_dt4" name="to_dt4" readonly
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Training Valid Upto</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->validity4)){echo $key->validity4;} ?>" id="validity4" name="validity4" readonly
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                               <!--  <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Upload Certificate</label>

                                        <input type='file' class="form-control upload_img" id="certificate4" name="certificate4"
                                        >
                                        <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                    </div>

                                </div> -->

                                <?php if(isset($key->certificate4_path) && $key->certificate4_path != ''){ ?>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Uploaded Certificate</label>

                                        <div><a href="<?php echo base_url($key->certificate4_path); ?>" target= "blank">View Certificate</a></div>
                                        <input type="hidden" name= "certificate4_path" value= "<?php if(isset($key->certificate4_path)){echo $key->certificate4_path;} ?>" id= "certificate1_path" >
                                        
                                    </div>

                                </div>

                                <?php } ?>

                            </div>
                            </div>


                            <br>
                            <h3 class="box-title">Training Details 5 :
                                <?php if(isset($key->certificate5_path) && $key->certificate5_path != ''){ ?>
                                    <span style= "font-size: 15px;"><font color="green">Document Uploaded</font></span>
                                <?php } ?>
                            </h3>
                          <!--   <span id= "addSection5">
                                <font id="addMessage5" color= "blue">Click to add </font>
                                <font id="removeMessage5" color= "blue">Click to Hide </font>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection5"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection5"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            </span> -->

                            <hr class="m-t-0 m-b-40">

                            <div id= "section5">
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Institution's Name</label>

                                        <input type="text" name= "inst_name5" value= "<?php if(isset($key->inst_name5)){echo $key->inst_name5;} ?>" id= "inst_name5" class= "form-control" readonly>

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Address</label>

                                        <textarea class="form-control" id="adr5" name="adr5" col= "30" row= "2" readonly
                                        ><?php if(isset($key->adr5)){echo $key->adr5;} ?></textarea>
                                        
                                    </div>

                                </div>

                            </div>


                            <div class="row">

                                <div class="col-md-6">
                            
                                    <div class="form-group">

                                        <label class="control-label">Course Title</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->course5)){echo $key->course5;} ?>" id="course5" name="course5" readonly
                                        />
                                            
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Certificate No.</label>

                                        <input type='text' class="form-control" value= "<?php if(isset($key->cert_no5)){echo $key->cert_no5;} ?>" id="cert_no5" readonly name="cert_no5"
                                        >
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date(From)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->from_dt5)){echo $key->from_dt5;} ?>" id="from_dt5" name="from_dt5" readonly
                                        >
                    
                                    </div>

                                </div>

                                <div class="col-md-3">

                                    <div class="form-group">

                                        <label class="control-label">Training Date (To)</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->to_dt5)){echo $key->to_dt5;} ?>" id="to_dt5" name="to_dt5" readonly
                                        >
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Training Valid Upto</label>

                                        <input type='date' class="form-control" value= "<?php if(isset($key->validity5)){echo $key->validity5;} ?>" id="validity5" name="validity5" readonly
                                        > 
                                        
                                    </div>

                                </div>

                            </div>

                            <div class="row">

                        
                                <?php if(isset($key->certificate5_path) && $key->certificate5_path != ''){ ?>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Uploaded Certificate</label>

                                        <div><a href="<?php echo base_url($key->certificate5_path); ?>" target= "blank">View Certificate</a></div>
                                        <input type="hidden" name= "certificate5_path" value="<?php if(isset($key->certificate5_path)){echo $key->certificate5_path;} ?>" id= "certificate1_path" >
                                        
                                    </div>

                                </div>

                                <?php } ?>

                            </div>
                            </div>

                        </div>
                        
                    <div class="row">

                        <div class="col-md-12">

                            <div class="form-group">

                                <label class="control-label">Remarks</label>

                                <textarea class="form-control" name="remarks" readonly><?php echo $row->remarks; ?></textarea>

                            </div>

                        </div>
                        
                    </div>

                    <?php if($data1['0']->status =='U'||$data1['0']->status =='H'){ ?>

                    <div class="modal-footer">
                  
                        <button class="btn btn-success" type="button" id= "approve" >Approve</button>
                        <button class="btn btn-warning" type="button" id= "hold" >In Process</button>
                        <button class="btn btn-danger" type="button" id= "reject" >Reject</button>

                    </div>
                    <?php } ?>

                    <div class="row" id= "statusForm">

                        <div class="col-lg-12">

                            <div class="card card-outline-info">

                                <div class="card-body">

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <label class="control-label">Status: </label><span id= "statusVal"></span>
                                                <input type='hidden' value= "" class="form-control" id="adminStatus" name="adminStatus" readonly/>
                                                <!-- <input type='hidden' value= "<?php //echo $row->appl_no; ?>" class="form-control" id="appl_no" name="appl_no" readonly/> -->

                                            </div>

                                            <div class="form-group">

                                                <label class="control-label">Admin Message: </label>
                                                <textarea name="adminRemarks" class="form-control" id="adminRemarks" cols="30" rows="2"><?php echo isset($row->admin_remarks)?$row->admin_remarks:'' ; ?></textarea>
                                                
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="form-actions">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="row">

                                    <div class="col-md-offset-3 col-md-9">

                                        <button type="submit" id="submit" class="btn btn-success">Submit</button>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6"> </div>

                        </div>

                    </div>

             
           </form>

           <?php
                }
            ?>

        </div>


            </div>

            </form>


        </div>

    </div>

</div>



<!-- For add row table -->
<script>

    $(document).ready(function(){

    $('.alert').hide();
    });

</script>



<script>

    $(document).ready(function(){

        $('#statusForm').hide();

        $('#approve').on('click', function(){

            $('#statusVal').html(' <font color= "#26c6da"><b>Approved</b></font>');
            $('#adminStatus').val('A');
            $('#statusForm').show();
            $('#adminRemarks').focus();

        })

        $('#hold').on('click', function(){

            $('#statusVal').html(' <font color= "#ffb22b"><b>In Process</b></font>');
            $('#adminStatus').val('H');
            $('#statusForm').show();
            $('#adminRemarks').focus();

        })

        $('#reject').on('click', function(){

            $('#statusVal').html(' <font color= "#fc4b6c"><b>Rejected</b></font>');
            $('#adminStatus').val('R');
            $('#statusForm').show();
            $('#adminRemarks').focus();

        })

    })

</script>