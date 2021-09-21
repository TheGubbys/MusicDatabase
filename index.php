<?php
require "settings/init.php";

if(!empty($_GET["type"])) {
    if($_GET["type"] == "delete") {
        $id = $_GET["id"];

        $db->sql("DELETE FROM music WHERE musicID = :musicID", [":musicID"=>$id], false);

        header("Location: index.php");
    }
}

$music = $db->sql("SELECT * FROM music");
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Sigende titel</title>

        <meta name="robots" content="All">
        <meta name="author" content="Udgiver">
        <meta name="copyright" content="Information om copyright">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/styles.css" rel="stylesheet" type="text/css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<body>
    <?php

    foreach ($music as $song){
    ?>
    <div class="row">
        <div class="col-12 col-md-4 bg-primary ">
            <?php
                echo $song->musicAuthor;
             ?>
        </div>
        <div class="col-12 col-md-4 bg-secondary">
            <?php
                echo $song->musicTitle;
            ?>
        </div>
        <div class="col-12 col-md-2">
            <a href="index.php?type=edit&id=<?php $song->musicID; ?>">Edit</a>
        </div>
        <div class="col-12 col-md-2">
            <a href="index.php?type=delete&id=<?php $song->musicID; ?>">Delete</a>
        </div>
        <div class="col-12 col-md-12 bg-success">
            <?php
            echo $song->musicDesc;
            ?>
        </div>
    </div>
    <?php
}
    ?>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>