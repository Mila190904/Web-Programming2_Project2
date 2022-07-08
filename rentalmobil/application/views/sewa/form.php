<?php
  if(!$this->session->has_userdata('USERNAME')){
    redirect('/login');
}
?>
<div class="container py-5">
<div class="py-5">
  <div class="py-5">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php echo form_open("sewa/save") ?>
  <div class="form-group row ">
    <label for="tanggal_mulai" class="col-4 col-form-label">Awal Sewa</label> 
    <div class="col-8">
      <input id="tanggal_mulai" name="tanggal_mulai" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_akhir" class="col-4 col-form-label">Akhir Sewa</label> 
    <div class="col-8">
      <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tujuan" class="col-4 col-form-label">Tujuan Anda</label> 
    <div class="col-8">
      <input id="tujuan" name="tujuan" placeholder="Masukkan Tujuan Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="noktp" class="col-4 col-form-label">No. KTP</label> 
    <div class="col-8">
      <input id="noktp" name="noktp" placeholder="Masukkan No. Ktp" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="users_id" class="col-4 col-form-label">Id Anda</label> 
    <div class="col-8">
    <select class="form_control" name="users_id" id="users_id">
      <?php include "config.php";
      $result = mysqli_query($connect, "SELECT * FROM users");
      while ($row = mysqli_fetch_array($result))
      { ?>
      <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
      <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">Id Mobil</label> 
    <div class="col-8">
    <select class="form_control" name="mobil_id" id="mobil_id">
      <?php include "config.php";
      $result = mysqli_query($connect, "SELECT * FROM mobil");
      while ($row = mysqli_fetch_array($result))
      { ?>
      <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
      <?php } ?>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Submit</button>
    </div>
    <?php echo form_close()?>
  </div>
</div>
</div>
</div>