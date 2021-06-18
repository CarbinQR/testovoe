<?php

header("Content-Type: application/json");

/** @var array $data */
$percentList = $data['data'];

$json = json_encode($percentList);

echo $json;

