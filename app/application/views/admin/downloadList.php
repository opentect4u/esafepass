<div class="row page-titles">
        <div class="col-md-8 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Download List</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                <li class="breadcrumb-item active"><a href="<?php echo site_url('adminApp/application');?>">Application</a></li>
                <li class="breadcrumb-item active">Download : <?php echo $applNo; ?></li>
            </ol>
        </div>
        <div class="col-md-4 col-12 align-self-center">
            <div class="alert alert-<?php echo $this->session->flashdata('msg')['status']; ?>"></div>
        </div>
    </div>
    
    <div class="row">
    
        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h6 class="card-subtitle"></h6>

                    <div class="table-responsive">
                        <caption><?php echo "Application No : ".$applNo; ?></caption>
                        <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">

                            <thead>

                                <tr>
                                    
                                    <th>Sl No</th>
                                    <th>Item Name</th>
                                    <th>link</th>
                                    <th>Details</th>
                                    
                                </tr>

                            </thead>
                            
                            <tbody> 

                                <?php 
                                
                                $status = true;
                                if($link) {
                                    
                                    foreach($link as $a_dtls) {
                                        $i = 0;
                                ?>

                                        <tr>
                                            <td><?php echo $i+1;; ?></td>
                                            <td><?php echo "Passport"; ?></td>
                                            <?php if($a_dtls->appl_pp_path != ''){ ?>
                                                <!-- <td><a href="<?php echo base_url($a_dtls->appl_pp_path); ?>">Download</a></td> -->
                                                <td><a href="<?php $item = "appl_pp_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                                <td><?php echo $a_dtls->applcnt_pasprt_no; ?></td>
                                            <?php }else{ ?>
                                                <td></td>
                                                <td></td>
                                            <?php }$i++; ?>
                                        </tr>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo "Kin Passport"; ?></td>
                                            <?php if($a_dtls->kin_pp_path){ ?>
                                                <!-- <td><a href="<?php echo base_url($a_dtls->kin_pp_path); ?>">Download</a></td> -->
                                                <td><a href="<?php $item = "kin_pp_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                                <td><?php echo $a_dtls->kin_psprt_no; ?></td>
                                            <?php }else{ ?>
                                                <td></td>
                                                <td></td>
                                            <?php }$i++; ?>
                                        </tr>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo "BOSIET/HUET Certificate"; ?></td>
                                            <?php if($a_dtls->huit_cert_path){ ?>
                                                <!-- <td><a href="<?php echo base_url($a_dtls->huit_cert_path); ?>">Download</a></td> -->
                                                <td><a href="<?php $item = "huit_cert_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                                <td><?php echo date("d-m-Y",strtotime($a_dtls->huit_exp_dt)); ?></td>
                                            <?php }else{ ?>
                                                <td></td>
                                                <td></td>
                                            <?php }$i++; ?>
                                        </tr>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo "Medical Certificate"; ?></td>
                                            <?php if($a_dtls->med_cert_path){ ?>
                                                <!-- <td><a href="<?php echo base_url($a_dtls->med_cert_path); ?>">Download</a></td> -->
                                                <td><a href="<?php $item = "med_cert_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                                <td><?php echo date("d-m-Y",strtotime($a_dtls->med_exp_dt)); ?></td>
                                            <?php }else{ ?>
                                                <td></td>
                                                <td></td>
                                            <?php }$i++; ?>
                                        </tr>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo "H2S Expiry Certificate"; ?></td>
                                            <?php if($a_dtls->h2s_cert_path){ ?>
                                                <!-- <td><a href="<?php echo base_url($a_dtls->h2s_cert_path); ?>">Download</a></td> -->
                                                <td><a href="<?php $item = "h2s_cert_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                                <td><?php echo date("d-m-Y",strtotime($a_dtls->h2s_exp_dt)); ?></td>
                                            <?php }else{ ?>
                                                <td></td>
                                                <td></td>
                                            <?php }$i++; ?>
                                        </tr>
                                        <?php if($a_dtls->oth_item1_path){ ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $a_dtls->oth_item1; ?></td>
                                            <!-- <td><a href="<?php echo base_url($a_dtls->oth_item1_path); ?>">Download</a></td> -->
                                            <td><a href="<?php $item = "oth_item1_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php if($a_dtls->oth_item2_path){ ?>
                                        <tr>
                                            <td><?php echo $i+1;; ?></td>
                                            <td><?php echo $a_dtls->oth_item2; ?></td>
                                            <!-- <td><a href="<?php echo base_url($a_dtls->oth_item2_path); ?>">Download</a></td> -->
                                            <td><a href="<?php $item = "oth_item2_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php if($a_dtls->oth_item3_path){ ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $a_dtls->oth_item3; ?></td>
                                            <!-- <td><a href="<?php echo base_url($a_dtls->oth_item3_path); ?>">Download</a></td> -->
                                            <td><a href="<?php $item = "oth_item3_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php if($a_dtls->oth_item4_path){ ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $a_dtls->oth_item4; ?></td>
                                            <!-- <td><a href="<?php echo base_url($a_dtls->oth_item4_path); ?>">Download</a></td> -->
                                            <td><a href="<?php $item = "oth_item4_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php if($a_dtls->oth_item5_path){ ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $a_dtls->oth_item5; ?></td>
                                            <!-- <td><a href="<?php echo base_url($a_dtls->oth_item5_path); ?>">Download</a></td> -->
                                            <td><a href="<?php $item = "oth_item5_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php if($a_dtls->oth_item6_path){ ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $a_dtls->oth_item6; ?></td>
                                            <!-- <td><a href="<?php echo base_url($a_dtls->oth_item6_path); ?>">Download</a></td> -->
                                            <td><a href="<?php $item = "oth_item6_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php if($a_dtls->oth_item7_path){ ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $a_dtls->oth_item7; ?></td>
                                            <!-- <td><a href="<?php echo base_url($a_dtls->oth_item7_path); ?>">Download</a></td> -->
                                            <td><a href="<?php $item = "oth_item7_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; } ?>
                                        <?php if($a_dtls->oth_item8_path){ ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $a_dtls->oth_item8; ?></td>
                                            <!-- <td><a href="<?php echo base_url($a_dtls->oth_item8_path); ?>">Download</a></td> -->
                                            <td><a href="<?php $item = "oth_item8_path"; echo site_url('adminApp/downloadItem?aplNo='.$applNo.'&item='.$item.'&sl_no='.$i); ?>">Download</a></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++; } ?>
                                        
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

