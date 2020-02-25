<?php
header("content-type:application/json");

$data_fichier = isset($_POST['data']) ? $_POST['data'] : -1;

echo json_encode($data_fichier);
exit();