  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Paket
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-flag"></i> Data Paket</a></li>
        <li class="active">Detail Paket</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Detail Paket</h3>

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
              <li class="active"><a href="#tab_1" data-toggle="tab">Detail Paket</a></li>
              <li><a href="#tab_2" data-toggle="tab">Daftar Wisatawan</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="box box-info">
                  <?php echo form_open('', 'method="post" class="form-horizontal" id="form_paket"'); ?>
                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Nama paket</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_paket" id="nama_paket" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Tgl Berangkat</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control" name="nama_paket" id="nama_paket" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Tgl Pulang</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control" name="nama_paket" id="nama_paket" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Batas Pendaftaran</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control" name="nama_paket" id="nama_paket" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Kuota</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_paket" id="nama_paket" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Fasilitas</label>
                        <div class="col-sm-8">
                          <textarea class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Persyaratan</label>
                        <div class="col-sm-8">
                          <textarea class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Kapal</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_paket" id="nama_paket" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Penginapan</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_paket" id="nama_paket" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Biaya</label>
                        <div class="col-sm-8">
                          <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input type="text" class="form-control" name="ktr_persentasi" id="ktr_persentasi" required="required">
                          </div>
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
                      <th>Nik</th>
                      <th>Gender</th>
                      <th>HP</th>
                      <th>Alamat</th>
                      <th><i class="fa fa-edit"></i></th>
                      <th><i class="fa fa-trash"></i></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $data = $dt_wisatawan->result_array();
                     foreach ($data as $row): ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['nama_wisatawan']; ?></td>
                        <td><?php echo $row['nik']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['hp']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><a href="<?php echo base_url('detail_wisatawan/'.$row['id_wisatawan']) ?>" title="Detail wisatawan" class="detail"><i class="fa fa-edit"></i></a></td>
                        <td><a href="<?php echo base_url('wisatawan/hapus/'.$row['id_wisatawan']) ?>" title="Hapus wisatawan"><i class="fa fa-trash"></i></a></td>
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