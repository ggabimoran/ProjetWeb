<?php
namespace User;

class ProductRepository
{
    /**
     * @var \PDO
     */
    private $connection;

    /**
     * productRepository constructor.
     * @param \PDO $connection
     */
    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function fetchAll()
    {
        $rows = $this->connection->query('SELECT * FROM "product"')->fetchAll(\PDO::FETCH_OBJ);
        $products = [];
        foreach ($rows as $row) {
            $product = new Product();
            $product
                ->setId($row->id)
                ->setSellerId($row->seller_id)
                ->setName($row->name)  
                ->setPrice($row->price)
                ->setNumber($row->number)
                ->setDescription($row->description);
                
            $products[] = $product;
        }

        return $products;
    }
    
    public function fetchAll_cat()
    {
        $rows = $this->connection->query("SELECT * FROM product NATURAL JOIN product_category NATURAL JOIN category WHERE category=$category ")->fetchAll(\PDO::FETCH_OBJ);
        $products = [];
        foreach ($rows as $row) {
            $product = new Product();
            $product
                ->setId($row->id)
                ->setSellerId($row->seller_id)
                ->setName($row->name)  
                ->setPrice($row->price)
                ->setNumber($row->number)
                ->setDescription($row->description);
                
            $products[] = $product;
        }

        return $products;
    }


}
