<?php

class BDDWriterNewUser implements SplObserver {
	protected $db;

	public function __construct(PDO $db) {
		$this->db = $db;
	}

	public function update(SplSubject $obj) {
		$q =
			$this->db->prepare('INSERT INTO `users` (`nom`, `prenom`, `login`, `password`, `email`) VALUES (:user_nom,:user_prenom,:user_mail,:user_login,:user_pwd)');
		$q->bindValue(':user_nom', $obj->getUser()->getName(), PDO::PARAM_STR);
		$q->bindValue(':user_prenom', $obj->getUser()->getPrenom(), PDO::PARAM_STR);
		$q->bindValue(':user_mail', $obj->getUser()->getEmail(), PDO::PARAM_STR);
		$q->bindValue(':user_login', $obj->getUser()->getLogin(), PDO::PARAM_STR);
		$q->bindValue(':user_pwd', $obj->getUser()->getPassword(), PDO::PARAM_STR);
		try {
			$q->execute();
		} catch (\Exception $e) {
			echo "erreur BDD : $e";
		}
	}
}
