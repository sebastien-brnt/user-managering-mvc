<?php

class User
{
    private int $id;
    private string $email;
    private string $password;
    private string $firstName;
    private string $lastName;
    private string $adress;
    private string $postalCode;
    private string $city;
    private int $admin;

    // Constructor
    public function __construct($donnes)
    {
        if (!empty($donnes)) {
            $this->hydrate($donnes);
        }
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)  && ($value !== null)) {
                $this->$method($value);
            }
        }
    }

    // Set the User ID
    public function setId($id)
    {
        $this->id = $id;
    }

    // Get the User ID
    public function getId()
    {
        return $this->id;
    }

    // Set the email
    public function setEmail($email)
    {
        $this->email = $email;
    }

    // Get the email
    public function getEmail()
    {
        return $this->email;
    }

    // Set the first name
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    // Get the first name
    public function getFirstName()
    {
        return $this->firstName;
    }

    // Set the last name
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    // Get the last name
    public function getLastName()
    {
        return $this->lastName;
    }

    // Set the adress
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    // Get the adress
    public function getAdress()
    {
        return $this->adress;
    }

    // Set the postal code
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    // Get the postal code
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    // Set the city
    public function setCity($city)
    {
        $this->city = $city;
    }

    // Get the city
    public function getCity()
    {
        return $this->city;
    }

    // Set admin status
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    // Get admin status
    public function getAdmin()
    {
        return $this->admin;
    }

    // Set password
    public function setPassword($password)
    {
        $this->password = $password;
    }

    // Get password
    public function getPassword()
    {
        return $this->password;
    }
}

?>