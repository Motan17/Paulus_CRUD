<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<style>
body{
            background-image:url(bg4.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }</style>

<head>
    <title>Pendaftaran Siswa </title>
</head>

<body>
 
    <header>
        <h3 align="center" style="color: black; font-size: 40px;">DAFTAR SISWA</h3>
    </header>

    <nav>
       <center> <a style="color: black; font-size: 20px;" href="form-daftar.php">[+] Tambah Baru</a></center>
    </nav>
 <br>
    <br>

    <center> <table border="5">
    <thead>
        <tr style="color: Black; font-size: 20px;">
            <th style="color: Black; font-size: 20px;">No</th>
            <th style="color: Black; font-size: 20px;">Nama</th>
            <th style="color:Black; font-size: 20px;">Alamat</th>
            <th style="color: Black; font-size: 20px;">Jenis Kelamin</th>
            <th style="color: Black; font-size: 20px;">Nilai</th>
            <th style="color: Black; font-size: 20px;">Kelas</th>
            <th style="color: Black; font-size: 20px;">Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['nilai']."</td>";
            echo "<td>".$siswa['kelas']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table></center>

   <center> <p style="color: black; font-size: 30px; font-family: Georgia, serif">Total: <?php echo mysqli_num_rows($query) ?></p></center>
    <br>
   <br>
  <center>  <button > <a href="cetak.php" target="_blank">CETAK</a></button>
  <br><br>
  <button ><a href="index.php">HOME</a></button>	</center> 

    </body>
</html>