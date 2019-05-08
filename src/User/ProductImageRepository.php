<?php
namespace User;

class ProductImageRepository
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
        $rows = $this->connection->query('SELECT * FROM "product_image"')->fetchAll(\PDO::FETCH_OBJ);
        $product_images = [];
        foreach ($rows as $row) {
            $product_image = new ProductImage();
            $product_image
                ->setProductId($row->product_id)
                ->setCategoryName($row->image_id);
                
            $product_images[] = $product_image;
        }

        return $product_images;
    }


}
