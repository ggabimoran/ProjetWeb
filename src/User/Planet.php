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
}
    
