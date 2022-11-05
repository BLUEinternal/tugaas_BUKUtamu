<?php 
session_start();
require 'function.php';



$gtk = query("SELECT * FROM gtk");

?>

<?php require '../layout/sidebar.php'?>

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
    <h2>data gtk</h2>

    <a href="tambah_gtk.php" class="tambah btn btn-outline-success">tambah data gtk</a>
    <table  class="table table-striped table-hover">
        <tr>
            <th>NO.</th>
            <th>NAMA LENGKAP</th>
            <th>JOB</th>
            <th>ROLE</th>
            <th>FOTO</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1  ?>
        <?php foreach($gtk as $data) :   ?>
            <tr>
                <th><?=$i; ?></th>
                <th><?=$data["nama_lengkap"]; ?></th>
                <th><?=$data["job"]; ?></th>
                <th><?=$data["roles"]; ?></th>
                <th><img src="../foto/<?= $data["foto"] ?>" alt="" width="80px"></th>
               <td>
                <a href="edit_gtk.php?id=<?=$data["id_gtk"]; ?>" class="edit btn btn-success">edit</a>
                <a href="hapus_gtk.php?id=<?=$data["id_gtk"]; ?>" class="hapus btn btn-danger"  onClick="return confirm('anda yakin ingin menghapus data ini')">hapus</a>
               </td>
              
            </tr>
            <?php $i++; ?>
        <?php  endforeach; ?>
    </table>
</div>
    
</body>
</html>

