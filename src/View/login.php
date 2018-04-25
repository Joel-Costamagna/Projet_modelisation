<?php
//faire le traitement du formulaire
?>

<section class="container">
    <div class="login">
        <h1>Connexion</h1>
        <form method="post" action="index.php?action=login">
            <p><input type="text" name="login" value="" placeholder="Username or Email"></p>
            <p><input type="password" name="password" value="" placeholder="Password"></p>
            <p class="remember_me">
                <label>
                    <input type="checkbox" name="remember_me" id="remember_me">
                    Remember me on this computer
                </label>
            </p>
            <p class="submit"><input type="submit" name="commit" value="Login"></p>
            <p><a href="index.php?page=devenirMembreView" class="btn" role="button">Devenir Membre</a></p>
        </form>
    </div>
</section>



