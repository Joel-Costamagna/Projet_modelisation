<?php

// A editer par joel je crois
class Db {
	static function connectDb() {
		$bdd = new PDO('mysql:host=127.0.0.1;dbname=forum;charset=utf8;', 'root', 'root');
	}

}
