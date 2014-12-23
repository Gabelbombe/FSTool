<?php

// Include Composer's autoloader
include './vendor/autoload.php';

$link = New \ADX\Core\Link( 'company.com', 389 );   // Connect to server on default port
$link->bind( 'username@company.com', 'password' );  // Authenticate to the server

\ADX\Core\Schema::build( $link );                   // Build the local schema cache ( takes some time, go get a coffee )

