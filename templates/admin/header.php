<!DOCTYPE html>
<html lang="en" class="no-js">

<head>

    <meta charset="utf-8">
    <title>FS Tools Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/supersized.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>

<!-- Container -->
<div id="container">

    <!-- Header -->
    <div id="header">
        <div id="branding">
            <h1 id="site-name">IAS Filesystem Tool (Unix)</h1>
        </div>

        <div id="user-tools">
            Welcome,
            <strong><?php echo $user; ?></strong>.

            <a href="/logout">Log out</a>

        </div>
    </div>
    <!-- END Header -->