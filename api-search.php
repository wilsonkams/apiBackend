<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin:*");

$data = json_decode(file_get_contents("php://input"), true);