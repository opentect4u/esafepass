<style>
.btn1 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 14px;
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
  padding: 16px 18px;
  font-size: 16px;
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
          <a href="#">Inward</a>
      </li>
      <li class="breadcrumb-item active">Application</li>
  </ol>
  <div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-upload"></i>
              Choose A File To Upload
    </div>
    <div class="card-body">
      <?php //echo $error;?> 
      <?php echo form_open_multipart('upload/do_upload/in');?> 
    
      <form action = "" method = "">
         <input class="btw1" type = "file" name = "userfile" size = "20" /> 
         <br /><br /> 
         <input class="btn1" type = "submit" value = "Upload" /> 
      </form> 
    </div>
  </div>
</div>    
    