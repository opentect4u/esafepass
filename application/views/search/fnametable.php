
<div class="row page-titles">
        <div class="col-md-8 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Application</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo site_url('search/byAppNo');?>">Search by First Name</a></li>
                <li class="breadcrumb-item active">Applications</li>
            </ol>
        </div>
        <div class="col-md-4 col-12 align-self-center">
            <div class="alert alert-<?php if (isset($this->session->flashdata('msg')['status'])) { echo $this->session->flashdata('msg')['status']; } ?>"></div>
        </div>
    </div>
    
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
                                    <!-- <th style= "text-align: center;">Date</th> -->
                                    <th style= "text-align: center;">Name</th>
                                    <!-- <th style= "text-align: center;">Applicant Id</th> -->
                                    <th style= "text-align: center;">Organisation</th>
                                    <th style= "text-align: center;">Satus</th>
                                    <th style= "text-align: center;">Archive Flag</th>
                                    <th style= "text-align: center;">View</th>
                                    <!-- <th style= "text-align: center;">Download</th> -->
                                   
                                </tr>

                            </thead>
                            
                            <tbody> 

                                <?php 
                                
                                $status = true;
                                if($data) {
                                    
                                    foreach($data as $a_dtls) {

                                ?>

                                        <tr>

                                            <td style= "text-align: center;"><?php echo $a_dtls->appl_no; ?></td>

                                            <!-- <td style= "text-align: center;"><?php echo date('d-m-Y',strtotime($a_dtls->appl_dt)); ?></td> -->
                                            
                                            <td style= "text-align: center;">
                                                <?php if($a_dtls->appl_mid_name == '' ) 
                                                {
                                                    $mid_name = '';
                                                }
                                                else
                                                {
                                                    $mid_name = $a_dtls->appl_mid_name;
                                                }
                                                
                                                //echo $a_dtls->appl_name.' '.$mid_name.' '.$a_dtls->appl_last_name;
                                                echo $a_dtls->appl_name; ?>
                                            </td>
                                            
                                            <!-- <td style= "text-align: center;"><?php //echo $a_dtls->user_id; ?></td> -->
                                            
                                            <td style= "text-align: center;"><?php echo $a_dtls->org_name; ?></td>
                                            
                                            <td style= "text-align: center;"><?php  if($a_dtls->status=='U'){

                                                        echo "New Application"; 

                                                       }elseif($a_dtls->status=='A'){

                                                        echo "Approved";

                                                       }elseif($a_dtls->status=='H'){

                                                        echo "In Process";

                                                       }
                                                       elseif($a_dtls->status=='R'){

                                                        echo "Rejected";

                                                       }else{

                                                        echo "Resubmitted";

                                                       }

                                                ?>

                                            </td>
                                            
                                            <td style= "text-align: center;">
                                                <?php 
                                                    if($a_dtls->archive=='Y'){
                                                        echo "Yes";
                                                    }else{
                                                        echo "No";  
                                                    }
                                                ?>
                                            </td>

                                            <td class="text-nowrap" style= "text-align: center;">
                                                
                                                <a href="<?php echo site_url('adminApp/viewApp?appl_no='.$a_dtls->appl_no.'&sl_no='.$a_dtls->sl_no.''); ?>"
                                                title="View" target= "blank">
                                            
                                                    <i class="fas fa-eye m-r-10" aria-hidden="true" style="color: #64c3a3"></i>
                                                
                                                </a>

                                            </td>
                                            
                                            <!-- <td class="text-nowrap" style= "text-align: center;">
                                                
                                                <a href="<?php //echo site_url('adminApp/downloadDocs?appl_no='.$a_dtls->appl_no.'&sl_no='.$a_dtls->sl_no.''); ?>"
                                                title="Download" target= "blank">
                                            
                                                    <i class="fas fa-download m-r-10" aria-hidden="true" style="color: #64c3a3"></i>
                                                
                                                </a>

                                            </td> -->
                                                        
                                        </tr>

                                <?php
                                        
                                        }

                                    }

                                    else {

                                        echo "<tr><td colspan='10' style='text-align: center;'>No data Found</td></tr>";

                                    }
                                ?>
                            
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
            
        </div>

    </div>
    
    
    
<script>

    $(document).ready(function() {

        $('.alert').hide();

        <?php if($this->session->flashdata('msg')['message']){ ?>

            $('.alert').html('<?php echo $this->session->flashdata('msg')['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>').show();

        <?php } ?>

    });
    
</script>


<script>
    
    $(document).ready(function(){

        $('#demo').DataTable({
            "paging": true
        });
        
    })

</script>