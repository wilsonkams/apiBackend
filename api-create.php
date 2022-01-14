<?php
//fonction pour créer un magasin 

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin:*");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,
Acess-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$mname= $data["name"];

require_once "dbconfig.php";

//requête pour insérer le maqasin dans la base de données 
$query = "INSERT INTO magasins(magasin_name)
           VALUES('".$mname."')";

if(mysqli_query($conn, $query) or die("Insert Query Failed")){
    echo json_encode(array("message" =>"Magasin ajouté avec succès.", "status" => true));
}
else
{
    echo json_encode(array("message" =>"ajout du magasin échoué.", "status" => false));
}

