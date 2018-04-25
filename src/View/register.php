<?php
require('Observer/Observee.php');
require('Observer/user.php');
require('Observer/RegistrerViewValidation.php');
require('Observer/MailSender.php');
require('Observer/BDDWriterNewUser.php');

$o = new observee; // Nous créons un nouveau gestionnaire d'erreur.

$o->attach(new RegistrerViewValidation('TEST DE MERDE'));
$o->attach(new MailSender());
?>
?>

<?php
    if ((empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['pseudo']) || empty($_POST['password'])) ){
    ?>
<div class="myForm" style="display: flex; justify-content: center;">
    <form class="form-horizontal" id="form" method="post" action="">

        <!-- champs pour NOM -->
        <div class="control-group">
            <label class="control-label" for="inputEmail">NOM</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="Votre nom" name="nom" required="required">
            </div>
        </div>
        <!-- Fin champs NOM -->

        <!-- champs pour PRENOM -->
        <div class="control-group">
            <label class="control-label" for="inputEmail">PRENOM</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="Votre prenom" name="prenom" required="required">
            </div>
        </div>
        <!-- Fin champs PRENOM -->

        <!-- champs pour PSEUDO -->
        <div class="control-group">
            <label class="control-label" for="inputEmail">PSEUDO</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="Nom d'utilisateur" name="pseudo" required="required">
            </div>
        </div>
        <!-- Fin champs PSEUDO -->

        <!-- champs pour MOT DE PASSE -->
        <div class="control-group">
            <label class="control-label" for="inputEmail">PASSWORD</label>
            <div class="controls">
                <input type="password" id="inputEmail" placeholder="password" name="password" required="required">
            </div>
        </div>
        <!-- Fin champs MOT DE PASSE -->

        <!-- champs pour EMAIL -->
        <div class="control-group">
            <label class="control-label" for="inputEmail">ADRESSE ELECTRONIQUE</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="xxxxxx@xxxx.xxx" name="email" required="required">
            </div>
        </div>
        <!-- Fin champs EMAIL -->


        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-success" name="submit">Se Connecter</button>
                <a href="/forum" class="btn btn-md" role="button">Annuler</a>
            </div>
        </div>
    </form>
	
	<?php }
	else{
		$user = new user(array( 'user_nom' => $_POST['nom'],
                 'user_prenom' => $_POST['prenom'],
                 'user_mail' => $_POST['email'],
                 'user_login' => $_POST['pseudo'],
                 'user_pwd' => $_POST['password']));
				 
	
	$o->register($user);
	}?>
</div>
