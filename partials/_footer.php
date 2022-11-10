<footer>
<?php
  // Important : Ajouter pageSize=20 à l'URL
  $apiKey = '10de25f59ee64273a44892f1c436bbab';
  $lang = 'fr';
  $q = 'actualité';
  $page = 2;

  $url = 'http://newsapi.org/v2/everything?q=' . $q . '&apiKey=' . $apiKey . '&page=' . $page . '&language=' . $lang . '&pageSize=20';

  $response = file_get_contents($url);
  $response = loadJson($url);
  // ----------------------------------------------------------------------

  // Now decode the JSON using json_decode():
  $json = json_decode($response, true); // decode the JSON into an associative array
  ?>
  
   <div class="footer-top">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-sm-8">
          <img src="assets/images/logo.svg" class="footer-logo" alt="" />
          <h5 class="font-weight-normal mt-4 mb-5">
            Le site web que vous consultez présentement a été consu à des fins d'apprentissage. Il s'agit du premier travail pratique a avoir été évalué lors de la troisième session du cours d'Intégration dans le cadre de l'AEC en technique de développement web au collège O'Sullivan. On évaluait ici l'aptitude de l'élève à mélanger différentes technologies soit le PHP, le HTML, le CSS et le JSON à partir de gabarits dans le but de créer un site web dynamique.
          </h5>
          <ul class="social-media mb-3">
            <li>
              <a href="#">
                <i class="mdi mdi-facebook"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="mdi mdi-youtube"></i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="mdi mdi-twitter"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4">
          <h3 class="font-weight-bold mb-3">ARTICLES RÉCENTS</h3>
          <div class="row">
            <div class="col-sm-12">
              <div class="footer-border-bottom pb-2">
                <div class="row">
                  <?php for ($i = 0; $i < 3; ++$i) {
                    $article = $json['articles'][$i];
                  ?>
                    <div class="col-3">
                      <img src="<?php echo $article['urlToImage'] ?>" alt="image inexistante" class="img-fluid" />
                    </div>
                    <div class="col-9">
                      <h5 class="font-weight-600">
                        <?php echo $article['title'] ?>
                      </h5>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center">
            <div class="fs-14 font-weight-600">
              © Olivier Amyot-Ladouceur
            </div>
            <div class="fs-14 font-weight-600">
              17 octobre 2022
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>