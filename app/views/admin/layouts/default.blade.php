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

  @yield('styles')

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
          <a class="navbar-brand" href="index.html">Bien Sûres - Administration</a>
        </div>
        @if (Auth::check())
          <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="glyphicon glyphicon-user"></i>  <i class="glyphicon glyphicon-chevron-down"></i>
              </a>
              <ul class="dropdown-menu dropdown-user">
                <li><a href="{{ URL::to('admin/user') }}"><i class="glyphicon glyphicon-user"></i> User Profile</a>
                </li>
                <li class="divider"></li>
                <li><a href="{{ URL::to('logout') }}"><i class="glyphicon glyphicon-off"></i> Logout</a>
                </li>
              </ul>
            </li>
          </ul>
        @endif
    </nav>

    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>

  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>