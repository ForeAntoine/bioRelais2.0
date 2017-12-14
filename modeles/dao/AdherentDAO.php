<?php
require_once 'configs/param.php';

Class AdherentDAO{
    /*
     creation des requetes suivante n�cessaire :
     - insertion d'un nouvel adherent
     - modification des donn�e d'un adherent
     - suppression d'un adherent
     r�cup�r� md5 afin d'enregistrer le code choisi
     par l'adherent de fa�on crypt�
     */
    public static function verification(adherent $adherent){
        $sql = "select mail from personne where mail = '" . $adherent->getMail() . "' and type = 'adherent' and  password =  '" . $_POST['mdp'] ."'";
        $login = DBConnex::getInstance()->queryFetchFirstRow($sql);
        if(empty($login)){
            return null;
        }
        return $login[0];
    }

}
 ?>
