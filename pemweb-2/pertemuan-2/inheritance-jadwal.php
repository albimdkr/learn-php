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
        return "id: " . $this->id;
    }

    public function getName (){
        return "name: " . $this->name;
    }

    public function getSks (){
        return "sks: " . $this->sks;
    }
    
    public function getLecture (){
        return "lecture: " . $this->lecture;
    }

    public function getInfo(){
        return " id: " . $this->id . "\n" . " name: " . $this->name . "\n" . " sks: " . $this->sks . "\n" . " lecture: " . $this->lecture . "\n";
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
echo "Jadwal Kuliah Hari Senin: ". "\n" . $Senin->getInfo();

?>