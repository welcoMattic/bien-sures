<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>
    Bien Sûres - Administration
  </title>

  <meta name="author" content="Bien Sûres" />
  <meta name="description" content="Bien Sûres : Un engagement collectif permanent, pour lutter contre la violence du harcèlement de rue rendue banale" />

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@biensures">
  <meta name="twitter:title" content="Bien Sûres">
  <meta name="twitter:description" content="Bien Sûres : Un engagement collectif permanent, pour lutter contre la violence du harcèlement de rue rendue banale">
  <meta name="twitter:creator" content="@biensures">
  <meta name="twitter:image:src" content="http://bien-sures.fr/logo-black.png">
  <meta name="twitter:domain" content="http://bien-sures.fr">
  <meta name="twitter:app:name:iphone" content="">
  <meta name="twitter:app:name:ipad" content="">
  <meta name="twitter:app:name:googleplay" content="">
  <meta name="twitter:app:url:iphone" content="">
  <meta name="twitter:app:url:ipad" content="">
  <meta name="twitter:app:url:googleplay" content="">
  <meta name="twitter:app:id:iphone" content="">
  <meta name="twitter:app:id:ipad" content="">
  <meta name="twitter:app:id:googleplay" content="">

  <meta property="og:title" content="Bien Sûres" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content=" http://bien-sures.fr/" />
  <meta property="og:image" content="http://bien-sures.fr/logo-black.png" />
  <meta property="og:description" content="Bien Sûres : Un engagement collectif permanent, pour lutter contre la violence du harcèlement de rue rendue banale" />
  <meta property="fb:admins" content="1139890839" />
  <meta property="fb:profile_id" content="1139890839" />

  <link rel="author" href="https://plus.google.com/u/0/112605449457151257853/posts"/>
  <link rel="publisher" href="https://plus.google.com/u/0/112605449457151257853"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="shortcut icon" href="<%% asset('assets/ico/favicon.png') %%>">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<%% asset('assets/ico/apple-touch-icon-144-precomposed.png') %%>">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<%% asset('assets/ico/apple-touch-icon-114-precomposed.png') %%>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<%% asset('assets/ico/apple-touch-icon-72-precomposed.png') %%>">
  <link rel="apple-touch-icon-precomposed" href="<%% asset('assets/ico/apple-touch-icon-57-precomposed.png') %%>">

  <link rel="stylesheet" href="<%asset('css/bootstrap.min.css')%>">
  <link rel="stylesheet" href="<%asset('css/flat-ui.css')%>">
  <link rel="stylesheet" href="<%asset('css/style.css')%>">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body ng-app="BSApp">
  <div class="hidden">
    <a href="https://plus.google.com/u/0/112605449457151257853" rel="publisher"></a>
    <a href="https://plus.google.com/u/0/112605449457151257853" rel="contributor-to"></a>
  </div>
  <div id="wrapper" ng-class="{true: 'active', false: ''}[isSidebarActive]">

      <!-- Sidebar -->
      <div id="sidebar-wrapper">
       <h1>
          <p>Bien Sûres</p>
          <a href="<% URL::to('/') %>"><img src="images/logo.png"></a>
        </h1>
      <!-- Close / Open button Sidebar -->
       <!--  <ul id="sidebar_menu" class="sidebar-nav">
          <li class="sidebar-brand">
            <div id="menu-toggle" href="#">
              <button id="main-icon" class="navbar-toggle" type="button" ng-click="isSidebarActive = !isSidebarActive">
              <a href="<% URL::to('/') %>">Bien Sûres</a>
              <button id="main-icon" class="navbar-toggle" type="button" ng-click="isSidebarActive = !isSidebarActive; API.playPause()">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          </li> -->
        </ul>
        <ul class="sidebar-nav" id="sidebar">
          <li><a href="<% URL::to('/') %>">Accueil</a></li>
          <li><a href="<% URL::to('/#/mur-de-paroles') %>">Mur de paroles</a></li>
          <li><a href="<% URL::to('/#/besoin-d-aide') %>">Besoin d'aide</a></li>
          <li><a href="<% URL::to('/#/a-propos') %>">À propos</a></li>
          <li><a href="<% URL::to('/#/contact') %>">Contact</a></li>
        </ul>

        <div id="footer">
        <p class="joinSocial">Rejoignez nous sur:</p>
          <ul class="social-footer">
            <li><a href="https://www.facebook.com/biensures/" target="_blank" class="iconf-facebook-circled"><span>Facebook</span></a></li>
            <li><a href="https://twitter.com/BienSures" target="_blank" class="iconf-twitter-circled"><span>Twitter</span></a></li>
            <li><a href="http://instagram.com/biensures/" target="_blank" class="iconf-instagram-circled"><span>Instagram</span></a></li>
            <li><a href="#" target="_blank" class="iconf-youtube"><span>YouTube</span></a></li>
            <li><a href="http://www.pinterest.com/biensures/" target="_blank" class="iconf-pinterest-circled"><span>Pinterest</span></a></li>
          </ul>
          <p class="copy">copyright © Bien Sûres - 2014 - <a href="#">Mentions légales</a></p>
        </div>
      </div>

      <div id="page-content-wrapper">
        <div class="page-content inset">
          <div class="row">
            <div ng-view=""></div>
          </div>
        </div>
      </div>

    </div>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52124244-1', 'bien-sures.fr');
    ga('send', 'pageview');

    // Adjectifs
    window.adjectifs = <% $adjectifs %>
  </script>

  <script src="<% asset('js/vendors/jquery.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-resource.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-sanitize.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-animate.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-touch.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-route.min.js') %>"></script>
  <script src="<% asset('js/vendors/ngActivityIndicator.min.js') %>"></script>
  <script src="<% asset('js/vendors/videogular.min.js') %>"></script>
  <script src="<% asset('js/vendors/buffering.min.js') %>"></script>
  <script src="<% asset('js/vendors/controls.min.js') %>"></script>
  <script src="<% asset('js/vendors/overlay-play.min.js') %>"></script>
  <script src="<% asset('js/vendors/poster.min.js') %>"></script>
  <script src="<% asset('js/vendors/quiz.js') %>"></script>
  <script src="<% asset('js/vendors/mobile-detect.min.js') %>"></script>
  <script src="<% asset('js/app.js') %>"></script>
  <script src="<% asset('js/controllers/player.js') %>"></script>
  <script src="<% asset('js/controllers/wall.js') %>"></script>
  <script src="<% asset('js/controllers/help.js') %>"></script>
  <script src="<% asset('js/controllers/about.js') %>"></script>

</body>

</html>