<?php
// Deklarasi Paket dalam arraya
$paket_subscription = [
    ["Paket Harmoni", 149000],
    ["Paket Ritme", 219000],
    ["Paket Melodi", 299000]
];

// Meminta Input
$pilih_paket = (int) readline("Pilih Paket Subscription(0-2): ");
$jumlah_bulan = (int) readline("Pilih Jumlah bulan: ");

// Menghitung Total
$harga_paket = $paket_subscription[$pilih_paket][1];
$total_harga = $harga_paket * $jumlah_bulan;

// Menampilkan hasil yang dipilih
echo "Paket yang dipilih: " . $paket_subscription[$pilih_paket][0] . PHP_EOL;
echo "Jumlah Bulan: " . $jumlah_bulan . PHP_EOL;
echo "Total Harga: Rp." . number_format($total_harga) . PHP_EOL;
?>
