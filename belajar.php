<!-- format tag php -->
<?php
// membuat sebuah class
class laptop {
    // isi dari sebuah class nya
    // ini adalaha nama sebuah property
    var $merek;
    var $ram;
    var $harga;

    // ini adalah nama method atau function
    function test_rendering() {
        return "berhasil";
    }

    function test_gaming() {
        return "berhasil";
    }
}
// ini adalah nama sebuah object
$fungsi = new laptop();

//set property dari object
$fungsi->merek="lenovo ideapad 3";
$fungsi->ram="12 gb";
$fungsi->harga="12.000.00 rupiah";

// tampilkan hasil class
echo $fungsi->merek;
echo "<br>";
echo $fungsi->ram;
echo "<br>";
echo $fungsi->harga;
echo "<br>";
// tampilkan hasil method
echo $fungsi->test_rendering();
echo "<br>";
echo $fungsi->test_gaming();
echo "<br>";

class mobil{
    var $warna;
    var $jenis;
}

$warnaMerah = new mobil();
$warnaHijau = new mobil();
$warnaKuning = new mobil();
$jenisMobil = new mobil();

$warnaMerah->warna="merah";
$warnaHijau->warna="hijau";
$warnaKuning->warna="kuning";

$jenisMobil->civic="sedan";
$jenisMobil->range_rover="suv";
$jenisMobil->avanza="mpv";

echo $warnaMerah->warna;
echo "<br>";
echo $warnaHijau->warna;
echo "<br>";
echo $warnaKuning->warna;
echo "<br>";

echo $jenisMobil->civic;
echo "<br>";
echo $jenisMobil->range_rover;
echo "<br>";
echo $jenisMobil->avanza;
echo "<br>";
echo "<br>";
echo "<table border='1'>
<tr>
  <th>Mobil</th>
  <th>Jenis</th>
  <th>Warna</th>
</tr>
<tr>
  <td>civic</td>
  <td>$jenisMobil->civic</td>
  <td>$warnaMerah->warna</td>
</tr>
<tr>
  <td>avanza</td>
  <td>$jenisMobil->avanza</td>
  <td>$warnaKuning->warna</td>
</tr>
</table>";

class baru {
    //method public
    public function detail(){
        return 'kamu nanya';
    }
}
$objekbaru = new baru();
echo $objekbaru->detail();
echo $turunan = $objekbaru->detail();
echo "<br/>";

// variable this
class coba {
    public $nama = "azzam";

    public function testing() {
      return "nama saya $this->nama";
    }
}
// membuat object untuk menampilkan hasil
$nama_saya = new coba();
$nama_saya->nama = 'nopal';
echo $nama_saya->testing();

echo "<br/>";

// variable scope hanya bisa diakses di dalam function
$a = 10;

function tester () {
  $a = 7;
  $b = 2; 

  
  echo $b;
}

tester();
echo $a;
echo "<br/>";

// variable global
$c = 10;

function tester2 () {
  global $c;
  global $d;

  $b = 15;
  echo $c;
  echo $d;
}

tester2();

// variable static
function tester3() {
  static $a = 0;
  $a = $a + 1;
  return "urutan ke $a";
}
echo tester3();
echo tester3();
echo "<br/>";

// contoh scope
$mobil1;
$mobil2;
$mobil3;
$mobil4;
$mobil5;

function contoh1() {
$mobil2 = "mobil2";
$mobil5 = "mobil5";

  echo $mobil2;
  echo "<br/>";
  echo $mobil5;
}
contoh1();

// contoh global
$mobil1;
$mobil2;
$mobil3;

function contoh2() {
  global $mobil1;
  global $mobil2;
  global $mobil3;

  $mobil1 = "mobil1";
  $mobil2 = "mobil2";
  $mobil3 = "mobil3";

  echo $mobil1;
  echo "<br/>";
  echo $mobil2;
  echo "<br/>";
  echo $mobil3;
  echo "<br/>";
}

echo "<br/>";
contoh2();

// contoh static
function minus() {
  static $a = 101;
  $a = $a - 1;
  return "urutan ke $a";
}
echo minus();
echo minus();
echo minus();
echo minus();
echo minus();
echo minus();
echo minus();
echo minus();
echo minus();
echo minus();
echo minus();

 

?>