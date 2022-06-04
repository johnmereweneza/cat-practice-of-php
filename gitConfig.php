<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'Github_OAuth_Client.php';

/*
 * Configuration and setup GitHub API
 */
$clientID         = '73d17fa385aec79df2d2';
$clientSecret     = '4d0ba09bc93ec5d4a13d545ec3ab3add41abe652';
$redirectURL     = 'http://localhost/cat2/home.php';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}