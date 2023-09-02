<?php
$pinjamanAwal = 1000000;
$persentaseBunga = 10;
$lamaAngsuran = 5;

$besarBunga = ($persentaseBunga / 100) * $pinjamanAwal;
$totalPinjaman = $pinjamanAwal + $besarBunga;
$besarAngsuran = $totalPinjaman / $lamaAngsuran;

echo "Besar Pinjaman Awal: RP " . number_format($pinjamanAwal) . "<br>";
echo "Besar Bunga (" . $persentaseBunga . "%): RP " . number_format($besarBunga) . "<br>";
echo "Total Pinjaman: RP " . number_format($totalPinjaman) . "<br>";
echo "Lama Angsuran: " . $lamaAngsuran . " bulan<br>";
echo "Besar Angsuran per Bulan: RP " . number_format($besarAngsuran) . "<br>";
