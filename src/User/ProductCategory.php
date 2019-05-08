<?php
namespace User;

class ProductCategory
{
    /**
     * @var int
     */
    private $product_id;

    /**
     * @var string
     */
    private $category_name;

    
    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
        return $this->category_name;
    }

    /**
     * @param string $pseudo
     * @return User
     */
    public function setCategoryName($category_name)
    {
        $this->category_name = $category_name;
        return $this;
    }

    

