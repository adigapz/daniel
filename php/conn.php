<?php
    $host = 'db';
    $user = 'devuser';
    $password = 'devpass';
    $db = 'penduduk';

    $conn = new mysqli ($host, $user, $password, $db);
    if($conn){
        echo " berhasil terhubung ke mysql";
    } else echo " gagal terhubung ke mysql";
 ?>