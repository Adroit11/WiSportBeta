<html>
<head>
    <meta charset="utf-8" />
    <title>Demo - CSV-to-Table</title>
    <!-- Latest compiled and minified CSS -->
    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link media="all" type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- Custom styling for main template (landing page) -->
    <link media="all" type="text/css" rel="stylesheet" href="http://localhost:8000/public/css/main.css">

    <!-- Navbar styling (all pages) -->
    <link media="all" type="text/css" rel="stylesheet" href="http://localhost:8000/public/css/nav.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://jquery-csv.googlecode.com/git/src/jquery.csv.js"></script>
    <script src="/public/js/uploader.js"></script>
    <script src="/public/js/papaparse.min.js"></script>

    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
</head>

<body>
<div class="container">
    <!-- NAVBAR -->

    <nav class="navbar navbar" role="navigation">
        <header class="navbar navbar-fixed-top navbar-default container" id="navbar-top" role="banner">
            <!--div class="container"-->
            <div class="collapse navbar-collapse" id="navbar-contents">
                <div class="row">
                    <div class="col-lg-2 col-sm-2">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-contents">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="row">

                            <a href="http://wisportcycling.org/" class="navbar-brand wisport"><img src="http://localhost:8000/public/images/nav-logo.png" alt="WiSport Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-10 navbar-right">
                        <div class="row">
                            <ul class="nav navbar-nav">
                                <li><a href=""><img src="http://localhost:8000/public/images/Borah-sm.jpg" alt="Mt Borah Link"></a></li>
                                <li><a href="#"><img src="http://localhost:8000/public/images/THlogo-sm.gif" alt="Trailhead Cycling Link"></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="http://localhost:8000/login" class="nav-button"><img src="http://localhost:8000/public/images/login-btn.png" alt="Login"></a></li>

                                <li><a href="http://localhost:8000/signup" class="nav-button"><img src="http://localhost:8000/public/images/signup-btn.png" alt="Sign Up"></a></li>

                            </ul>
                        </div>
                        <hr class="nav-divider">
                        <div class="row">
                            <ul class="nav navbar-nav" role="navigation">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Schedule</a></li>
                                <li class="dropdown" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    <a id="nav-locator-dropdown" class="dropdown-toggle" href="..." data-toggle="dropdown" data-target="#">
                                        About Us
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-left " role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Rules</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Mission</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Teams</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Shops</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Leadership</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Results</a></li>
                                <li><a href="#">Standings</a></li>
                                <!--li><a href="#">Forum</a></li-->
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </header>
    </nav>
    <h2>Upload Race Results</h2>
<div id=inputs class=clearfix>
    <input type=file id=files name=files[] multiple />
</div>
    <button type="button" class="btn btn-default btn-sm" aria-label="Left Align" ng-submit="clearTable()">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Clear
    </button>
    <button type="button" class="btn btn-default btn-sm" aria-label="Left Align" ng-submit="newResultsUpload()">
        <span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span> Save Results
    </button>
<hr />
<!--output id=list>
</output>
<hr /-->
<table class="contents table table-striped table-bordered">
</table>
    </div>
</body>