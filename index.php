<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Sigende titel</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php include 'topheader.php'; ?>

<div class="container">

	<div class="music">
		<div class="filter p-5">
			<div class="row">
				<div class="col-md-4 p-2">
					<p class="text-center">Search Sub-Date</p>
					<input type="date" class="form-control subSearch">
				</div>
				<div class="col-md-8 p-2">
					<p class="text-center">Search Authors & Titles</p>
					<input type="search" class="form-control titleSearch authorSearch" placeholder="Search...">
				</div>
			</div>
            <div class="row">
                <div class="col-md-4 p-2">
                    <p class="text-center">Search Genre</p>
                    <input type="search" class="form-control genreSearch" placeholder="Search...">
                </div>
                <div class="col-md-8 p-2">
                    <p class="text-center">Search Descriptions</p>
                    <input type="search" class="form-control descSearch" placeholder="Search...">
                </div>
            </div>
		</div>

		<div class="items pb-5">
			<!-- Her vises musikken! -->
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module">
	import Music from "./js/music.js";

	const music = new Music();

	music.init();

</script>
</body>
</html>
