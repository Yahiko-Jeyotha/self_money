<?php
include_once '../model/queries.php';

$respounse = new Queries('types_incomes');
$rta = $respounse->listData();

print_r($rta);
echo json_encode($rta);
