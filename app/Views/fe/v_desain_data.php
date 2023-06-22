<div class="section tab-content mt-2 mb-1">

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3500">
                <img src="<?php echo base_url('assets/img/carousel/slider1.jpg') ?>" class="d-block w-100" alt="Exotic Fruits" />
            </div>
            <div class="carousel-item" data-bs-interval="3500">
                <img src="<?php echo base_url('assets/img/carousel/slider2.jpg') ?>" class="d-block w-100" alt="Exotic Fruits" />
            </div>
            <div class="carousel-item" data-bs-interval="3500">
                <img src="<?php echo base_url('assets/img/carousel/slider3.jpg') ?>" class="d-block w-100" alt="Exotic Fruits" />
            </div>
        </div>
    </div>

    <!-- waiting tab -->
    <div class="tab-pane fade show active mt-3" id="waiting" role="tabpanel">
        <div class="row">
            <?php foreach ($item as $data) { ?>
                <div class="col-6 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?php echo base_url('uploads/desain/' . $data['gambar']) ?>" alt="img" class="image-block imaged w-100" />
                        </div>
                        <a href="<?php echo "#DetailDialog" . $data['id'] ?>" class="btn btn-primary btn-block btn-sm" data-bs-toggle="modal">Detail</a>
                    </div>
                </div>
            <?php } ?>
            <!-- * waiting tab -->
        </div>
    </div>
</div>

<!-- Dialog Basic -->
<?php foreach ($item as $data) { ?>
    <div class="modal fade dialogbox" id="<?php echo "DetailDialog" . $data['id'] ?>" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo base_url('uploads/desain/' . $data['gambar']) ?>" alt="img" class="image-block imaged w-100" />
                    <h4 class="mt-2">Deskripsi</h4>
                    <p class="mt-2"><?= $data['tentang']; ?></p>
                    <h4 class="mt-2">Di buat oleh :</h4>
                    <h4 class="mt-2"><?= $data['karya']; ?></h4>
                </div>

            </div>
        </div>
    </div>
<?php } ?>
<!-- * Dialog Basic -->