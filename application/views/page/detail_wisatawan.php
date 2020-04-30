  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Wisatawan
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-users"></i> Data Wisatawan</a></li>
        <li class="active">Detail Wisatawan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Wisatawan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Detail Wisatawan</a></li>
              <li><a href="#tab_2" data-toggle="tab">Riwayat Traveling</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box box-info">
                  <?php echo form_open('', 'method="post" class="form-horizontal" id="form_wisatawan"'); ?>
                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama wisatawan</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_wisatawan" id="nama_wisatawan" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">NIK</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_wisatawan" id="nama_wisatawan" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-8">
                          <select class="form-control">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Tgl Lahir</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control" name="nama_wisatawan" id="nama_wisatawan" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Hp</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_wisatawan" id="nama_wisatawan" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" name="nama_wisatawan" id="nama_wisatawan" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-8">
                          <textarea class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_wisatawan" id="nama_wisatawan" required="required">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="tab-pane" id="tab_2">
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
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->