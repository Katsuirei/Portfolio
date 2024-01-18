 <!-- Contact -->
 <div class="article">
          <h2>Contact me</h2>
          <form name="portfolio-contact-form">
            <div class="cl">&nbsp;</div>
            <div class="column-cnt">
              <div class="cl">&nbsp;</div>
              <div class="column">
                <label for="your-name">Name</label>
                <span class="text-field">
                  <input type="text" id="name" name="nama" value="" />
                </span>
              </div>
              <div class="column">
                <label for="your-email">E-mail address</label>
                <span class="text-field">
                  <input type="text" id="email" name="email" value="" />
                </span>
              </div>
              <div class="cl">&nbsp;</div>

              <style>
                .contact-info-table {
                  border-collapse: collapse;
                  width: 100%;
                }

                .contact-info-table th, .contact-info-table td {
                  padding: 8px 0;
                  /* border-bottom: 1px solid #ccc; */
                  text-align: left;
                }

                .contact-info-table th {
                  width: 20%; /* Lebar */
                }
              </style>

          <div class="container" style="margin-top: 20px; margin-bottom: -30px;">
            <div class="col-md-10">
              <div class="alert alert-warning alert-dismissible fade show d-none my-alert" role="alert">
                <strong>Thank You!</strong> Your message has been send.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            </div>
          </div>

              <p>
              <table class="contact-info-table">
                <tr>
                  <th> Email</th>
                  <td>: <?= $settings['email']  ?><br></td>
                </tr>
                <tr>
                  <th> Twitter</th>
                  <td> : <?= $settings['twitter']  ?><br></td>
                </tr>
                <tr>
                  <th> Instagram</th>
                  <td>: <?= $settings['instagram']  ?><br></td>
                </tr>
                <tr>
                  <th> Facebook</th>
                  <td>: <?= $settings['facebook']  ?><br></td>
                </tr>
              </table>
                <!-- Donec mi eros, congue ut consectetur eget, pretium vitae orci.
                Aliquam pharetra ultricies lobortis. Morbi eget nisi lectus.
                Maecenas felis augue, molestie in vestibulum et, lacinia et leo.
                Suspendisse potenti. Maecenas eget est augue. Donec tincidunt
                mollis fermentum. -->
              </p>
            </div>
            <div class="column-big">
              <label for="your-message">Message</label>
              <span class="text-area">
                <textarea id="your-message" name="pesan" rows="" cols=""></textarea>
              </span><br>
            <button type="submit" class="btn btn-outline-warning btn-kirim"><b>Send Message</b></button>
              <button class="btn btn-warning btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
              <span role="status">Loading...</span>
            </button>
            </div>
            <div class="cl">&nbsp;</div>
          </form>
        </div>
        <!-- End Contact -->
      </div>
    </div>
    <!-- End Main -->
    <div id="footer">
      <p>
        Created by
        <a href="<?= base_url() ?>">Adi Satriyo</a> | All Rights Reserved &copy; 
        <script>document.write(new Date().getFullYear());</script>
      </p>
    </div>
    <div align="center">
      
    </div>

    <!-- Bootstrap 5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Animate on scroll -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <!-- Akhir Animate on scroll -->

    <!-- Portfolio Contact Form -->
  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxiNdjAHTckzWDNd86QYvm-R1ax6b1EijDBIXuqZaunF3bKnSUeyvGg7UIE8IhTq1k/exec'
    const form = document.forms['portfolio-contact-form']
    const btnKirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');

    form.addEventListener('submit', e => {
      e.preventDefault()
      // ketika tombol send dikirim
      // tampilkan tombol loading, hilangkan tombol kirim
        btnLoading.classList.toggle('d-none');
        btnKirim.classList.toggle('d-none');

      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
      // tampilkan tombol kirim, hilangkan tombol loading
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');
      // tampilkan alert
          myAlert.classList.toggle('d-none');
      // reset form
          form.reset();
          console.log('Success!', response)
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>

  </body>
</html>