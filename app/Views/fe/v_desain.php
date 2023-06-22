<!-- Transactions -->
<div class="section mt-2">
    <div class="section-title">Kategori Desain</div>
    <div class="transactions">
        <!-- item -->
        <?php foreach ($item as $data) { ?>
            <a href="<?php echo base_url('/desain_data&bagan=' . $data['kunci']) ?>" class="item">
                <div class="detail">
                    <img src="<?php echo base_url('uploads/desain/' . $data['gambar']) ?>" alt="img" class="image-block imaged w48">
                    <div>
                        <strong><?= $data['nama']; ?></strong>
                    </div>
                </div>
                <div class="right">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </div>
            </a>    
        <?php } ?>
        <!-- * item -->

    </div>
</div>
<!-- * Transactions -->