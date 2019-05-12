<?php
namespace User;

class MessageRepository
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
        $rows = $this->connection->query('SELECT * FROM "message"')->fetchAll(\PDO::FETCH_OBJ);
        $messages = [];
        foreach ($rows as $row) {
            $message = new Message();
            $message
                ->setIdSender($row->sender)
                ->setIdReceiver($row->receiver)
                ->setMessage($row->message);
                
            $messages[] = $message;
        }

        return $messages;
    }

    public function getMessage($id_sender)
    {
        $rows = $this->connection->query('SELECT * FROM "message" WHERE sender = {$id_sender}')->fetchAll(\PDO::FETCH_OBJ);
        $messages = [];
        foreach ($rows as $row) {
            $message = new Message();
            $message
                ->setIdSender($row->sender)
                ->setIdReceiver($row->receiver)
                ->setMessage($row->message);
                
            $messages[] = $message;
        }

        return $messages;
    }
}
