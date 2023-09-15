<!-- 
<?php
    //ini komentar
    /*slash bintang
    iini slasih bang, slash slash
    pencet ini itu ctrl 
    */

    // echo "alhamduliah world <br>";
    // print "aku adalah aku <br>";
    // print_r("ini adalah saya <br>s");
    // var_dump ("sesuatu yang indah");
    // echo "dua";
    $ngaran = "ujang alexander <br>";
    echo $ngaran;
    $nomor1 = 3232;
    $nomor2 = 756;
    $penjumlahan = $nomor1 + $nomor2;
    echo $penjumlahan;
    echo "<br>";

    $namahiji = "sinta";
    $namadua = "jojo";
    echo $namahiji . " " . $namadua;


    echo $nama_lengkap = "Anzarrahman";
    echo $Tempat_tgl_lahir = ""
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
    <h1><?php echo "pemrograman web"; ?></h1>
    
</body>
</html> -->





<!DOCTYPE html>
<html>
    <head>
        <title>Tabel Biodata Seorang Anzarrahman</title>
</head>
<body>
    <?php
    $namalengkap = "Anzar Rahman Permana";
    $tempatlahir = "Tasikmalaya";
    $tanggallahir = "13 Januari 2003";
    $hobi = "memasak";
    ?>
    <h1> Biodata </h1>
    <table border="2">
        <tr>
            <th>Data</th>
            <th>Isi data</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td> <?php echo $namalengkap; ?></td>
 
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><?php echo $tempatlahir; ?></td>
   
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $tanggallahir; ?></td>
      
        </tr>
        <tr>
            <td>Hobi</td>
            <td><?php echo $hobi; ?></td>

        </tr>
    </table>

</body>
</html>
