<?php

header("Content-Type: application/json");

/** @var array $data */
$data = $data['workersList'];

$json = json_encode($data);

echo $json;