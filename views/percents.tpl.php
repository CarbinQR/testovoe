<?php

header("Content-Type: application/json");

/** @var array $data */
$data = $data['percentsList'];

$json = json_encode($data);

echo $json;

