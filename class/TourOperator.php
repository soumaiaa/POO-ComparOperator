<?php
class TourOperator
{

    private $id;
    private $name;
    private $link;
    private $gradeCount;
    private $gradeTotal;
    private $isPremium;


    public function __construct($data)
    {
        if(isset($data['id'])) {
            $this->id = $data['id'];
        }
        if(isset($data['name'])) {
            $this->name = $data['name'];
        }
        if(isset($data['link'])) {
            $this->link = $data['link'];
        }
        $this->gradeCount=$data['grade_count'];
        $this->gradeTotal=$data['grade_total'];
        if(isset($data['is_premium'])) {
            $this->isPremium = $data['is_premium'];
        }
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

 
    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    
    public function getLink()
    {
        return $this->link;
    }


    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }


    public function getGradeCount()
    {
        return $this->gradeCount;
    }

    public function setGradeCount($gradeCount)
    {
        $this->gradeCount = $gradeCount;

        return $this;
    }

 
    public function getGradeTotal()
    {
        return $this->gradeTotal;
    }

 
    public function setGradeTotal($gradeTotal)
    {
        $this->gradeTotal = $gradeTotal;

        return $this;
    }


    public function getIsPremium()
    {
        return $this->isPremium;
    }

 
    public function setIsPremium($isPremium)
    {
        $this->isPremium = $isPremium;

        return $this;
    }
}
?>