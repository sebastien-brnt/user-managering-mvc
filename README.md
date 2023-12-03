# Authentification MVC - Sébastien B.

**Lien vers le rendu sur ovh :** [https://sitecube.fr/authentification-mvc/](https://sitecube.fr/authentification-mvc/)

**Lien vers le rendu GitHub :** [https://github.com/sebastien-brnt/user-managering-mvc](https://github.com/sebastien-brnt/user-managering-mvc)

- Architecture MVC → OK
- Connexion → OK
- Création de compte → OK
- Liste des utilisateur → OK
- Cryptage du mot de passe → OK
- *(Supplément) Suppression d’utilisateur → OK*
- *(Supplément) Page mon Compte → OK*
- *(Supplément) Déconnexion → OK*

## Cryptage :

Le cryptage à était fait avec password_hash() ainsi que password_verify() et non crypt() car password_hash() est plus récent et plus robuste que crypt() il est également conseillé d’utiliser password_hash() dans la documentation officiel de crypt().