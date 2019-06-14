<?php

/**
* Check if the 'url' GET variable is set
* Example - http://localhost/?url=http://testphp.vulnweb.com/images/logo.gif
*/

// Vulnerable to the file:// protocol to fetch a local file.
if (isset($_GET['url'])){
$url = $_GET['url'];

/**
* Send a request vulnerable to SSRF since
* no validation is being done on $url
* before sending the request
*/
$image = fopen($url, 'rb');

/**
* Send the correct response headers
*/
header("Content-Type: image/png");

/**
* Dump the contents of the image
*/
fpassthru($image);}