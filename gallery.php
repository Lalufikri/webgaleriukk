<?php
    //menghubungkan ke database
    $koneksi = mysqli_connect("localhost","root","","bdlalu");

    //menggambil data dari data base
    $hasil = mysqli_query($koneksi,"SELECT * FROM gallery_foto"); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>...
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Foto</title>
</head>
<body>
<form action="tampilan.php"> 
        <button type="submit">Logout</button>
     </form>

    <h1>
    <a href="">tambah Foto</a>
    <table border=1>
        <thead>
        <tr>
            <th>no</th>
            <th>foto kegiatan</th>
            <th>judul kegiatan</th>
            <th>tanggal</th>
            <th>Lokasi file</th>
            <th>action</th>
        </tr>
</thead>
        <tbody>
            <?php
            $i=1;
            while($row = mysqli_fetch_assoc($hasil)): ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['JudulFoto'] ?></td>
                <td><?php echo $row['DeskripsiFoto'] ?></td>
                <td><?php echo $row['TanggalUnggah'] ?></td>
                <td><?php echo $row['LokasiFile'] ?></td>
                <td>
                    <a href="">edit</a> | <a href="">hapus</a>
                </td>
            </tr>
            <?php 
         $i++;   
        endwhile; ?>


        </tbody>
    </table>
</body>
</html>