<?php

header("Content-Type: application/json");

/** @var array $data */
$cashesList = $data['cashesList'];

echo json_encode($cashesList);