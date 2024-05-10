<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>
            <hr>

            <!-- Form order -->
            <form class="user" action="<?= base_url('pegawai/edit_prosses');?>" method="post">
            <input type="hidden" value="<?php echo $pegawai['id_pegawai'];?>" name="id_pegawai">
            
            <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                        <input type="text" name="nama_pegawai" class="form-control " id="nama_pegawai" value="<?= $pegawai['nama_pegawai'] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="jabatan">Jabatan</label>
                        <select class="form-control " name="jabatan" id="jabatan">
                            <?php foreach ($jabatan as $j ) : ?>
                            <option value="<?= $j->nama_jabatan ?>"><?= $j->nama_jabatan?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="kontrak">Kontrak</label>
                        <select class="form-control" name="kontrak" id="kontrak">
                            <?php foreach ($kontrak as $k ) : ?>
                            <option value="<?= $k->durasi_kontrak ?>"><?= $k->durasi_kontrak?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!--  -->
                        <input type="submit" name="submit" class="btn btn-primary  pull-right" value="Simpan" >
                    </div>
                </div>
                </a>
                <hr>
            </form>
            <!-- end form -->
            </div>
        </div>
        <!-- /.container-fluid -->
</div>
</div>
    <!-- End of Main Content -->