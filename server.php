<?php
header('Content-Type: application/json');

$jsonBody = file_get_contents('php://input');
file_put_contents('file.txt', $jsonBody);
$json = file_get_contents('block.json');
echo $json;