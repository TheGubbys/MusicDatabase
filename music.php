<?php
require "settings/init.php";

$id = $_GET["musicID"];

$bind = [":musicID" => $id];
$music = $db->sql("SELECT * FROM music WHERE musicID = :musicID", $bind);
$music = $music[0];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title> <?php echo $music->musicTitle . " - " . $id; ?></title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link rel="icon" type="image/svg+xml" href="./images/logo.svg">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">


    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'header.php'; ?>
<div class="background min-vh-100">
    <div class="container p-3 text-white">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="col-12">
                    <img class="rounded mx-auto" alt="Cover Art" src="uploads/<?php
                    echo $music->musicArt;
                    ?>">
                </div>
                <div class="row text-center">
                    <div class="col-sm-6 col-12 my-auto pt-2">
                        <h5>Created By</h5>
                        <h4><?php
                            echo $music->musicAuthor;
                            ?>
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12 my-auto pt-2">
                        <h5>Title</h5>
                        <h4><?php
                            echo $music->musicTitle;
                            ?>
                        </h4>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6 p-2">
                        <p>Genre:</p>
                    </div>
                    <div class="col-6 p-2">
                        <?php
                        echo $music->musicGenre;
                        ?>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6 p-2">
                        <p>Finished:</p>
                    </div>
                    <div class="col-6 p-2">
                        <?php
                        echo $music->musicFinDate;
                        ?>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6 p-2">
                        <p>Submitted:</p>
                    </div>
                    <div class="col-6 p-2">
                        <?php
                        echo $music->musicSubDate;
                        ?>
                    </div>
                </div>
                <div class="p-2 row text-center">
                    <div class="d-flex justify-content-center">
                        <h5>Source Material</h5>
                    </div>
                    <p class="p-2 text-center">
                        <?php
                        if(!empty($music->musicSource)){
                            echo $music->musicSource;
                        }else{
                            echo "No source was provided";
                        }
                        ?>
                    </p>
                </div>
                <div class="p-2 border-top border-bottom border-secondary border-2">
                    <h5 class="text-center">Description</h5>
                    <?php
                    echo $music->musicDesc;
                    ?>
                </div>
                <div class="row text-center p-2">
                    <div class="p-2 col-6">
                        <a class="btn btn-lg btn-secondary text-white" target="_blank" href="<?php
                        echo $music->musicLink;
                        ?>">Song Link</a>
                    </div>
                    <div class="p-2 col-6">
                        <a class="btn btn-lg btn-secondary text-white" href="
                        <?php
                        echo $music->musicSoMe;
                        ?>">SoMe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>