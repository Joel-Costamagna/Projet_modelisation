<?php
//faire le traitement du formulaire
?>
<div class="myForm" style="display: flex; justify-content: center;">
    <form class="form-horizontal" id="form" method="post" action="">

        <!-- champs pour USERNAME -->
        <div class="control-group">
            <label class="control-label" for="inputEmail">USERNAME</label>
            <div class="controls">
                <input type="text" id="inputEmail" placeholder="Nom d'utilisateur" name="username" required="required">
            </div>
        </div>
        <!-- Fin champs USERNAME -->

        <!-- champs pour PASSWORD-->
        <div class="control-group">
            <label class="control-label" for="inputPassword">PASSWORD</label>
            <div class="controls">
                <input type="password" id="inputPassword" placeholder="Password" name="pass" required="required">
            </div>
        </div>
        <!-- Fin champs PASSWORD -->

        <!-- champs pour BUTTON-->
        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-success" name="submit">Se Connecter</button>
                <a href="index.php?page=devenirMembreView" class="btn" role="button">Devenir Membre</a>
            </div>
        </div>
        <!-- Fin champs BUTTON-->
    </form>
</div>
