<div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                
                <li class="breadcrumb-item"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>
                
                <li class="breadcrumb-item active">Form-II</li>

            </ol>

            <?php 
                $form1_path = site_url("application/edit?appl_no=$appl_no");
                $form2_path = site_url("application/edit2?appl_no=$appl_no");
                $form3_path = site_url("application/edit3?appl_no=$appl_no");
                $training_path = site_url("/training/add?appl_no=$appl_no");
             
            ?>

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

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="<?php echo $form1_path;?>">Form-I</a></li>
                        
                        <li class="breadcrumb-item"><a href="<?php echo $form2_path; ?>">Form-II</a></li>
                        
                        <li class="breadcrumb-item"><a href="<?php echo $form3_path; ?>">Form-III</a></li>

                        <li class="breadcrumb-item"><a href="<?php echo $training_path; ?>">Training</a></li>

                    </ol>

                </div>

                <div class="card-body">

                    <?php
                        foreach($data1 as $row) {
                    ?>

                    <form class="form-horizontal" 
                        id="form"
                        method="post" 
                        action="<?php echo site_url('application/edit2');?>"
                        enctype="multipart/form-data"
                    >

                        <input type='hidden' class="form-control" id="appl_no" name="appl_no" value= "<?php echo $appl_no; ?>" readonly>
                        
                        <div class="form-body">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <h5 align="right">New Application(PART-II)</h5>
                    
                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">DETAILS OF THE APPLICANT</h3>
                            
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

                                            <input type='file' width="120" class="form-control upload_img" id="apl_name_path" name="apl_name_path">
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
                                            
                                        </div>

                                    </div>

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

                                            <input type='file' class="form-control upload_img" id="nric_path" name="nric_path">
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>

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

                                            <input type='file' class="form-control upload_img" id="pp_no" name="pp_no">
                                            
                                            <input type='hidden' value="<?php echo ($row->appl_pp_path); ?>" id="appl_pp_path_prev" name="appl_pp_path_prev">
                                            <?php if($row->appl_pp_path != ''){ ?>
                                                <a href="<?php echo base_url($row->appl_pp_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
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

                                            <input type='file' class="form-control upload_img" id="kin_nric_path" name="kin_nric_path">
                                            
                                            <input type='hidden' value="<?php echo ($row->kin_nric_path); ?>" id="kin_nric_path_prev" name="kin_nric_path_prev">
                                            <?php if($row->kin_nric_path != ''){ ?>
                                                <a href="<?php echo base_url($row->kin_nric_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
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

                                            <input type='file' class="form-control upload_img" id="kin_pp" name="kin_pp">
                                            
                                            <input type='hidden' value="<?php echo ($row->kin_pp_path); ?>" id="kin_pp_path_prev" name="kin_pp_path_prev">
                                            <?php if($row->kin_pp_path != ''){ ?>
                                                <a href="<?php echo base_url($row->kin_pp_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
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
                                                    
                    <?php } ?>

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
                $('#kin_pp').prop('required', false);
                $('#kin_pp_path').prop('required', false);

                if($('#kin_nric').val() == '')
                {
                    alert('Kin NIRC details required.');
                    $('#kin_nric').focus();
                    return false;
                }
            }
            else
            {
                $('#kin_nric').prop('required', false);
                $('#kin_nric_path').prop('required', false);
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
                $('#apl_pp_no').prop('required', false);
                $('#pp_no').prop('required', false);

                if($('#nric_no').val() == '')
                {
                    alert('NIRC details required.');
                    $('#nric_no').focus();
                    return false;
                }
            }
            else
            {
                $('#nric_no').prop('required', false);
                $('#nric_path').prop('required', false);
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

        $('.upload_img').bind('change', function() {
            var a=(this.files[0].size);
            if(a > 2000000) {
                alert('Image size must be within 2MB');
                return false;
            };
        });


    })

</script>