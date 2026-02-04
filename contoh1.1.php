<?php

// ==========================
// CLASS (BLUEPRINT)
// ==========================
class Belanja
{
// --------- PROPERTIES / ATRIBUT ---------
private string $namaBarang;
private int $hargaSatuan;
private int $jumlah;
private string $namaPembeli;


// --------- CONSTRUCTOR ---------
public function __construct(string $namaBarang, int $hargaSatuan, int $jumlah, string $namaPembeli)
{
    $this->namaBarang = $namaBarang;
    $this->hargaSatuan = $hargaSatuan;
    $this->jumlah = $jumlah;
    $this->namaPembeli = $namaPembeli;
}

// --------- METHODS (PERILAKU) ---------

// Menghitung total belanja
public function hitungTotal(): int
{
    return $this->hargaSatuan * $this->jumlah;
}

// Menampilkan ringkasan belanja
public function tampilkanStruk(): string
{
    $total = $this->hitungTotal();

    return "
    ===== STRUK WARUNG KAMPUS =====
    Pembeli   : {$this->namaPembeli}
    Barang    : {$this->namaBarang}
    Harga     : Rp {$this->hargaSatuan}
    Jumlah    : {$this->jumlah}
    -------------------------------
    Total     : Rp {$total}
    ==============================
    ";
}

// Getter (contoh enkapsulasi sederhana)
public function getNamaBarang(): string
{
    return $this->namaBarang;
}

// Setter (contoh enkapsulasi sederhana)
public function setJumlah(int $jumlahBaru): void
{
    if ($jumlahBaru > 0) {
        $this->jumlah = $jumlahBaru;
    }
}


}

// ==========================
// OBJECT (INSTANCE)
// ==========================

// Mahasiswa A beli mie instan di warung
$belanjaA = new Belanja("Mie Instan", 3500, 2, "Rani");

// Menampilkan struk
echo $belanjaA->tampilkanStruk();

// Contoh perubahan jumlah (setter)
$belanjaA->setJumlah(3);

echo "\nSETELAH JUMLAH DIUBAH:\n";
echo $belanjaA->tampilkanStruk();