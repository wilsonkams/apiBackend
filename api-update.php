<?php
//fonction pour modifier un magasin

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin:*");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,
Acess-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$mid = $data["id"];
$mname = $data["name"];

require_once "dbconfig.php";

//requête pour modifier le magasin 
echo $query = "UPDATE magasins SET magasin_name = '".$mname."' WHERE magasin_id='".$mid."' ";

if(mysqli_query($conn, $query) or die("Update Query Failed")){
    echo json_encode(array("message" =>"Magasin modifié avec succès.", "status" => true));
}
else
{
    echo json_encode(array("message" =>"la modification du magasin a échoué.", "status" => false));
}