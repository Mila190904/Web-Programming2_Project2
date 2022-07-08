
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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Perawatan</li>
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
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perawatan</title>
    <script>
        function hapusPerawatan(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="col-md-12">
      <br>
    <h3 style="text-align: center;">Perawatan</h3><br>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Biaya</th>
                <th>Km mobil</th>
                <th>Deskripsi</th>
                <th>Mobil Id</th>
                <th>Jenis Perawatan Id</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($perawatan as $prwt) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $prwt -> tanggal ?></td>
                <td><?php echo $prwt -> biaya ?></td>
                <td><?php echo $prwt -> km_mobil ?></td>
                <td><?php echo $prwt -> deskripsi ?></td>
                <td><?php echo $prwt -> mobil_id ?></td>
                <td><?php echo $prwt -> jenis_perawatan_id ?></td>
                <td>
                    <a href= <?php echo base_url("index.php/perawatan/edit/$prwt->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp;
                    <a href= <?php echo base_url("index.php/perawatan/delete/$prwt->id") ?> 
                    class="btn btn-danger btn-lg active" 
                    onclick=" return hapusPerawatan('Apakah Anda yakin ingin menghapus perawatan pada tanggal <?php echo $prwt-> tanggal ?> ?')" >Delete</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/perawatan/form") ?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
    <br>
</body>
</html>
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
