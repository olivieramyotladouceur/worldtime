<!DOCTYPE html>
<html lang="zxx">

<head>
  <?php include "partials/_head.php" ?>
  <title>TP1 - Intégration III</title>
  <style>
    .text-shadow {
      text-shadow: 2px 0px 3px #000000;
    }
  </style>
</head>

<body>
  <?php
  $apiKey = '10de25f59ee64273a44892f1c436bbab';
  $lang = 'fr';
  $q = 'actualité';

  $url = 'http://newsapi.org/v2/everything?q=' . $q . '&apiKey=' . $apiKey . '&language=' . $lang . '&pageSize=20';

  $response = file_get_contents($url);

  // Now decode the JSON using json_decode():
  include 'partials/_function_curl.php';
  $response = loadJson($url);
  // ----------------------------------------------------------------------

  // Now decode the JSON using json_decode():
  $json = json_decode($response, true); // decode the JSON into an associative array
  ?>

  <div class="container-scroller">
    <div class="main-panel">

      <?php include "partials/_navbar.php" ?>

      <!-- partial -->
      <div class="content-wrapper">
        <div class="container ">
          <div class="row " data-aos="fade-up">
            <?php $article = $json['articles'][0] ?>
            <div class="col-xl-8 stretch-card grid-margin ">
              <div class="position-relative stretch-card">
                <img src="<?php echo $article['urlToImage'] ?>" alt="image inexistante" class="img-fluid " />
                <div class="banner-content ">
                  <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                    L'ACTUALITÉ
                  </div>
                  <h1 class="mb-0 text-shadow "><?php echo $article['title'] ?></h1>
                  <h3 class="mb-2 text-shadow">
                    <?php echo $json['articles'][0]['description'] ?>
                  </h3>
                  <div class="fs-12">
                    <span class="mr-2 text-shadow">
                      <p><?php echo $article['publishedAt'] ?></p>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 stretch-card grid-margin">
              <div class="card bg-dark text-white">
                <div class="card-body">
                  <h2>NOUVELLES DE L'HEURE</h2>
                  <?php for ($index = 1; $index < 4; $index++) {
                    $article = $json['articles'][$index] ?>
                    <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                      <div class="col-7 pr-3">
                        <h6><?php echo $article['title'] ?></h5>
                          <h6><?php echo $article['publishedAt'] ?></p=h6>
                      </div>
                      <div class="col-5 rotate-img">
                        <img src="<?php echo $article['urlToImage'] ?>" alt="image inexistante" class="img-fluid " />
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up">
            <div class="col-lg-3 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2>Catégories</h2>
                  <ul class="vertical-menu">
                    <li><a href="page.php?q=LITTÉRATURE">Littérature</a></li>
                    <li><a href="page.php?q=MUSIQUE">Musique</a></li>
                    <li><a href="page.php?q=THÉÂTRE">Théâtre</a></li>
                    <li><a href="page.php?q=PEINTURE">Peinture</a></li>
                    <li><a href="page.php?q=CINÉMA">Cinéma</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-9 stretch-card grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <?php for ($index = 4; $index < 7; $index++) {
                      $article = $json['articles'][$index]; ?>
                      <div class="col-sm-4 grid-margin">
                        <div class="position-relative">
                          <div class="rotate-img">
                            <img src="<?php echo $article['urlToImage'] ?>" alt="image inexistante" class="img-fluid " />
                          </div>
                          <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold">Dernières nouvelles</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8  grid-margin">
                        <h2 class="mb-2 font-weight-600">
                          <?php echo $article['title'] ?>
                        </h2>
                        <div class="fs-13 mb-2">
                          <span class="mr-2"><?php echo $article['publishedAt'] ?></span>
                        </div>
                        <p class="mb-0">
                          <?php echo $json['articles'][0]['description'] ?>
                        </p>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- main-panel ends -->
      <!-- container-scroller ends -->

      <!-- partial:partials/_footer.php -->
      <?php include "partials/_footer.php" ?>

      <!-- partial -->
    </div>
  </div>
  <!-- inject:js -->
  <?php include "partials/_jsinclude.php" ?>
  <!-- End custom js for this page-->
</body>


</html>