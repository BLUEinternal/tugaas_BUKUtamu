<?php

session_start();
require 'function.php';

$id = $_GET["id"];
$gtk  = query("SELECT * FROM gtk WHERE id_gtk ='$id'")[0];




if(isset($_POST["kirim"])){
    if(editgtk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert(' gtk berhasil di edit');
            window.location = 'GTK.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('edit gtk gagal silahkan di cek kembali!');
        window.location = 'GTK.php';
    </script>
";
}
}



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
    <div class="box">
        <h3>edit Data gtk</h3>

        <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_gtk" value="<?= $gtk["id_gtk"]; ?>"> <br>

           
            <label  for="nama_lengkap" >nama lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $gtk["nama_lengkap"] ; ?>">
            
            <label for="job">pekerjaan</label>
            <input type="text" name="job" id="job" class="form-control" value="<?= $gtk["job"] ; ?>">

            <label for="roles">roles</label>
            <select name="roles" class="form-control">
                <option value="Kepala sekolah">kepsek</option>
                <option value="Wakil kepala skolah">wakil kepsek</option>
                <option value="Guru">guru</option>
            </select>

            <label for="foto">foto</label>
            <input type="file" name="foto" id="foto" class="form-control" value="<?= $produk["foto"]; ?>">

            <div class="mt-3">
             <button type="submit" name="kirim" class="btn btn-primary" >edit data</button>
            </div>
  
        </form>
    </div>
</div>



</body>
</html>