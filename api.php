<?php
require "settings/init.php";

$data = json_decode(file_get_contents('php://input'), true);


header('Content-Type: application/json; charset=utf-8');

if(isset($data["password"]) && $data["password"] == "SuperSecretPassword1234") {

    $sql = "SELECT * FROM music WHERE 1=1";
    $bind = [];

    if(!empty($data["titleSearch"])){
        $sql .= " AND musicTitle LIKE CONCAT('%', :musicTitle, '%') ";
        $bind[":musicTitle"] = $data["titleSearch"];
    }

    if(!empty($data["authorSearch"])){
        $sql .= " OR musicAuthor LIKE CONCAT('%', :musicAuthor, '%') ";
        $bind[":musicAuthor"] = $data["authorSearch"];
    }

    if(!empty($data["genreSearch"])){
        $sql .= " AND musicGenre LIKE CONCAT('%', :musicGenre, '%') ";
        $bind[":musicGenre"] = $data["genreSearch"];
    }

    if(!empty($data["subSearch"])){
        $sql .= " AND musicSubDate >= :musicSubDate";
        $bind[":musicSubDate"] = $data["subSearch"];
    }

    if(!empty($data["descSearch"])){
        $sql .= " AND musicDesc LIKE CONCAT('%', :musicDesc, '%') ";
        $bind[":musicDesc"] = $data["descSearch"];
    }

    $sql .= " ORDER BY musicSubDate DESC";


    $music = $db->sql($sql, $bind);
    header("HTTP/1.1 200 OK");

    echo json_encode($music);

}   else{
    header("HTTP/1.1 401 Unauthorized");
    $error["errorMessage"] = "Invalid password.";

    echo json_encode($error);
}

?>

