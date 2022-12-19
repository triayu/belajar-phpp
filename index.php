<?php
// Buat Koneksi myql
    $con = mysqli_connect("localhost", "root", "fakultas");

    // cek koneksi
    if(mysqli_connect_errno()) {
        echo"Koneksi gagal" . mysqli_connect_errno();
    }else {
        echo "Koneksi berhasil";
    }

    // membaca tabel msql
    $query = "SELECT * FROM mahasiswa";

    // tampilan data, dg sql query
    $result = mysqli_query($con, $query);
    if ($result){
        // tampilan data satu persatu
        while($row = mysqli_fetch_assoc($result)){
            echo "<br>" .$row["nama"];
        }
        mysqli_free_result($result);
    }

    // tutup koneksi msql
    mysqli_close($con);

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>
