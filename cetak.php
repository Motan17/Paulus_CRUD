<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE </title>
</head>
<body>
 
	<center>
 
		<h2>DATA SISWA</h2>
		
 
	</center>
 
	<?php 
	include 'config.php';
	?>
 
	<center> <table border="5">
    <thead>
        <tr style="color: Black; font-size: 20px;">
            <th style="color: Black; font-size: 20px;">No</th>
            <th style="color: Black; font-size: 20px;">Nama</th>
            <th style="color: Black; font-size: 20px;">Alamat</th>
            <th style="color: Black; font-size: 20px;">Jenis Kelamin</th>
            <th style="color:Black; font-size: 20px;">Nilai</th>
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
 
	<script>
		window.print();
	</script>
 
</body>
</html>