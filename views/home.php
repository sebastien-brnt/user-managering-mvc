<h1>Bienvenue <?= $_SESSION["user"]->getFirstName() ? $_SESSION["user"]->getFirstName() : "" ?> !</h1>
<hr>
<p>Vous êtes connecté et pouvez à tout moment vous déconnecter avec le bouton deconnexion. Pour accèder à la liste des utilisateurs vous devez avoir les droits administrateur.</p>