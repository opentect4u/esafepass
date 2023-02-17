    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                
                <li class="breadcrumb-item"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>
                
                <li class="breadcrumb-item active">Form</li>

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

                    <form class="form-horizontal" 
                        id="form"
                        method="post" 
                        action="<?php echo site_url('application/add');?>"
                        enctype="multipart/form-data"
                    >

                        <div class="form-body">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <h5 align="right">New Application</h5>
                    
                                    </div>

                                </div>

                            </div>

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

                                            <label class="control-label">Organisation Type<font color= "red"> *</font></label>

                                            <select class="form-control" 
                                                    id="org_type"
                                                    name="org_type"
                                                    required
                                                >

                                                <option value="">Select</option>

                                                <option value="V">Vestigo</option>

                                                <option value="P">Petronas</option>

                                                <option value="C">Contractor</option>

                                                <option value="O">Others</option>                                            

                                            </select>

                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Organisation Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="org_name" name="org_name" required
                                            />
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Organisation Address<font color= "red"> *</font></label>

                                            <textarea class="form-control" id="org_adr" name="org_adr" required
                                            ></textarea>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No (Fixed Line)<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="org_cnct" name="org_cnct" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <!-- <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Email</label>

                                            <input type='email' class="form-control" id="org_email" name="org_email"
                                            >
                        
                                        </div>

                                    </div> -->

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Website</label>

                                            <input type='text' class="form-control" id="org_web" name="org_web"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Application For<font color= "red"> *</font></label>

                                        <select class="form-control" 
                                                    id="apl_for"
                                                    name="apl_for"
                                                    required
                                                >

                                                <option value="">Select</option>

                                                <option value="S">Self</option>

                                                <option value="O">On Behalf</option>

                                            </select>
                        
                                        </div>

                                    </div>

                                </div>

                                <h6 class="box-title"><font color= "green"> *If application is on behalf, please fill in the following:</font></h6><br>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your First Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="yf_name" name="yf_name" required
                                            >
                                            
                                        </div>

                                    </div>
                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Middle Name</label>

                                            <input type='text' class="form-control" id="ym_name" name="ym_name"
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Last Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="yl_name" name="yl_name" required
                                            >
                                            
                                        </div>

                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your Position / Title</label>

                                            <input type='text' class="form-control" id="ypt" name="ypt"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your Email<font color= "red"> *</font></label>

                                            <input type='email' class="form-control" id="yemail" name="yemail" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your Contact No (Mobile)<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="ycnct" name="ycnct" required
                                            >
                                            
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

                                            <label class="control-label">Sponsor Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="spn_name" name="spn_name" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Sponsor Department<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="spn_dpt" name="spn_dpt" required
                                            >
                        
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

                                            <label class="control-label">First Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="apl_name" name="apl_name" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Middle Name</label>

                                            <input type='text' class="form-control" id="apl_mid_name" name="apl_mid_name"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Last Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="apl_lst_name" name="apl_lst_name" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Photo<font color= "red"> *</font></label>

                                            <input type='file' class="form-control" id="apl_name_path" name="apl_name_path" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Position / Title</label>

                                            <input type='text' class="form-control" id="pos_tit" name="pos_tit"
                                            >
                                            
                                        </div>

                                    </div>
                                </div> 

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">NRIC No (<font color= "green">Compulsory for Malaysians</font>)</label>

                                            <input type='text' class="form-control" id="nric_no" name="nric_no"
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload NRIC (<font color= "green">Compulsory for Malaysians</font>)</label>

                                            <input type='file' class="form-control" id="nric_path" name="nric_path"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>   


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Passport No.(<font color= "green">Compulsory for Non-Malaysians</font>)</label>

                                            <input type='text' class="form-control" id="apl_pp_no" name="apl_pp_no"
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Passport (<font color= "green">Compulsory for Non-Malaysians</font>)</label>

                                            <input type='file' class="form-control" id="pp_no" name="pp_no"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Birth<font color= "red"> *</font></label>

                                            <input type='date' class="form-control" id="apl_dob" name="apl_dob" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Gender</label>

                                            <select class="form-control" 
                                                    id="apl_gen"
                                                    name="apl_gen"
                                                    
                                                >

                                                <option value="">Select</option>

                                                <option value="M">Male</option>

                                                <option value="F">Female</option>

                                                <option value="P">Prefer Not To Say</option>

                                            </select>
                        
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Address<font color= "red"> *</font></label>

                                            <textarea class="form-control" id="apl_adr" name="apl_adr" required
                                            ></textarea>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Nationality<font color= "red"> *</font></label>

                                            <select class="form-control" 
                                                    id="apl_ntl"
                                                    name="apl_ntl"
                                                    required
                                                >

                                                <option value="">Select</option>

                                                <?php
                                                    foreach($country as $row){
                                                ?>

                                                <option value="<?php echo $row->country_name;?>"><?php echo $row->country_name; ?></option>

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
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Email<font color= "red"> *</font></label>

                                            <input type='email' class="form-control" id="apl_email" name="apl_email" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No (Fixed Line)<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="cnt_fxd" name="cnt_fxd" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No (Mobile)<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="cnt_mob" name="cnt_mob" required
                                            >
                                            
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

                                            <label class="control-label">First Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="kin_name" name="kin_name" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Middle Name</label>

                                            <input type='text' class="form-control" id="kin_mid_name" name="kin_mid_name"
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Last Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="kin_lst_name" name="kin_lst_name" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">NRIC No (<font color= "green">Compulsory for Malaysians</font>)</label>

                                            <input type='text' class="form-control" id="kin_nric" name="kin_nric"
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload NRIC (<font color= "green">Compulsory for Malaysians</font>)</label>

                                            <input type='file' class="form-control" id="kin_nric_path" name="kin_nric_path"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Passport No (<font color= "green">Compulsory for Non-Malaysians</font>)</label>

                                            <input type='text' class="form-control" id="kin_pp" name="kin_pp"
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Passport (<font color= "green">Compulsory for Non-Malaysians</font>)</label>

                                            <input type='file' class="form-control" id="kin_pp_path" name="kin_pp"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Birth<font color= "red"> *</font></label>

                                            <input type='date' class="form-control" id="kin_dob" name="kin_dob" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Gender</label>

                                            <select class="form-control" 
                                                    id="kin_gen"
                                                    name="kin_gen"
                                                    
                                                >

                                                <option value="">Select</option>

                                                <option value="M">Male</option>

                                                <option value="F">Female</option>

                                                <option value="P">Prefer Not To Say</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Address<font color= "red"> *</font></label>

                                            <textarea class="form-control" id="kin_adr" name="kin_adr" required
                                            ></textarea>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Nationality<font color= "red"> *</font></label>

                                            <select class="form-control" 
                                                    id="kin_ntn"
                                                    name="kin_ntn"
                                                    required
                                                >

                                                <option value="">Select</option>

                                                <?php
                                                    foreach($country as $row){
                                                ?>

                                                <option value="<?php echo $row->country_name;?>"><?php echo $row->country_name; ?></option>

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

                                            <label class="control-label">Relationship with Applicant<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="reln" name="reln" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Email</label>

                                            <input type='email' class="form-control" id="kin_email" name="kin_email"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No.(Fixed Line)<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="kin_cnct" name="kin_cnct" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No.(Mobile)<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="kin_mob" name="kin_mob" required
                                            >
                                            
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

                                            <label class="control-label">Medical Test Centre / Clinic Name<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="med_crt" name="med_crt" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Medical Certificate No.<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="med_crt_no" name="med_crt_no" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">AME Name<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="ame_name" name="ame_name" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">AME No.<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="ame_no" name="ame_no" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Examination<font color= "red"> *</font></label>

                                            <input type="date"class="form-control" id="exam_dt" name="exam_dt" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Blood Group<font color= "red"> *</font></label>

                                            <select class="form-control" 
                                                    id="bld_grp"
                                                    name="bld_grp"
                                                    required
                                                >

                                                <option value="">Select</option>

                                                <option value="A+">A+</option>

                                                <option value="A-">A-</option>

                                                <option value="B+">B+</option>

                                                <option value="B-">B-</option>

                                                <option value="O+">O+</option>

                                                <option value="O-">O-</option>

                                                <option value="AB+">AB+</option>

                                                <option value="AB-">AB-</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Alergies<font color= "red"> *</font></label>

                                            <select class="form-control" 
                                                    id="alergies"
                                                    name="alergies"
                                                    required
                                                >

                                                <option value="">Select</option>

                                                <option value="Y">Yes</option>

                                                <option value="N">No</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">If Yes please state</label>

                                            <input type='text' class="form-control" id="alg_dtl" name="alg_dtl"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Expiry Date of Medical Certificate<font color= "red"> *</font></label>

                                            <input type="date"class="form-control" id="mexp_dt" name="mexp_dt" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Medical Examination Certificate<font color= "red"> *</font></label>

                                            <input type='file' class="form-control" id="kin_med_cert" name="kin_med_cert" required
                                            >
                                            
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

                                            <label class="control-label">Training Institution Name<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="inst_name" name="inst_name" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Address<font color= "red"> *</font></label>

                                            <textarea class="form-control" id="inst_adr" name="inst_adr" required
                                            ></textarea>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Course Title<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="course_tit" name="course_tit" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Certificate No<font color= "red"> *</font></label>

                                            <input type="text" class="form-control" id="inst_cert_no" name="inst_cert_no" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Attended From<font color= "red"> *</font></label>

                                            <input type="date"class="form-control" id="atnd_from" name="atnd_from" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Attended To<font color= "red"> *</font></label>

                                            <input type="date"class="form-control" id="atnd_to" name="atnd_to" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Validity<font color= "red"> *</font></label>

                                            <input type="date"class="form-control" id="hexp_dt" name="hexp_dt" required
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate<font color= "red"> *</font></label>

                                            <input type='file' class="form-control" id="kin_huet_cert" name="kin_huet_cert" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                


                            <!--    <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">H2S Expiry Date</label>

                                            <input type="date"class="form-control" id="h2sExp_dt" name="h2sExp_dt"
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload H2S Expiry Certificate</label>

                                            <input type='file' class="form-control" id="kin_h2s_cert" name="kin_h2s_cert"
                                            >
                                            
                                        </div>

                                    </div>

                                </div>--->

                            </div>
                                    
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label class="control-label">Remarks</label>

                                        <textarea class="form-control" name="remarks" ></textarea>

                                    </div>

                                </div>
                                
                            </div>


                            <div class="form-actions">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="row">

                                            <div class="col-md-offset-3 col-md-9">

                                                <button type="submit" id="submit" class="btn btn-success">Save And Continue</button>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6"> </div>

                                </div>

                            </div>

                        </form>

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


<!-- Auto show after filling last entry of a section -->
<!-- <script>

    $(document).ready(function(){



    })

</script> -->

<!-- For validation -->
<script>

    $(document).ready(function(){

        // For alergies -- 
        $('#alergies').on('change', function(){

            let alergies = $(this).val();
            if(alergies == 'Y')
            {
                $('#alg_dtl').prop('required', true);
            }
            else if(alergies == 'N')
            {
                $('#alg_dtl').prop('required', false);
            }

        })

        // For KIN NRIC -- 
        $('#kin_ntn').on('change', function(){

            let kin_ntn = $(this).val();
            if(kin_ntn == 'Malaysia')
            {
                $('#kin_nric').prop('required', true);
                $('#kin_nric_path').prop('required', true);

                if($('#kin_nric').val() == '')
                {
                    alert('Kin NIRC details required.');
                    $('#kin_nric').focus();
                    return false;
                }
            }
            else
            {
                $('#kin_pp').prop('required', true);
                $('#kin_pp_path').prop('required', true);

                if($('#kin_pp').val() == '')
                {
                    alert('Kin Passport details required.');
                    $('#kin_pp').focus();
                    return false;
                }
            }

        })

        // For Applicant NIRC -- 
        $('#apl_ntl').on('change', function(){

            let apl_ntl = $(this).val();
            if(apl_ntl == 'Malaysia')
            {
                $('#nric_no').prop('required', true);
                $('#nric_path').prop('required', true);

                if($('#nric_no').val() == '')
                {
                    alert('NIRC details required.');
                    $('#nric_no').focus();
                    return false;
                }
            }
            else
            {
                $('#apl_pp_no').prop('required', true);
                $('#pp_no').prop('required', true);

                if($('#apl_pp_no').val() == '')
                {
                    alert('Passport details required.');
                    $('#apl_pp_no').focus();
                    return false;
                }
            }

        })


    })

</script>