<!-- BEGIN Page Content -->
<div class="content">
    <div class="container-fluid g-5">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN Portlet -->
                <div class="portlet">
                    <div class="portlet-header portlet-header-bordered">
                        <h3 class="portlet-title">Edit Desain</h3>
                    </div>
                    <form action="<?php echo base_url('/be_proses_edit_anggota&id=' . $item['id']) ?>" method="POST" enctype="multipart/form-data">
                        <div class="portlet-body">
                            <!-- BEGIN Grid -->
                            <div class="d-grid gap-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama" name="nama" required value="<?= $item['nama']; ?>">
                                    <label for="floatingInput">Nama</label>
                                </div>
                                <div class="form-floating">
                                    <input type="file" class="form-control" name="foto" id="foto">
                                    <label for="floatingPassword">Foto</label>
                                </div>
                                <div class="form-floating">
                                    <textarea name="tentang" id="tentang" class="form-control"><?= $item['tentang']; ?></textarea>
                                    <label for="floatingInput">Tentang</label>
                                </div>
                                

                                <button type="submit" class="btn btn-primary btn-block btn-lg my-2">Simpan</button>
                            </div>
                            <!-- END Grid -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->