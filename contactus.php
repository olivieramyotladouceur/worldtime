<!DOCTYPE html>
<html lang="zxx">

<head>
<?php include "partials/_head.php" ?>
  <title>TP1 - Intégration III</title>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../partials/_navbar.php -->
    <?php include "partials/_navbar.php"?>
    <!-- partial -->
    <?php include 'partials/_function_curl.php'?>
    
    <div class="content-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
              <div class="card-body">
                <div class="aboutus-wrapper">
                  <h1 class="mt-5 text-center mb-5">
                    Contactez-nous
                  </h1>
                  <div class="row">
                    <div class="col-lg-12 mb-5 mb-sm-2">
                      <form>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea class="form-control textarea" placeholder="Commentez *" id="message"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Nom *" />
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Courriel *" />
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <a href="#" class="btn btn-lg btn-dark font-weight-bold mt-3">Envoyer</a>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <p class="mt-5 text-center mb-5">© Olivier Amyot-Ladouceur</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller ends -->
  <!-- partial:../partials/_footer.php -->
 <?php include "partials/_footer.php"?>

  <!-- partial -->
  <!-- inject:js -->
  <?php include "partials/_jsinclude.php"?>
</body>

</html>