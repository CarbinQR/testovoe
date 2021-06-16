<?php

header("Content-Type: application/json");

/** @var array $data */
$data = $data['cashesList'];

$json = json_encode($data);

echo $json;