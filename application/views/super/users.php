<style>
.avatar {
  border-radius: 50%;
}
</style>
    <div class="row page-titles">
        <div class="col-md-8 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Users</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
        </div>
        <div class="col-md-4 col-12 align-self-center">
            <div style="color:red" class="alert alert-<?php if (isset($this->session->flashdata('msg')['status'])) { echo $this->session->flashdata('msg')['status']; } ?>"></div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="card-title"></h4>

                    <h6 class="card-subtitle"></h6>

                    <div class="table-responsive">

                        <!-- <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="5"> -->
                        <table id="demo" class="table m-t-30 table-hover contact-list" >

                            <thead>

                                <tr>
                                
                                    <th>Sl.No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Status</th>
                    <?php if($_SESSION['user_type']!='A'){ ?>
                                    <th>Edit</th>
                    <?php } ?>
                                    <th>Reset Password</th>
                                </tr>

                            </thead>
                            
                            <tbody> 

                                <?php 
                                
                                if($user_dtls) {

                                    $i=1;
                                    
                                    foreach($user_dtls as $u_dtls) {

                                ?>

                                        <tr>

                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $u_dtls->user_name.' '.$u_dtls->user_last_name; ?></td>
                                            <td><?php echo $u_dtls->user_id;?></td>
                                            <td><?php if($u_dtls->user_type=='O'){
                                                            echo "General";
                                                      }
                                                      elseif($u_dtls->user_type=='A'){
                                                            echo "Admin";
                                                      }else{
                                                            echo "Super Admin";
                                                      }      
                                                 ?>
                                            </td>     
                                            <td><?php if($u_dtls->verify_stat=='A'){

                                                        echo "Active";    

                                                      }else{

                                                        echo "Inactive";    

                                                      } 
                                                ?>
                                            </td>
                                            
                                            <?php if($_SESSION['user_type']!='A'){ ?>
                                                <td style= "text-align: center;">
                                                    <a id="edt"
                                                    href="<?php echo site_url('super/editUser?user_id='.$u_dtls->user_id);?>"
                                                    class="edit"
                                                    title="Edit"
                                                    >
                                                        <i class="fas fa-pencil-alt m-r-10" style="color: #007bff"></i>
                                                        
                                                    </a>
                                                </td>
                                            <?php } ?>
                                            
                                            <td style= "text-align: center;">
                                                <a href="<?php echo site_url('super/resetUser?user_id='.$u_dtls->user_id); ?>" class= "reset" title= "Reset">
                                                    <i class="fa fa-undo fa-inverse" style="color: #007bff"></i>
                                                </a>
                                                
                                            </td>

                                        </tr>

                                <?php

                                    $i=$i+1;
                                        
                                        }

                                    }

                                    else {

                                        echo "<tr><td colspan='10' style='text-align: center;'>No data Found</td></tr>";

                                    }
                                ?>
                            
                            </tbody>

                            

                        </table>

                        <!--<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            
                            <div class="modal-dialog">
                               
                                <div class="modal-content">
                                    
                                        <div id="modal"></div>
                                    
                                </div>

                            </div>

                        </div>-->

                    </div>

                </div>

            </div>
            
        </div>

    </div>
    

    <script>
    
        $(document).ready(function(){

            $('#demo').DataTable({
                "paging": true
            });
            

            /*$('#add').click(function(){

                $.get(
                    
                    "<?php echo site_url('employee/add') ?>"
                    
                    ).done(function(data){

                        $('#modal').html(data);
                        $('#add-contact').modal('show');

                });

            });*/

            /*$('.edit').click(function(){

                $.get(
                    
                    "<?php //echo site_url('employee/edit') ?>",

                    {
                        emp_no: $(this).attr('id')
                    }
                    
                    ).done(function(data){

                        $('#modal').html(data);
                        $('#add-contact').modal('show');

                });

            });*/

        });

    </script>
            
    <script>
   
        $(document).ready(function() {

            $('.alert').hide();

            <?php if($this->session->flashdata('msg')['message']){ ?>

                $('.alert').html('<?php echo $this->session->flashdata('msg')['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>').show();

            <?php } ?>

        });
        
    

   /* $(document).ready( function (){

        $('.status').click(function () {

            var indexNo =   $('.status').index(this),
                transId =   $(this).attr('id'),
                value   =   $(this).attr('val');

            $.get('<?php echo site_url("employee/updateStatus"); ?>',
                {
                    trans_id: transId,
                    value:    value
                }
            )
            .done(function(data){

                if(value == 'A'){
                    
                    $('.badge:eq('+indexNo+')').attr('class', 'badge badge-danger');
                    $('.badge:eq('+indexNo+')').html('Inactive');
                    $('.status:eq('+indexNo+')').attr('val', data);

                }
                else{
                    
                    $('.badge:eq('+indexNo+')').attr('class', 'badge badge-success');
                    $('.badge:eq('+indexNo+')').html('Active');
                    $('.status:eq('+indexNo+')').attr('val', data);

                } 
            });
            
        });

    });*/

</script>
