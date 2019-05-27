<?php
namespace User;
require '../vendor/autoload.php';

class Message
{
    /**
     * @var int
     */
    private $id_sender;

    /**
     * @var string
     */
    private $id_receiver;

    /**
     * @var string
     */
    private $pdate;

    /**
     * @var int
     */
    private $message;

    /**
     * @var string
     */
    
    public function getIdSender()
    {
        return $this->id_sender;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setIdSender($id)
    {
        $this->id_sender = $id;
        return $this;
    }

    public function getIdReceiver()
    {
        return $this->id_receiver;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setIdReceiver($id)
    {
        $this->id_receiver = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getPDate()
    {
        return $this->pdate;
    }

    /**
     * @param string $pseudo
     * @return User
     */
    public function setPDate($pdate)
    {
        $this->pdate = $pdate;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $address
     * @return User
     */
    public function setMessage($massage)
    {
        $this->massage = $massage;
        return $this;
    }

}
