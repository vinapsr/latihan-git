<?php
$datake = $_POST["datake"];
$nama = $_POST["nama"];
$kp = $_POST["kp"];
$bp = $_POST["bp"];

$datapesanan=[
    "nama"=>$nama,
    "kp"=>$kp,
    "bp"=>$bp,
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran Fried Chicken</title>
	<script type="text/javascript">
	function message()
	{
		alert("Terimakasih sudah mengisi data pesanan");
	}
	</script>
</head>

<body onload="message()">
    <style>
        *{
            font-family: monospace;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td colspan="3">DATA PESANAN GEROBAK FRIED CHICKEN</td>
        </tr>
        <tr>
            <td colspan="3">==================================</td>
        </tr>
            <?php foreach($datake as $key => $datapesanan):?>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama[$key];?></td>
            </tr>
            <tr>
                <td>Jenis Potong</td>
                <td>:</td>
                <td><?= $kp[$key];?></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td>:</td>
                <td>Rp. 
                    <?php 
                        if ($kp[$key] == "Dada"){
                            $harga = 2500;
                            echo $harga;
                        } elseif ($kp[$key] == "Paha"){
                            $harga = 2000;
                            echo $harga;
                        } elseif ($kp[$key] == "Sayap"){
                            $harga = 1500;
                            echo $harga;
                        }
                    ?>
                </td> 
            </tr>
            <tr>
                <td>Banyak Potong</td>
                <td>:</td>
                <td><?= $bp[$key];?></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>Rp. 
                    <?php
                        $total = $harga *  $bp[$key];
                        echo $total;
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="3">==================================</td>
            </tr>
            <tr>
                <td colspan="3"><br></td>
            </tr>
            <?php endforeach; ?>
        <tr>
            <td colspan="3"><a href="input.php"><button type="submit">KEMBALI</button></a></td>
        </tr>
    </table>
</body>
</html>