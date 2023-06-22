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
                    <form action="<?php echo base_url('/be_proses_edit_desain&id=' . $item['id']) ?>" method="POST" enctype="multipart/form-data">
                        <div class="portlet-body">
                            <!-- BEGIN Grid -->
                            <div class="d-grid gap-3">
                                <div>
                                    <label for="floatingInput">Desain</label>
                                    <input type="text" class="form-control" id="desain" name="desain" value="<?= $item['nama']; ?>" required>
                                </div>
                                <div>
                                    <label for="floatingPassword">Gambar</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="gambar" id="gambar" >
                                        <label class="input-group-text" for="inputGroupFile02"><?= $item['gambar']; ?></label>
                                    </div>
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