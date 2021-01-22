
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Главная страница</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://getbootstrap.com/2.0.2/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="https://getbootstrap.com/2.0.2/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="{{route ('home')}}">Сайт новостей</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="{{route ('home')}}">Главная</a></li>
              <li><a href="#about">О нас</a></li>
              <li><a href="#contact">Контакты</a></li>
            </ul>
            <p class="navbar-text pull-right">Вы вошли как <a href="#">username</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Категории новостей</li>
              <li class="active"><a href="{{route ('category.news')}}">Политика</a></li>
              <li><a href="{{route ('category.news')}}">Экономика</a></li>
              <li><a href="{{route ('category.news')}}">Культура</a></li>
              <li><a href="{{route ('category.news')}}">Наука</a></li>
              <li><a href="{{route ('category.news')}}">Спорт</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
        @yield('content')
        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2021</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://getbootstrap.com/2.0.2/assets/js/jquery.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-transition.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-alert.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-modal.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-dropdown.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-scrollspy.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-tab.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-tooltip.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-popover.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-button.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-collapse.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-carousel.js"></script>
    <script src="https://getbootstrap.com/2.0.2/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
