<?php 
$title = "Bonjour je suis un titre";
ob_start(); ?>




<video autoplay muted loop id="homeVideo">
        <source src="public/video/home.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <h1 class="titre">Morgan Orabona</h1>






<?php 
$content = ob_get_clean();
require('view/template.php');
?>