<?php
class userRegistrer{
    private $nom;
    private $prenom;
    private $mail;
    private $login;
    private $pwd;
 
    public function __construct($valeurs=array()){
        if (!empty($valeurs)){
            $this->affecte($valeurs);
        }
    }
    public function affecte($donnees){
        foreach ($donnees as $attribut => $valeur){
            switch ($attribut){
                case 'user_nom' : $this->setNomPersonne($valeur);
                break;
                case 'user_prenom' : $this->setPrenomPersonne($valeur);
                break;
                case 'user_mail' : $this->setMailPersonne($valeur);
                break;
                case 'user_login' : $this->setLoginPersonne($valeur);
                break;
                case 'user_pwd' : $this->setPwdPersonne($valeur);
                break;
            }
        }
    }
    
    public function getNomUser(){
        return $this->nom;
    }
    public function setNomUser($nom){
        $this->nom=$nom;
    }
    public function getPrenomUser(){
        return $this->prenom;
    }
    public function setPrenomUser($prenom){
        $this->prenom=$prenom;
    }
       public function getMailUser(){
        return $this->mail;
    }
    public function setMailUser($mail){
        $this->mail=$mail;
    }
        public function getLoginUser(){
        return $this->login;
    }
    public function setLoginUser($login){
        $this->login=$login;
    }
	public function getPwdUser(){
        return $this->pwd;
    }
    public function setPwdUser($pwd){
        $this->pwd=$pwd;
    }
}
?>