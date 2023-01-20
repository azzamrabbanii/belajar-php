<?php
// type data string
    $kalimat = 'islamic development network';

// type data int
    $angka = '20';
// ketika di explode / implode otomatis datanya menjadi array    
    $explode = explode(' ', $kalimat);

    // exekusi array menggunakan print_r
    // print_r($explode);

    // implode data
    echo $explode[0].'<br>';
    echo $explode[1].'<br>';
    echo $explode[2 ].'<br>';

    $implode = implode(' ',$explode);

    print_r($implode);
    echo '<br>';

    //array merge untuk menggabungkan 2 nilai varable array
    $array0 = ['inova', 'fortuner', 'jazz'];
    $array1 = ['terios', 'veloz', 'bmw'];
    $result = array_merge($array0, $array1);
    print_r($result);
    echo '<br>';
    
    $implode2 = implode('? ', $result);
    print_r($implode2);

?>