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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/perawatan/index')?>">Sewa</a></li>
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
                <h3 class="card-title">Sewa</h3>

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
<h2>Form Input Sewa</h2>
<br>
<?php echo form_open("sewa/save") ?>
  <div class="form-group row">
    <label for="tanggal_mulai" class="col-4 col-form-label">Tanggal Mulai</label> 
    <div class="col-8">
      <input id="tanggal_mulai" name="tanggal_mulai" placeholder="Masukkan Tanggal Mulai" type="text" value="<?php echo  $obj_sewa->tanggal_mulai?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
    <div class="col-8">
      <input id="tanggal_akhir" name="tanggal_akhir" placeholder="Masukkan Tanggal Akhir" type="text" value="<?php echo  $obj_sewa->tanggal_akhir?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="tujuan" class="col-4 col-form-label">Tujuan</label> 
    <div class="col-8">
      <input id="tujuan" name="tujuan" placeholder="Masukkan Tujuan" type="text" value="<?php echo  $obj_sewa->tujuan?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="no_ktp" class="col-4 col-form-label">No. KTP</label> 
    <div class="col-8">
      <input id="no_ktp" name="no_ktp" placeholder="Masukkan No KTP" type="text" value="<?php echo  $obj_sewa->noktp?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Users Id</label> 
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
    <label for="mobil_id" class="col-4 col-form-label">Mobil Id</label> 
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