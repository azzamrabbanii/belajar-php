<?php
// metode looping atau perulangan ada 4 macam

// metode for
for ($i = 1; $i < 50; $i++){
    echo "<br/> $i";
}

// metode while
$awal = 0;
while ($awal <= 50){
    echo "<br/> $awal";
    $awal++;
}

// metode do while
$while = 1;
do {
    echo $while++;
} while ($while < 0);

// metode foreach
// type data array
$buah = array("apel", "mangga", "jeruk", "anggur");
foreach ($buah as $buah) {
    echo "<br/> $buah";
}

// latihan for
for ($i = 0; $i <= 100; $i+=2){
    echo "<br/> $i";
}

// latihan while
$awal = 0;
while ($awal <= 100){
    echo "<br/> $awal";
    $awal+=2;
}

// latihan data array table

?>
<html>
<table border='1'>
    <tr>
        <th>buah</th>
    </tr>
    <?php
    $buah = array("apel", "mangga", "jeruk", "anggur");
    foreach($buah as $buah): ?>
    <tr>
        <td><?= $buah; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</html>
