<?php

$datasets = [];
$chemin = '../datasets';

foreach(glob($chemin.'/*.*') as $file) {
    $handle = fopen($file_name, 'r') or die('Une erreur s\'est produite');
    array_push($datasets, fread($handle, filesize($file_name)));
}

echo json_encode($datasets[0]);
exit();