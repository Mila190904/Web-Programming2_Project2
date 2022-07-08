
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
              <li class="breadcrumb-item active">Sewa</li>
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
              <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sewa</title>
    <script>
        function hapusSewa(pesan){
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
    <h3 style="text-align: center;">Sewa</h3><br>
    <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Akhir</th>
                <th>Tujuan</th>
                <th>No KTP</th>
                <th>Users Id</th>
                <th>Mobil Id</th>
                <th>Action</th>


            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($sewa as $sw) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $sw ->  tanggal_mulai?></td>
                <td><?php echo $sw -> tanggal_akhir ?></td>
                <td><?php echo $sw -> tujuan ?></td>
                <td><?php echo $sw -> noktp ?></td>
                <td><?php echo $sw -> users_id ?></td>
                <td><?php echo $sw -> mobil_id ?></td>
                
                <td>
                    <a href= <?php echo base_url("index.php/sewa/edit/$sw->id") ?> 
                    class="btn btn-success btn-lg active" >Edit</a>
                    &nbsp; 
                    <a href= <?php echo base_url("index.php/sewa/delete/$sw->id") ?> 
                    class="btn btn-danger btn-lg active" 
                    onclick=" return hapusSewa('Apakah Anda yakin ingin menghapus sewa <?php echo $sw->tanggal_mulai  ?> ?')" >Hapus</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
 
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <br>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <!-- /.card-body -->

 <div class="card-footer">
                Footer
              </div>
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

