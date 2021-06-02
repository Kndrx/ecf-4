  <?php wp_footer();
  ?>

  <!-- FOOTER -->
  <footer class="bg-light py-3">
    <div class="container">
      <div class="row mx-0 align-items-center">
        <div class="col-4">
          <div class="row mx-0">
            <div><i class="fas fa-phone-alt me-3"></i>+687 98.07.90</div>
            <div class="my-2"><i class="far fa-envelope me-3"></i>lepays@magazine.nc</div>
            <div><i class="fas fa-map-marker-alt me-3"></i>586 Rue de la Galliéni, 98800 Nouméa</div>
          </div>
          <div class="row mx-0 mt-3">
            <form>
              <h4>Souscrivez à notre newsletter</h4>
              <input type="email" class="form-control my-2" placeholder="Entrer votre mail" />
              <input type="submit" class="btn btn-primary w-100 text-center" value="Envoyer" />
            </form>
          </div>
        </div>
        <div class="col-6">
          <div class="w-75 mx-auto">
            <form>
              <h4>Contactez-nous</h4>
              <input type="text" class="form-control" placeholder="Nom, prénom" />
              <input type="email" class="form-control my-2" placeholder="Email" />
              <textarea class="form-control my-2" placeholder="Message" rows="3"></textarea>
              <input type="submit" class="btn btn-primary w-100" value="Envoyer" />
            </form>
          </div>
        </div>
        <div class="col-2">
          <div class="row ms-auto social-network">
            <div class="col-12">
              <div class="text-center">
                <a href="<?php echo home_url( '/' ); ?>">
                <img height="100" width="100" src="<?php echo get_template_directory_uri(); ?>/img/lepays-logo.png" alt="Logo">
                </a>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center">
              <div><i class="fab fa-facebook-square"></i></div>
              <div class="mx-2"><i class="fab fa-twitter-square"></i></div>
              <div class="me-2"><i class="fab fa-google-plus-square"></i></div>
              <div><i class="fab fa-linkedin"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>