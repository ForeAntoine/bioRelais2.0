<?php
//D�finition des variables de connexion
class Param {
	public static $user = 'forea';
	// mettre $pass=''
  public static $pass = 'forea';
	// supprimer :8889 de $dsn car numero du port pour mac
	public static $dsn = 'mysql:host=localhost;dbname=forea_BioRelai;charset=utf8';
}
?>
