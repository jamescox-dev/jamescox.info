<?php

$urls = json_decode(file_get_contents('url-map.json'), true);
$forward_urls = $urls['forward'];

$url = strtoupper($_GET['url']);
$redirected_url = $forward_urls[$url];

if ($redirected_url) {
	header('Location: ' . $redirected_url);
	exit();
} else {
	header('HTTP/1.0 404 Not Found');
	readfile('../404.html');
	exit();
}
