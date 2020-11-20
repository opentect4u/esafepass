    <div class="row page-titles">
        <div class="col-md-8 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Application</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                <li class="breadcrumb-item active">Application</li>
            </ol>
        </div>
        <div class="col-md-4 col-12 align-self-center">
            <div >
            <font color="red">
                <?php echo $this->session->flashdata('msg')['status']; ?>
                </font>
            </div>
        </div>
    </div>

    <?php if($this->session->flashdata('error')){echo $this->session->flashdata('error');} ?>
    
    <div class="row">
    
        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h6 class="card-subtitle"></h6>

                    <div class="table-responsive">

                        <!-- <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10"> -->
                        <table id="demo" class="table m-t-30 table-hover contact-list" >

                            <thead>

                                <tr>
                                    <th style= "text-align: center;">Application No.</th>
                                    <th style= "text-align: center;">Name</th>
                                    <th style= "text-align: center;">Satus</th>
                                    <!-- <th style= "text-align: center;">Upload Doc</th> -->
                                    <th style= "text-align: center;">Training Info</th>
                                    <th style= "text-align: center;">Action</th>
                                    <th style= "text-align: center;">Pass</th>
                                </tr>

                            </thead>
                            
                            <tbody> 

                                <?php 
                                
                                $status = true;
                                if($appl_dtls) {
                                    
                                    foreach($appl_dtls as $a_dtls) {

                                ?>

                                        <tr>

                                            <td style= "text-align: center;"><?php echo $a_dtls->appl_no; ?></td>

                                            <td style= "text-align: center;">
                                                <?php if($a_dtls->appl_mid_name == '' ) 
                                                {
                                                    $mid_name = '';
                                                }
                                                else
                                                {
                                                    $mid_name = $a_dtls->appl_mid_name;
                                                }
                                                
                                                echo $a_dtls->appl_name.' '.$mid_name.' '.$a_dtls->appl_last_name; ?>
                                            </td>
                                            
                                            <td style= "text-align: center;"><?php  if($a_dtls->status=='U'){

                                                        echo "New Application"; 

                                                       }elseif($a_dtls->status=='A'){

                                                        echo "Approved";

                                                       }elseif($a_dtls->status=='R'){

                                                        echo "Rejected";

                                                       }
                                                       elseif($a_dtls->status=='H'){

                                                        echo "In Process";

                                                       }else{

                                                        echo "Resubmitted";

                                                       }

                                                ?>

                                            </td>
                                            

                                            <!--<td><?php echo ($a_dtls->status == 'U')? '<span class="label label-danger">Unaprove</span>':'<span class="label label-success">Recommended</span>'; ?></td>-->
                                            
                                            <!-- <td class="text-nowrap" style= "text-align: center;">
                                                <?php if($a_dtls->status == 'U'){ ?>

                                                    <a href="<?php echo site_url('application/uploadDocs?appl_no='.$a_dtls->appl_no.'&sl_no='.$a_dtls->sl_no.''); ?>"
                                                    title="Upload">
                                                
                                                        <i class="fas fa-upload m-r-10" aria-hidden="true" style="color: #64c3a3"></i>
                                                    
                                                    </a>

                                                <?php }?>
                                            </td> -->

                                            <td class="text-nowrap" style= "text-align: center;">
                                                <?php if($a_dtls->status != 'A'){ ?>

                                                    <a href="<?php echo site_url('training/add?appl_no='.$a_dtls->appl_no.''); ?>"
                                                    title="Upload">
                                                
                                                        <i class="fas fa-plus m-r-10" aria-hidden="true" style="color: #64c3a3"></i>
                                                    
                                                    </a>

                                                <?php }
                                                else{?>

                                                        <i class="fa fa-ban" aria-hidden="true" style="color: #fc4b6c"></i>

                                                <?php } ?>
                                            </td>

                                            <td class="text-nowrap" style= "text-align: center;">
                                                
                                                <?php if($a_dtls->status != 'A'){ ?>  

                                                    <a href="<?php echo site_url('application/edit?appl_no='.$a_dtls->appl_no.''); ?>"
                                                        title="Edit"
                                                        style= "text-align: center;"
                                                    >

                                                        <i class="fas fa-pencil-alt text-inverse m-r-10" style="color: #007bff"></i>
                                                        
                                                    </a>

                                                    <a href="<?php echo site_url('application/delete?appl_no='.$a_dtls->appl_no.'&sl_no='.$a_dtls->sl_no.''); ?>" 
                                                    title="Delete"
                                                    onclick="return confirm('Are you sure you want to delete this item?');"
                                                    style= "text-align: center;"
                                                    >
                                                    
                                                        <i class="fas fa-window-close text-danger"></i> 
                                                        
                                                    </a>

                                                <?php }else{ ?>

                                                    <a href="<?php echo site_url('application/edit?appl_no='.$a_dtls->appl_no.''); ?>" 
                                                    title="View"
                                                    style= "text-align: center;"
                                                    >
                                                    
                                                        <i class="fa fa-eye"></i> 
                                                        
                                                    </a>

                                                <?php } ?>
                                                
                                            </td>

                                            <td class="text-nowrap" style= "text-align: center;">
                                            
                                                <?php if($a_dtls->status == 'A'){ ?>
                                                    <a href="<?php echo site_url('application/getPass?appl_no='.$a_dtls->appl_no); ?>" target="_blank"><i class="fas fa-download m-r-10" aria-hidden="true" style="color: #64c3a3"></i></a>
                                                <?php }else { ?>
                                                    <!-- echo "Not Assigned"; -->
                                                    <i class= "fas fa-times m-r-10" aria-hidden="true" style="color: #fc4b6c"></i>
                                                <?php }?>

                                            </td>
                                                        
                                        </tr>

                                <?php
                                        
                                        }

                                    }

                                    else {

                                        echo "<tr><td colspan='10' style='text-align: center;'>No data Found</td></tr>";

                                    }
                                ?>
                            
                            </tbody>

                            <!--<tfoot>

                                <tr>
                                    <td colspan="2">
                                    <?php
                                        if($status) {
                                    ?>
                                        <a class="btn btn-info btn-rounded"
                                           href="<?php echo site_url('application/add'); ?>" 
                                         >New Application</a>
                                    <?php
                                        }
                                    ?>
                                    </td>
                                    
                                    <td colspan="7">
                                        <div class="text-right">
                                            <ul class="pagination"> </ul>
                                        </div>
                                    </td>

                                </tr>

                            </tfoot>-->

                        </table>

                        <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">

                            <div class="modal-dialog modal-sm">

                                <div class="modal-content">

                                    <div class="modal-header" style="margin-left: 1px">

                                        <h4 class="modal-title" id="mySmallModalLabel">Are you sure?</h4>

                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                    </div>

                                    <form id="delFrom" method="post" action="<?php //echo site_url('leave/delete'); ?>">

                                        <input type="hidden" name="trans_cd" id="del" />

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                                        </div>
                                    
                                    </form>

                                </div>
                                
                            </div>

                        </div>

                    </div>

                </div>

            </div>
            
        </div>

    </div>
    

    <script>
    
        $(document).ready(function(){

            $('.delete').click(function(){

                $('#del').val($(this).attr('id'));

            });

        });

    </script>
    
    <script>
   
        $(document).ready(function() {

            $('.alert').hide();

            <?php if($this->session->flashdata('msg')['message']){ ?>

                $('.alert').html('<?php echo $this->session->flashdata('msg')['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>').show();

            <?php } ?>

        });
        
    </script>

