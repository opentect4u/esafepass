<div class="row page-titles">

    <div class="col-md-6 col-8 align-self-center">

        <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

        <ol class="breadcrumb">

            <li class="breadcrumb-item"><a href="<?php echo site_url('main/login'); ?>">Home</a></li>
            
            <li class="breadcrumb-item"><a href="<?php echo site_url('application/apln'); ?>">Application</a></li>

            <li class="breadcrumb-item active">Training</li>

        </ol>

    </div>

    <div class="col-md-6 col-12 align-self-center">
        <div class="alert alert-danger"></div>
    </div>

</div>


<div class="row">

    <div class="col-lg-12">

        <div class="card card-outline-info">

            <div class="card-header">

                <h4 class="m-b-0 text-white">Add Trainings</h4>
                
            </div>
            
            <div class="card-body">

                <form class="form-horizontal" 
                    id="form"
                    method="post" 
                    action="<?php echo site_url('training/newtrainings');?>"
                    enctype="multipart/form-data">
                    
                    <input type="hidden" name= "appl_no" id= "appl_no" value= "<?php echo $appl_no; ?>" class= "form-control" >
                    <!-- <input type="hidden" name= "sl_no" id= "sl_no" value= "<?php //echo $sl_no; ?>" class= "form-control" > -->

                    <div class="form-body">

                        <h3 class="box-title">Training Details 1 :</h3>
                        <span>
                            <font color= "blue">Click to add  </font>
                            <button class="btn btn-success" type= "button" title="Add" id="addSection1"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <button class="btn btn-danger" type= "button" title="remove" id="removeSection1"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </span>

                        <hr class="m-t-0 m-b-40">
                        <div id= "section1">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Institution's Name</label>

                                    <input type="text" name= "inst_name1" id= "inst_name1" class= "form-control" style='text-transform:uppercase'>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Address</label>

                                    <textarea class="form-control" id="adr1" name="adr1" col= "30" row= "2" style='text-transform:uppercase'
                                    ></textarea>
                                    
                                </div>

                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                        
                                <div class="form-group">

                                    <label class="control-label">Course Title</label>

                                    <input type='text' class="form-control" id="course1" name="course1" style='text-transform:uppercase'
                                    />
                                        
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Certificate No.</label>

                                    <input type='text' class="form-control" id="cert_no1" name="cert_no1" style='text-transform:uppercase'
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

                                    <input type='file' class="form-control upload_img" id="certificate1" name="certificate1"
                                    >
                                    <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                </div>

                            </div>

                        </div>
                        </div>

                        <br>
                        <h3 class="box-title">Training Details 2 :</h3>
                        <span>
                            <font color= "blue">Click to add </font>
                            <button class="btn btn-success" type= "button" title="Add" id="addSection2"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <button class="btn btn-danger" type= "button" title="remove" id="removeSection2"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </span>
                        
                        <hr class="m-t-0 m-b-40">

                        <div id= "section2">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Institution's Name</label>

                                    <input type="text" name= "inst_name2" id= "inst_name2" class= "form-control" style='text-transform:uppercase'>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Address</label>

                                    <textarea class="form-control" id="adr2" name="adr2" col= "30" row= "2" style='text-transform:uppercase'
                                    ></textarea>
                                    
                                </div>

                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                        
                                <div class="form-group">

                                    <label class="control-label">Course Title</label>

                                    <input type='text' class="form-control" id="course2" name="course2" style='text-transform:uppercase'
                                    />
                                        
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Certificate No.</label>

                                    <input type='text' class="form-control" id="cert_no2" name="cert_no2" style='text-transform:uppercase'
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

                                    <input type='file' class="form-control upload_img" id="certificate2" name="certificate2"
                                    >
                                    <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                </div>

                            </div>

                        </div>
                        </div>


                        <br>
                        <h3 class="box-title">Training Details 3 :</h3>
                        <span>
                            <font color= "blue">Click to add </font>
                            <button class="btn btn-success" type= "button" title="Add" id="addSection3"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <button class="btn btn-danger" type= "button" title="remove" id="removeSection3"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </span>

                        <hr class="m-t-0 m-b-40">

                        <div id= "section3">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Institution's Name</label>

                                    <input type="text" name= "inst_name3" id= "inst_name3" class= "form-control" style='text-transform:uppercase'>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Address</label>

                                    <textarea class="form-control" id="adr3" name="adr3" col= "30" row= "2" style='text-transform:uppercase'
                                    ></textarea>
                                    
                                </div>

                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                        
                                <div class="form-group">

                                    <label class="control-label">Course Title</label>

                                    <input type='text' class="form-control" id="course3" name="course3" style='text-transform:uppercase'
                                    />
                                        
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Certificate No.</label>

                                    <input type='text' class="form-control" id="cert_no3" name="cert_no3" style='text-transform:uppercase'
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

                                    <input type='file' class="form-control upload_img" id="certificate3" name="certificate3"
                                    >
                                    <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                </div>

                            </div>

                        </div>
                        </div>


                        <br>
                        <h3 class="box-title">Training Details 4 :</h3>
                        <span>
                            <font color= "blue">Click to add </font>
                            <button class="btn btn-success" type= "button" title="Add" id="addSection4"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <button class="btn btn-danger" type= "button" title="remove" id="removeSection4"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </span>

                        <hr class="m-t-0 m-b-40">

                        <div id= "section4">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Institution's Name</label>

                                    <input type="text" name= "inst_name4" id= "inst_name4" class= "form-control" style='text-transform:uppercase'>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Address</label>

                                    <textarea class="form-control" id="adr4" name="adr4" col= "30" row= "2" style='text-transform:uppercase'
                                    ></textarea>
                                    
                                </div>

                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                        
                                <div class="form-group">

                                    <label class="control-label">Course Title</label>

                                    <input type='text' class="form-control" id="course4" name="course4" style='text-transform:uppercase'
                                    />
                                        
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Certificate No.</label>

                                    <input type='text' class="form-control" id="cert_no4" name="cert_no4" style='text-transform:uppercase'
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

                                    <input type='file' class="form-control upload_img" id="certificate4" name="certificate4"
                                    >
                                    <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                </div>

                            </div>

                        </div>
                        </div>


                        <br>
                        <h3 class="box-title">Training Details 5 :</h3>
                        <span>
                            <font color= "blue">Click to add </font>
                            <button class="btn btn-success" type= "button" title="Add" id="addSection5"><i class="fa fa-plus" aria-hidden="true"></i></button>
                            <button class="btn btn-danger" type= "button" title="remove" id="removeSection5"><i class="fa fa-minus" aria-hidden="true"></i></button>
                        </span>

                        <hr class="m-t-0 m-b-40">

                        <div id= "section5">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Institution's Name</label>

                                    <input type="text" name= "inst_name5" id= "inst_name5" class= "form-control" style='text-transform:uppercase' >

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Address</label>

                                    <textarea class="form-control" id="adr5" name="adr5" col= "30" row= "2" style='text-transform:uppercase'
                                    ></textarea>
                                    
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                        
                                <div class="form-group">

                                    <label class="control-label">Course Title</label>

                                    <input type='text' class="form-control" id="course5" name="course5" style='text-transform:uppercase'
                                    />
                                        
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label class="control-label">Certificate No.</label>

                                    <input type='text' class="form-control" id="cert_no5" name="cert_no5" style='text-transform:uppercase'
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

                                    <input type='file' class="form-control upload_img" id="certificate5" name="certificate5"
                                    >
                                    <label class="control-label"><font color= "red" size="1px">File types must be png,jpg,jpeg,pdf & maximum size 3MB</font></label>
                                </div>

                            </div>

                        </div>
                        </div>


                      

                    </div>

                    
                    <div class="form-actions">

                        <div class="row">

                                  <?php  if($data1[0]->status != 'A'){ ?>  

                            <div class="col-md-6">

                                <div class="row">

                                    <div class="col-md-offset-3 col-md-9">

                                        <button type="submit" id="submit" class="btn btn-success">Submit</button>

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

    </div>

</div>
                


<script>

    $(document).ready(function(){

        $('.alert').hide();

    })

</script>

<!-- To hide and show sections -->
<script>

    $(document).ready(function(){

        $('#section1').hide();
        $('#section2').hide();
        $('#section3').hide();
        $('#section4').hide();
        $('#section5').hide();

        $('#removeSection1').hide();
        $('#removeSection2').hide();
        $('#removeSection3').hide();
        $('#removeSection4').hide();
        $('#removeSection5').hide();
        
        //////////////////////////

        $('#addSection1').on("click", function(){
            $('#section1').show();
            $('#addSection1').hide();
            $('#removeSection1').show();
        })

        $('#addSection2').on("click", function(){
            $('#section2').show();
            $('#addSection2').hide();
            $('#removeSection2').show();
        })

        $('#addSection3').on("click", function(){
            $('#section3').show();
            $('#addSection3').hide();
            $('#removeSection3').show();
        })

        $('#addSection4').on("click", function(){
            $('#section4').show();
            $('#addSection4').hide();
            $('#removeSection4').show();
        })

        $('#addSection5').on("click", function(){
            $('#section5').show();
            $('#addSection5').hide();
            $('#removeSection5').show();
        })

        //////////////////////

        $('#removeSection1').on("click", function(){
            $('#section1').hide();
            $('#addSection1').show();
            $('#removeSection1').hide();
        })

        $('#removeSection2').on("click", function(){
            $('#section2').hide();
            $('#addSection2').show();
            $('#removeSection2').hide();
        })

        $('#removeSection3').on("click", function(){
            $('#section3').hide();
            $('#addSection3').show();
            $('#removeSection3').hide();
        })

        $('#removeSection4').on("click", function(){
            $('#section4').hide();
            $('#addSection4').show();
            $('#removeSection4').hide();
        })

        $('#removeSection5').on("click", function(){
            $('#section5').hide();
            $('#addSection5').show();
            $('#removeSection5').hide();
        })


    })

</script>


<!-- For validation -->
<script>

    $(document).ready(function(){

        $('#inst_name1').on('click', function(){

            if($('#inst_name1').val() != '' )
            {
                $('#inst_name1').prop('required', true);
                $('#adr1').prop('required', true);
                $('#course1').prop('required', true);
                $('#cert_no1').prop('required', true);
                $('#from_dt1').prop('required', true);
                $('#to_dt1').prop('required', true);
                $('#validity1').prop('required', true);
                $('#certificate1').prop('required', true);
            }
            else
            {
                $('#inst_name1').prop('required', false);
                $('#adr1').prop('required', false);
                $('#course1').prop('required', false);
                $('#cert_no1').prop('required', false);
                $('#from_dt1').prop('required', false);
                $('#to_dt1').prop('required', false);
                $('#validity1').prop('required', false);
                $('#certificate1').prop('required', false);
            }

        })
        
        $('#inst_name2').on('click', function(){

            if($('#inst_name2').val() != '' )
            {
                $('#inst_name2').prop('required', true);
                $('#adr2').prop('required', true);
                $('#course2').prop('required', true);
                $('#cert_no2').prop('required', true);
                $('#from_dt2').prop('required', true);
                $('#to_dt2').prop('required', true);
                $('#validity2').prop('required', true);
                $('#certificate2').prop('required', true);
            }
            else
            {
                $('#inst_name2').prop('required', false);
                $('#adr2').prop('required', false);
                $('#course2').prop('required', false);
                $('#cert_no2').prop('required', false);
                $('#from_dt2').prop('required', false);
                $('#to_dt2').prop('required', false);
                $('#validity2').prop('required', false);
                $('#certificate2').prop('required', false);
            }

        })
        
        $('#inst_name3').on('click', function(){

            if($('#inst_name3').val() != '' )
            {
                $('#inst_name3').prop('required', true);
                $('#adr3').prop('required', true);
                $('#course3').prop('required', true);
                $('#cert_no3').prop('required', true);
                $('#from_dt3').prop('required', true);
                $('#to_dt3').prop('required', true);
                $('#validity3').prop('required', true);
                $('#certificate3').prop('required', true);
            }
            else
            {
                $('#inst_name3').prop('required', false);
                $('#adr3').prop('required', false);
                $('#course3').prop('required', false);
                $('#cert_no3').prop('required', false);
                $('#from_dt3').prop('required', false);
                $('#to_dt3').prop('required', false);
                $('#validity3').prop('required', false);
                $('#certificate3').prop('required', false);
            }

        })
        
        $('#inst_name4').on('click', function(){

            if($('#inst_name4').val() != '')
            {
                $('#inst_name4').prop('required', true);
                $('#adr4').prop('required', true);
                $('#course4').prop('required', true);
                $('#cert_no4').prop('required', true);
                $('#from_dt4').prop('required', true);
                $('#to_dt4').prop('required', true);
                $('#validity4').prop('required', true);
                $('#certificate4').prop('required', true);
            }
            else
            {
                $('#inst_name4').prop('required', false);
                $('#adr4').prop('required', false);
                $('#course4').prop('required', false);
                $('#cert_no4').prop('required', false);
                $('#from_dt4').prop('required', false);
                $('#to_dt4').prop('required', false);
                $('#validity4').prop('required', false);
                $('#certificate4').prop('required', false);
            }

        })
        
        $('#inst_name5').on('click', function(){

            if($('#inst_name5').val() != '' )
            {
                $('#inst_name5').prop('required', true);
                $('#adr5').prop('required', true);
                $('#course5').prop('required', true);
                $('#cert_no5').prop('required', true);
                $('#from_dt5').prop('required', true);
                $('#to_dt5').prop('required', true);
                $('#validity5').prop('required', true);
                $('#certificate5').prop('required', true);
            }
            else
            {
                $('#inst_name5').prop('required', false);
                $('#adr5').prop('required', false);
                $('#course5').prop('required', false);
                $('#cert_no5').prop('required', false);
                $('#from_dt5').prop('required', false);
                $('#to_dt5').prop('required', false);
                $('#validity5').prop('required', false);
                $('#certificate5').prop('required', false);
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