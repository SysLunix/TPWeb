<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="bouffe, recette, dannyboy">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="/assets/icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="/assets/css/normalize.css">
        <link rel="stylesheet" href="/assets/css/bulma.css">
        <link rel="stylesheet" href="/assets/css/main.css">    
    </head>
    <body>
  <header>
<!-- NAVBAR BEGIN-->

        <nav class="navbar is-transparent">
            <div class="navbar-brand">
              <a class="navbar-item" href="#">
                <img src="/assets/img/logo.png" alt="logo" width="30" height="30">
              </a>
              <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          
            <div id="navbarExampleTransparentExample" class="navbar-menu">
              <div class="navbar-start">
                <a class="navbar-item" href="../index.php">
                  Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link" href="/documentation/overview/start/">
                    Recipe
                  </a>
                  <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item" href="/documentation/overview/start/">
                      Burger
                    </a>
                    <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                      Salad
                    </a>
                    <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                      Pizza
                    </a>
                    <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                      Junk Food
                    </a>
                  </div>
                </div>
                <a class="navbar-item" href="/recipe/">
                  Recettes
                </a>
              </div>
          
              <div class="navbar-end">
                <div class="navbar-item">
                  <div class="field is-grouped">
                    <p class="control">
                      <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
                        <span class="icon">
                          <i class="fab fa-twitter"></i>
                        </span>
                        <span>
                          Tweet
                        </span>
                      </a>
                    </p>
                    <p class="control">
                      <a class="button is-primary" href="/ingredients/">
                        <span class="icon">
                          <i class="fas fa-user-circle"></i>
                        </span>
                        <span>Admin</span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </nav>

        <!-- NAVBAR END-->


        <!-- SEARCH BAR -->
      <section class="section">        
        <div class="container">
            <div class="notification has-text-centered">
              Effectuer une <strong>recherche</strong> sur Danny Boy.
            </div>
          
          <div class="field has-addons has-addons-centered">
            <p class="control">
              <input class="input" type="text" placeholder="Un plat,une recette,un aliment ?">
            </p>
            <p class="control">
              <a class="button is-static">
                <i class="fa fa-search" aria-hidden="true"></i>
              </a>
            </p>
          </div>
        </div>
      </section>
        <!-- END SEARCH BAR -->
  </header>