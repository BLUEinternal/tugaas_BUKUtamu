<?php
session_start();
require 'function.php';



if(isset($_POST["kirim"])){
    if(tambahResepsionis($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('tambah data resepsionis berhasil ditambahkan');
            window.location = 'resepsionis.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('tambah data resepsionis gagal, silahkan di cek kembali!');
        window.location = 'resepsionis.php';
    </script>
";
}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../layout/style.css">
</head>
<body>
<div class="main">

    <?php require '../layout/sidebar.php'?>
    <div class="box">
        <h3>Tambah data resepsionis</h3>

        <form action="" method="POST">

            <label for="username">username</label>
            <input type="text" name="username" id="username" class="form-control">

            <label for="nama_lenkap">nama lengkap</label>
            <input type="text" name="nama_lengkap" id="nama lengkap" class="form-control">


            <label for="kelas">kelas</label>
            <input type="text" name="kelas" id="kelas" class="form-control">

            <label for="password">password</label>
            <input type="text" name="password" id="password" class="form-control">

            <label for="role">roles</label>
            <select name="role" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">resepsionis</option>
            </select>

            <button type="submit" name="kirim" class="btn btn-primary btn-lg">tambah data</button>
  
        </form>
    </div>
</div>

</body>
</html>

