<?php
namespace User;

class ImageRepository
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
        $rows = $this->connection->query('SELECT * FROM "image"')->fetchAll(\PDO::FETCH_OBJ);
        $images = [];
        foreach ($rows as $row) {
            $image = new Image();
            $image
                ->setId($row->id)
                ->setDescription($row->description)
                ->setDatas($row->datas);
                
            $images[] = $image;
        }

        return $images;
    }


}
