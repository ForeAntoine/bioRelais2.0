<?php
// déconnecte l'abonné du site et rafraichit la page
session_destroy();
header('Location: index.php');
?>
