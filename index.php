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
    .menu{
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
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMA SMA an</h1>
    </header>

    <div class="menu">
    <h4 style="text-align: center;">Menu</h4>
    <hr>
    <nav style="text-align: center;">
    <a href="form-daftar.php">
        <button class="button">Daftar Baru</button>
    </a>
    <br>
    <a href="list-siswa.php">
        <button class="button">Data Pendaftar</button>
    </a>
    </nav>
    </div>
    
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>