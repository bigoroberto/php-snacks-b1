<?php

$arr = [
  "nome" => "Thomas",
  "eta" => 123,
  "maschio" => true,
  "nazionalita" => [
    "italiano",
    "olandese"
  ]
];

echo $arr["nazionalita"][0];
var_dump($arr);