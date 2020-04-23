<!DOCTYPE html>
<html>
	<head>
		<title>Input Data Pemantaun Covid19</title>
		
	</head>
	<body>
	<table width="780" align="center">
      <tr>
	  <td colspan="2" align="center"><h3>Input Data Pemantaun Covid19</h3></td>
	  </tr>
	  <tr>
		<form method="get" action="Output.php">
		<td width="250">Nama Wilayah :</td>
		<td width="530"><select name="wlyh">
				<option>Nama Wilayah</option>
				<option value="DKI Jakarta">DKI Jakarta</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Banten">Banten</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
		</select><br></td>
	  </tr>
	  <tr>
        <td>Jumlah Positif :</td>
        <td><input size="40" type="text" name="pstf"></td>
	  </tr>
	  <tr>
        <td>Jumlah Dirawat :</td>
        <td><input size="40" type="text" name="drwt"></td>
	  </tr>
	  <tr>
        <td>Jumlah Sembuh :</td>
        <td><input size="40" type="text" name="smbh"></td>
	  </tr>
	  <tr>
	  <td>Jumlah Meninggal :</td>
        <td><input size="40" type="text" name="migl"></td>
	  </tr>
	  <tr>
	  <td>Nama Operator :</td>
        <td><input size="40" type="text" name="nma"></td>
	  </tr>
	  <tr>
	  <td>NIM Mahasiswa :</td>
        <td> <input size="40" type="text" name="nim"><br></td>
	  </tr>
	  <tr>
	  <td><input type="submit"></input><input type="reset" name="batal" value="batal" /></td>
	  </tr>
		</table>
	</body>
</html>