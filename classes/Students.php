<?php 
//public
//private
//protected

class Students{

    public $name = "Ariful Hoque";

    function __construct($student = null)
    {
        if($student != null)
        {
            $this->name = $student;
        }
    }

    function student()
    {
       return $this->name;
    } 
}


class Teachers{

     public $name = "Mostafiz Rahman";

     function teacher()
     {
        return $this->name;
     }
 
}