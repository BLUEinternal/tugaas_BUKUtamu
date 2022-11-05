<?php

require 'function.php';

$id = $_GET["id"];

if(hapusresepsionis($id) > 0){ 
    echo "
        <script type='text/javascript'>
            alert('data resepsionis berhasil di apus');
            window.location = 'resepsionis.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('data resepsionis  gagal di hapus');
        window.location = 'resepsionis.php';
    </script>
";
}

?>