<?php 
session_start();
require 'function.php';


$resepsionis = query("SELECT * FROM resepsionis");

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
</head>
<body>
<div class="main">
    <link rel="stylesheet" href="../layout/style.css">
    <h2>data resepsionis</h2>
    <?php require '../layout/sidebar.php'?>

    <a href="tambah_resepsionis.php" class="tambah btn btn-outline-success">tambah data Resepsionis</a>
    <table class="table table-striped table-hover">
          



        <tr>
            <th>NO.</th>
            <th>NAMA LENGKAP</th>
            <th>NAMA LENGKAP</th>
            <th>KELAS</th>
            <th>PASSWORD</th>
            <th>ROLE</th>
        </tr>
        <?php $i = 1 ; ?>
        <?php foreach($resepsionis as $data) :   ?>
            <tr>
                <th><?=$i; ?></th>
                <th><?=$data["username"]; ?></th>
                <th><?=$data["nama_lengkap"]; ?></th>
                <th><?=$data["kelas"]; ?></th>
                <th><?=$data["password"]; ?></th>
                <th><?=$data["role"]; ?></th>
               
               <td>
                <a href="edit_resepsionis.php?id=<?=$data["id_resepsionis"]; ?>" class="edit btn btn-success">edit</a>
                <a href="hapus_resepsionis.php?id=<?=$data["id_resepsionis"]; ?>" class="hapus btn btn-danger" onClick="return confirm('anda yakin ingin menghapus')">hapus</a>
               </td>
              
            </tr>
            <?php $i++; ?>
            <?php  endforeach; ?>

    </table>
</div>
    
</body>
</html>



