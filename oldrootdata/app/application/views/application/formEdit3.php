<div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                
                <li class="breadcrumb-item"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>
                
                <li class="breadcrumb-item active">Form-III</li>

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
                        action="<?php echo site_url('application/edit3');?>"
                        enctype="multipart/form-data"
                    >

                        <input type='hidden' class="form-control" id="appl_no" name="appl_no" value= "<?php echo $appl_no; ?>" readonly>
                        
                        <div class="form-body">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <h5 align="right">New Application(PART-III)</h5>
                    
                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">MEDICAL DETAILS</h3>
                            
                            <hr class="m-t-0 m-b-40">
                            <div id= "section5">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Medical Test Centre / Clinic Name</label>

                                            <input type="text"class="form-control" id="med_crt" name="med_crt" style='text-transform:uppercase'
                                            value="<?php echo $row->med_center; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Medical Certificate No.</label>

                                            <input type='text' class="form-control" id="med_crt_no" name="med_crt_no" style='text-transform:uppercase'
                                            value="<?php echo $row->med_cert_no; ?>">
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">AME Name</label>

                                            <input type="text"class="form-control" id="ame_name" name="ame_name" style='text-transform:uppercase'
                                            value="<?php echo $row->ame_name; ?>">
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">AME No.</label>

                                            <input type='text' class="form-control" id="ame_no" name="ame_no" style='text-transform:uppercase'
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
                                            value="<?php echo $row->alergy_dtls; ?>" style='text-transform:uppercase' /> 
                                            
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

                                            <input type='file' class="form-control upload_img" id="kin_med_cert" name="kin_med_cert">
                                            
                                            <input type='hidden' value="<?php echo ($row->med_cert_path); ?>" id="med_cert_path_prev" name="med_cert_path_prev">
                                            <?php if($row->med_cert_path != ''){ ?>
                                                <a href="<?php echo base_url($row->med_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>

                                            <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg & maximum size 3MB</font></label>
                                        </div>

                                    </div>

                                </div>


                            <!-- <div class="row">
                       
                               <div class="col-md-12">
                               <div class="form-group">
                                  <input type="checkbox" id="medical_declar" name="medical_declar" value="Y" required 
                                  <?php //if(isset($row->medical_declar) && $row->medical_declar == 'Y'){echo "checked"; }?> 

                                  >&nbsp;&nbsp;&nbsp;
                               I declare that I am of good health and I do not have any physical defect, deformity or disability. I further declare that I perform all my routine activities independently and I do not expect to receive any treatment, nor do I expect to be hospitalized for any ailment or disease. (can be added under vestigo address, the place where the earlier qr code was positioned.)
                                </div> 

                               </div> 
                            </div>-->

                            </div>

                            <h3 class="box-title">DETAILS OF BOSIET/STCW/FOET</h3>
                            
                            <hr class="m-t-0 m-b-40">
                            <div id= "section6">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Name</label>

                                            <input type="text"class="form-control" id="inst_name" name="inst_name" style='text-transform:uppercase'
                                            value="<?php echo $row->inst_name; ?>"> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Address</label>

                                            <textarea class="form-control" id="inst_adr" name="inst_adr" style='text-transform:uppercase'
                                            ><?php echo $row->inst_adr;?></textarea>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Course Title</label>

                                            <input type="text"class="form-control" id="course_tit" name="course_tit" style='text-transform:uppercase'
                                            value="<?php echo $row->course_title; ?>"> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Certificate No</label>

                                            <input type="text" class="form-control" id="inst_cert_no" name="inst_cert_no" style='text-transform:uppercase'
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

                                            <input type='file' class="form-control upload_img" id="kin_huet_cert" name="kin_huet_cert">
                                            
                                            <input type='hidden' value="<?php echo ($row->huit_cert_path); ?>" id="huit_cert_path_prev" name="huit_cert_path_prev">
                                            <?php if($row->huit_cert_path != ''){ ?>
                                                <a href="<?php echo base_url($row->huit_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Certificate Verification<font color= "red"> *</font></label>

                                            <select class="form-control" 
                                                    id="trn_vrf_flg"
                                                    name="trn_vrf_flg">

                                                <option value="">Select</option>

                                                <option value="Y"<?php if($row->trn_vrf_flg=='Y') echo "selected"?>>Yes</option>
                                                 

                                                <option value="N"<?php if($row->trn_vrf_flg=='N') echo "selected"?>>No</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate Verification</label>

                                            <input type='file' class="form-control upload_img" id="trn_vrf_cert_path" name="trn_vrf_cert_path"
                                            >
                                            <input type='hidden' value="<?php echo ($row->trn_vrf_cert_path); ?>" id="trn_vrf_cert_path_prev" name="trn_vrf_cert_path_prev">
                                            <?php if($row->trn_vrf_cert_path != ''){ ?>
                                                <a href="<?php echo base_url($row->trn_vrf_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                        </div>

                                    </div>

                            </div>


    <!------------------------------------------------------------------------------------------->
                            <h3 class="box-title">DETAILS OF H2S Training</h3>
                            <hr class="m-t-0 m-b-40">
                            <div id= "section7">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Name</label>

                                            <input type="text"class="form-control" id="h2s_inst_name" name="h2s_inst_name" value="<?php echo $row->h2s_inst_name; ?>" style='text-transform:uppercase'
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Address</label>

                                            <textarea class="form-control" id="h2s_inst_adr" name="h2s_inst_adr" style='text-transform:uppercase'
                                            ><?php echo $row->h2s_inst_adr; ?></textarea>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Course Title</label>

                                            <input type="text"class="form-control" id="h2s_course" name="h2s_course" value="<?php echo $row->h2s_course; ?>" style='text-transform:uppercase'
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Certificate No</label>

                                            <input type="text" class="form-control" id="h2s_cert_no" name="h2s_cert_no" value="<?php echo $row->h2s_cert_no; ?>" style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                             <!--    <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Attended From</label>

                                            <input type="date"class="form-control" id="h2s_frm_dt" name="h2s_frm_dt" value="<?php echo $row->h2s_frm_dt; ?>"
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Attended To</label>

                                            <input type="date"class="form-control" id="h2s_to_dt" name="h2s_to_dt" value="<?php echo $row->h2s_to_dt; ?>"
                                            /> 
                                            
                                        </div>

                                    </div>

                                </div> -->

                                <!-- <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Validity</label>

                                            <input type="date"class="form-control" id="h2s_exp_dt" name="h2s_exp_dt" value="<?php echo $row->h2s_exp_dt; ?>"
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate</label>

                                            <input type='file' class="form-control upload_img" id="h2s_cert_path" name="h2s_cert_path"
                                            >
                                            <input type='hidden' value="<?php //echo ($row->h2s_cert_path); ?>" id="h2s_cert_path_prev" name="h2s_cert_path_prev">
                                            <?php if($row->h2s_cert_path != ''){ ?>
                                                <a href="<?php //echo base_url($row->h2s_cert_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
                                        </div>

                                    </div>

                                </div> -->

                                <!-- <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Certificate Verification</label>

                                            <select class="form-control" 
                                                    id="h2s_trn_flg"
                                                    name="h2s_trn_flg">

                                                <option value="">Select</option>

                                                <option value="Y"<?php if($row->h2s_trn_flg=='Y') echo "selected"?>>Yes</option>

                                                <option value="N"<?php if($row->h2s_trn_flg=='N') echo "selected"?>>No</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate Verification</label>

                                            <input type='file' class="form-control upload_img" id="h2s_vrf_path" name="h2s_vrf_path"
                                            >
                                            <input type='hidden' value="<?php echo ($row->h2s_vrf_path); ?>" id="h2s_vrf_path_prev" name="h2s_vrf_path_prev">
                                            <?php if($row->h2s_vrf_path != ''){ ?>
                                                <a href="<?php echo base_url($row->h2s_vrf_path); ?>" target= "blank">Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                            <?php } ?>
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
                                        </div>

                                    </div>

                                </div>

                               
                            </div> -->
<!------------------------------------------------------------------------------------------->

                            
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label class="control-label">Remarks</label>

                                        <textarea class="form-control" name="remarks" required
                                                                            style='text-transform:uppercase'


                                        ><?php echo $row->remarks; ?></textarea>

                                    </div>

                                </div>
                                
                            </div>

                            <div class="row">
                       
                               <div class="col-md-12">
                             <div class="form-group">
                                  <input type="checkbox" id="declaration" name="declaration" value="Y" required 
                                 <?php if(isset($row->declaration) && $row->declaration == 'Y'){echo "checked"; }?> 

                                  >&nbsp;&nbsp;&nbsp;
                               I hereby confirm that the information provided herein is accurate, correct and complete and that the documents submitted along with this application form are genuine. I hereby undertake to provide to Vestigo Petroleum Sdn. Bhd. 
                                And / or its representatives with any additional documentation requested in order to support the applicant and its approval as deemed necessary.
                                </div> 

                               </div> 
                            </div>

                            <div class="form-actions">

                                <div class="row">

                                   <?php if($row->status != 'A'){ ?>  
                                    <div class="col-md-6">

                                        <div class="row">

                                            <div class="col-md-offset-3 col-md-9">

                                                <button type="submit" id="submit" class="btn btn-success">Save And Continue</button>

                                            </div>

                                        </div>

                                    </div>

                                       <?php } ?>

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
              //let alergies = '<?=$row->alergies?>';

            if(alergies == 'Y')
            {
                $('#alg_dtl').prop('required', true);
                $('#alg_dtl').prop('readonly', false);
            }
            else if(alergies == 'N')
            {
                $('#alg_dtl').prop('required', false);
                $('#alg_dtl').prop('readonly', true);
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
            if(a > 3000000) {
                alert('Image size must be within 2MB');
                return false;
            };
        });


    })

</script>