<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style type="text/css">
    body{
        /*padding-left: 4rem;*/
        padding-top: 6rem;
        padding-bottom: 5rem;
        background-color: #FFEBCC;
        font-family: 'Open Sans', sans-serif;
    }
    .formulir{
        border-radius:20px;
        padding : 3rem 5rem;
        margin-top: 4rem;
        margin-left:25rem;
        margin-right:25rem;
        background-color: #FBFFE2;
    }
    .button {
      background-color: white; 
      color: black; 
      border: 2px solid #FFAFAF;
      padding: 10px 28px;
      margin: 4px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
      border-radius:10px; */
    }
    
    .button:hover {
      background-color: #FF9999;
      color: white;
    }
    </style>
</head>

<body>
    <header style="text-align: center;">
        <h3>Formulir Pendaftaran Siswa Baru</h3>
    </header>

    <div class="formulir">
    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

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
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
        </p>
        <p>
            <input class="button" type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>
    </form>
    </div>
    

    </body>
</html>