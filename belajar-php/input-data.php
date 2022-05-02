<?php

// require_once "conn.php";

/*
$sql = "INSERT INTO mahasiswa 
        (`nim`, `nama`, `jns_kelamin`, `tpt_lahir`, `tgl_lahir`, `alamat`) VALUES
        ('192800070', 'Madre Volenta Adil', 'Perempuan', 'Ruteng', '2001-06-12', 'Jl.Sinabung No2')";
*/

if ($_POST['input'] == "Input") {

    require_once "conn.php";

    $sql = "INSERT INTO mahasiswa 
        (`nim`, `nama`, `jns_kelamin`, `tpt_lahir`, `tgl_lahir`, `alamat`) VALUES
        ('".$_POST['nim']."', '".$_POST['nama']."', '".$_POST['jns_kelamin']."', '".$_POST['tpt_lahir']."', '".$_POST['tgl_lahir']."', '".$_POST['alamat']."')";

    if ($conn->query($sql) === TRUE) {
        echo "New Record Data Created Successfully";
    } else {
        echo "Error ". $sql . "<br>" . $conn->error;
    }

} else {
    echo "Restricted Area";
}