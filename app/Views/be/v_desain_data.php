<div class="content">
    <div class="container-fluid g-5">
        <div class="row">
            <div class="col-12">
                <div class=" text-end my-3">
                    <a href="#tambahdata" data-bs-toggle="modal">
                        <button type="button" class="btn btn-primary ">
                            <i class="fa fa-plus"></i> Tambah Data
                        </button>
                    </a>
                </div>

                <!-- BEGIN Portlet -->
                <div class="portlet">
                    <div class="portlet-header portlet-header-bordered">
                        <h3 class="portlet-title">Data Desain</h3>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN Datatable -->
                        <table id="table-1" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th scope="col">Nama Desain</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Tentang</th>
                                    <th scope="col">Karya</th>
                                    <th scope="col" class="text-end">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($item as $data) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i++ ?></th>
                                        <td><?= $data['nama']; ?></td>
                                        <td><?= $data['gambar']; ?></td>
                                        <td><?= $data['tentang']; ?></td>
                                        <td><?= $data['karya']; ?></td>

                                        <td class="text-end text-primary">
                                            <a href="<?php echo "#DialogInfo" . $data['id'] ?>" data-bs-toggle="modal">
                                                <button type="button" class="btn btn-info">
                                                    <i class="fa fa-info"></i>
                                                </button>
                                            </a>
                                            <a href="<?php echo base_url('/be_edit_data_desain&id=' . $data['id']) ?>">
                                                <button type="button" class="btn btn-warning">
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </a>

                                            <a href="<?php echo "#DialogBasic" . $data['id'] ?>" data-bs-toggle="modal" class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <!-- END Datatable -->
                    </div>

                </div>
                <!-- END Portlet -->
            </div>
        </div>
    </div>
</div>

<!-- Dialog Basic -->
<?php foreach ($item as $data) { ?>
    <div class="modal fade dialogbox" id="<?php echo "DialogBasic" . $data['id'] ?>" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Hapus</h5>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        Apakah Kamu Yakin?
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">CANCEL</a>
                        <a href="<?php echo base_url('/be_hapus_data_desain&id=' . $data['id']) ?>" class="btn btn-text-primary">
                            IYA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- * Dialog Basic -->

<!-- Dialog Basic -->
<?php foreach ($item as $data) { ?>
    <div class="modal fade dialogbox" id="<?php echo "DialogInfo" . $data['id'] ?>" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title">Gambar <?= $data['gambar']; ?></h5>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('uploads/desain/' . $data['gambar']) ?>" alt="" class="image-block imaged w-100">
                </div>
                <div class="modal-footer">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-secondary" data-bs-dismiss="modal">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- * Dialog Basic -->

<!-- BEGIN Modal -->
<div class="modal fade" id="tambahdata">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Desain</h5>
                <button type="button" class="btn btn-label-danger btn-icon" data-bs-dismiss="modal">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <form action="<?php echo base_url('/be_proses_tambah_desain_data&bagan=' . $id) ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="d-grid gap-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="desain" name="desain" required>
                            <label for="desain">Nama Desain</label>
                        </div>
                        <div class="form-floating">
                            <input type="file" class="form-control" name="gambar" id="gambar">
                            <label for="gambar">Gambar</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Tentang gambar ini" name="tentang" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Tentang</label>
                        </div>
                        <div class="form-floating">
                                    <label for="floatingInput">Hasil Karya</label>
                                    <select class="form-select" aria-label="Default select example" name="karya">
                                        <option value=""></option>
                                        <?php foreach($member as $data) { ?>
                                        <option value="<?= $data['nama'] ?>"><?= $data['nama'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-outline-danger">Tidak</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END Modal -->