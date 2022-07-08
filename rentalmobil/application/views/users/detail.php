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
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/users/index')?>">Kelola User</a></li>
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
                <h3 class="card-title">Detail Kelola User</h3>

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
    <title>Detail Kelola User</title>
</head>
<body>
<div class="col-md-12">
    <h3 style="text-align: center;">Detail Kelola User</h3><br>
    <table border="1"  class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Created at</th>
                <th>last login</th>
                <th>Status</th>
                <th>Role </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $usr -> id ?></td>
                <td><?php echo $usr -> username ?></td>
                <td><?php echo $usr -> password ?></td>
                <td><?php echo $usr -> email ?></td>
                <td><?php echo $usr -> created_at ?></td>
                <td><?php echo $usr -> last_login ?></td>
                <td><?php echo $usr -> status ?></td>
                <td><?php echo $usr -> role ?></td>
            </tr>
        </tbody>
    </table>
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
