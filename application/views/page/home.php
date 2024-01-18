</div>
    </div>
    <!-- End Header -->
    <!-- Main -->
    <div id="main">
      <div class="shell">
        <!-- Article -->
        <div class="article1">
          <h2>About me</h2>
          <p
              data-aos="fade-right"
              data-aos-delay="300"
              data-aos-duration="1000"
            >
              Halo! Nama saya Adi Satriyo, saya adalah seorang Programmer yang
              memiliki kemauan untuk mempelajari hal-hal baru. Saya mampu
              mengerjakan tugas dengan baik. Seorang pelajar penuh semangat dan harapan yang sedang menempuh pendidikan di bidang Ilmu Teknologi. Berusaha mengsah skill di bidang pengetahuan dan teknologi.
            </p>
            <p
              data-aos="fade-right"
              data-aos-delay="300"
              data-aos-duration="2000"
            >
              <b>Pengalaman Kerja:</b><br />
              PKL di Perusahaan RJ.Com
            </p>
            <p
              data-aos="fade-right"
              data-aos-delay="300"
              data-aos-duration="3000"
            >
              <b>Pendidikan Terakhir:</b><br />
              Sekolah Menengah Pertama 2021
            </p>
          <p>
            <!-- Donec mi eros, congue ut consectetur eget, pretium vitae orci.
            Aliquam pharetra ultricies lobortis. Morbi eget nisi lectus.
            Maecenas felis augue, molestie in vestibulum et, lacinia et leo.
            Suspendisse potenti. Maecenas eget est augue. Donec tincidunt mollis
            fermentum. -->
          </p>
        </div>
        <!-- End Article -->
        <!-- Gallery -->
        <style>
            .portfolio-item {
                margin: 10px; /*  margin  */
            }

            .article1 {
                margin: 50px; /*  margin */
            }

            .card-columns {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-gap: 0px; /* Jarak antara kartu */
            }

            .card {
                width: calc(33.33% -20px); /*33.33% untuk tiga kolom, dan -20px untuk margin */
                margin-bottom: 10px;
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
          <!-- <div class="card portfolio-item" style="width: 22%; margin-right: 18px;"> -->
            <!-- <img src="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $row->nama_wisata ?></h5>
              <p class="card-text"><?= $row->deskripsi ?></p>
               <a href="#" class="btn btn-primary">Link</a> -->
            <!-- </div> -->

          <!-- <div class="row row-cols-1 row-cols-md-3 g-4"> -->
            <!-- <div class="col">  -->
              <div class="card h-100 portfolio-item" style="width: 22%; margin-right: 18px;">
                <img src="<?= base_url('vendor/dokumentasi/') . $row->thumbnail ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $row->nama_wisata ?></h5>
                  <div class="content">
                    <p class="card-text"><?= $row->deskripsi ?></p>
                  </div>
                </div>
              </div>
            <!-- </div> -->
          <!-- </div>  -->
          <!-- </div> -->
            <?php
            endforeach;
            ?>
            <!-- <a href="<?= base_url('landingpage/dokumentasi/').$row->id_dokumentasi ?>"
              >View More</a
            > -->
          </div>
          </div>
        </div>
      <div class="cl">&nbsp;</div>
  <!-- End Gallery -->