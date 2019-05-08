<?php
namespace User;

class PurchaseRepository
{
    /**
     * @var \PDO
     */
    private $connection;

    /**
     * UserRepository constructor.
     * @param \PDO $connection
     */
    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function fetchAll()
    {
        $rows = $this->connection->query('SELECT * FROM "purchase"')->fetchAll(\PDO::FETCH_OBJ);
        $purchases = [];
        foreach ($rows as $row) {
            $product_image = new Purchase();
            $product_image
                ->setProductId($row->product_id)
                ->setBuyerId($row->buyer_id)
                ->setDeliverySystemId($row->delivery_system_id)
                ->setPDate(new \DateTimeImmutable($row->pdate));
                
            $purchases[] = $purchase;
        }

        return $purchases;
    }


}
