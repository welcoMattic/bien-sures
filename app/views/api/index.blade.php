<!DOCTYPE html>
<html window-height="" window-width="">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>
    Bien Sûres
  </title>

  <meta name="author" content="Bien Sûres" />
  <meta name="description" content="Bien Sûres : Un engagement collectif permanent, pour lutter contre la violence du harcèlement de rue rendue banale" />

  <meta name="twitter:card" content="photo">
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
  <link rel="stylesheet" href="<%asset('css/autocomplete.css')%>">
  <link rel="stylesheet" href="<%asset('css/ngActivityIndicator.min.css')%>">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

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

  <div id="loader">
    <img src="<% URL::to('/') %>/images/logo_loader.png" alt="logo">
    <div class="txt">
      <p>Contre le harcèlement de rue</p>
      <p><span>D</span>énoncer <span>ré</span>agir aider</p>
    </div>
    <div class="loaderContent">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <div class="overlay-mobile">
    <a href="<% URL::to('/') %>" id="brand-logo" ng-class="{true: 'active', false: ''}[isSidebarActive]"><img src="images/logo_loader.png" width="275" alt="Bien Sûres" /></a>
    <p>Merci d'agrandir votre navigateur si vous êtes sur ordinateur,</p>
    <p>Si vous êtes sur une tablette, tournez la.</p>
    <p>La navigation du site n'est pas accessible sur mobile.</p>
    <p>Nous rejoindre sur :</p>
    <p class="social">
      <a href="https://www.facebook.com/biensures/" target="_blank" class="iconf-facebook-circled"></a>
      <a href="https://twitter.com/BienSures" target="_blank" class="iconf-twitter-circled"></a>
      <a href="http://instagram.com/biensures/" target="_blank" class="iconf-instagram-circled"></a>
      <a href="http://www.pinterest.com/biensures/" target="_blank" class="iconf-pinterest-circled"></a>
      <a href="https://www.youtube.com/channel/UClMTubVyx3JJZjVELb-jsOA" target="_blank" class="iconf-youtube"></a>
    </p>
  </div>
  <div id="wrapper" ng-class="{true: 'active', false: ''}[isSidebarActive]">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav" id="sidebar">
          <li id="burger">
            <div id="menu-toggle">
              <h1>
                <p>Bien Sûres</p>
                <a href="<% URL::to('/') %>" id="brand-logo" ng-class="{true: 'active', false: ''}[isSidebarActive]"><img src="images/logo.png" alt="Bien Sûres" /></a>
                <a href="<% URL::to('/') %>" id="brand-mini-logo" ng-class="{true: 'active', false: ''}[isSidebarActive]"><img src="images/logo-mini.png" alt="Bien Sûres" /></a>
              </h1>
              <button id="main-icon" class="navbar-toggle" type="button" ng-click="isSidebarActive = !isSidebarActive; reloadWall()">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
          </li>
          <span ng-controller="NavCtrl">
            <li><a href="<% URL::to('/#/player') %>" ng-class="{true: 'displayed', false: ''}[$location.path() == '/player']">Accueil</a></li>
            <li><a href="<% URL::to('/#/mur-de-paroles') %>" ng-class="{true: 'displayed', false: ''}[$location.path() == '/mur-de-paroles']">Mur de paroles</a></li>
            <li><a href="<% URL::to('/#/besoin-d-aide') %>" ng-class="{true: 'displayed', false: ''}[$location.path() == '/besoin-d-aide']">Besoin d'aide</a></li>
            <li><a href="<% URL::to('/#/a-propos') %>" ng-class="{true: 'displayed', false: ''}[$location.path() == '/a-propos']">À propos</a></li>
            <li><a href="<% URL::to('/#/nous-contacter') %>" ng-class="{true: 'displayed', false: ''}[$location.path() == '/nous-contacter']">Contact</a></li>
          </span>
          <li>
            <button class="btn btn-success btn-donation" data-toggle="modal" data-target="#donationModal">Faire un don</button>
          </li>
        </ul>

        <div class="modal fade" id="donationModal" tabindex="-1" role="dialog" aria-labelledby="donationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                <h4 class="modal-title" id="donationModalLabel">Bien Sûres</h4>
              </div>
              <div class="modal-body">
                Eh bien non, pas pour le moment. <br> Bien Sûres est un projet étudiant, pûrement bénévole.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>

        <div id="footer" ng-class="{true: '', false: 'inactive'}[isSidebarActive]">
        <p class="joinSocial">Rejoignez nous sur :</p>
          <ul class="social-footer">
            <li><a href="https://www.facebook.com/biensures/" target="_blank" class="iconf-facebook-circled"><span>Facebook</span></a></li>
            <li><a href="https://twitter.com/BienSures" target="_blank" class="iconf-twitter-circled"><span>Twitter</span></a></li>
            <li><a href="http://instagram.com/biensures/" target="_blank" class="iconf-instagram-circled"><span>Instagram</span></a></li>
            <li><a href="http://www.pinterest.com/biensures/" target="_blank" class="iconf-pinterest-circled"><span>Pinterest</span></a></li>
            <li><a href="https://www.youtube.com/channel/UClMTubVyx3JJZjVELb-jsOA" target="_blank" class="iconf-youtube"><span>YouTube</span></a></li>
          </ul>
          <p class="copy">copyright © Bien Sûres - 2014 - <a href="<% URL::to('/#/mentions') %>">Mentions légales</a></p>
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

    __URL = "<% URL::to('/') %>/";


    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52124244-1', 'bien-sures.fr');

    window.fbAsyncInit = function() {
      FB.init({
        appId      : '648023928625681',
        channelUrl : __URL,
        status     : false,
        cookie     : false,
        xfbml      : false
      });
      };

    (function(d){
       var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = "//connect.facebook.net/fr_FR/all.js";
       ref.parentNode.insertBefore(js, ref);
     }(document));

    //Twitter Widgets JS
    window.twttr = (function (d,s,id) {
     var t, js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return; js=d.createElement(s); js.id=id;
    js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
    return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
    }(document, "script", "twitter-wjs"));

    __VIDEOS = '<% $videos %>';
  </script>

  <script src="<% asset('js/vendors/jquery.min.js') %>"></script>
  <script src="<% asset('js/vendors/pxloader.js') %>"></script>
  <script src="<% asset('js/vendors/jquery.isotope.js') %>"></script>
  <script src="<% asset('js/vendors/bootstrap.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-resource.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-sanitize.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-animate.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-touch.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-route.min.js') %>"></script>
  <script src="<% asset('js/vendors/angular-isotope.min.js') %>"></script>
  <script src="<% asset('js/vendors/ngActivityIndicator.min.js') %>"></script>
  <script src="<% asset('js/vendors/ui-bootstrap-custom-0.10.0.js') %>"></script>
  <script src="<% asset('js/vendors/ui-bootstrap-custom-tpls-0.10.0.js') %>"></script>
  <script src="<% asset('js/vendors/ga.js') %>"></script>
  <script src="<% asset('js/vendors/videogular.min.js') %>"></script>
  <script src="<% asset('js/vendors/buffering.min.js') %>"></script>
  <script src="<% asset('js/vendors/controls.min.js') %>"></script>
  <script src="<% asset('js/vendors/overlay-play.min.js') %>"></script>
  <script src="<% asset('js/vendors/poster.min.js') %>"></script>
  <script src="<% asset('js/vendors/quiz.js') %>"></script>
  <script src="<% asset('js/vendors/mobile-detect.min.js') %>"></script>
  <script src="<% asset('js/loader.js') %>"></script>
  <script src="<% asset('js/app.js') %>"></script>
  <script src="<% asset('js/controllers/player.js') %>"></script>
  <script src="<% asset('js/controllers/wall.js') %>"></script>
  <script src="<% asset('js/controllers/help.js') %>"></script>
  <script src="<% asset('js/controllers/about.js') %>"></script>
  <script src="<% asset('js/controllers/contact.js') %>"></script>
  <script src="<% asset('js/controllers/mentions.js') %>"></script>


  <div id="fb-root"></div>


</body>

</html>