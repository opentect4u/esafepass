<script>
    function printReport() { 
    $('#hie').show();   
  var divToPrint = document.getElementById('divToPrint');

  var WindowObject = window.open('','Print-Window');
        WindowObject.document.open();
        WindowObject.document.writeln('<!DOCTYPE html>');
        WindowObject.document.writeln('<html><head><title></title>');

        WindowObject.document.writeln('<style type="text/css">@media print { .center { text-align: center;} .underline { text-decoration: underline; } p { display:inline; } .left { margin-left: 315px; text-align="left"; display: inline; } .right { margin-right: 375px; display: inline; } td.left_algn { text-align: left; } td.right_algn { text-align: right; } td.hight { hight: 15px; } table.width { width: 100px; } table.noborder { border: 0px solid black; } th.width { width: 10px; } .border { border: 1px solid black; } .bottom { position: absolute; bottom: 5px; width: 100%; } .tValHide { display:none; } } </style>');
       
        WindowObject.document.writeln('</head><body onload="window.print()">');
        WindowObject.document.writeln(divToPrint.innerHTML);
        WindowObject.document.writeln('</body></html>');
        WindowObject.document.close();
        $('#hie').hide();
        setTimeout(function(){WindowObject.close();},10);
    }
</script>

<?php foreach($data1 as $key1){ ?>

<div id="divToPrint">

    <div class="wraper"> 

        <div class="col-lg-12 container contant-wraper">

            <div class="panel-heading">

                <div class="item_body">

                    <div style="text-align:center;">
                        <br>
                        <h5>Application No: <?php echo $key1->appl_no; ?></h5>
                    
                        <!-- <div class="card">

                            <div class="card-body">

                                <center class="m-t-10"> -->

                                    <img src="<?php echo base_url($key1->appl_photo_path); ?>" alt="" width="200">
                                    
                                <!-- </center>

                            </div>

                            <input type='hidden' value= "<?php echo base_url($key1->appl_photo_path); ?>"  class="form-control" id="apl_name_path_prev" name="apl_name_path_prev">
                            
                        </div> -->

                        <h3><?php echo $key1->appl_name; ?></h3>
                        <br>

                        <h3>Organisation Details</h3>
                        <hr>
                    
                    </div>

                    <div style= "text-align:left;">

                        <p><strong>Name : </strong><?php echo $key1->org_name; ?></p>
                        <p><strong>Type : </strong><?php if($key1->org_type == 'V') {echo "Vestigo";} 
                                        elseif($key1->org_type == 'P') {echo "Petronas";}
                                        elseif($key1->org_type == 'C') {echo "Contractor";} ?>
                        </p>
                        <p><strong>Contact No. : </strong><?php echo $key1->org_ph_no; ?></p>
                        <p><strong>Email Id. : </strong><?php echo $key1->org_email; ?></p>
                        <p><strong>Website : </strong><?php echo $key1->org_web_add; ?></p>
                        <p><strong>Address : </strong><?php echo $key1->org_address; ?></p>
                        
                    </div>
                    <br>

                    <div style="text-align:center;">
                        <h3>Applicant Details</h3>
                        <hr>
                    </div>

                    <div style= "text-align:left;">

                        <p><strong>Name : </strong><?php echo $key1->appl_name; ?></p>
                        <p><strong>IC/Passport No. : </strong><?php echo $key1->applcnt_pasprt_no; ?></p>
                        <p><strong>DOB : </strong><?php echo date("d-m-Y",strtotime($key1->applcnt_dob)); ?></p>
                        <p><strong>Gender : </strong><?php if($key1->gender == 'M') {echo "Male";} 
                                        elseif($key1->gender == 'F') {echo "Female";}
                                        elseif($key1->gender == 'P') {echo "Prefer Not To Say";} ?>
                        </p>
                        <p><strong>Contact No. : </strong><?php echo $key1->applcnt_ph_no; ?></p>
                        <p><strong>Email : </strong><?php echo $key1->applcnt_email; ?></p>
                        <p><strong>Address : </strong><?php echo $key1->applcnt_add; ?></p>

                    </div>

                    <div style="text-align:center;">
                        <h3>Next of Kin Details</h3>
                        <hr>
                    </div>

                    <div style= "text-align:left;">

                        <p><strong>Name : </strong><?php echo $key1->kin_name; ?></p>
                        <p><strong>IC/Passport No. : </strong><?php echo $key1->kin_psprt_no; ?></p>
                        <p><strong>DOB : </strong><?php echo date("d-m-Y",strtotime($key1->kin_dob)); ?></p>
                        <p><strong>Gender : </strong><?php if($key1->kin_gender == 'M') {echo "Male";} 
                                        elseif($key1->kin_gender == 'F') {echo "Female";}
                                        elseif($key1->kin_gender == 'P') {echo "Prefer Not To Say";} ?>
                        </p>
                        <p><strong>Relationship : </strong><?php echo $key1->applcnt_kin_reltion; ?></p>
                        <p><strong>Contact No. : </strong><?php echo $key1->kin_ph; ?></p>
                        <p><strong>Email : </strong><?php echo $key1->kin_email; ?></p>
                        <p><strong>Address : </strong><?php echo $key1->kin_add; ?></p>

                    </div>

                    <div style="text-align:center;">
                        <h3>Other Details</h3>
                        <hr>
                    </div>

                    <div style= "text-align:left;">

                        <p><strong>BOSIET/HUET Expiry Date : </strong><?php echo date("d-m-Y",strtotime($key1->huit_exp_dt)); 
                                if($key1->huit_cert_path != '')
                                {echo " // Document Uploaded";}
                                ?>
                        </p>
                        <p><strong>Medical Examination Expiry Date : </strong><?php echo date("d-m-Y",strtotime($key1->med_exp_dt)); 
                                if($key1->med_cert_path != '')
                                {echo " // Document Uploaded";}
                            ?>
                        </p>
                        <p><strong>H2S Expiry Date : </strong><?php echo date("d-m-Y",strtotime($key1->kin_ph)); 
                                if($key1->h2s_cert_path != '')
                                {echo " // Document Uploaded";}
                            ?>
                        </p>
                        
                    </div>

                    <div style="text-align:center;">
                        <h3>Remarks</h3>
                        <hr>
                    </div>

                    <div style="text-align:center;">

                        <p><?php echo $key1->remarks; ?></p>

                    </div>

                </div>

            </div>

            <br>

        </div>
    
    </div>

</div>



<div class="modal-footer">

    <button class="btn btn-primary" type="button" onclick="location.href='<?php echo base_url('index.php/adminApp/application');?>'">Back</button>

    <button class="btn btn-success" type="button" id= "approve" >Approve</button>
    <button class="btn btn-warning" type="button" id= "hold" >Hold</button>
    <button class="btn btn-danger" type="button" id= "reject" >Reject</button>

    <button class="btn btn-primary" type="button" onclick="printReport();">Print</button>

</div>



<div class="row" id= "statusForm">

    <div class="col-lg-12">

        <div class="card card-outline-info">

            <div class="card-body">

                <form action="<?php echo site_url('adminApp/statusUpdation'); ?>" method= "POST" class="form-horizontal">
                
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">Status: </label>
                                <input type='text' value= "" class="form-control" id="adminStatus" name="adminStatus" readonly/>
                                <input type='hidden' value= "<?php echo $key1->appl_no; ?>" class="form-control" id="appl_no" name="appl_no" readonly/>

                            </div>

                            <div class="form-group">

                                <label class="control-label">Remarks: </label>
                                <textarea name="adminRemarks" class="form-control" id="adminRemarks" cols="30" rows="2" required></textarea>

                            </div>

                            <div class="form-actions">

                                <div class="row">

                                    <div class="col-md-offset-3 col-md-9">
                                
                                        <div class="form-group">

                                            <input type='Submit' value= "Submit" name="Submit" class="btn btn-primary"/>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<?php } ?>

<script>

    $(document).ready(function(){

        $('#statusForm').hide();

        $('#approve').on('click', function(){

            $('#adminStatus').val('A');
            $('#statusForm').show();
            $('#adminRemarks').focus();

        })

        $('#hold').on('click', function(){

            $('#adminStatus').val('H');
            $('#statusForm').show();
            $('#adminRemarks').focus();

        })

        $('#reject').on('click', function(){

            $('#adminStatus').val('R');
            $('#statusForm').show();
            $('#adminRemarks').focus();

        })

    })

</script>