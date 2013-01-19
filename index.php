
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ditty - The Crowd Music Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="IOCurve.com">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="bootstrap/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="bootstrap/ico/favicon.png">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="data/js/juke.js"></script>
  </head>

  <body style="background-image: url(data/img/graphpaper.png)">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Ditty</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Guest</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Info</li>
              <li class="active"><a href="#" onclick="paintWires('intro.php', 'mainContent')">Intro</a></li>
              <li><a href="#">What is it?</a></li>
              <li><a href="#">Why do it?</a></li>
              <li class="nav-header">For Developers</li>
              <li><a href="#">Philosophy</a></li>
              <li><a href="#">Documentation</a></li>
              <li><a href="#">Careers</a></li>
<!--              <li class="nav-header">Other Properties</li>
              <li><a href="#">ActiveSlice</a></li>
              <li><a href="#">OathGames</a></li>
              <li><a href="#">SIFT</a></li>-->
	      <li class="nav-header">Tools</li>
	      <li onclick="paintWires('iocMgmPoints.php', 'mainContent')">Manage Points</li>
	      <li onclick="paintWires('iocMgmTypes.php', 'mainContent')">Manage Types</li>
	      <li onclick="paintWires('iocMgmQualities.php', 'mainContent')">Manage Qualities</li>

            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9" id="mainContent">

	<script>paintWires('intro.php', 'mainContent');</script>

        </div><!--/span-->
      </div><!--/row--> 


      <hr>

    <div id="footer" style="background-color: black">
      <div class="container">
        <p class="muted credit" style="text-align: center; vertical-align: bottom; padding-top: 10px">
		<img src="bootstrap/img/logo.png" style="height: 24px"><br>&copy; IOCurve 2012
	</p>
      </div>
    </div>

    </div><!--/.fluid-container-->

    <!-- Placed at the end of the document so the pages load faster -->
<!--    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
    <script src="bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="bootstrap/js/bootstrap-tab.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="bootstrap/js/bootstrap-popover.js"></script>
    <script src="bootstrap/js/bootstrap-button.js"></script>
    <script src="bootstrap/js/bootstrap-collapse.js"></script>
    <script src="bootstrap/js/bootstrap-carousel.js"></script>
    <script src="bootstrap/js/bootstrap-typeahead.js"></script>-->

  </body>
</html>
