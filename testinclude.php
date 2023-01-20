<?php
    // include('tester/loop.php');
    // echo '<br>';
    // require('tester/testing/looping.php');

    // array slice untuk membatasi array yang di panggil
    // $array = ['devin', 'haidar', 'rafif', 'nabiih'];
    // $slice = array_slice($array,3);
    // print_r($slice);

    $array = ['lenovo', 'xiomi', 'apple', 'samsung'];
    $array2 = ['xiomi', 'hp', 'asus', 'lg'];
    $merge = array_merge($array, $array2);
    // print_r($merge);

    $slice = array_slice($merge, 6);
    print_r($slice);
    echo '<br>';

    // array column dengan array multiconditional
    $kelompok = [
        [
            'id' => 1,
            'nama panjang' => 'Muhammad azzam',
            'nama pendek' => 'azzam'
        ],
        [
            'id' => 2,
            'nama panjang' => 'Muhammad rafif',
            'nama pendek' => 'rafif' 
        ],
        [
            'id' => 3,
            'nama panjang' => 'Muhammad reihan',
            'nama pendek' => 'reihan'
        ]
        ];

        // memanggil salah satu
        print_r($kelompok[0]['nama panjang']);
        echo '<br>';

        $column = array_column($kelompok, 'nama panjang');
        print_r($column);

?>