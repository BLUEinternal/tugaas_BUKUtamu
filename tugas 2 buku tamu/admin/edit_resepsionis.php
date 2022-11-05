<?php

session_start();
require 'function.php';

$id = $_GET["id"];
$resepsionis = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];


if(isset($_POST["kirim"])){
    if(editresepsionis($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('tambah resepsionis berhasil ditambahkan');
            window.location = 'resepsionis.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('tambah resepsionis gagal, silahkan di cek kembali!');
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

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="../layout/style.css">
    <title>Document</title>
</head>
<body>
<div class="main">
    <?php require '../layout/sidebar.php'?>
   

   <div class="box">
       <h3>edit data resepsionis</h3>

       <form action="" method="POST">
           <input type="hidden" name="id_resepsionis" value="<?= $resepsionis["id_resepsionis"]; ?>">
            <div class="form-floating mb-3"></div>
            <label  for="nama_lengkap" >nama lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $resepsionis["nama_lengkap"] ; ?>">
            
            
            <label for="username">username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?= $resepsionis["username"] ; ?>">

            <label for="kelas">kelas</label>
            <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $resepsionis["kelas"] ; ?>">

            <label for="password">password</label>
            <input type="text" name="password" id="password" class="form-control" value="<?= $resepsionis["password"] ; ?>">

            <label for="role">role</label>
            <select name="role" class="form-control" value="<?= $resepsionis["role"]; ?>">
                <option value="Admin">Admin</option>
                <option value="Resepsionis">resepsionis</option>
            </select>

            <div class="mt-3">
             <button type="submit" name="kirim" class="btn btn-primary" >tambah data</button>
            </div>

           </div>
       </form>
   </div>
</div>

</body>
</html>
