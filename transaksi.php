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
        <h1>Total Transaksi</h1>
        <?php
                    $nama=$_POST['nama'];
                    $status=$_POST['status'];
                    $menu=$_POST['menu'];
                    $jumlah=$_POST['jumlah']; 
                    $jumlahTransaksi="";
                    $jumlahDiskon="";
                    $total="";

                if($status == "Member") {
                    if($menu == "paket1") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 20000;
                            $harga = 20000 - $diskon; 
                            $jumlahTransaksi = 20000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket2") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 30000;
                            $harga = 30000 - $diskon; 
                            $jumlahTransaksi = 30000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket3") {
                        if($jumlah == 1) {
                            $diskon = 0.05 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah == 2 || $jumlah == 3) {
                            $diskon = 0.07 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }else if($jumlah > 3) {
                            $diskon = 0.1 * 50000;
                            $harga = 50000 - $diskon; 
                            $jumlahTransaksi = 50000 * $jumlah;
                            $jumlahDiskon = $diskon * $jumlah; 
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }
                }else {
                    if($menu == "paket1") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 20000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket2") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 30000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }else if($menu == "paket3") {
                        if($jumlah > 6 && $jumlah < 10) {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.05;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else if($jumlah > 10) {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0.07;
                            $total = $jumlahTransaksi - $jumlahDiskon; 
                        }else {
                            $jumlahTransaksi = 50000 * $jumlah; 
                            $jumlahDiskon = $jumlahTransaksi * 0;
                            $total = $jumlahTransaksi - $jumlahDiskon;
                        }
                    }
                }

                echo "Nama Pembeli        : " .$nama;
                echo "<br>";
                echo "Status Pembeli      : " .$status;
                echo "<br>";
                echo "Total Harga         : " .$jumlahTransaksi;
                echo "<br>";
                echo "Total Diskon        : " .$jumlahDiskon;
                echo "<br><br>";
                echo "Total harus dibayar :" .$total;
            ?>
        </body>
</html>
   