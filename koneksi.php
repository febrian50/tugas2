
<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'',"sertifikasi");
    
    // production
    $kon = mysqli_connect("localhost", "id4103787_oktioryan0140",'billabong45',"id4103787_sertifikasi");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>
