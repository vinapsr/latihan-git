<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan Fried Chicken</title>
	<script type="text/javascript">
	function message()
	{
		alert("Terimakasih sudah memesan");
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
            <td colspan="3">GEROBAK FRIED CHICKEN</td>
        </tr>
        <tr>
            <td colspan="3">=====================</td>
        </tr>
        <form action="outputcetak.php" method="post">
            <?php $pesanan =$_POST["pesanan"];?>
            <?php for($i=1; $i <= $pesanan; $i++):?>
                <tr>
                    <td><label for="datake">Data Ke</label></td>
                    <td>:</td>
                    <td><input type="text" name="datake[]" id="datake" value="<?= $i;?>"></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama[]" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="kp">Kode Potong</label></td>
                    <td>:</td>
                    <td>
                        <select name="kp[]" id="kp">
                            <option value="Dada">D</option>
                            <option value="Paha">P</option>
                            <option value="Sayap">S</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="bp">Banyak Potong</label></td>
                    <td>:</td>
                    <td><input type="text" name="bp[]" id="bp"></td>
                </tr>
                <tr>
                    <td colspan="3"><br></td>
                </tr>
            <?php endfor; ?>
            <tr>
                <td colspan="3">
                    <button type="submit" name="cetak">CETAK</button>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>