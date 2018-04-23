<?php  
// A editer par joel je crois
function connectDb() {
  $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
  return $bdd;
}
?>