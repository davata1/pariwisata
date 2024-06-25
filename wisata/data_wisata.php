<?php include "header.php"; ?>
<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Data Wisata
        </h1>
        <p class="text-white link-nav">Halaman ini memuat informasi Tempat Wisata di Kabupaten Banyumas</p>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container">
    <div class="row">
      <?php
      $data = file_get_contents('http://localhost/wisata/ambildata.php');
      if (json_decode($data, true)) {
        $obj = json_decode($data);
        foreach ($obj->results as $item) {
      ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="img/about/info-img.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php echo $item->nama_wisata; ?></h4>
                <p class="card-text"><?php echo $item->alamat; ?></p>
                <p class="card-text">Rp. <?php echo $item->harga_tiket; ?></p>
              </div>
              <div class="card-footer">
                <a href="detail.php?id_wisata=<?php echo $item->id_wisata; ?>" class="btn btn-primary">Detail dan Lokasi</a>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "Data tidak ada.";
      }
      ?>
    </div>
  </div>
</section>

