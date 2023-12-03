<?php

require_once 'User.php';
require_once 'Connection.php';

class UserManager
{
    private $db;

    private $table;

    public function __construct(PDO $db)
    {
        $this->db = $db;

        $this->table = "users_mvc";
    }

    public function create(User $user) : void
    {
        $emailCheck = $this->findByEmail($user->getEmail());

        if ($emailCheck === null) {
            $req = $this->db->prepare("INSERT INTO $this->table (password, email, firstName, lastName, adress, postalCode, city, admin) VALUES (:password, :email, :firstname, :lastname, :adress, :postalCode, :city, :admin)");

            $req->bindValue(':password', password_hash($user->getPassword(), PASSWORD_DEFAULT));
            $req->bindValue(':email', $user->getEmail());
            $req->bindValue(':firstname', $user->getFirstName());
            $req->bindValue(':lastname', $user->getLastName());
            $req->bindValue(':adress', $user->getAdress());
            $req->bindValue(':postalCode', $user->getPostalCode());
            $req->bindValue(':city', $user->getCity());
            $req->bindValue(':admin', 0);

            try {
                $req->execute();
            } catch (Exception $e) {
                throw new Exception($e->getMessage());
            }
        } else {
            throw new Exception("L'email utilisé existe déjà");
        }

    }

    public function login($email, $password) : User
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE email = :email AND password = :password");

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (isset($userData) && !empty($userData)) {
            $user = new User($userData);
            return $user;
        } else {
            throw new Exception("User not found");
        }
    }

    public function update(User $user) : void
    {
        $stmt = $this->db->prepare("UPDATE $this->table SET email = :email, firstName = :firstName, lastName = :lastName, adress = :adress, postalCode = :postalCode, city = :city, admin = :admin WHERE id = :id");

        $email = $user->getEmail();
        $firstname = $user->getFirstName();
        $lastname = $user->getLastName();
        $adress = $user->getAdress();
        $postal_code = $user->getPostalCode();
        $city = $user->getCity();
        $admin = $user->getAdmin();
        $id = $user->getId();


        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':firstName', $firstname);
        $stmt->bindParam(':lastName', $lastname);
        $stmt->bindParam(':adress', $adress);
        $stmt->bindParam(':postalCode', $postal_code);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':admin', $admin);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }

    public function delete(User $user) : void
    {
        $stmt = $this->db->prepare("DELETE FROM $this->table WHERE id = :id");

        $id = $user->getId();

        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }

    public function findByEmail($email) : ?User
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE email = :email");
        $stmt->bindParam(':email', $email);

        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($userData) {
            $user = new User($userData);
            return $user;
        } else {
            return null;
        }
    }
    public function findOne($id) : ?User
    {
        $stmt = $this->db->prepare("SELECT * FROM $this->table WHERE id = :id");
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($userData) {
            $user = new User($userData);
            return $user;
        } else {
            return null;
        }
    }

    public function findAll() : array
    {
        $users = [];
        $req = $this->db->query("SELECT * FROM $this->table ORDER BY id");
        while ($donnees = $req->fetch(PDO::FETCH_ASSOC)) {
            $users[] = new User($donnees);
        }
        return $users;
    }
}

?>