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
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- HEADER BEGIN -->
    <header>
        
    <?php include("php/inc-navbar.php"); ?>

    <section class="hero is-primary">
          <div class="hero-body">
            <div class="container">
              <div class="columns">
                <div class="is-three-fifths">
                  <h1 class="title">
                    I'm the fucking :
                  </h1>
                  <h2 class="subtitle">
                    Danny Boy, de la bouffe d'exception
                  </h2>
                </div>
                <div class="column"></div>
                <div class="column">
                    <img src="img/logo.png" alt="logo">
                </div>
              </div>
            </div>
          </div>
        </section>

    </header>
        <!-- HEADER END -->

        <?php include("php/inc-searchbar.php"); ?>
        
      
        <!-- CONTENT BEGIN -->
      <section class="section">
        <div class="columns">

          <div class="column is-one-thirds">
              <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                    
                      <div class="content">
                        <p class="title is-4">Bouffe #1</p>
                        <p class="subtitle is-6">description bouffe #1</p>
                      </div>
                    
                
                    <div class="content">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Phasellus nec iaculis mauris.
                    </div>
                  </div>
                </div>
          </div>

          <div class="column">
              <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                    
                      <div class="content">
                        <p class="title is-4">Bouffe #2</p>
                        <p class="subtitle is-6">description bouffe #2</p>
                      </div>
                    
                
                    <div class="content">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Phasellus nec iaculis mauris.
                    </div>
                  </div>
                </div>
          </div>

          <div class="column">
              <div class="card">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="card-content">
                    
                      <div class="content">
                        <p class="title is-4">Bouffe #3</p>
                        <p class="subtitle is-6">description bouffe #3</p>
                      </div>
                    
                
                    <div class="content">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Phasellus nec iaculis mauris.
                    </div>
                  </div>
                </div>
          </div>

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
