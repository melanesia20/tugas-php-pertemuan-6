<?php
// Studi Kasus 1: Sistem Pembelian di Toko Online

$jumlahProduk = 4;
$hargaSatuan = 150000;
$isMember = true; // ubah ke false untuk menguji pelanggan non-member

// 1. Hitung total awal (operator aritmatika & penugasan)
$totalAwal = $jumlahProduk * $hargaSatuan;

// 2. Cek diskon 10% jika total awal minimal Rp500.000 (operator perbandingan)
$diskon = ($totalAwal >= 500000) ? (0.10 * $totalAwal) : 0;
$totalSetelahDiskon = $totalAwal - $diskon;

// 3. Cek voucher Rp25.000 jika member DAN total setelah diskon >= Rp400.000 (operator logika)
$voucher = ($isMember && $totalSetelahDiskon >= 400000) ? 25000 : 0;

// 4. Ongkos kirim tetap Rp15.000
$ongkir = 15000;
$totalBayar = $totalSetelahDiskon - $voucher + $ongkir;

echo "=== STRUK PEMBELIAN TOKO ONLINE ===\n";
echo "Jumlah Produk       : " . $jumlahProduk . " pcs\n";
echo "Harga Satuan        : Rp" . number_format($hargaSatuan, 0, ',', '.') . "\n";
echo "Total Awal          : Rp" . number_format($totalAwal, 0, ',', '.') . "\n";
echo "Diskon (10%)        : Rp" . number_format($diskon, 0, ',', '.') . "\n";
echo "Setelah Diskon      : Rp" . number_format($totalSetelahDiskon, 0, ',', '.') . "\n";
echo "Status Member       : " . ($isMember ? "Ya" : "Tidak") . "\n";
echo "Potongan Voucher    : Rp" . number_format($voucher, 0, ',', '.') . "\n";
echo "Ongkos Kirim        : Rp" . number_format($ongkir, 0, ',', '.') . "\n";
echo "------------------------------------\n";
echo "Total Pembayaran    : Rp" . number_format($totalBayar, 0, ',', '.') . "\n";
