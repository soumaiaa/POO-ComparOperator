<?php
class Review{
    private $id;
    private $message;
    private $author;
    private $tourOperatorId;

    public function __construct()
    {

    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    public function getMessage()
    {
        return $this->message;
    }


    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

 
    public function getAuthor()
    {
      return $this->author;}

 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

 
    public function getTourOperatorId()
    {
      return $this->tourOperatorId;
    }



    public function setTourOperatorId($tourOperatorId)
    {
        $this->tourOperatorId = $tourOperatorId;

        return $this;
    }
}





?>