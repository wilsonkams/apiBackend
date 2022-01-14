<?php
//fonction pour supprimer un magasin 

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin:*");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Content-Type,
Acess-Control-Allow-Methods, Authorization");

$data = json_decode(file_get_contents("php://input"), true);

$mid = $data["id"];

require_once "dbconfig.php";

// requête pour supprimer un magasin par son id 
echo $query = "DELETE FROM magasins WHERE magasin_id='".$mid."' ";

if(mysqli_query($conn, $query) or die("Delete Query Failed")){
    echo json_encode(array("message" =>"Magasin supprimé avec succès.", "status" => true));
}
else
{
    echo json_encode(array("message" =>"la suppression du magasin a échoué.", "status" => false));
}