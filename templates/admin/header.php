<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <title>FS Tools Login</title>

    <meta charset="utf-8">

    <meta name="author" content="Jd Daniel :: Ehime-ken">
    <meta name="description" content="HTML5/PHP5.6 Replacement for FSTool">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- CSS -->
    <link rel='stylesheet' type='text/css' href="/assets/css/trends.css" />

    <!-- Google fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900' />
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Roboto+Slab:400,700' />    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=PT+Sans:400,700'>


    <!-- Bootstrap Core -->
    <link rel='stylesheet' type='text/css' href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <!-- Override -->
    <link rel='stylesheet' type='text/css' href="/assets/css/style.css" />

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

    <nav role="navigation" class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">IAS Filesystem Tool (Unix)</a>

            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <form role="search" class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                    </div>
                </form>
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Profile</a></li>

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Actions <b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#">History</a></li>
                            <li><a href="#">Something else</a></li>
                            <li><a href="#">IDK....</a></li>
                            <li class="divider"></li>
                            <li><a href="/logout">Logout [<?php echo $user; ?>]</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>