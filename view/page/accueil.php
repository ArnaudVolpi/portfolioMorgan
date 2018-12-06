<?php 
$title = "Bonjour je suis un titre";
ob_start(); ?>

<?php 
$content = ob_get_clean();
require('view/template.php');
?>