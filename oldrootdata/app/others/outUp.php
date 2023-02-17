<style>
.btn1 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn1:hover {
  background-color: RoyalBlue;
}
</style>

<div class="container-fluid">

  <ol class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="#">Outward</a>
      </li>
      <li class="breadcrumb-item active">Upload</li>
  </ol>

            <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Outward Response Files
              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                <button class="btn1" onclick="location.href='<?php echo site_url("Upload/do_upload"); ?>'">
                  <a><i class="fa fa-arrow-up fa-lg" aria-hidden="true"></i> New </a> 
                </button>


            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sl.No.</th>
                      <th>Date</th>
                      <th>File</th>
                      <th style="text-align: center">Download</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sl.No.</th>
                      <th>Date</th>
                      <th>File</th>
                      <th style="text-align: center">Download</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      foreach($data as $row):
                    ?>
                    <tr>
                      <td><?php echo $row->sl_no;?></td>
                      <td><?php echo date('d/m/Y',strtotime($row->trans_dt));?></td>
                      <td><?php echo $row->file_name; ?></td>
                      <td style="text-align: center"><a href=<?php echo base_url('/outward_data/upld/'.$row->file_name);?> download>
                        <button class="btn1">
                          <i class="fa fa-download" aria-hidden="false"></i>
                          </button>
                          </a> 
                      </td>
                    </tr>
                    <?php
                        endforeach;
                      
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted"><?php $update = date('d/m/Y',strtotime(date('Y-m-d')));
                                                            echo "Updated on: $update";
                                                      ?>
            </div>
          </div>
</div>
</div>
</div>
