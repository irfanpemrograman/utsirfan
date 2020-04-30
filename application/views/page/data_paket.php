<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data paket
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data paket</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <button class="btn btn-primary pull-right" id="add_button"><i class="fa fa-plus"> Tambah paket</i></button>
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
                    <th>Nama paket</th>
                    <th>Tgl Berangkat</th>
                    <th>Kuota</th>
                    <th>Biaya</th>
                    <th><i class="fa fa-edit"></i></th>
                    <th><i class="fa fa-trash"></i></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  $data = $dt_paket->result_array();
                   foreach ($data as $row): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $row['nama_paket']; ?></td>
                      <td><?php echo $row['tgl_berangkat']; ?></td>
                      <td><?php echo $row['kuota']; ?></td>
                      <td><?php echo $row['biaya']; ?></td>
                      <td><a href="<?php echo base_url('detail_paket/'.$row['id_paket']) ?>" title="Detail paket" class="detail" ><i class="fa fa-edit"></i></a></td>
                      <td><a href="<?php echo base_url('paket/paket/hapus/'.$row['id_paket']) ?>" title="Hapus paket"><i class="fa fa-trash"></i></a></td>
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

  <!-- modal -->
  <div class="modal fade" id="paketModal">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="box box-info">
            <?php echo form_open('', 'method="post" class="form-horizontal" id="form_paket"'); ?>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama paket</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_paket" id="nama_paket" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tgl Berangkat</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="nama_paket" id="nama_paket" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Tgl Pulang</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="nama_paket" id="nama_paket" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Batas Pendaftaran</label>
                  <div class="col-sm-9">
                    <input type="date" class="form-control" name="nama_paket" id="nama_paket" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kuota</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_paket" id="nama_paket" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Fasilitas</label>
                  <div class="col-sm-9">
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Persyaratan</label>
                  <div class="col-sm-9">
                    <textarea class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Kapal</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_paket" id="nama_paket" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Penginapan</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="nama_paket" id="nama_paket" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 control-label">Biaya</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <span class="input-group-addon">Rp</span>
                      <input type="text" class="form-control" name="ktr_persentasi" id="ktr_persentasi" required="required">
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="hidden" name="id_paket" id="id_paket">
          <input type="hidden" name="data_action" id="data_action" value="Insert" />
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" name="action" id="action" value="add" />
        </div>
            </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  <script type="text/javascript">
    $(document).ready(function () {
      
      $('#add_button').click(function () {
        $('#form_paket')[0].reset();
        $('.modal-title').text("Tambah Data paket");
        $('#action').val('Tambahkan');
        $('#data_action').val("Insert");
        $('#paketModal').modal('show');
      });
      
    })
  </script>