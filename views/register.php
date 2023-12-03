<h1 class="center">Inscription</h1>
<hr />
<section id="register">
    <?php if (isset($_SESSION["info"]["message"]) && $_SESSION["info"]["message"] !== "") { ?>
        <div id="info-session" class="<?= isset($_SESSION["info"]["status"]) ? $_SESSION["info"]["status"] : "" ?>">
            <?= $_SESSION["info"]["message"] ?>
        </div>
    <?php } ?>
    <form action="index.php?ctrl=User&action=doCreate" method="POST" class="register-form">
        <label>Mail :</label>
        <input type="email" name="email" placeholder="Mail.." />

        <label>Mot de passe :</label>
        <input type="password" name="password" placeholder="Mot de passe.." />

        <label>Nom :</label>
        <input type="text" name="lastName" placeholder="Nom.." />

        <label>Prénom :</label>
        <input type="text" name="firstName" placeholder="Prénom.." />

        <label>Adresse :</label>
        <input type="text" name="adress" placeholder="Adresse.." />

        <label>Code Postal :</label>
        <input type="text" name="postalCode" placeholder="Code Postal.." />

        <label>Ville :</label>
        <input type="text" name="city" placeholder="Ville.." />

        <input type="submit" class="submit-btn" value="Créer/Valider">

        <a href="index.php?ctrl=User&action=login">Se connecter</a>
    </form>
</section>
</body>

<?php unset($_SESSION["info"]); ?>

</html>