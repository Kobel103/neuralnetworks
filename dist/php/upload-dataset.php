<?php
header("content-type:application/json");

$data_fichier = isset($_POST) ? $_POST : -1;

echo json_encode($data_fichier);
exit();