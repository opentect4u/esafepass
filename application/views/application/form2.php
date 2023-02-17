<div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                
                <li class="breadcrumb-item"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>
                
                <li class="breadcrumb-item active">Form-II</li>


            </ol>

        </div>

        <div class="col-md-6 col-12 align-self-center">
            <div class="alert alert-danger"></div>
        </div>

    </div>



    <!-- JS // For selecting date range Start-->
 
  
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="<?php echo base_url();?>lib/jquery.formatter.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>

    <!-- For date Range End-->


    <div class="row">

        <div class="col-lg-12">

            <div class="card card-outline-info">

                <div class="card-header">

                    <h4 class="m-b-0 text-white">Application Form (PLEASE FILL THE FORM IN CAPITAL LETTERS)</h4>

                </div>


                <!-- <img src="<?php //echo base_url("assets/images/safepass.jpg"); ?>" width="200" height="200"  alt="" class="img-fluid logo-img mt-1 img-circle"> -->

                <div class="card-body">

                    <form class="form-horizontal" 
                        id="form"
                        method="post" 
                        action="<?php echo site_url('application/addApplicant');?>"
                        enctype="multipart/form-data">

                        <input type='hidden' class="form-control" id="appl_no" name="appl_no" value= "<?php echo $appl_no; ?>" readonly>
                        <input type='hidden' class="form-control" id="sl_no" name="sl_no" value= "<?php echo $sl_no; ?>" readonly>

                        <div class="form-body">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <h5 align="right">New Application(PART-II)</h5>
                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">DETAILS OF THE APPLICANT</h3>
                            <!-- <span>
                                <font id= "addMessage3" color= "blue">Click to add </font>
                                <font id="removeMessage3" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection3"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection3"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span>
                            <hr class="m-t-0 m-b-40"> -->
                            <div id= "section3">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">First Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="apl_name" name="apl_name" required style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                         
                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Middle Name</label>

                                            <input type='text' class="form-control" id="apl_mid_name" name="apl_mid_name" style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Last Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="apl_lst_name" name="apl_lst_name" required style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Photo<font color= "red"> *</font></label>

                                            <input type='file' class="form-control upload_img" id="apl_name_path" name="apl_name_path" required
                                            >
                                            <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg & maximum size 3MB</font></label>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Position / Title<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="pos_tit" name="pos_tit"  required

                                            style='text-transform:uppercase'
                                            >
                                            
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

                                            <label class="control-label">NRIC No (<font color= "green">Compulsory for Malaysians</font>)</label>

                                            <input type='text' class="form-control" id="nric_no" name="nric_no" maxlength="14" placeholder="xxxxxx-xx-xxxx" 
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload NRIC (<font color= "green">Compulsory for Malaysians</font>)</label>

                                            <input type='file' class="form-control upload_img" id="nric_path" name="nric_path"
                                            >
                                            <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                            
                                        </div>

                                    </div>

                                </div>   


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Passport No.(<font color= "green">Compulsory for Non-Malaysians</font>)</label>

                                            <input type='text' class="form-control" id="apl_pp_no" name="apl_pp_no" style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Passport (<font color= "green">Compulsory for Non-Malaysians</font>)</label>

                                            <input type='file' class="form-control upload_img" id="pp_no" name="pp_no"
                                            >
                                            <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                        </div>

                                    </div>

                                </div>


                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Birth<font color= "red"> *</font></label>

                                            <input type='date' class="form-control" id="apl_dob" name="apl_dob" required
                                            min="<?php echo(date('Y')-60).'-'.date('m-d'); ?>" max="<?php echo(date('Y')-18).'-'.date('m-d'); ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Gender</label>

                                            <select class="form-control" 
                                                    id="apl_gen"
                                                    name="apl_gen">

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

                                            <textarea class="form-control" id="apl_adr" name="apl_adr" required style='text-transform:uppercase'
                                            ></textarea>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Job Position / Title <font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="job_pos" name="job_pos" required
                                            style='text-transform:uppercase'
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

                                            <input type='number' class="form-control" id="cnt_fxd" name="cnt_fxd" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No (Mobile)<font color= "red"> *</font></label>

                                            <input type='number' class="form-control" id="cnt_mob" name="cnt_mob" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">DETAILS OF THE NEXT OF KIN</h3>
                            <!-- <span>
                                <font id= "addMessage4" color= "blue">Click to add </font>
                                <font id="removeMessage4" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection4"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection4"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span> -->
                            <hr class="m-t-0 m-b-40">
                            <div id= "section4">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">First Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="kin_name" name="kin_name" required 
                                            style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>


                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Middle Name</label>

                                            <input type='text' class="form-control" id="kin_mid_name" name="kin_mid_name"
                                            style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">


                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Last Name<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="kin_lst_name" name="kin_lst_name" required
                                            style='text-transform:uppercase'
                                            >
                                            
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

                                            <label class="control-label">NRIC No (<font color= "green">Compulsory for Malaysians</font>)</label>

                                            <input type='text' class="form-control" id="kin_nric" name="kin_nric" maxlength="14" placeholder="xxxxxx-xx-xxxx" 
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload NRIC (<font color= "green">Compulsory for Malaysians</font>)</label>

                                            <input type='file' class="form-control upload_img" id="kin_nric_path" name="kin_nric_path"
                                            >
                                            <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Passport No (<font color= "green">Compulsory for Non-Malaysians</font>)</label>

                                            <input type='text' class="form-control" id="kin_pp" name="kin_pp"  style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Passport (<font color= "green">Compulsory for Non-Malaysians</font>)</label>

                                            <input type='file' class="form-control upload_img" id="kin_pp_path" name="kin_pp">

                                            <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>

                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Birth<font color= "red"> *</font></label>

                                            <input type='date' class="form-control" id="kin_dob" name="kin_dob" required
                                            min="<?php echo(date('Y')-60).'-'.date('m-d'); ?>" max="<?php echo(date('Y')-18).'-'.date('m-d'); ?>">
                                            
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

                                            <textarea class="form-control" id="kin_adr" name="kin_adr" required style='text-transform:uppercase'
                                            ></textarea>
                                            
                                        </div>

                                    </div>

                                  
                                  

                                </div>



                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Relationship with Applicant<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="reln" name="reln" required style='text-transform:uppercase'
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

                                            <input type='number' class="form-control" id="kin_cnct" name="kin_cnct" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Contact No.(Mobile)<font color= "red"> *</font></label>

                                            <input type='number' class="form-control" id="kin_mob" name="kin_mob" required
                                            >
                                            
                                        </div>

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


 

<!-- For alert -->
<script>

    $(document).ready(function(){

        $('.alert').hide();
    });

</script>



<!-- For validation -->
<script>

    $(document).ready(function()
    {

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
                $('#kin_nric').prop('readonly', false);
                $('#kin_nric_path').prop('required', true);
                $('#kin_pp').prop('required', false);
                $('#kin_pp_path').prop('required', false);
                $('#kin_pp').prop('readonly', true);
                $('#kin_pp_path').prop('disabled', true);
                $('#kin_nric_path').prop('disabled', false);

              
            }
            else
            {
                $('#kin_nric').prop('required', false);
                $('#kin_nric').prop('readonly', true);
                $('#kin_nric_path').prop('required', false);
                $('#kin_nric_path').prop('disabled', true);
                $('#kin_pp').prop('required', true);
                $('#kin_pp_path').prop('required', true);
                $('#kin_pp_path').prop('disabled', false);
                $('#kin_pp').prop('readonly', false);

              
            }

        })

        // For Applicant NIRC -- 
        $('#apl_ntl').on('change', function(){

            let apl_ntl = $(this).val();
            if(apl_ntl == 'Malaysia')
            {
                $('#nric_no').prop('required', true);
                $('#nric_path').prop('required', true);
                $('#apl_pp_no').prop('readonly', true);
                $('#pp_no').prop('disabled', true);
                $('#nric_no').prop('readonly', false);
                $('#nric_path').prop('disabled', false);

            }
            else if(apl_ntl != 'Malaysia')
            {  
                
                $('#nric_no').prop('readonly',true);
                $('#nric_path').prop('disabled',true);
                $('#apl_pp_no').prop('required', true);
                $('#pp_no').prop('required', true);
                $('#apl_pp_no').prop('readonly', false);
                $('#pp_no').prop('disabled', false);

              
            }

        })

          
        $('.upload_img').bind('change', function() {
            var a=(this.files[0].size);
            if(a > 3000000) {
                alert('Image size must be within 2MB');
                return false;
            };
        });
          // Code For Checking Country

      
     
       
    })

    $('#nric_no').formatter({
      'pattern': '{{999999}}-{{99}}-{{9999}}'
      });

    $('#kin_nric').formatter({
      'pattern': '{{999999}}-{{99}}-{{9999}}'
      });



    


</script>