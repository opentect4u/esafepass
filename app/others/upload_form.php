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

  <div class="card mb-3">
    <div class="card-header">
       <i class="fas fa-arrow-up"></i>
         Upload Outward Response Files
    </div>
   <div class="card-body">
   <div class="table-responsive">
		<?php echo $error;?>

		<?php echo form_open_multipart('upload/do_upload');?>

		<form>

			<input class="btn1" type="file" name="userfile" size="20" />

				<br /><br />

			<input class="btn1" type="submit" value="upload" />

		</form>
   </div>
   </div>
  </div>
</div>