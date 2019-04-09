<?php
namespace User;

class User
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
     * @var int
     */
    private $on_sale;

    /**
     * @var int
     */
    private $seller_id;

    /**
     * @var string
     */
    private $description;

    /**
     * @return int
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
        return $this->name;
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
    public function getSellerId()
    {
        return $this->seller_id;
    }

    /**
     * @param string $address
     * @return User
     */
    public function setSellerId($seller_id)
    {
        $this->seller_id = $seller_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOnSale()
    {
        return $this->on_sale;
    }

    /**
     * @param int $city_id
     * @return User
     */
    public function setCityId($on_sale)
    {
        $this->on_sale = $on_sale;
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
        this->description = $description;
        return $this;

    } 
}

