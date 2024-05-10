<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>
            <hr>

            <!-- Form order -->
            <form class="user" action="<?= base_url('jabatan/edit_prosses');?>" method="post">
            <input type="hidden" value="<?php echo $jabatan['id_jabatan'];?>" name="id_jabatan">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="jabatan" class="form-label">Nama Jabatan</label>
                        <input type="text" value="<?php echo $jabatan['nama_jabatan']?>" name="nama_jabatan" class="form-control " id="nama_jabatan">
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