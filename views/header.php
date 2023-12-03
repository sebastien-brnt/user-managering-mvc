<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Ma page</title>
    <link rel="stylesheet" href="./assets/dist/css/style.min.css">
    <script src="https://kit.fontawesome.com/e3a0478255.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <ul class="nav-menu">
                <?php if (empty($_SESSION["user"])) { ?>
                    <li><a href="?ctrl=User&action=login"><i class="fa-solid fa-user"></i> Connexion</a></li>
                    <li><a href="?ctrl=User&action=register"><i class="fa-solid fa-user-plus"></i> Inscription</a></li>
                <?php } ?>
                <?php if (!empty($_SESSION["user"])) { ?>
                    <li><a href="?ctrl=User&action=home"><i class="fa-solid fa-house"></i> Accueil</a></li>
                    <li><a href="?ctrl=User&action=usersList"><i class="fa-solid fa-users"></i> Liste des utilisteurs</a></li>
                    <li><a href="?ctrl=User&action=viewAccount"><i class="fa-solid fa-user"></i> <?= $_SESSION["user"]->getFirstName(); ?></a></li>
                    <li><a href="?ctrl=User&action=logout"><i class="fa-solid fa-right-from-bracket"></i> Deconnexion</a></li>
                <?php } ?>
            </ul>
        </nav>
    </header>