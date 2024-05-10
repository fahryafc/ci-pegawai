<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-6">
                        <a href="<?= base_url('pegawai/add');?>" class="btn btn-primary mb-3 pull-right">Tambah Pegawai</a>
                        </div>
                    </div>


                    <!-- End Modal Order -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Pegawai </th>
                                    <th>Jabatan</th>
                                    <th>Kontrak</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($pegawai as $x): ?>	
                                <tr>
                                    <td><?php echo $x->nama_pegawai ?></td>
                                    <td><?php echo $x->jabatan ?></td>
                                    <td><?php echo $x->kontrak ?></td>
                                    <td>
                                        <a href="<?= base_url('pegawai/edit/'.$x->id_pegawai);?>" class="badge badge-success"> Edit </a>
                                        <a href="<?= base_url('pegawai/delete/'.$x->id_pegawai);?>" class="badge badge-danger"> Delete </a>
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->