<?php
require_once 'configs/param.php';

Class PersonneDAO{
    /*
     creation des requetes suivante n�cessaire :
     - insertion d'un nouvel adherent
     - modification des donn�e d'un adherent
     - suppression d'un adherent
     r�cup�r� md5 afin d'enregistrer le code choisi
     par l'adherent de fa�on crypt�
     */
    public static function verification(String $mail, String $passwd){
        $sql = "SELECT password FROM PERSONNE WHERE mail = '$mail' AND password = '$passwd';";
        $login = DBConnex::getInstance()->queryFetchFirstRow($sql);
        if(empty($login)){
            $res=false;
        }else {
          $res=true;
        }
        return $res;
    }
    public static function getType(String $mail) {
      $sql = "SELECT type WHERE mail = '$mail';";
      $login = DBConnex::getInstance()->queryFetchFirstRow($sql);

      return $login;
    }

}
 ?>
