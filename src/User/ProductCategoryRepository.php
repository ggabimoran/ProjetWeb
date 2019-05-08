<?php
namespace User;

class ProductCategoryRepository
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
        $rows = $this->connection->query('SELECT * FROM "product_category"')->fetchAll(\PDO::FETCH_OBJ);
        $product_categorys = [];
        foreach ($rows as $row) {
            $product_category = new ProductCategory();
            $product_category
                ->setProductId($row->product_id)
                ->setCategoryName($row->category_name);
                
            $product_categorys[] = $product_category;
        }

        return $product_categorys;
    }


}
