<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>MapCentia GeoCloud - Make mapping easy</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Store geographical data and make online maps"/>
    <meta name="keywords" content="GIS, geographical data, maps, web mapping, shape file, GPX, MapInfo, WMS, OGC"/>
    <meta name="author" content="Martin Hoegh"/>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link href="/styles/banner-ie.css" rel="stylesheet">
    <![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="/js/bootstrap/js/bootstrap.js"></script>
    <link href="/js/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link href="http://twitter.github.com/bootstrap/assets/css/docs.css" rel="stylesheet">
    <link href="/styles/banner.css" rel="stylesheet">
    <script src="http://beta.mygeocloud.cowi.webhouse.dk/js/jqote2/jquery.jqote2.js"></script>
    <style type="text/css">
        body {
            background: url(/theme/images/agsquare.png) repeat top left;
        }

        .popover-title {
            display: none !important;
        }

        .popover {
            width: 200px;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 10px 0;
            font-family: inherit;
            font-weight: bold;
            line-height: 1;
            color: inherit;
            text-rendering: optimizelegibility;
        }

        .navbar .brand-dev:hover {
            text-decoration: none;
        }

        .navbar .brand-dev {
            float: left;
            display: block;
            padding: 8px 20px 12px;
            margin-left: -20px;
            font-size: 20px;
            font-weight: 200;
            line-height: 1;
            color: #ffffff;
        }

        .dialog, .dashboard {
            border: 1px solid black;
            padding: 40px;
            margin: auto;
            margin-top: 50px;
            background-color: white;
            border-radius: 10px;
            border: 3px solid rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            background-clip: padding-box;
        }
        .dashboard-create{
            padding: 40px;
            margin: auto;
            margin-top: 50px;
        }

        .dialog {
            width: 440px;
        }

        .dashboard {
            min-height: 200px;
        }

        .first {
            margin-top: 20px
        }

        .box {
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            adding: 10px;
            display: block;
            background: white;
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, white), color-stop(100%, #DDD));
            background: -webkit-linear-gradient(top, white 0, #DDD 100%);
            background: -moz-linear-gradient(top, white 0, #DDD 100%);
            background: -ms-linear-gradient(top, white 0, #DDD 100%);
            background: -o-linear-gradient(top, white 0, #DDD 100%);
            background: linear-gradient(top, white 0, #DDD 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dddddd', GradientType=0);
            border-left: solid 1px #BBB;
            border-right: solid 1px #CCC;
            border-bottom: solid 1px #AAA;
            border-top: solid 1px #DDD;
            -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .1);
            -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .1);
            height: 230px;
            position: relative;
        }

        .inner {
            padding: 10px;
        }

        .box h2 {
            display: block;
            padding: 10px 12px;
            margin-bottom: 12px;
            font-size: 20px;
            font-weight: bold;
            color: #777;
            border-bottom: 1px solid #E2E2E2;
            -webkit-box-shadow: 0 1px 0 #fff;
            -moz-box-shadow: 0 1px 0 #fff;
            box-shadow: 0 1px 0 #fff;
            -webkit-text-shadow: 0 1px 0 rgba(255, 255, 255, .6);
            -moz-text-shadow: 0 1px 0 rgba(255, 255, 255, .6);
            text-shadow: 0 1px 0 rgba(255, 255, 255, .6);
            line-height: 20px;
        }

        h2 span i {
            font-size: 13px;
            font-weight: bold;
            font-style: normal
        }

        .icon-ok {
            margin-right: 5px;
        }

        .box .inner {
            color: #777;
            font-weight: bold;
            -webkit-text-shadow: 0 1px 0 rgba(255, 255, 255, .6);
            -moz-text-shadow: 0 1px 0 rgba(255, 255, 255, .6);
            text-shadow: 0 1px 0 rgba(255, 255, 255, .6);
            line-height: 20px;
        }

        .box .minus {
            color: #aaa;
        }

        .box .no-icon {
            visibility: hidden;
        }

        .round_border {
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .btn-upgrade {
            position: absolute;
            bottom: 15px;
            right: 15px;
            float: right;
        }

        .all-plans i {
            margin-left: 20px;
        }

        .all-plans {
            margin-top: 15px;
        }

        .form {
            margin-bottom: 0px;
        }

        #btn-admin {
            margin-top: 50px;
        }
	.map-entry {
	    font-size: 14pt;	
	    font-weight: bold;	
	}
	.map-entry a {
	   float:right;
	}
    </style>
</head>
<body>
    <?php include_once("analyticstracking.php") ?>
    <span id="corner-banner">
            <em>beta</em>
        </span>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
                <a class="brand" href="/">GeoCloud</a>

                <div class="nav-collapse">
                    <ul class="nav">
                        <!-- <li>
                            <a href="">Feutures</a>
                        </li> -->
                        <li>
                            <a href="/developers/index.html">Developers</a>
                        </li>
                       <!-- <li>
                            <a href="/user/plans">Plans &amp; Pricing</a>
                        </li> -->
                        <li>
                            <?php if (!$_SESSION['auth'] || !$_SESSION['screen_name']) {
                                ?>
                                <a href="/user/login">Log in</a>
                            <?php } else { ?>
                                <a href="/user/login">Dashboard</a>
                            <?php } ?>
                        </li>

                    </ul>
                </div>
                <!-- -->
            </div>
        </div>
    </div>
