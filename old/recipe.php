<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="bouffe, recette, dannyboy">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bulma.css">
        <link rel="stylesheet" href="css/main.css">    
    </head>
        <body>


            <!-- HEADER BEGIN -->
    <header>

    <?php include("php/inc-navbar.php"); ?>

    <section class="hero is-dark">
                    <div class="hero-body">
                      <div class="container">
                        <h1 class="title">
                          Recette
                        </h1>
                        <h2 class="subtitle">
                          Oh les bonnes recettes Putain !
                        </h2>
                      </div>
                    </div>
            </section>
    
    </header>
            <!-- HEADER END -->

      <?php include("php/inc-searchbar.php"); ?>



            <!-- CONTENT BEGIN -->
            <section class="recette">

              <div class="columns">
                <div class="column is-one-third"></div>
                <div class="column has-text-centered">
                  <h1 class="title">Recette : Le Space Cake</h1>
                </div>
                <div class="column"></div>
              </div>

              <div class="columns">
                  <div class="column is-one-third"></div>
                  <div class="column has-text-centered">
                      <figure class="image is-4by3">
                          <img src="img/space_cake.jpg" alt="Placeholder image">
                        </figure>
                  </div>
                  <div class="column"></div>
              </div>

              <div class="columns">
                  <div class="column is-half">is-half</div>
                  <div class="column">Auto</div>
              </div>



          </section>

            <!-- CONTENT END -->


          <?php include("php/inc-footer.php"); ?>
      
      
      
            <!-- JS script -->
      
              <script src="js/vendor/modernizr-3.5.0.min.js"></script>
              <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
              <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
              <script src="js/plugins.js"></script>
              <script src="js/main.js"></script>
              <script src="js/bulma.js"></script>
              <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
          </body>
      </html>