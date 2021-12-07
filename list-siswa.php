<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pendaftaran Siswa Baru | Kejuaraan Coding</title>
    <style type="text/css">
    body{
        /*padding-left: 4rem;*/
        padding-top: 6rem;
        padding-bottom: 5rem;
        background-color: #ccf8ff;
        font-family: "Times New Roman", Times, serif;
    }
    .formulir{
        border-radius:20px;
        padding : 3rem 5rem;
        margin-top: 4rem;
        margin-left:25rem;
        margin-right:25rem;
        background-color: #d9fcff;
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
      background-color: #6af77d;
      color: white;
    }

    a{
        text-decoration: none;
    }
    </style>
</head>

<body>
    <header style="text-align: center">
        <h3>Siswa yang sudah mendaftar</h3>
    </header>
    <div class="tabel">
    <nav >
        <a class="button" href="form-daftar.php">Tambah Baru</a>
    </nav>

    <br>

    <table class="table table-striped" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
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
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a  href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    </body>
</html>
