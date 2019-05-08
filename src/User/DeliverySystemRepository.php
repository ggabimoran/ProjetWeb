<?php
namespace User;

class DeliverySystemRepository
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
        $rows = $this->connection->query('SELECT * FROM "delivery_system"')->fetchAll(\PDO::FETCH_OBJ);
        $deliverySystems = [];
        foreach ($rows as $row) {
            $deliverySystem = new DeliverySystem();
            $deliverySystem
                ->setId($row->id)
                ->setDescription($row->description)
                ->setPrice($row->price);
                
            $deliverySystems[] = $deliverySystem;
        }

        return $deliverySystems;
    }


}
