<?php
namespace Image;

class Image
{
    /**
     * @var int
     */
    private $id;

    private $description;

    private $datas;
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
    public function getDatas()
    {
        return $this->datas;
    }

    /**
     * @param int $city_id
     * @return User
     */
    public function setDatas($datas)
    {
        $this->datas = $datas;
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

