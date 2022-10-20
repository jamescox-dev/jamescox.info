<?php
require_once('url-normalizer.php');

$url = $_GET['url'];
$un = new URL\Normalizer($url);
$url = $un->normalize();

if ($url) {
  $urls = json_decode(file_get_contents('url-map.json'), true);
  $reverse_urls = $urls['reverse'];

  if (isset($reverse_urls[$url])) {
    $url = 'http://jamescox.info/q/' . $reverse_urls[$url];
  }

  $URL = strtoupper($url);
  if (strpos($URL, "HTTP://") === 0) {
    $URL = substr($URL, 7);
  }
  if (strpos($URL, "WWW.") === 0) {
    $URL = substr($URL, 4);
  }
  if (strpos($URL, 'JAMESCOX.INFO') === 0) {
    $url = $URL;
  }

  include('phpqrcode/qrlib.php');

  header('Content-Type: image/png');
  QRCode::png($url, false, QR_ECLEVEL_L, 3, 3);
  exit();
}
