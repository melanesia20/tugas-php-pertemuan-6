<?php
// Studi Kasus 2: Sistem Saldo E-Wallet

$saldo = 500000;
$jumlahTransaksi = 0;

echo "=== MUTASI SALDO E-WALLET ===\n";
echo "Saldo Awal          : Rp" . number_format($saldo, 0, ',', '.') . "\n";

// Top up Rp200.000
$saldo += 200000;
$jumlahTransaksi++;
echo "Top Up (+Rp200.000) : Rp" . number_format($saldo, 0, ',', '.') . "\n";

// Bayar tagihan Rp125.000
$saldo -= 125000;
$jumlahTransaksi++;
echo "Bayar Tagihan (-Rp125.000) : Rp" . number_format($saldo, 0, ',', '.') . "\n";

// Beli makanan Rp75.000
$saldo -= 75000;
$jumlahTransaksi++;
echo "Beli Makanan (-Rp75.000)   : Rp" . number_format($saldo, 0, ',', '.') . "\n";

// Cashback makanan Rp10.000
$saldo += 10000;
$jumlahTransaksi++;
echo "Cashback (+Rp10.000)       : Rp" . number_format($saldo, 0, ',', '.') . "\n";

echo "------------------------------------\n";
echo "Saldo Akhir         : Rp" . number_format($saldo, 0, ',', '.') . "\n";
echo "Total Transaksi     : " . $jumlahTransaksi . " kali\n";
