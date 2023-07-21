<!DOCTYPE html>
<html>
<head>
    <title>TAMBAH DATA</title>
</head>
<style>
body{
            background-image:url(bg4.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }</style>

<body>
    <header>
        <h3 align="center">TAMBAH DATA BARU</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

       <center> 

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
		
            <label for="nilai">Nilai: </label>
           <input type="number_format" name="nilai" placeholder="nilai" />
            <!--<label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>-->
        <p>
            <label for="kelas">Kelas: </label>
            <input type="text" name="kelas" placeholder="kelas" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
			
        </p>

        <!--</fieldset>-->
		<br>
 <button ><a href="index.php">HOME</a></button>		</center>

    </form>

    </body>
</html>