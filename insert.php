<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">

<?php
require "settings/init.php";


$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;


if(!empty($_POST["data"])){
    $data = $_POST["data"];
    $file = $_FILES;

    if(!empty($file["musicArt"]["tmp_name"])){
        move_uploaded_file($file["musicArt"]["tmp_name"], "uploads/" . basename($file["musicArt"]["name"]));
    }



    $sql = "INSERT INTO music (musicAuthor, musicTitle, musicLink, musicSource, musicGenre, musicSoMe, musicDesc, musicArt, musicFinDate) VALUES(:musicAuthor,:musicTitle,:musicLink, :musicSource, :musicGenre, :musicSoMe, :musicDesc, :musicArt, :musicFinDate)";
    $bind = [":musicAuthor" => $data["musicAuthor"],
        ":musicTitle" => $data["musicTitle"],
        ":musicLink" => $data["musicLink"],
        ":musicSource" => $data["musicSource"],
        ":musicGenre" => $data["musicGenre"],
        ":musicSoMe" => $data["musicSoMe"],
        ":musicDesc" => $data["musicDesc"],
        ":musicArt" => (!empty($file["musicArt"]["tmp_name"])) ? $file["musicArt"]["name"] : NULL,
        ":musicFinDate" => $data["musicFinDate"]];

    $db->sql($sql, $bind, false);

    echo "<div class='min-vh-100 container d-flex justify-content-center'>
               <div class='row p-2 align-items-center text-center'>
                   <div class='col-12'>
                       <h1>Success!</h1>
                       <p>Your song was uploaded!</p>
                       <div class='p-2'>
                           <a class='btn btn-outline-primary text-center' href='insert.php'>Submit another song!</a>
                       </div>
                   </div>
               </div>
           </div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Indsæt til Database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/p09j0iwr65kxsbir5inys4rfebfhkh827od2ye4n58tgf9rn/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<body>

<form method="post" action="insert.php" enctype="multipart/form-data">
    <div class="row p-5 m-2">
        <div>
            <h1 class="text-center">Submit your song to the MusicDatabase!</h1>
        </div>
        <div class="col-12 col-md-6 pt-2">
            <div class="form-group">
                <label for="musicAuthor">Authors</label>
                <input class="form-control" type="text" name="data[musicAuthor]" id="musicAuthor" placeholder="Who made the song?" value="" required>
            </div>
        </div>
        <div class="col-12 col-md-6 pt-2">
            <div class="form-group">
                <label for="musicTitle">Song Title</label>
                <input class="form-control" type="text" name="data[musicTitle]" id="musicTitle" placeholder="What is your song title?" value="" required>
            </div>
        </div>
        <div class="col-12 col-md-6 pt-2">
            <div class="form-group">
                <label for="musicLink">Link to Song</label>
                <input class="form-control" type="url" name="data[musicLink]" id="musicLink" placeholder="tinyurl.com" value="" required>
            </div>
        </div>
        <div class="col-12 col-md-6 pt-2">
            <div class="form-group">
                <label for="musicSource">Sources</label>
                <input class="form-control" type="text" name="data[musicSource]" id="musicSource" placeholder="Please provide any source material. Leave blank if none." value="">
            </div>
        </div>
        <div class="col-12 col-md-6 pt-2">
            <div class="form-group">
                <label for="musicGenre">Genre</label>
                <input class="form-control" type="text" name="data[musicGenre]" id="musicGenre" placeholder="Separate with commas." value="">
            </div>
        </div>
        <div class="col-12 col-md-6 pt-2">
            <div class="form-group">
                <label for="musicGenre">Social Media</label>
                <input class="form-control" type="text" name="data[musicSoMe]" id="musicSoMe" placeholder="Where can people find more of your cool tunes?" value="">
            </div>
        </div>
        <div class="col-12 pt-2">
            <div class="form-group">
                <label class="form-label" for="musicArt">Cover Art</label>
                <input type="file" class="form-control" id="musicArt" name="musicArt">
            </div>
        </div>
        <div class="col-12 pt-2">
            <div class="form-group">
                <label for="musicDesc">Song Description</label>
                <textarea class="form-control" name="data[musicDesc]" id="musicDesc" placeholder="Do you have anything to say about your song?"></textarea>
            </div>
        </div>
        <div class="col-12 col-md-6 pt-2">
            <div class="form-group">
                <label for="musicFinDate">Finish Date</label>
                <input class="form-control" type="date" name="data[musicFinDate]" id="musicFinDate" value="<?php echo $today; ?>">
            </div>
        </div>
        <div class="col-12 col-md-6 offset-md-6 pt-2">
            <button class="form-control btn btn-outline-primary" type="submit" id="btnSubmit">Upload Song!</button>
        </div>
    </div>
</form>

<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
