<!DOCTYPE html>
<html>
    <head>
        <title>
            Transaksi
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="menu" >
            <ul>
                 <li><a href="restoran.html">Home</a></li>
                 <li><a href="transaksi.html">Transaksi</a></li>
                 <li><a href="foto.html">Tambah Foto</a></li>
            </ul>
        </div>
        <?php
                $target_path="uploads/";

                $target_path =$target_path . basename(
                $_FILES['uploadedfile']['name']);

                if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)){
                    echo "The File" . basename($_FILES['uploadedfile']['name']) ." has been uploaded";
                }else{
                    echo "there was an error uploading the file, please try again";
                }
            ?>
    </body>
</html>