<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "jualmobil";

    $db = new mysqli($server,$username,$password,$db_name);

    if(!$db){ #jika $db gagal terbaca menggunakan 'die' untuk mematikan
        die("Database connection failed");
    }
?>