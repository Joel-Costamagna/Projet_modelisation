<?php
// A editer par joel je crois
function connectDb() {
	$bdd = new PDO('mysql:host=localhost;port=8889;dbname=forum;charset=utf8', 'root', 'root');
	return $bdd;
}
