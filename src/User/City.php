<?php
namespace City;

class City
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $planet_id;

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
    public function getName()
    {
        return $this->getName;
    }

    /**
     * @param string $pseudo
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanetId()
    {
        return $this->planet_id;
    }

    /**
     * @param string $address
     * @return User
     */
    public function setPlanetId($planet_id)
    {
        $this->planet_id = $planet_id;
        return $this;
    }

  }  
