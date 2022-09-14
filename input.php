<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Menu Fried Chicken</title>
	<script type="text/javascript">
	function message()
	{
		alert("Silahkan isi data pesanan");
	}
	</script>
</head>

<body onload="message()">
<table width="463" border="0">
  <tbody>
    <tr>
      <td colspan="3"><center>GEROBAK FRIED CHICKEN</center></td>
    </tr>
    <tr>
      <td colspan="3"><center>
        ============================================
      </center></td>
    </tr>
    <tr>
      <td width="103"><center>Kode</center></td>
      <td width="141"><center>Jenis</center></td>
      <td width="197"><center>Harga</center></td>
    </tr>
    <tr>
      <td><center>D</center></td>
      <td><center>Dada</center></td>
      <td><center>Rp. 2500</center></td>
    </tr>
    <tr>
      <td><center>P</center></td>
      <td><center>Paha</center></td>
      <td><center>Rp. 2000</center></td>
    </tr>
    <tr>
      <td><center>S</center></td>
      <td><center>Sayap</center></td>
      <td><center>Rp. 1500</center></td>
    </tr>
    <tr>
      <td colspan="3"><center>
      ============================================
      </center></td>
    </tr>
    <tr>
      <td colspan="2"><center>Jumlah Pesanan</center></td>
      <td>
	<form action="outputproses.php" method="post">
  <select name="pesanan" id="pesanan">
            <?php for($i = 1; $i <= 100; $i++):?>
                <option value="<?= $i;?>"><?= $i;?></option>
            <?php endfor; ?>
  </select></td>
    </tr>
    <tr>
      <td height="46" colspan="3"><center>
      <input type="submit" name="proses" id="submit" value="PROSES"></center></td>
  </tr>
  </tbody>
</table>
</body>
</html>