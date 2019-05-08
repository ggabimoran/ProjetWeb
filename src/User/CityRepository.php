<?php
namespace User;

class CityRepository
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
        $rows = $this->connection->query('SELECT * FROM "city"')->fetchAll(\PDO::FETCH_OBJ);
        $citys = [];
        foreach ($rows as $row) {
            $city = new City();
            $city
                ->setId($row->id)
                ->setName($row->name)
                ->setPlanetId($row->planet_id);
                
            $citys[] = $city;
        }

        return $citys;
    }


}
