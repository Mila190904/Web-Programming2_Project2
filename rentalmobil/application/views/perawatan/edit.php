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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/perawatan/index')?>">Perawatan</a></li>
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
                <h3 class="card-title">Perawatan</h3>

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
<h2>Form Input Perawatan</h2>
<br>
<?php echo form_open("perawatan/save") ?>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <input id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" type="text" value="<?php echo  $obj_perawatan->tanggal?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="biaya" class="col-4 col-form-label">Biaya</label> 
    <div class="col-8">
      <input id="biaya" name="biaya" placeholder="Masukkan Biaya" type="text" value="<?php echo  $obj_perawatan->biaya?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="km_mobil" class="col-4 col-form-label">Km Mobil</label> 
    <div class="col-8">
      <input id="km_mobil" name="km_mobil" placeholder="Masukkan Km Mobil" type="text" value="<?php echo  $obj_perawatan->km_mobil?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <input id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" type="text" value="<?php echo  $obj_perawatan->deskripsi?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="mobil_id" class="col-4 col-form-label">Mobil Id</label> 
    <div class="col-8">
      <select class= "form-control" name="mobil_id" id="mobil_id">
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
    <label for="jenis_perawatan_id" class="col-4 col-form-label">Mobil Id</label> 
    <div class="col-8">
      <select class= "form-control" name="jenis_perawatan_id" id="jenis_perawatan_id">
        <?php include "config.php";
        $result = mysqli_query($connect, "SELECT * FROM jenis_perawatan");
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
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->