<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <?php include "partials/_head.php" ?>
    <title>TP1 - Intégration III</title>
</head>

<body>

    <?php
    $q = $_GET['q'];

    /** Gestion des pages */
    $page = !isset($_GET['page']) ? 1 : $_GET['page'];
    $apiKey = '10de25f59ee64273a44892f1c436bbab';
    $lang = 'fr';
  
    $url = 'http://newsapi.org/v2/everything?q=' . $q . '&apiKey=' . $apiKey . '&page=' . $page . '&language=' . $lang . '&pageSize=20';
  
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
            <!-- partial:../partials/_navbar.php -->
            <?php include "partials/_navbar.php" ?>

            <!-- partial -->
            <div class="content-wrapper">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="card" data-aos="fade-up">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h1 class="font-weight-600 mb-4">
                                            <?php echo $q; ?>
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <?php for ($i = 0; $i < 6; ++$i) {
                                            $article = $json['articles'][$i];
                                        ?>

                                            <div class="row">
                                                <div class="col-sm-4 grid-margin">
                                                    <div class="rotate-img">
                                                        <img src="<?php echo $article['urlToImage'] ?>" alt="image inexistante" class="img-fluid" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 grid-margin">
                                                    <h2 class="font-weight-600 mb-2">
                                                        <?php echo $article['title'] ?>
                                                    </h2>
                                                    <p class="fs-13 text-muted mb-0">
                                                        <span>
                                                            <p><?php echo $article['publishedAt'] ?></p>
                                                        </span>
                                                    </p>
                                                    <p><?php echo $article['description'] ?></p>
                                                    <a href="<?php echo $article['url'] ?>" class="btn-card">Lire...</a>
                                                </div>
                                            </div>
                                        <?php } ?>



                                    </div>

                                    <div class="col-lg-4">

                                        <h2 class="mb-4 text-primary font-weight-600">
                                            Nouvelles de l'heure
                                        </h2>
                                        <div class="row">
                                            <?php for ($index = 6; $index < 9; $index++) {
                                                $article = $json['articles'][$index] ?>
                                                <div class="col-sm-12">
                                                    <div class="border-bottom pb-4 pt-4">
                                                        <div class="row">

                                                            <div class="col-sm-8">
                                                                <h5 class="font-weight-600 mb-1">
                                                                    <?php echo $article['title'] ?>
                                                                </h5>
                                                                <p class="fs-13 text-muted mb-0">
                                                                    <?php echo $article['publishedAt'] ?>
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="rotate-img">
                                                                    <img src="<?php echo $article['urlToImage'] ?>" alt="image inexistante" class="img-fluid" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="trending">
                                            <h2 class="mb-4 text-primary font-weight-600">
                                                Tendances
                                            </h2>
                                            <?php for ($index = 9; $index < 12; $index++) {
                                                $article = $json['articles'][$index] ?>
                                                <div class="mb-4">
                                                    <div class="rotate-img">
                                                        <img src="<?php echo $article['urlToImage'] ?>" alt="image inexistante" class="img-fluid" />
                                                    </div>
                                                    <h3 class="mt-3 font-weight-600">
                                                        <?php echo $article['title'] ?>
                                                    </h3>
                                                    <p class="fs-13 text-muted mb-0">
                                                        <?php echo $article['publishedAt'] ?>
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
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:../partials/_footer.php -->
            <?php include "partials/_footer.php" ?>

            <!-- partial -->
        </div>
    </div>
    <!-- inject:js -->
    <?php include "partials/_jsinclude.php" ?>
</body>

</html>



</body>