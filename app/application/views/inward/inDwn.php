<style>
.btn1 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 10px 12px;
  font-size: 14px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn1:hover {
  background-color: RoyalBlue;
}

.btw1 {
  background-color: #616664;
  border: none;
  color: white;
  padding: 8px 10px;
  font-size: 12px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btw1:hover {
  background-color: RoyalBlue;
}
</style>

<div class="container-fluid">

  <ol class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="#">Application</a>
      </li>
      <li class="breadcrumb-item active">Reports</li>
  </ol>

            <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Inward Clearing Files</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Sl.No.</th>
                      <th>File</th>
                      <th style="text-align: center">Reports</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Sl.No.</th>
                      <th>File</th>
                      <th style="text-align: center">Reports</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      foreach($data as $key=>$i):
                    ?>
                    <tr>
                      <td><?php echo ($key+1);?></td>
                      <td><?php echo $i; ?></td>
                      <td style="text-align: center"><a href=<?php echo base_url('/outward_data/inwd/'.$i);?> download>
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