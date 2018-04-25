<?php
class BDDWriterNewUser implements SplObserver
{
  protected $db;
 
  public function __construct(PDO $db)
  {
    $this->db = $db;
  }
  
  public function update(SplSubject $obj)
  {
    $q = $this->db->prepare('INSERT INTO `users` (`id`, `nom`, `prenom`, `login`, `password`, `email`) VALUES (:user_nom,:user_prenom,:user_mail,:user_login,:user_pwd)');
    $q->bindValue(':user_nom', $obj->getUser()->getNomUser(),PDO::PARAM_STR);
	$q->bindValue(':user_prenom', $obj->getUser()->getPrenomUser(),PDO::PARAM_STR);
	$q->bindValue(':user_mail', $obj->getUser()->getMailUser(),PDO::PARAM_STR);
	$q->bindValue(':user_login', $obj->getUser()->getLoginUser(),PDO::PARAM_STR);
	$q->bindValue(':user_pwd', $obj->getUser()->getPwdUser(),PDO::PARAM_STR);
	$q->execute();
  }
}