<h1>Liste des utilisateurs</h1>
<hr>
<section id="user-liste">
    <?php if (isset($_SESSION["info"]["message"]) && $_SESSION["info"]["message"] !== "") { ?>
        <div id="info-session" class="<?= isset($_SESSION["info"]["status"]) ? $_SESSION["info"]["status"] : "" ?>">
            <?= $_SESSION["info"]["message"] ?>
        </div>
    <?php } ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Code Postal</th>
                <th>Ville</th>
                <th>Rôle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usersList as $user) { ?>
                <tr class="user-item">
                    <td>
                        <?= $user->getId() ?>
                    </td>
                    <td>
                        <?= $user->getEmail() ?>
                    </td>
                    <td>
                        <?= $user->getLastName() ?>
                    </td>
                    <td>
                        <?= $user->getFirstName() ?>
                    </td>
                    <td>
                        <?= $user->getAdress() ?>
                    </td>
                    <td>
                        <?= $user->getPostalCode() ?>
                    </td>
                    <td>
                        <?= $user->getCity() ?>
                    </td>
                    <td>
                        <?= $user->getAdmin() === 1 ? "Administrateur" : "User" ?>
                    </td>
                    <td class="actions">
                        <a href="index.php?ctrl=User&action=doDelete&id=<?= $user->getId() ?>" class="btn-delete">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>