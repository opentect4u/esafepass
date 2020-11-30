<div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                
                <li class="breadcrumb-item"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>
                
                <li class="breadcrumb-item active">Form-III</li>

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

                    <h4 class="m-b-0 text-white">Application Form (PLEASE FILL THE FORM IN CAPITAL LETTERS)</h4>

                </div>


                <!-- <img src="<?php //echo base_url("assets/images/safepass.jpg"); ?>" width="200" height="200"  alt="" class="img-fluid logo-img mt-1 img-circle"> -->

                <div class="card-body">

                    <form class="form-horizontal" 
                        id="form"
                        method="post" 
                        action="<?php echo site_url('application/addCertificate');?>"
                        enctype="multipart/form-data"
                    >

                        <input type='hidden' class="form-control" id="appl_no" name="appl_no" value= "<?php echo $appl_no; ?>" readonly>
                        <input type='hidden' class="form-control" id="sl_no" name="sl_no" value= "<?php echo $sl_no; ?>" readonly>

                        <div class="form-body">

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <h5 align="right">New Application(PART-III)</h5>
                                        
                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">MEDICAL DETAILS</h3>
                            <!-- <span>
                                <font id= "addMessage5" color= "blue">Click to add </font>
                                <font id="removeMessage5" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection5"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection5"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span> -->
                            <hr class="m-t-0 m-b-40">
                            <div id= "section5">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Medical Test Centre / Clinic Name<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="med_crt" name="med_crt" required style='text-transform:uppercase'
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Medical Certificate No.<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="med_crt_no" name="med_crt_no" required style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">AME Name<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="ame_name" name="ame_name" required style='text-transform:uppercase'
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">AME No.<font color= "red"> *</font></label>

                                            <input type='text' class="form-control" id="ame_no" name="ame_no" required style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Date of Examination<font color= "red"> *</font></label>

                                            <input type="date"class="form-control" id="exam_dt" name="exam_dt" required style='text-transform:uppercase'
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

                                            <input type='text' class="form-control" id="alg_dtl" name="alg_dtl" style='text-transform:uppercase'
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

                                            <input type='file' class="form-control upload_img" id="kin_med_cert" name="kin_med_cert" required
                                            >
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                <div class="col-md-12">
                                <div class="form-group">
                                  <input type="checkbox" id="medical_declar" name="medical_declar" value="Y" required>&nbsp;&nbsp;&nbsp;
                               I declare that I am of good health and I do not have any physical defect, deformity or disability. I further declare that I perform all my routine activities independently and I do not expect to receive any treatment, nor do I expect to be hospitalized for any ailment or disease. (can be added under vestigo address, the place where the earlier qr code was positioned.)
                                </div> 

                               </div>

                                  
                                </div>

                            </div>

                            <h3 class="box-title">DETAILS OF BOSIET/STCW/FOET</h3>
                            <!-- <span>
                                <font id= "addMessage6" color= "blue">Click to add </font>
                                <font id="removeMessage6" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection6"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection6"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span> -->
                            <hr class="m-t-0 m-b-40">
                            <div id= "section6">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Name<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="inst_name" name="inst_name" required style='text-transform:uppercase'
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Address<font color= "red"> *</font></label>

                                            <textarea class="form-control" id="inst_adr" name="inst_adr" required style='text-transform:uppercase'
                                            ></textarea>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Course Title<font color= "red"> *</font></label>

                                            <input type="text"class="form-control" id="course_tit" name="course_tit" required style='text-transform:uppercase'
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Certificate No<font color= "red"> *</font></label>

                                            <input type="text" class="form-control" id="inst_cert_no" name="inst_cert_no" required style='text-transform:uppercase'
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

                                            <input type='file' class="form-control upload_img" id="kin_huet_cert" name="kin_huet_cert" required
                                            >
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
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

                                                <option value="Y">Yes</option>

                                                <option value="N">No</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate Verification</label>

                                            <input type='file' class="form-control upload_img" id="trn_vrf_cert_path" name="trn_vrf_cert_path"
                                            >
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
                                        </div>

                                    </div>

                                </div>

                               
                            </div>

<!------------------------------------------------------------------------------------------->
                            <h3 class="box-title">DETAILS OF H2S Training </h3>(H2S is required for Larut, xxx and xxx.)
                            <hr class="m-t-0 m-b-40">
                            <div id= "section7">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Name</label>

                                            <input type="text"class="form-control" id="h2s_inst_name" name="h2s_inst_name" style='text-transform:uppercase'
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Institution Address</label>

                                            <textarea class="form-control" id="h2s_inst_adr" name="h2s_inst_adr" style='text-transform:uppercase'
                                            ></textarea>
                                            
                                        </div>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Course Title</label>

                                            <input type="text"class="form-control" id="h2s_course" name="h2s_course" style='text-transform:uppercase'
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Certificate No</label>

                                            <input type="text" class="form-control" id="h2s_cert_no" name="h2s_cert_no" required style='text-transform:uppercase'
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                              <!--   <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Attended From</label>

                                            <input type="date"class="form-control" id="h2s_frm_dt" name="h2s_frm_dt"
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Attended To</label>

                                            <input type="date"class="form-control" id="h2s_to_dt" name="h2s_to_dt"
                                            /> 
                                            
                                        </div>

                                    </div>

                                </div> -->

                               <!--  <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Training Validity</label>

                                            <input type="date" class="form-control" id="h2s_exp_dt" name="h2s_exp_dt"
                                            /> 
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate</label>

                                            <input type='file' class="form-control upload_img" id="h2s_cert_path" name="h2s_cert_path"
                                            >
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
                                                    name="h2s_trn_flg"
                                                    
                                                >

                                                <option value="">Select</option>

                                                <option value="Y">Yes</option>

                                                <option value="N">No</option>

                                            </select>
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Upload Training Certificate Verification</label>

                                            <input type='file' class="form-control upload_img" id="h2s_vrf_path" name="h2s_vrf_path"
                                            >
                                            <label class="control-label"><font color= "red" size="1px">File types must be gif,jpg,jpeg & maximum size 2MB</font></label>
                                        </div>

                                    </div>

                                </div> -->

                               
                            </div>
<!------------------------------------------------------------------------------------------->                            
                                    
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label class="control-label">Remarks</label>

                                        <textarea class="form-control" name="remarks" style='text-transform:uppercase' ></textarea>

                                    </div>

                                </div>
                                
                            </div>

                            <div class="form-actions">

                            <div class="row">
                       
                               <div class="col-md-12">
                               <div class="form-group">
                                  <input type="checkbox" id="declaration" name="declaration" value="Y" required>&nbsp;&nbsp;&nbsp;
                               I hereby confirm that the information provided herein is accurate, correct and complete and that the documents submitted along with this application form are genuine. I hereby undertake to provide to Vestigo Petroleum Sdn. Bhd. 
                                And / or its representatives with any additional documentation requested in order to support the applicant and its approval as deemed necessary.
                                </div> 

                               </div> 
                            </div>


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

        $('.upload_img').bind('change', function() {
            var a=(this.files[0].size);
            if(a > 3000000) {
                alert('Image size must be within 2MB');
                return false;
            };
        });


    })

</script>