 <div class="row page-titles">

        <div class="col-md-6 col-8 align-self-center">

            <h3 class="text-themecolor m-b-0 m-t-0">Form</h3>

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="<?php echo site_url('main/login');?>">Home</a></li>
                
                <li class="breadcrumb-item"><a href="#">Search by date</a></li>

                <li class="breadcrumb-item active">Select</li>

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

            <h4 class="m-b-0 text-white">Search Form</h4>

        </div>

        <div class="card-body">

            <form class="form-horizontal" 
                id="form"
                method="post" 
                action="<?php echo site_url('search/viewByDate');?>"
            >

                <div class="form-body">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <h5 align="left">Select Date Range</h5>
            
                            </div>

                        </div>

                    </div>

                </div>

                <hr class="m-t-0 m-b-40">

                <div id= "section1">

                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">From Date<font color= "red"> *</font></label>

                                <input type='date' class="form-control" id="from_dt" name="from_dt" required
                                />
                                
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label class="control-label">To Date<font color= "red"> *</font></label>

                                <input type='date' class="form-control" id="to_dt" name="to_dt" required
                                />
                                
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

        </div>

    </div>

</div>


<script>

    $(document).ready(function(){

        $('.alert').hide();

    })

</script>