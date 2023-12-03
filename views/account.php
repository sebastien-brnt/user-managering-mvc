<h1>Mon compte</h1>
<hr>
<p><b>Prénom :</b> <?= $_SESSION["user"]->getFirstName(); ?></p>
<p><b>Nom :</b> <?= $_SESSION["user"]->getLastName(); ?></p>
<p><b>E-mail :</b> <?= $_SESSION["user"]->getEmail(); ?></p>
<p><b>Adresse :</b> <?= $_SESSION["user"]->getAdress(); ?></p>
<p><b>Code Postal :</b> <?= $_SESSION["user"]->getPostalCode(); ?></p>
<p><b>Ville :</b> <?= $_SESSION["user"]->getCity(); ?></p>
<p><b>Statut :</b> <?= $_SESSION["user"]->getAdmin() ? "Administrateur" : "Utilisateur"; ?></p>