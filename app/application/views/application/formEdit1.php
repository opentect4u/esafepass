    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                
                <li class="breadcrumb-item"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>
                
                <li class="breadcrumb-item active">Form-I</li>

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
                        action="<?php echo site_url('application/update');?>"
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
                                        
                                        <input type="hidden" name= "appl_status" value= "<?php echo $row->status; ?>" >

                                    </div>

                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">

                                        <label class="control-label">Application Date.</label>

                                        <input type='text' class="form-control" id="appl_no" name="appl_no"
                                         value="<?php echo date('d/m/Y',strtotime($row->appl_dt)); ?>" readonly />

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
                           
                            <hr class="m-t-0 m-b-40">

                            <div id= "section1">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Organisation Type</label>

                                            <select class="form-control" 
                                                    id="org_type"
                                                    name="org_type"
                                                    required>

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

                        <?php } ?>

                    </div>

                </div>

            </div>

        </div>

    </div>


 

<!-- For alert -->
<script>

    $(document).ready(function(){

        $('.alert').hide();

    });

</script>


<!-- To control on-behalf details -->
<script>

    $(document).ready(function(){

        $('#apl_for').on('change', function(){

            var apl_for = $(this).val();

            if(apl_for == 'O')
            {
                $('#yf_name').prop('readonly', false);
                $('#ym_name').prop('readonly', false);
                $('#yl_name').prop('readonly', false);
                $('#ypt').prop('readonly', false);
                $('#yemail').prop('readonly', false);
                $('#ycnct').prop('readonly', false);

                $('#yf_name').prop('required', true);
                $('#ym_name').prop('required', true);
                $('#yl_name').prop('required', true);
                $('#ypt').prop('required', true);
                $('#yemail').prop('required', true);
                $('#ycnct').prop('required', true);

            }
            else if(apl_for == 'S')
            {

                $('#yf_name').prop('required', false);
                $('#ym_name').prop('required', false);
                $('#yl_name').prop('required', false);
                $('#ypt').prop('required', false);
                $('#yemail').prop('required', false);
                $('#ycnct').prop('required', false);

                $('#yf_name').prop('readonly', true);
                $('#ym_name').prop('readonly', true);
                $('#yl_name').prop('readonly', true);
                $('#ypt').prop('readonly', true);
                $('#yemail').prop('readonly', true);
                $('#ycnct').prop('readonly', true);

            }else{

                $('#yf_name').prop('readonly', false);
                $('#ym_name').prop('readonly', false);
                $('#yl_name').prop('readonly', false);
                $('#ypt').prop('readonly', false);
                $('#yemail').prop('readonly', false);
                $('#ycnct').prop('readonly', false);
            }

        })

    })

</script>
