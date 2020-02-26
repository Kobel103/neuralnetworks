<?php
header("content-type:application/json");

$file_name = isset($_POST['file_name']) ? $_POST['file_name'] : -1;
$file_content = isset($_POST['content']) ? $_POST['content'] : -1;

$handle = fopen('../datasets/' . $file_name, 'w') or die('Une erreur s\'est produite');
fwrite($handle, json_encode($file_content));
fclose($handle);

echo json_encode('Le dataset a bien été mis en ligne sur le serveur');
exit();