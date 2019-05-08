<?php
namespace Category;

class Category
{
    /**
     * @var int
     */
    private $id;

    private $description;

    private $super_category;
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
     * @return int
     */
    public function getSuperCategory()
    {
        return $this->super_category;
    }

    /**
     * @param int $city_id
     * @return User
     */
    public function setSuperCategory($super_category)
    {
        $this->datas = $super_category;
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
}

