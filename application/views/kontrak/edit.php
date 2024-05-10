<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Data Kontrak</h1>
            <hr>

            <!-- Form order -->
            <form class="user" action="<?= base_url('kontrak/edit_prosses');?>" method="post">
            <input type="hidden" value="<?php echo $kontrak['id_kontrak'];?>" name="id_kontrak">
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label for="kontrak" class="form-label">Durasi Kontrak</label>
                        <input type="text" value="<?php echo $kontrak['durasi_kontrak']?>" name="durasi_kontrak" class="form-control " id="durasi_kontrak">
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