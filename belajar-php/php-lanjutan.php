<?php

    $nama = "Madre";
    $umur = 20;
    $tinggi = 140;

    // $kalimat = "Halo, nama saya $nama umur saya adalah $umur tahun dan tinggi saya $tinggi cm";

    // echo $kalimat;

    // percabangan if-else
    /*
    if($nama != "Madre")
    {
        echo "Benar itu Madre";
    } else {
        echo "Kamu siapa?";
    }
    */

    // percabangan switch-case
    /*
    switch($nama) {
        case "Madre";
        echo "Benar itu Madre";
        break;
        default;
        echo "Kamu siapa?";

    }
    */

    // Ternary Operator
    /*
    $kalimat = $nama = "Madre" ? "Benar itu Madre" ; "Kamu siapa?";

    echo $kalimat;
    */
    // perulangan for
    /*
    for($i=0; $i < 10; $i++) {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
    }
    */

    // perulangan while
    /*
    $i = 0;
    while ($i <= 10) {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    }

    // perulangan do while 
    /*
    $i = 0;

    do {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    } while ($i < 11);
    */
    
    // Perulangan Foreach + Built in Function
    /*
    $nama = array ("Volenta" => 25000000,
                    "Tasya" => 100000000,
                    "Nizar" => 230000000,
                    "Dhiva" => 500000000,
                    "Zhaffa" => 45000000,
                    "Ibrahim" => 5000000000,
                    "Israk" => 40000000,

    foreach ($nama as $sebutan => $nilai) {
        echo "Nama saya adalah $sebutan nilai buruan saya adalah Rp ". number_format_format($nilai, 2, ".", ".");
        echo "<br/>";
    }
    */

    // User definen function
    /*
    function sebut_nama($nama) {
        $sebut = "Halo, nama saya $nama";
        return $sebut;
    }

    echo sebut_nama("$nama");
    */

    // built-in function 
    /*
    echo strlen("Halo, nama saya $nama"); 
    */

?>