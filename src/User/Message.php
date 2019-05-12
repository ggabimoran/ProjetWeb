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
    
    public function getSender()
    {
        return $this->id_sender;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setSender($id)
    {
        $this->id_sender = $id;
        return $this;
    }

    public function getReceiver()
    {
        return $this->id_receiver;
    }

    /**
     * @param int $id
     * @return User
     */
    public function setReceiver($id)
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


