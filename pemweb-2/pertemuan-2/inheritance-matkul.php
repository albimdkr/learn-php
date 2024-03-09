<?php
class JadwalKuliah {
    protected $id;
    protected $name;
    protected $sks;
    protected $lecture;

    // Parent Constructor
    public function __construct($id, $name, $sks, $lecture){
        $this->id = $id;
        $this->name = $name;
        $this->sks = $sks;
        $this->lecture = $lecture;
    }

    // get
    public function getId (){
        echo "id: " . $this->id . "<br>";
    }

    public function getName (){
        echo "name: " . $this->name . "<br>";
    }

    public function getSks (){
        echo "sks: " . $this->sks . "<br>";
    }
    
    public function getLecture (){
        echo "lecture: " . $this->lecture . "<br>";
    }

    public function getInfo(){
        echo "id: " . $this->id . "<br>". "name: " . $this->name . "<br>" . "sks: " . $this->sks . "<br>" . "lecture: " . $this->lecture . "<br>";
    }
}

// New Inheritance 
class Senin extends JadwalKuliah {
    public function __construct($id, $name, $sks, $lecture){
        parent::__construct($id, $name, $sks, $lecture);
    }
}

// Call
$Senin = new Senin("221", "OOP", 3, "Mr.John Ph.D");

// print
echo "Jadwal Kuliah: ". $Senin->getInfo();

?>