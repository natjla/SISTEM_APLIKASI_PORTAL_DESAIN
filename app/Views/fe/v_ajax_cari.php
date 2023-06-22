
<?php
if (!empty($dt_hasil)) {
    foreach ($dt_hasil as $data) { ?>
        <a href="<?php echo base_url('/desain_data&bagan=' . $data->kunci) ?>" class="item">
            <div class="detail">
                <img src="<?php echo base_url('uploads/desain/' . $data->gambar) ?>" alt="img" class="image-block imaged w48">
                <div>
                    <strong><?= $data->nama; ?></strong>
                </div>
            </div>
            <div class="right">
                <ion-icon name="chevron-forward-outline"></ion-icon>
            </div>
        </a>
    <?php } ?>

<?php } else { ?>
    <div class="section text-center mt-3 mb-3">Data tidak ditemukan</div>
<?php } ?>