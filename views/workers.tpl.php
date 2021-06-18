<?php

header("Content-Type: application/json");

/** @var array $data */
$workersList = $data['data'];

$json = json_encode($workersList);

echo $json;