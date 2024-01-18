<style>
    .portfolio-item {
        margin: 0; /* Menghilangkan margin */
        padding: 0; /* Menghilangkan padding */
    }
</style>

<div class="gallery">
  <div class="cl">&nbsp;</div>
    <h2 class="left">Galerry Project</h2>
    <div class="portfolio-item last">
  <div class="portfolio-item last" data-aos="fade-up" data-aos-duration="2000">
    <?php
    foreach ($dokumentasi as $row) :
    ?>
      <div class="portfolio-item" style="vertical-align: top;">
        <div class="portfolio-wrap">
          <img src="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" style="max-width: 100%; max-height: 200px; object-fit: cover;" class="img-fluid">
            <div class="portfolio-links">
              <a href="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row->nama_wisata ?>"></a>
              <a href="<?= base_url('landingpage/dokumentasi/') . $row->id_dokumentasi ?>#portfolio-details" title="More Details"></a>
            </div>
        </div>
      </div>
    <?php
    endforeach;
    ?>
    <a href="<?= base_url('landingpage/dokumentasi/').$row->id_dokumentasi ?>"
      >View More</a
    >
  </div>
  </div>
</div>