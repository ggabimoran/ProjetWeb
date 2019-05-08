<?php
namespace User;

class categoryRepository
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
        $rows = $this->connection->query('SELECT * FROM "category"')->fetchAll(\PDO::FETCH_OBJ);
        $categorys = [];
        foreach ($rows as $row) {
            $category = new Category();
            $category
                ->setId($row->id)
                ->setDescription($row->description)
                ->setSuperCategory($row->super_category)
                
            $categorys[] = $category;
        }

        return $categorys;
    }


}
