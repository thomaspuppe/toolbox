<?php
header("HTTP/1.1 200 OK");
header('Content-type: text/html');
header('Pragma: no-cache');
header('Cache-Control: max-age=0, public');

echo '<h2>GET</h2><pre>';
print_r($_GET);
echo '</pre>';

echo '<h2>Request Headers</h2><pre>';
print_r(http_get_request_headers());
echo '</pre>';