<!DOCTYPE HTML>
<html>
  <head>
    <title>Output Data Pemantaun Covid19 </title>
  </head>
  <body>
</form><br><br><br><br>
		<center><h1>Data Pemantauan COVID19 Wilayah <?php echo $_GET['wlyh']; ?> <br>
		<?php $dt = new DateTime('now', new DateTimezone('Asia/Jakarta')); ?>
		Per <?php echo $dt->format("d-F-y H:i:s"); ?> <br>
		<?php echo $_GET['nma']; ?> 
		<?php echo $_GET['nim']; ?>
		<table border='1'>
			<tr>
				<th>Positif</th>
				<th>Dirawat</th>
				<th>Sembuh</th>
				<th>Meninggal</th>
			</tr>
			<tr>
				<th><?php echo $_GET['pstf']; ?></th>
				<th><?php echo $_GET['drwt']; ?></th>
				<th><?php echo $_GET['smbh']; ?></th>
				<th><?php echo $_GET['migl']; ?></th>
			</tr>
		</table></h1></center>
		<?php
			if(isset($_GET['nma']))
			{
				$wlyh=$_GET['wlyh'];
				$pstf=$_GET['pstf'];
				$drwt=$_GET['drwt'];
				$smbh=$_GET['smbh'];
				$migl=$_GET['migl'];
				$nma=$_GET['nma'];
				$nim=$_GET['nim'];
				$data = "\n | $wlyh | $pstf | $drwt | $smbh | $migl | $nma | $nim |";
				$fp = fopen('db.html', 'a');
				fwrite($fp , $data);
				fclose($fp);
			}
        ?>
        </body>
        </html>