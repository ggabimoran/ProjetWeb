<?php
namespace User;
class PlanetRepository
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
        $rows = $this->connection->query('SELECT * FROM "planet"')->fetchAll(\PDO::FETCH_OBJ);
        $planets = [];
        foreach ($rows as $row) {
            $planet = new Planet();
            $planet
                ->setId($row->id)
                ->setName($row->name)
                
            $planets[] = $planet;
        }

        return $planets;
    }


}
