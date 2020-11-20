    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Dashboard</h3>
            <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> -->
                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                <!-- <li class="breadcrumb-item active">Dashboard</li> -->
            </ol>
        </div>
        
    </div>
    
    <div class="row">
        
        <div class="col-md-6 col-lg-4">
            <div class="card card-body">
                
                <div class="row">
                    
                    <div class="col p-r-0 align-self-center">
                        <h4 class="font-light m-b-0">New Applications</h4>
                        <h6 class="text-muted"></h6></div>
                    
                    <div class="col text-right align-self-center">
                        <?php $new = ($pend_balance->num_row); ?>
                        <div data-label="<?php echo isset($new)? ($new) : 0 ; ?>" class="css-bar m-b-0 css-bar-info css-bar-100"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-4">
            <div class="card card-body">
                
                <div class="row">
                    
                    <div class="col p-r-0 align-self-center">
                        <h4 class="font-light m-b-0">In Process</h4>
                        <h6 class="text-muted"></h6></div>
                    
                    <div class="col text-right align-self-center">
                        <div data-label="<?php echo isset($hld_balance->num_row)? $hld_balance->num_row : 0 ; ?>" class="css-bar m-b-0 css-bar-success css-bar-100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-body">
                
                <div class="row">
                    
                    <div class="col p-r-0 align-self-center">
                        <h4 class="font-light m-b-0">Approved</h4>
                        <h6 class="text-muted"></h6></div>
                    
                    <div class="col text-right align-self-center">
                        <div data-label="<?php echo isset($aprv_balance->num_row)? $aprv_balance->num_row : 0 ; ?>" class="css-bar m-b-0 css-bar-primary css-bar-100"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        
        <div class="col-md-6 col-lg-4">
            <div class="card card-body">
                
                <div class="row">
                    
                    <div class="col p-r-0 align-self-center">
                        <h4 class="font-light m-b-0">Rejected</h4>
                        <h6 class="text-muted"></h6></div>
                    
                    <div class="col text-right align-self-center">
                        <div data-label="<?php echo isset($rej_balance->num_row)? $rej_balance->num_row : 0 ; ?>" class="css-bar m-b-0 css-bar-danger css-bar-100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-body">
                
                <div class="row">
                    
                    <div class="col p-r-0 align-self-center">
                        <h4 class="font-light m-b-0">Re Submitted</h4>
                        <h6 class="text-muted"></h6></div>
                    
                    <div class="col text-right align-self-center">
                        <div data-label="<?php echo isset($re_balance->num_row)? $re_balance->num_row : 0 ; ?>" class="css-bar m-b-0 css-bar-warning css-bar-100"></div>
                        <!-- <div data-label="<?php echo '0' ; ?>" class="css-bar m-b-0 css-bar-warning css-bar-100"></div> -->
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-4">
            <div class="card card-body">
                
                <div class="row">
                    
                    <div class="col p-r-0 align-self-center">
                        <h4 class="font-light m-b-0">Total Applications</h4>
                        <h6 class="text-muted"></h6></div>
                    
                    <div class="col text-right align-self-center">
                        <div data-label="<?php echo isset($tot_balance->tot_application)? $tot_balance->tot_application : 0 ; ?>" class="css-bar m-b-0 css-bar-primary css-bar-100"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="col-md-6 col-lg-3">
            <div class="card card-body">
                
                <div class="row">
                    
                    <div class="col p-r-0 align-self-center">
                        <h4 class="font-light m-b-0">Pending To HR</h4>
                        <h6 class="text-muted"></h6></div>
                    
                    <div class="col text-right align-self-center">
                        <div data-label="<?php //echo isset($hr->count)? $hr->count : 0 ; ?>" class="css-bar m-b-0 css-bar-danger css-bar-100"></div>
                    </div>
                </div>
            </div>
        </div>-->

    </div>