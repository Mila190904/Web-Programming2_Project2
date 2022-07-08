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
              <li class="breadcrumb-item active">Kelola User</li>
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
                <h3 class="card-title">Kelola User</h3>

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
    <title>Kelola User</title>
    <script>
        function hapusUsers(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<br>
<body>
    <div class="col-md-12">
    <h3 style="text-align: center;">Kelola User</h3><br>
    <table border="1" class="table">
        <thead>
            <tr style="text-align: center;">
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor =1;
            foreach ($users as $usr) {
            ?>
            <tr align='center'>
                <td><?php echo $nomor ?></td>
                <td><?php echo $usr -> username ?></td>
                <td><?php echo $usr -> password ?></td>
                <td><?php echo $usr -> email ?></td>
                <td>
                    <a href=<?php echo base_url("index.php/users/detail/$usr->id") ?>
                    class="btn btn-primary btn-lg active">Detail </a>
                    &nbsp;
                    <a href=<?php echo base_url("index.php/users/edit/$usr->id") ?>
                    class="btn btn-success btn-lg active">Edit</a>
                    &nbsp;
                    <a href=<?php echo base_url("index.php/users/delete/$usr->id") ?>
                    class="btn btn-danger btn-lg active" onclick= "return hapusUsers('Apakah Anda yakin ingin menghapus user yang bernama <?php echo $usr-> username ?>')">Delete</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
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

 