    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                
                <li class="breadcrumb-item"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>
                
                <li class="breadcrumb-item active">Form-I</li>

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

                                        <h5 align="right">New Application(Part- I)</h5>
                    
                                    </div>

                                </div>

                            </div>

                            <h3 class="box-title">DETAILS OF THE ORGANISATION</h3>
                            <!-- <span>
                                <font id="addMessage1" color= "blue">Click to add </font>
                                <font id="removeMessage1" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection1"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection1"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span> -->
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

                                            <label class="control-label">Your First Name</label>

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

                                            <label class="control-label">Last Name</label>

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

                                            <label class="control-label">Your Email</label>

                                            <input type='email' class="form-control" id="yemail" name="yemail" required
                                            >
                                            
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <label class="control-label">Your Contact No (Mobile)</label>

                                            <input type='text' class="form-control" id="ycnct" name="ycnct" required
                                            >
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>
                           
                            <h3 class="box-title">DETAILS OF THE SPONSOR</h3>
                            <!-- <span>
                                <font id="addMessage2" color= "blue">Click to add </font>
                                <font id="removeMessage2" color= "blue">Click to Hide </font>
                                <button class="btn btn-success" type= "button" title="Add" id="addSection2"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                <button class="btn btn-danger" type= "button" title="remove" id="removeSection2"><i class="fa fa-minus" aria-hidden="true"></i></button>
                            </span> -->
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


<!-- To control on-behalf details -->
<script>

    $(document).ready(function(){

        $('#apl_for').on('change', function(){

            var apl_for = $(this).val();

            if(apl_for == 'O')
            {

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

            }

        })

    })

</script>
