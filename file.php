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
