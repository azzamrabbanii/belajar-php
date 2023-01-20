<?php
// metode if else
// $a = 'budis';
// if ($a != 'budi') {
//     echo "berhasil";
// }else {
//     echo "tidak berhasil";
// }

// latihan if else looping

for($a = 1; $a <= 20; $a++){
    if( ($a % 2) == 0){
        echo "$a Genap<br>";
    }else {
		echo "$a Ganjil<br>";
	}	
}

// operator logika
$laki = 'laki';
$perempuan = 'wanita';
// ketika mengunakan && nilai nya harus sama untuk menghasilkan benar
// ketika mengunakan || hanya memanggil salah satu yang benar
if ($laki == 'laki' && $perempuan == 'perempuan'){
    echo "benar <br>";
} else {
    echo "tidak benar <br>";
}

$orang = "azzam";
if($orang != "siswa"){
    echo "benar <br>";
} else{
    echo "salah <br>";
}

// operator aritmatika
$aa = 10;
$bb = 20;

// penjumlahan
echo $aa + $bb;
echo "<br>";

// pengurangan
echo $aa - $bb;
echo "<br>";

// perkalian
echo $aa * $bb;
echo "<br>";

// pembagian
echo $aa / $bb;
echo "<br>";

// modulus
echo $aa % $bb;
echo "<br>";

// array
$buah = ['buah naga', 'buah apel', 'buah mangga'];
echo $buah[0];
echo "<br>";

foreach($buah as $buah){
    echo $buah;
    echo "<br>";
}

// array multidimentional
// $buah = ['mentah' => ['jeruk nipis', 'jeruk perut', 'jeruk nipis manis'],
// 'buah manggis',
// 'buah mangga'];

// echo $buah['mentah']['jeruk nipis'][1];
// echo $buah[1];

// contoh array multidementional
$handphone = [
    'apple' => [
        '12'=> ['pro max', 'pro']
    ],
    'samsung' => [
        'note',
        'galaxy' => ['s6','s17','s10'],
        'tablet',
        'laptop'
    ],
    'xiaomi' =>
    ['note 10 pro', 'note 12 pro', 'note 30 pro'] 
];

echo $handphone['apple']['12'][0];
echo '<br>';
echo $handphone['samsung']['galaxy'][1];
echo '<br>';
echo $handphone['xiaomi'][2];

?>

<form method="get" action="belajar3.php">
    <label>nama</label>
    <input type="text" name="nama">
    </br>
    <label>umur</label>
    <input type="text" name="umur">
    </br>
    <button type="submit">Oke</button>
</form> 

<?php
    // mengambil data dengan form handling GET maka dia akan menampilkan data di url
    $nama = isset($_GET['nama']);
    $umur = isset($_GET['umur']);

    // tampilkan hasil
    echo 'nama saya :'.$nama;
    echo 'umur saya :'.$umur;
?>