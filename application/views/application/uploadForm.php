    <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>

                <li class="breadcrumb-item active"><a href="<?php echo site_url('application/apln');?>">Application</a></li>

                <li class="breadcrumb-item active">Upload</li>

            </ol>

        </div>

        <div class="col-md-6 col-12 align-self-center">
            <div class="alert alert-danger"></div>
        </div>

    </div>

<?php

if(!$data){

    echo "No Data Found";

}

else{

?>


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
                <?php foreach($data as $key){ ?>

                    <form class="form-horizontal" 
                        id="form"
                        method="post" 
                        action="<?php echo site_url('application/uploadDocs');?>"
                        enctype="multipart/form-data"
                    >

                        <input type='hidden' value= "<?php echo $key->sl_no; ?>" class="form-control" id="sl_no" name="sl_no"/>


                        <div class="form-body">

                            <h3 class="box-title">Other Documents</h3>
                            
                            <hr class="m-t-0 m-b-40">

                            
                            <div class="row">

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Applicant</label>

                                        <input type="text" class="form-control" value= "<?php echo $key->appl_name; ?>" name= "appl_name" id= "appl_name" readonly>
                                        
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">

                                        <label class="control-label">Applicantion No</label>

                                        <input type='text' value= "<?php echo $key->appl_no; ?>" class="form-control" id="appl_no" name="appl_no" readonly>
                                        
                                    </div>

                                </div>

                            </div>


                            <div class="row" style ="margin: 5px;">

                                <div class="col-md-12 form-group">
                                    <label class="control-label">Optional Details</label>

                                    <?php if(!$prevData){ ?>

                                        <table class= "table table-striped table-bordered table-hover">

                                            <thead>

                                                <th style= "text-align: center">Sl No</th>
                                                <th style= "text-align: center">Item name</th>
                                                <th style= "text-align: center">Supportive Docs</th>
                                            
                                                <!-- <th>
                                                    <button class="btn btn-success" type="button" id="addrow" style= "border-left: 10px" data-toggle="tooltip" data-original-title="Add Row" data-placement="bottom"><i class="fa fa-plus" aria-hidden="true"></i></button></th>
                                                </th> -->

                                            </thead>
                                            <hr>
                                            <tbody id= "intro">
                                            <tr>
                                                <td><span><strong>1</strong></span></td>            
                                                <td><input type="text" name="oth_item1" class="form-control" id="oth_item1" ></td>                                                        
                                                <td><input type="file" name="oth_sup_doc1" class="form-control" id="oth_sup_doc1" ></td>
                                            </tr>
                                            <tr>
                                                <td><span><strong>2</strong></span></td>            
                                                <td><input type="text" name="oth_item2" class="form-control" id="oth_item2" ></td>                                                        
                                                <td><input type="file" name="oth_sup_doc2" class="form-control" id="oth_sup_doc2" ></td>
                                            </tr>
                                            <tr>
                                                <td><span><strong>3</strong></span></td>            
                                                <td><input type="text" name="oth_item3" class="form-control" id="oth_item3" ></td>                                                        
                                                <td><input type="file" name="oth_sup_doc3" class="form-control" id="oth_sup_doc3" ></td>
                                            </tr>
                                            <tr>
                                                <td><span><strong>4</strong></span></td>            
                                                <td><input type="text" name="oth_item4" class="form-control" id="oth_item4" ></td>                                                        
                                                <td><input type="file" name="oth_sup_doc4" class="form-control" id="oth_sup_doc4" ></td>
                                            </tr>
                                            <tr>
                                                <td><span><strong>5</strong></span></td>            
                                                <td><input type="text" name="oth_item5" class="form-control" id="oth_item5" ></td>                                                        
                                                <td><input type="file" name="oth_sup_doc5" class="form-control" id="oth_sup_doc5" ></td>
                                            </tr>
                                            <tr>
                                                <td><span><strong>6</strong></span></td>            
                                                <td><input type="text" name="oth_item6" class="form-control" id="oth_item6" ></td>                                                        
                                                <td><input type="file" name="oth_sup_doc6" class="form-control" id="oth_sup_doc6" ></td>
                                            </tr>
                                            <tr>
                                                <td><span><strong>7</strong></span></td>            
                                                <td><input type="text" name="oth_item7" class="form-control" id="oth_item7" ></td>                                                        
                                                <td><input type="file" name="oth_sup_doc7" class="form-control" id="oth_sup_doc7" ></td>
                                            </tr>
                                            <tr>
                                                <td><span><strong>8</strong></span></td>            
                                                <td><input type="text" name="oth_item8" class="form-control" id="oth_item8" ></td>                                                        
                                                <td><input type="file" name="oth_sup_doc8" class="form-control" id="oth_sup_doc8" ></td>
                                            </tr>

                                            </tbody>
                                        
                                        </table>

                                    <?php }else{ ?>

                                        <table class= "table table-striped table-bordered table-hover">

                                            <thead>

                                                <th style= "text-align: center">Sl No</th>
                                                <th style= "text-align: center">Item name</th>
                                                <th style= "text-align: center">Uploaded Docs</th>
                                                <th style= "text-align: center">New Docs</th>

                                            </thead>
                                            <hr>
                                            <tbody id= "intro">
                                            <?php foreach($prevData as $key2){ ?>

                                                <tr>
                                                    <td><span><strong>1</strong></span></td>            
                                                    <?php if($key2->oth_item1_path == ''){ ?>
                                                    <td><input type="text" name="oth_item1" class="form-control" id="oth_item1" ></td>                                                        
                                                    <td></td>
                                                    <input type="hidden" name= "oth_item1_path" >
                                                    <?php }else{ ?>
                                                    <td><input type="text" name="oth_item1" value= "<?php echo $key2->oth_item1; ?>" class="form-control" id="oth_item1" ></td>                                                        
                                                    <td><a href="<?php echo base_url($key2->oth_item1_path); ?>" target= "blank">View</a></td>
                                                    <input type="hidden" name= "oth_item1_path" value= "<?php echo $key2->oth_item1_path; ?>" >
                                                    <?php } ?>
                                                    <td><input type="file" name="oth_sup_doc1" class="form-control" id="oth_sup_doc1" ></td>
                                                </tr>
                                                <tr>
                                                    <td><span><strong>2</strong></span></td>            
                                                    <?php if($key2->oth_item2_path == ''){ ?>
                                                    <td><input type="text" name="oth_item2" class="form-control" id="oth_item2" ></td>                                                        
                                                    <td></td>
                                                    <input type="hidden" name= "oth_item2_path" >
                                                    <?php }else{ ?>
                                                    <td><input type="text" name="oth_item2" value= "<?php echo $key2->oth_item2; ?>" class="form-control" id="oth_item2" ></td>                                                        
                                                    <td><a href="<?php echo base_url($key2->oth_item2_path); ?>" target= "blank">View</a></td>
                                                    <input type="hidden" name= "oth_item2_path" value= "<?php echo $key2->oth_item2_path; ?>" >
                                                    <?php } ?>
                                                    <td><input type="file" name="oth_sup_doc2" class="form-control" id="oth_sup_doc2" ></td>
                                                </tr>
                                                <tr>
                                                    <td><span><strong>3</strong></span></td>            
                                                    <?php if($key2->oth_item3_path == ''){ ?>
                                                    <td><input type="text" name="oth_item3" class="form-control" id="oth_item3" ></td>                                                        
                                                    <td></td>
                                                    <input type="hidden" name= "oth_item3_path" >
                                                    <?php }else{ ?>
                                                    <td><input type="text" name="oth_item3" value= "<?php echo $key2->oth_item3; ?>" class="form-control" id="oth_item3" ></td>                                                        
                                                    <td><a href="<?php echo base_url($key2->oth_item3_path); ?>" target= "blank">View</a></td>
                                                    <input type="hidden" name= "oth_item3_path" value= "<?php echo $key2->oth_item3_path; ?>" >
                                                    <?php } ?>
                                                    <td><input type="file" name="oth_sup_doc3" class="form-control" id="oth_sup_doc3" ></td>
                                                </tr>
                                                <tr>
                                                    <td><span><strong>4</strong></span></td>            
                                                    <?php if($key2->oth_item4_path == ''){ ?>
                                                    <td><input type="text" name="oth_item4" class="form-control" id="oth_item4" ></td>                                                        
                                                    <td></td>
                                                    <input type="hidden" name= "oth_item4_path" >
                                                    <?php }else{ ?>
                                                    <td><input type="text" name="oth_item4" value= "<?php echo $key2->oth_item4; ?>" class="form-control" id="oth_item4" ></td>                                                        
                                                    <td><a href="<?php echo base_url($key2->oth_item4_path); ?>" target= "blank">View</a></td>
                                                    <input type="hidden" name= "oth_item4_path" value= "<?php echo $key2->oth_item4_path; ?>" >
                                                    <?php } ?>
                                                    <td><input type="file" name="oth_sup_doc4" class="form-control" id="oth_sup_doc4" ></td>
                                                </tr>
                                                <tr>
                                                    <td><span><strong>5</strong></span></td>            
                                                    <?php if($key2->oth_item5_path == ''){ ?>
                                                    <td><input type="text" name="oth_item5" class="form-control" id="oth_item5" ></td>                                                        
                                                    <td></td>
                                                    <input type="hidden" name= "oth_item5_path" >
                                                    <?php }else{ ?>
                                                    <td><input type="text" name="oth_item5" value= "<?php echo $key2->oth_item5; ?>" class="form-control" id="oth_item5" ></td>                                                        
                                                    <td><a href="<?php echo base_url($key2->oth_item5_path); ?>" target= "blank">View</a></td>
                                                    <input type="hidden" name= "oth_item5_path" value= "<?php echo $key2->oth_item5_path; ?>" >
                                                    <?php } ?>
                                                    <td><input type="file" name="oth_sup_doc5" class="form-control" id="oth_sup_doc5" ></td>
                                                </tr>
                                                <tr>
                                                    <td><span><strong>6</strong></span></td>            
                                                    <?php if($key2->oth_item6_path == ''){ ?>
                                                    <td><input type="text" name="oth_item6" class="form-control" id="oth_item6" ></td>                                                        
                                                    <td></td>
                                                    <input type="hidden" name= "oth_item6_path" >
                                                    <?php }else{ ?>
                                                    <td><input type="text" name="oth_item6" value= "<?php echo $key2->oth_item6; ?>" class="form-control" id="oth_item6" ></td>                                                        
                                                    <td><a href="<?php echo base_url($key2->oth_item6_path); ?>" target= "blank">View</a></td>
                                                    <input type="hidden" name= "oth_item6_path" value= "<?php echo $key2->oth_item6_path; ?>" >
                                                    <?php } ?>
                                                    <td><input type="file" name="oth_sup_doc6" class="form-control" id="oth_sup_doc6" ></td>
                                                </tr>
                                                <tr>
                                                    <td><span><strong>7</strong></span></td>            
                                                    <?php if($key2->oth_item7_path == ''){ ?>
                                                    <td><input type="text" name="oth_item7" class="form-control" id="oth_item7" ></td>                                                        
                                                    <td></td>
                                                    <input type="hidden" name= "oth_item7_path" >
                                                    <?php }else{ ?>
                                                    <td><input type="text" name="oth_item7" value= "<?php echo $key2->oth_item7; ?>" class="form-control" id="oth_item7" ></td>                                                        
                                                    <td><a href="<?php echo base_url($key2->oth_item7_path); ?>" target= "blank">View</a></td>
                                                    <input type="hidden" name= "oth_item7_path" value= "<?php echo $key2->oth_item7_path; ?>" >
                                                    <?php } ?>
                                                    <td><input type="file" name="oth_sup_doc7" class="form-control" id="oth_sup_doc7" ></td>
                                                </tr>
                                                <tr>
                                                    <td><span><strong>8</strong></span></td>            
                                                    <?php if($key2->oth_item8_path == ''){ ?>
                                                    <td><input type="text" name="oth_item8" class="form-control" id="oth_item8" ></td>                                                        
                                                    <td></td>
                                                    <input type="hidden" name= "oth_item8_path" >
                                                    <?php }else{ ?>
                                                    <td><input type="text" name="oth_item8" value= "<?php echo $key2->oth_item8; ?>" class="form-control" id="oth_item8" ></td>                                                        
                                                    <td><a href="<?php echo base_url($key2->oth_item8_path); ?>" target= "blank">View</a></td>
                                                    <input type="hidden" name= "oth_item8_path" value= "<?php echo $key2->oth_item8_path; ?>" >
                                                    <?php } ?>
                                                    <td><input type="file" name="oth_sup_doc8" class="form-control" id="oth_sup_doc8" ></td>
                                                </tr>

                                            <?php } ?>

                                            </tbody>
                                        
                                        </table>

                                    <?php } ?>

                                </div> 

                                <hr>
                            
                            </div>
                            
                            <!-- <hr> -->

                                
                            <div class="row">

                                <div class="col-md-12">

                                    <div class="form-group">

                                        <label class="control-label">Remarks</label>

                                        <textarea class="form-control" name="remarks" ></textarea>

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

                <?php } ?>

                </div>

            </div>

        </div>

    </div>

<?php

}

?>



<script>

    $(document).ready(function() {
        // Basic
        $('.dropify').dropify();

    })

</script>


<!-- For add row table -->
<script>

    $(document).ready(function(){

        $('.alert').hide();

        $("#addrow").click(function()
        {
            
            var newElement= '<tr>'
                            +'<td><input type="text" name="oth_item[]" class="form-control" id="oth_item" >'
                            +'</td>'
                            +'<td>'
                                +'<input type="file" name="oth_sup_doc[]" class="form-control" id="oth_sup_doc" >'
                            +'</td>'
                            +'<td>'
                                +'<button class="btn btn-danger" type= "button" data-toggle="tooltip" data-original-title="Remove Row" data-placement="bottom" id="removeRow"><i class="fa fa-trash" aria-hidden="true"></i></button>'
                            +'</td>'
                        +'</tr>';
                        
            $("#intro").append($(newElement)); 
            
                                    
        });

        // to change the value of total field as per fees field selected by adding rows
        $("#intro").on("click","#removeRow", function(){
            $(this).parents('tr').remove();
            //$('.amount_cls').change();
        });
    
    });

</script>
