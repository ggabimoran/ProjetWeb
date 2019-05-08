<?php
namespace User;

class Purchase
{
    /**
     * @var int
     */
    private $product_id;

    /**
     * @var string
     */
    private $buyer_id;

    /**
     * @var string
     */
    private $pdate;

    /**
     * @var int
     */
    private $delivery_system_id;

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->product_id;
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

    public function getBuyerId()
    {
        return $this->buyer_id;
    }

    /**
     * @param int $id
     * @return User
*/
    public function setBuyerId($buyer_id)
    {
        $this->buyer_id = $buyer_id;
        return $this;
    }
    /**
     * @return string
     */
    public function getPdate()
    {
        return $this->pdate;
    }

    /**
     * @param string $pseudo
     * @return User
     */
    public function setPDate($pdate)
    {
        $this->pdate = $pdate;
        return $this;
    }

    public function getDeliverySystemId()
    {
        return $this->product_id;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setDeliverySystemId($delivery_system_id)
    {
        $this->delivery_system_id = $delivery_system_id;
        return $this;
    }
    
