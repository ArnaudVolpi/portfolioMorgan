<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" type="image/png" href="public/icon/favicon.png" />

<!-- Tes liens css -->
<link rel="stylesheet" href="public/css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel="stylesheet" href="public/css/navbar.css">



<title>Morgan Orabona</title>
</head>
<body>
<!-- Ta navbar -->
<?php require_once('nav.php') ?>

<!-- Ton Contenu -->
<?=$content?>

<!-- Ton Footer -->
<?php require_once('footer.php') ?>

<!-- JS -->
<script src="public/js/navbar.js"></script>
</body>
</html>