<div class="section mt-2">

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
            <div class="carousel-item" data-bs-interval="3500">
                <img src="<?php echo base_url('assets/img/carousel/slider4.jpg') ?>" class="d-block w-100" alt="Exotic Fruits" />
            </div>
        </div>
    </div>

    <div class="section full mt-4 mb-3">
        <div class="section-heading padding">
            <h2 class="title">Kategori Desain</h2>
            <a href="<?php echo base_url('/desain') ?>" class="link">Lihat Semua</a>
        </div>

        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php foreach ($item as $data) { ?>
                        <li class="splide__slide">
                            <a href="<?php echo base_url('/desain_data&bagan=' . $data['kunci']) ?>">
                                <div class="blog-card" style="height:250px;"> 
                                    <img src="<?php echo base_url('uploads/desain/' . $data['gambar']) ?>" alt="image" class="imaged w-100">
                                    <div class="text">
                                        <h4 class="title"><?= $data['nama']; ?></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->

    </div>

    <div class="section full mt-4 mb-3">
        <div class="section-heading padding">
            <h2 class="title"> About </h2>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="p-1">Sistem Aplikasi ini memuat tentang hasil Desain yang kami kerjakan selama masa Prakerin/ Praktek Kerja Lapangan </p>
            </div>
        </div>
    </div>

    <div class="section full mt-4 mb-3">
        <div class="section-heading padding">
            <h2 class="title"> Our Team </h2>
            <a href="<?php echo base_url('/anggota') ?>" class="link">Lihat Semua</a>
        </div>
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
    </div>

</div>