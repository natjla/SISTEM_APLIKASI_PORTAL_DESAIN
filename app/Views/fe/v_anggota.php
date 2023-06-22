<div class="section full m-3">

    <?php foreach ($item as $member) { ?>
        <div class="tab-pane fade show active" id="waiting" role="tabpanel">
            <div class="row">
                <div class="col-12 mb-2">
                    <div class="bill-box">
                        <div class="img-wrapper">
                            <img src="<?php echo base_url('uploads/profile/' . $member['foto']) ?>" alt="image" class="imaged w-75">
                        </div>
                        <div class="price"><?= $member['nama']; ?></div>
                        <div class="card mb-2">
                            <div class="card-body">
                                <p><?= $member['tentang']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>
</div>