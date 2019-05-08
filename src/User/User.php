<?php
namespace User;
require '../vendor/autoload.php';

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $address;

    /**
     * @var int
     */
    private $city_id;

    /**
     * @var string
     */
    private $description;

    private $password;
    /**
     * @return int
     */
    public function __construct($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param int $city_id
     * @return User
     */
    public function setCityId($city_id)
    {
        $this->city_id = $city_id;
        return $this;
    }


    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }  

    /**
     * @param string $description
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;

    } 

    public function getPassword()
    {
        /*$dbUser = getenv('DB_USER');
        $dbPassword = getenv('DB_PASSWORD');
        $connection = new PDO("pgsql:host=postgres user=$dbUser dbname=$dbName password=$dbPassword");
        $userRepository = new \User\UserRepository($connection);

        $this->password = $userRepository->getPassword($pseudo, $password);*/
        return $password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

}

