<?php
namespace User;

class ProductImage
{
    /**
     * @var int
     */
    private $product_id;

    /**
     * @var string
     */
    private $image_id;

    
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
    public function getIMageId()
    {
        return $this->iamge_id;
    }

    /**
     * @param string $pseudo
     * @return User
     */
    public function setImageId($image_id)
    {
        $this->image_id = $image_id;
        return $this;
    }

    

