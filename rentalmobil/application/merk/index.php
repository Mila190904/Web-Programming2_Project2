<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MERK</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Merk</li>
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
                <h3 class="card-title">Merk</h3>

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
              <table border="1" class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Produk</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($merk as $mrk) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?php echo $mrk -> nama ?></td>
                <td><?php echo $mrk -> produk ?></td>
                <td>
                    <a href= <?php echo base_url("index.php/merk/edit/$mrk->id") ?> 
                    class="btn btn-success btn-lg active" >Update</a>
                    &nbsp; 
                    <a href= <?php echo base_url("index.php/merk/delete/$mrk->id") ?> 
                    class="btn btn-danger btn-lg active" 
                    onclick=" return hapusMerk('Apakah Anda yakin ingin menghapus merk yang bernama <?php echo $mrk-> nama ?> ?')" >Delete</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
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