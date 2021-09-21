<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);


header('Content-Type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "KickPHP") {

    $sql = "SELECT * FROM music WHERE 1=1";
    $bind = [];

    if(!empty($data["titleSearch"])){
        $sql = " AND musicTitle = :musicTitle ";
        $bind[":musicTitle"] = $data["titleSearch"];
    }

    $music = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($music);

}   else{
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Invalid password.";

    echo json_encode($error);
}

?>

