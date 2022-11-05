<?php

session_start();
require 'function.php';



if(isset($_POST["kirim"])){
    if(tambahgtk($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('tambah data gtk berhasil ditambahkan');
            window.location = 'gtk.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('tambah data gtk gagal, silahkan di cek kembali!');
        window.location = 'gtk.php';
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
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../layout/style.css">
    <title>Document</title>
</head>
<body>
<div class="main">
    <div class="box">
        <h3>Tambah Data gtk</h3>

        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nama_lengkap">nama lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">

            <label for="job">pekerjaan</label>
            <input type="text" name="job" id="job" class="form-control">

            <label for="roles">roles</label>
            <select name="roles" class="form-control">
                <option value="Kepala sekolah">kepsek</option>
                <option value="wakil kepala skolah">wakil kepsek</option>
                <option value="guru">guru</option>
            </select>


            <label for="foto">foto</label>
            <input type="file" name="foto" id="foto" class="form-control">

            

            <button type="submit" name="kirim" class="btn btn-primary btn-lg">tambah data</button>
  
        </form>
    </div>
</div>

</body>
</html>
