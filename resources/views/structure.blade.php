<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

  <title>
    LP JAZZ
  </title>

  <script>
    document.documentElement.className = document.documentElement.className.replace("no-js", "js");
  </script>

  <link href="../public/css/style.css" type="text/css" rel="stylesheet">
  <link href="../public/css/responsive.css" rel="stylesheet">
  <link href="../public/css/custom.css" rel="stylesheet">
  <link href="../public/css/default-ver=4.1.css" rel="stylesheet">
  <link href="../public/css/nivo-lightbox-ver=4.1.css" rel="stylesheet">
  <link href="../public/fonts/font-awesome.min.css" rel="stylesheet" type="text/css" >

  <script type='text/javascript' src='../../webpack.mix.js'></script>

  <script type='text/javascript' src='../public/js/jquery-ver=1.11.1.js'></script>
  <script type='text/javascript' src='../public/js/jquery-migrate.min-ver=1.2.1.js'></script>
  <script type='text/javascript' src='../public/js/nivo-lightbox.min-ver=4.1.js'></script>

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

  <script type='text/javascript' src='../public/js/front-ver=4.1.js'></script>
  <script type='text/javascript' src='../public/js/jquery.flexslider.min.js'></script>

  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php-rsd.xml" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />

  <meta name="generator" content="WordPress 4.1" />

  <!--[if lt IE 9]>
<script src="wp-content/themes/hueman/js/ie/html5.js"></script>
<script src="wp-content/themes/hueman/js/ie/selectivizr.js"></script>
<![endif]-->

  <style type="text/css">
    .recentcomments a {
      display: inline !important;
      padding: 0 !important;
      margin: 0 !important;
    }
  </style>

</head>

<body class="home blog col-3cm full-width topbar-enabled mobile-sidebar-hide-s2 gecko">

  <div id="wrapper">

    <header id="header">

      <nav class="nav-container group" id="nav-topbar">
        <div class="nav-toggle">
          <i class="fa fa-bars"></i>
        </div>

        <div class="nav-text">

        </div>
        <!-- Menu -->
        <div class="nav-wrap container">
          <ul id="menu-topbar-menu" class="nav container-inner group">
            <li id="menu-item-2400" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-2400">
              <a href="{{ url('/') }}">Accueil</a>
            </li>
            <li id="menu-item-2680" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2680">
              <a href="{{ url('/program') }}">Programmes</a>
            </li>
            <li id="menu-item-2680" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2680">
              <a href="{{ url('/podcast') }}">Podcast</a>
            </li>
            <li id="menu-item-2680" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2680">
              <a href="{{ url('/jazzblog') }}">Jazz blog</a>
            </li>
            <li id="menu-item-2680" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2680">
              <a href="{{ url('/jazzenda') }}">Jazzenda</a>
            </li>
            <li id="menu-item-2680" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2680">
              <a href="{{ url('/frequences') }}">Liste des fréquences</a>
            </li>
            <li id="menu-item-2399" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2399">
              <a href="">Contacts</a>
              <ul class="sub-menu">
                <li id="menu-item-2698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2698">
                  <a href="{{ url('/about') }}">À propos</a>
                </li>
                <li id="menu-item-2739" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2739">
                  <a href="{{ url('/audtre') }}">Trésor des auditeurs</a>
                </li>
                <li id="menu-item-2708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2708">
                  <a href="{{ url('/contact') }}">Nous écrire</a>
                </li>
                <li id="menu-item-2699" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2699">
                  <a href="{{ url('/newsletter') }}">Newsletter</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>

        <!-- Barre de recherche -->
          <div class="container-inner">
            <div class="toggle-search">
              <i class="fa fa-search"></i>
            </div>

            <div class="search-expand">
              <div class="search-expand-inner">
                <form method="get" class="searchform themeform" action="http://demo.alxmedia.se/hueman/">
                  <div>
                    <input type="text" class="search" name="s" onblur="if(this.value=='')this.value='To search type and hit enter';" placeholder="Tapez votre recherche ici" />
                  </div>
                </form>
              </div>
            </div>
          </div>

      </nav>

      <!-- Banière - Logo -->
      <div class="container group">
        <div class="container-inner">
          <div class="group pad">
            <!-- Image ici à changer -->
            <h1 class="site-title"><a href="{{ url('/') }}" rel="home"><img src="../public/img/logo.png" alt=""></a></h1>
            <p class="site-description">- Radio de Jazz</p>
          </div>
        </div>
      </div>
    </header>

    <div class="container" id="page">
      <div class="container-inner">
        <div class="main">
          <div class="main-inner group">

            <section class="content">
              <!-- Nom de la page qui changera en fonction de l'onglet -->
              <div class="page-title pad group">
                @yield('titre')
              </div>

              <!-- Contenu de la page ici -->
              <div class="pad group">
                @yield('contenu')
              </div>
            </section>


            <!-- Module à gauche -->
            <div class="sidebar s1">
              <a class="sidebar-toggle" title="Expand Sidebar"><i class="fa icon-sidebar-toggle"></i></a>
              <div class="sidebar-content">
                <!-- Titre à donner (partie bleue à modif) -->
                <div class="sidebar-top group">
                  <p>Actualités</p>
                </div>
                <!-- Contenu ici -->
                <div id="alxposts-1" class="widget widget_alx_posts">
                  <h3>Derniers Podcasts</h3>
                  <p> Ici on rajoutera les podcasts </p>
                </div>

                <div id="alxposts-2" class="widget widget_alx_posts">
                  <h3>Derniers Jazzblogs</h3>
                  <p> Ici on rajoutera les jazzblogs </p>
                </div>

              </div>
            </div>
            <!-- Fin du module à gauche -->


            <!-- Module à droite -->
            <div class="sidebar s2">
              <a class="sidebar-toggle" title="Expand Sidebar"><i class="fa icon-sidebar-toggle"></i></a>
              <div class="sidebar-content">
                <!-- Titre à donner (partie verte à modif) -->
                <div class="sidebar-top group">
                  <p>Publicité</p>
                </div>
                <!-- Contenu ici -->
                <div id="alxposts-1" class="widget widget_alx_posts pub">

                  <a href="http://bit.ly/QRA_QwestTV" target="_blank"><img src="../public/img/BANNER3_v5.gif" alt=""></a>

                </div>

                <div id="alxposts-2" class="widget widget_alx_posts ">
                  <h3>Liste des fréquences</h3>
                  <p> Ici on rajoutera les fréquences (à voir) </p>
                </div>

              </div>

            </div>
            <!-- Fin du module de gauche-->
          </div>
          <!--/.main-inner-->
        </div>
        <!--/.main-->
      </div>
      <!--/.container-inner-->
    </div>
    <!--/.container-->

    <footer id="footer">

      <section class="container" id="footer-widgets">

        <div class="container-inner">

          <div class="pad group">


            <div class="footer-widget-1 grid one-third ">
              <div id="recent-posts-3" class="widget widget_recent_entries">
                <h3>Les dernières News</h3>
                <ul>
                  @for ($i = 0; $i < 5; $i++)
                    <li>
                      <a href="{{ url('/') }}">{{ $news[$i]->title }}</a>
                    </li>
                  @endfor
                </ul>
              </div>
            </div>


            <div class="footer-widget-2 grid one-third ">
              <div id="recent-comments-3" class="widget widget_meta">
                <h3>Communautés</h3>
                <ul id="recentcomments">
                  <li class="recentcomments"><span class="comment-author-link">Twitter</span> ici <a rel="nofollow" class="social-tooltip" target="_blank" title="Twitter" href="https://twitter.com/radiotsfjazz?lang=fr"><i class="fa fa-twitter" ></i></a></li>
                  <li class="recentcomments"><span class="comment-author-link">Facebook</span> ici <a rel="nofollow" class="social-tooltip" target="_blank" title="Facebook" href="https://www.facebook.com/TSFJazz/"><i class="fa fa-facebook" ></i></a></li>
                  <li class="recentcomments"><span class="comment-author-link">Instagram</span> ici <a rel="nofollow" class="social-tooltip" target="_blank" title="Instagram" href="https://www.instagram.com/tsfjazz/"><i class="fa fa-instagram" ></i></a></li>
                  <li class="recentcomments"><span class="comment-author-link">Youtube</span> ici <a rel="nofollow" class="social-tooltip" target="_blank" title="Youtube" href="https://www.youtube.com/user/TSFJAZZRadio"><i class="fa fa-youtube" ></i></a></li>
                  <li class="recentcomments"><span class="comment-author-link">Soundcloud</span> ici <a rel="nofollow" class="social-tooltip" target="_blank" title="Soundcloud" href="https://soundcloud.com/tsfjazz"><i class="fa fa-soundcloud" ></i></a></li>
                </ul>
              </div>
            </div>


            <div class="footer-widget-3 grid one-third last">
              <div id="alxtabs-4" class="widget widget_links">
                <h3>Contacts</h3>
                  <ul>
                    <li>
                      <a href="{{ url('/about') }}">À propos</a>
                    </li>
                    <li>
                      <a href="{{ url('/audtre') }}">Trésor des auditeurs</a>
                    </li>
                    <li>
                      <a href="{{ url('/contact') }}">Nous écrire</a>
                    </li>
                    <li>
                      <a href="{{ url('/newsletter') }}">Newsletter</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
          <!--/.pad-->

        </div>
        <!--/.container-inner-->
      </section>
      <!--/.container-->
      <!--
      <nav class="nav-container group" id="nav-footer">
        <div class="nav-toggle"><i class="fa fa-bars"></i></div>
        <div class="nav-text">
        </div>
      </nav>-->
      <!--/#nav-footer-->

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
          <!--/.pad-->

        </div>
        <!--/.container-inner-->
      </section>
      <!--/.container-->

    </footer>
    <!--/#footer-->

  </div>
  <!--/#wrapper-->

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'js/analytics.js', 'ga');

    ga('create', 'UA-57869156-2', 'auto');
    ga('send', 'pageview');
  </script>
  <style>
    .home .s2 .alx-posts li:first-child {
      display: none;
    }
  </style>
  <script type='text/javascript' src='../public/js/jquery.jplayer.min.js'></script>
  <script type='text/javascript' src='../public/js/scripts.js'></script>
  <!--[if lt IE 9]>
<script src="wp-content/themes/hueman/js/ie/respond.js"></script>
<![endif]-->
</body>

</html>
