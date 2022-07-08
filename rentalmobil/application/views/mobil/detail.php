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
              <li class="breadcrumb-item active">Detail</li>
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
                <h3 class="card-title">Detail Mobil</h3>

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
</head>
<body>
    <div class="col-md-12">
    <h3 style="text-align: center;">Detail Mobil</h3><br>
    <table border="1"  class="table">
        <thead>
            <tr style="text-align: center;">
                <th>ID</th>
                <th>Nomor Mobil</th>
                <th>Warna</th>
                <th>Biaya Sewa</th>
                <th>Deskripsi</th>
                <th>CC</th>
                <th>Tahun</th>
                <th>Merk</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $mbl -> id ?></td>
                <td><?php echo $mbl -> nopol ?></td>
                <td><?php echo $mbl -> warna ?></td>
                <td><?php echo $mbl -> biaya_sewa ?></td>
                <td><?php echo $mbl -> deskripsi ?></td>
                <td><?php echo $mbl -> cc ?></td>
                <td><?php echo $mbl -> tahun ?></td>
                <td><?php echo $mbl -> merk_id ?></td>
            </tr>
        </tbody>
    </table>
    <div class="col-md-5 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="<?=base_url()?>uploads/<?=$mbl->id?>.jpg" width="300"/>
                    <div class="mt-4">
                        <h4><?=$mbl->nopol;?></h4>
                        <p>Foto Mobil</p>
                        <?php echo $error;?>
                        <br/><br/>
                        <?php echo form_open_multipart('mobil/upload');?>
                        <input type="file" name="foto" size="300"/>
                        <input type="hidden" name="idmobil" value="<?=$mbl->id?>"/>
                        <br/><br/>
                        <input type="submit" value="Upload Foto" class="bts btn-success"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</body>
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