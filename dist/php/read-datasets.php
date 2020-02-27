<?php

$datasets = [];
$chemin = '../datasets';

foreach(glob($chemin.'/*.*') as $file) {
    $handle = fopen($file, 'r') or die('Une erreur s\'est produite');
    $contenu = fread($handle, filesize($file));
    fclose($handle);
    array_push($datasets, [explode('/', $file)[2], $contenu]);
}

echo json_encode($datasets);
exit();