<?php
class JadwalKuliah {
    // method before override
    public function JadwalPengganti(){
        echo "Hari Sabtu atau Minggu";
    }
}

class Sabtu extends jadwalKuliah {
    // Override JadwalPengganti
    public function JadwalPengganti(){
        echo "Hari Sabtu Bisa...";
    }
}

class Minggu extends JadwalKuliah {
    // Overide JadwalPengganti
    public function JadwalPengganti(){
        echo "Hari Minggu Tidak Bisa...";
    }
}

// Use Class and Call Methode
// Sabtu
$sabtu = new Sabtu();
$sabtu->JadwalPengganti();

echo "\n";

// Minggu
$minggu = new Minggu();
$minggu->JadwalPengganti();


?>