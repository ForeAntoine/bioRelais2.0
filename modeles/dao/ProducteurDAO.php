<?php
require_once 'configs/param.php';

Class ProducteurDAO{
    /*
     creation des requetes suivante n�cessaire :
     - insertion d'un nouveau producteur
     - modification des donn�e d'un producteur
     - suppression d'un producteur
     r�cup�r� md5 afin d'enregistrer le code choisi
     par l'adherent de fa�on crypt�
     */
    public static function verification(producteur $producteur){
        $sql = "select mail from personne where mail = '" . $producteur->getMail() . "' and type = 'producteur' and  password =  '" . $_POST['mdp'] ."'";
        $login = DBConnex::getInstance()->queryFetchFirstRow($sql);
        if(empty($login)){
            return null;
        }
        return $login[0];
    }

}
 ?>
