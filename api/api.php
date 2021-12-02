<?php 
//qui ci va la chiamata api
require_once __DIR__ . "/../data/dischi_data.php";

//qui devo specificare le proprietà per il json(?)
header("Content-Type: application/json");

echo json_encode([
    "listaUtenti" => $dischi
])
?>