<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data transaksi
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data transaksi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <button class="btn btn-primary pull-right" id="add_button">Buat Transaksi</button>
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <span id="success_message">
                <?php if ($this->session->flashdata('success')): ?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                  </div>
                <?php endif ?>
              </span>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th width="50">No</th>
                    <th>Nama wisatawan</th>
                    <th>Nama Paket</th>
                    <th>Waktu transaksi</th>
                    <th><i class="fa fa-edit"> Detail</i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $data = $dt_transaksi->result_array();
                   foreach ($data as $row): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['nama_wisatawan']; ?></td>
                      <td><?php echo $row['nama_paket']; ?></td>
                      <td><?php echo $row['waktu']; ?></td>
                      <td><a href="#" title="Edit transaksi" class="detail" id="<?php echo $row['id_transaksi'] ?>"><i class="fa fa-edit"></i></a></td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->