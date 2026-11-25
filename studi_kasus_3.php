<?php
// Studi Kasus 3: Sistem Penentuan Tarif Parkir

function hitungTarifParkir(int $durasiMenit): array
{
    // Pembagian jam & modulus untuk cek sisa menit
    $jam = intdiv($durasiMenit, 60);
    $sisaMenit = $durasiMenit % 60;

    // Jika ada sisa menit (> 0), bulatkan ke atas (+1 jam)
    if ($sisaMenit > 0) {
        $jam++;
    }

    // Hitung tarif berdasarkan durasi jam
    if ($jam <= 2) {
        $tarif = 5000;
    } else {
        $tarif = 5000 + (($jam - 2) * 3000);
    }

    // Operator ternary: jika durasi parkir > 12 jam (720 menit), kunci maksimal Rp35.000
    $tarifAkhir = ($durasiMenit > 720) ? 35000 : $tarif;

    return [
        'durasi_menit' => $durasiMenit,
        'jam_terhitung' => $jam,
        'tarif_akhir' => $tarifAkhir,
        'kena_maksimal' => ($durasiMenit > 720)
    ];
}

$dataUji = [90, 185, 780];

echo "=== TARIF PARKIR ===\n";
foreach ($dataUji as $menit) {
    $hasil = hitungTarifParkir($menit);
    echo "Durasi Parkir   : " . $hasil['durasi_menit'] . " menit\n";
    echo "Durasi Dihitung : " . $hasil['jam_terhitung'] . " jam\n";
    echo "Tarif Parkir    : Rp" . number_format($hasil['tarif_akhir'], 0, ',', '.')
        . ($hasil['kena_maksimal'] ? " (maksimal > 12 jam)" : "") . "\n";
    echo "------------------------------------\n";
}
