<?php
require_once("model/connexion.php");

class Admin extends Connexion
{

    public function getPwd($pwdATest)
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT pwdUser FROM user WHERE idUser=1');
        $req->execute();
        $data = $req->fetch();
        if($pwdATest== $data['pwdUser']){
            return true;
        }else{
            return false;
        }
       
    }
}