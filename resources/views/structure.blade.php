<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP JAZZ</title>
    
    @yield('stylesheet')
    <link href="../public/css/style.css" type="text/css" rel="stylesheet">
    <link href="../public/css/responsive.css" type="text/css" rel="stylesheet">
    <link href="../public/css/custom.css" type="text/css" rel="stylesheet">
    <link href="../public/fonts/font-awesome.min.css" type="text/css" rel="stylesheet">
    <!-- NO NEED FOR NOW
      <link href="../public/css/default-ver=4.1.css" type="text/css" rel="stylesheet">
      <link href="../public/css/nivo-lightbox-ver=4.1.css" type="text/css" rel="stylesheet">
    -->
    <script type='text/javascript' src='../public/js/jquery-ver=1.11.1.js'></script>
    <script type='text/javascript' src='../public/js/jquery-migrate.min-ver=1.2.1.js'></script>
    <script type='text/javascript' src='../public/js/nivo-lightbox.min-ver=4.1.js'></script>
    <script type='text/javascript' src='../public/js/front-ver=4.1.js'></script>
    <script type='text/javascript' src='../public/js/jquery.flexslider.min.js'></script>
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <!--[if lt IE 9]>
      <script src="wp-content/themes/hueman/js/ie/html5.js"></script>
      <script src="wp-content/themes/hueman/js/ie/selectivizr.js"></script>
    <![endif]-->
    <script type='text/javascript'>
      var rlArgs = {
        "script": "nivo",
        "selector": "lightbox",
        "custom_events": "",
        "activeGalleries": "1",
        "effect": "fade",
        "clickOverlayToClose": "1",
        "keyboardNav": "1",
        "errorMessage": "The requested content cannot be loaded. Please try again later."
      };
    </script>
  </head>
  <body class="home col-3cm">
    <div id="wrapper">
      <header id="header">
        <nav class="nav-container group" id="nav-topbar">
          <div class="nav-toggle">
            <i class="fa fa-bars"></i>
          </div>
          <div class="nav-img">
            <a href="{{ url('/') }}" rel="home"><img src="../public/img/logo.png"></a>
          </div>
          <div class="nav-wrap container">
            <ul class="nav container-inner group">
              <li class="menu-item current_page_item">
                <a href="{{ url('/') }}">Accueil</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/program') }}">Programmes</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/podcast') }}">Podcast</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/jazzblog') }}">Jazz blog</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/jazzenda') }}">Jazzenda</a>
              </li>
              <li class="menu-item">
                <a href="{{ url('/frequences') }}">Liste des fréquences</a>
              </li>
              <li class="menu-item">
                <a>Contacts</a>
                <ul class="sub-menu">
                  <li class="menu-item">
                    <a href="{{ url('/about') }}">À propos</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('/audtre') }}">Trésor des auditeurs</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('/contact') }}">Nous écrire</a>
                  </li>
                  <li class="menu-item">
                    <a href="{{ url('/newsletter') }}">Newsletter</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="toggle-search">
            <i class="fa fa-search"></i>
          </div>
          <div class="search-expand">
            <div class="search-expand-inner">
              <form method="get" class="searchform themeform">
                <div>
                  <input type="text" placeholder="Tapez votre recherche ici" />
                </div>
              </form>
            </div>
          </div>
        </nav>

        <div class="container group">
          <div class="container-inner">
            <div class="group pad">
              <h1 class="site-title">
                <a href="{{ url('/') }}" rel="home"><img src="../public/img/logo.png"></a>
              </h1>
              <p class="site-description">- Radio de Jazz</p>
              <img src="../public/img/deuxieme.gif">
            </div>
          </div>
        </div>
      </header>

      <div class="container" id="page">
        <div class="container-inner">
          <div class="main">
            <div class="main-inner group">
              <section class="content">
                <div class="page-title pad group">
                  @yield('titre')
                </div>
                <div class="pad group">
                  @yield('contenu')
                </div>
              </section>

              <!-- LEF PANE -->
              <div class="sidebar s1">
                <a class="sidebar-toggle" title="Expand Sidebar"><i class="fa fa-bars"></i></a>
                <div class="sidebar-content">
                  <!-- TITLE -->
                  <div class="sidebar-top group">
                    <p>Actualités</p>
                  </div>
                  <!-- CONTENT -->
                  <div id="alxposts-1" class="widget widget_alx_posts">
                    <h3>Derniers Podcasts</h3>
                    <p> Ici on rajoutera les podcasts </p>
                  </div>
                  <div id="alxposts-2" class="widget widget_alx_posts">
                    <img src="../public/img/cote.png" alt="">
                  </div>
                </div>
              </div>
              <!-- END LEFT PANE -->

              <!-- RIGHT PANE -->
              <div class="sidebar s2">
                <a class="sidebar-toggle" title="Expand Sidebar"><i class="fa fa-bars"></i></a>
                <div class="sidebar-content">
                  <!-- TITLE -->
                  <div class="sidebar-top group">
                    <p>Publicité</p>
                  </div>
                  <!-- CONTENT -->
                  <div id="alxposts-1" class="widget widget_alx_posts pub">
                    <a href="http://bit.ly/QRA_QwestTV" target="_blank"><img src="../public/img/BANNER3_v5.gif" alt=""></a>
                  </div>
                  <div id="alxposts-2" class="widget widget_alx_posts ">
                    <h3>Liste des fréquences</h3>
                    <div id='map'></div>
                  </div>
                </div>
              </div>
              <!-- END RIGHT PANE -->
            </div>
          </div>
        </div>
      </div>

      <footer id="footer">
        <section class="container" id="footer-widgets">
          <div class="container-inner">
            <div class="pad group">
              <div class="footer-widget-1 grid one-third" style="text-align: center;">
                <div id="recent-posts-3" class="widget widget_recent_entries">
                  <h3>Les dernières News</h3>
                  <div class="separator"></div>
                  <ul>
                    @for ($i = 0; $i < 5; $i++)
                      <li>
                        <a href="{{ url('/') }}">{{ $news[$i]->title }}</a>
                      </li>
                    @endfor
                  </ul>
                </div>
              </div>
              <div class="footer-widget-2 grid one-third" style="text-align: center;">
                <div id="recent-comments-3" class="widget widget_meta">
                  <h3>Communautés</h3>
                  <div class="separator"></div>
                  <ul>
                    <li>
                      <a rel="nofollow" class="social-tooltip" target="_blank" title="Twitter" href="https://twitter.com/radiotsfjazz?lang=fr">
                        <i class="fa fa-twitter"></i><span class="socialnet">Twitter par ici</span>
                      </a>
                    </li>
                    <li>
                      <a rel="nofollow" class="social-tooltip" target="_blank" title="Facebook" href="https://www.facebook.com/TSFJazz/">
                        <i class="fa fa-facebook"></i><span class="socialnet">Facebook par ici</span>
                      </a>
                    </li>
                    <li>
                      <a rel="nofollow" class="social-tooltip" target="_blank" title="Instagram" href="https://www.instagram.com/tsfjazz/">
                        <i class="fa fa-instagram" ></i><span class="socialnet">Instagram par ici</span>
                      </a>
                    </li>
                    <li>
                      <a rel="nofollow" class="social-tooltip" target="_blank" title="Youtube" href="https://www.youtube.com/user/TSFJAZZRadio">
                        <i class="fa fa-youtube" ></i><span class="socialnet">Youtube par ici</span>
                      </a>
                    </li>
                    <li>
                      <a rel="nofollow" class="social-tooltip" target="_blank" title="Soundcloud" href="https://soundcloud.com/tsfjazz">
                        <i class="fa fa-soundcloud" ></i><span class="socialnet">Soundcloud par ici</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="footer-widget-3 grid one-third last" style="text-align: center;">
                <div id="recent-posts-3" class="widget widget_meta">
                  <h3>Contacts</h3>
                  <div class="separator"></div>
                  <ul>
                    <li><a href="{{ url('/audtre') }}">Trésor des auditeurs</a></li>
                    <li><a href="{{ url('/about') }}">À propos</a></li>
                    <li><a href="{{ url('/contact') }}">Nous écrire</a></li>
                    <li><a href="{{ url('/newsletter') }}">Newsletter</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="container" id="footer-bottom">
          <div class="container-inner">
            <div class="pad group">
              <div class="grid one-half">
                <img id="footer-logo" src="../public/img/logo.png" alt="">
              </div>
              <div class="grid one-half last">
                <ul class="social-links">
                  <li><a rel="nofollow" class="social-tooltip" target="_blank" title="Twitter" href="https://twitter.com/radiotsfjazz?lang=fr"><i class="fa fa-twitter" ></i></a></li>
                  <li><a rel="nofollow" class="social-tooltip" target="_blank" title="Facebook" href="https://www.facebook.com/TSFJazz/"><i class="fa fa-facebook" ></i></a></li>
                  <li><a rel="nofollow" class="social-tooltip" target="_blank" title="Instagram" href="https://www.instagram.com/tsfjazz/"><i class="fa fa-instagram" ></i></a></li>
                  <li><a rel="nofollow" class="social-tooltip" target="_blank" title="Youtube" href="https://www.youtube.com/user/TSFJAZZRadio"><i class="fa fa-youtube" ></i></a></li>
                  <li><a rel="nofollow" class="social-tooltip" target="_blank" title="Soundcloud" href="https://soundcloud.com/tsfjazz"><i class="fa fa-soundcloud" ></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="container" id="footer-music-player">
          <div class="container-inner">
            <div class="pad group">
              MUSIC PLAYER
            </div>
          </div>
        </section>
      </footer>
    </div>

    <style>
      .home .s2 .alx-posts li:first-child {
        display: none;
      }
    </style>

    <!-- NO NEED FOR NOW 
    <script type='text/javascript' src='../public/js/jquery.jplayer.min.js'></script> 
    -->
    <script type='text/javascript' src='../public/js/responsive-menu.js'></script>
      <!--[if lt IE 9]>
    <script src="wp-content/themes/hueman/js/ie/respond.js"></script>
    <![endif]-->
    @yield('javascript')

  </body>
</html>
