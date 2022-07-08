<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/mobil/index')?>">Mobil</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Mobil</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Form Edit Mobil</h2>
<br>
<?php echo form_open("mobil/save") ?>
  <div class="form-group row">
    <label for="nopol" class="col-4 col-form-label">Nomor Plat Mobil</label> 
    <div class="col-8">
      <input id="nopol" name="nopol" placeholder="Masukkan Nomor Plat Mobil" type="text" value="<?php echo $obj_mobil->nopol?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="warna" class="col-4 col-form-label">Warna</label> 
    <div class="col-8">
      <input id="warna" name="warna" placeholder="Masukkan Warna Mobil" type="text" value="<?php echo $obj_mobil->warna?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya_sewa" class="col-4 col-form-label">Biaya Sewa</label> 
    <div class="col-8">
      <input id="biaya_sewa" name="biaya_sewa" placeholder="Masukkan Biaya" type="text" value="<?php echo $obj_mobil->biaya_sewa?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" type="text" value="<?php echo $obj_mobil->deskripsi?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="cc" class="col-4 col-form-label">CC</label> 
    <div class="col-8">
      <input id="cc" name="cc" placeholder="Masukkan CC" type="text" value="<?php echo $obj_mobil->cc?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tahun" class="col-4 col-form-label">Tahun</label> 
    <div class="col-8">
      <input id="tahun" name="tahun" placeholder="Masukkan Tahun" type="text" value="<?php echo $obj_mobil->tahun?>" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="merk_id" class="col-4 col-form-label">Mobil Id</label> 
    <div class="col-8">
      <select class= "form-control" name="merk_id" id="merk_id">
        <?php include "config.php";
        $result = mysqli_query($connect, "SELECT * FROM merk");
        while ($row = mysqli_fetch_array($result))
        { ?>
        <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
        <?php } ?>
      </select>
    </div>
  </div>                               
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  <?php echo form_close() ?>
</div>
</div>
</html>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->