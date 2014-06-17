<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>
    Bien Sûres - Administration
  </title>

  <meta name="keywords" content="@yield('keywords')" />
  <meta name="author" content="@yield('author')" />
  <meta name="description" content="@yield('description')" />
  <meta name="google-site-verification" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
  <link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

</head>
<body>

  <div id="wrapper">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::to('admin') }}">Bien Sûres - Administration</a>
      </div>
      <div class="panel-heading">
        <div class="btn-group pull-right">
          <a href="{{ URL::to('logout') }}" class="btn btn-danger btn-outline"><i class="glyphicon glyphicon-off"></i> Déconnexion</a>
        </div>
      </div>

      <div class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
          <ul class="nav" id="side-menu">
            <li>
              <a href="#">Bienvenue, {{ Auth::user()->username }}</a>
            </li>
            <li>
              <a href="{{ URL::to('admin') }}"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a>
            </li>
<!--             <li>
              <a href="#"><i class="glyphicon glyphicon-bar-chart-o glyphicon-fw"></i> Charts<span class="fa arrow"></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="flot.html">Flot Charts</a>
                </li>
                <li>
                  <a href="morris.html">Morris.js Charts</a>
                </li>
              </ul>
            </li> -->
            <li>
              <a href="{{ URL::to('admin/users') }}"><i class="glyphicon glyphicon-heart-empty"></i> Utilisateurs</a>
            </li>
            <li>
              <a href="{{ URL::to('offensives') }}"><i class="glyphicon glyphicon-list-alt"></i> Agressions</a>
            </li>
            <li>
              <a href="{{ URL::to('replies') }}"><i class="glyphicon glyphicon-list-alt"></i> Répliques</a>
            </li>
            <li>
              <a href="{{ URL::to('stats') }}"><i class="glyphicon glyphicon-stats"></i> Statistiques</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          @yield('content')
        </div>
      </div>
    </div>

  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>