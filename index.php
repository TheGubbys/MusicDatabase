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

<div class="container p-3">
    <div class="row">
    <?php
    foreach ($music as $song){
        ?>
                <div class="col-12 col-md-6 col-lg-4 pt-2">
                    <div class="border-primary border border-3 h-100">
                        <div>
                            <h5 class="text-center pt-2"><?php
                                echo $song->musicAuthor;
                                ?></h5>
                        </div>
                        <div class="py-2 border-bottom border-primary border-2">
                            <h1 class="text-center">
                                <?php
                                echo $song->musicTitle;
                                ?>
                            </h1>
                        </div>
                        <div class="row text-center">
                            <div class="col-6 p-2">
                                <?php
                                echo $song->musicGenre;
                                ?>
                            </div>
                            <div class="col-6 p-2">
                                <?php
                                echo $song->musicFinDate;
                                ?>
                            </div>
                        </div>
                        <div class="p-2 border-top border-bottom border-primary border-2">
                            <?php
                            echo $song->musicDesc;
                            ?>
                        </div>
                        <div class="row text-center">
                            <div class="p-2 col-6">
                                <a class="btn btn-outline-secondary" href="<?php
                                echo $song->musicLink;
                                ?>">Song Link</a>
                            </div>
                            <div class="p-2 col-6">
                                <a class="btn btn-outline-secondary" href="<?php
                                echo $song->musicSoMe;
                                ?>">SoMe</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-2 text-center">
                                <a class="btn btn-outline-warning" href="edit.php?type=edit&id=<?php echo $song->musicID; ?>">Edit</a>
                            </div>
                            <div class="col-6 py-2 text-center">
                                <a class="btn btn-outline-danger" href="index.php?type=delete&id=<?php echo $song->musicID; ?>">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
    }
    ?>
    </div>
</div>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>