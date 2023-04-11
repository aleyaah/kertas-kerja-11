<!--membuat sambungan ke db-->
<?php
	include('config.php');
?>

<html>
	<head>
	<title>Senarai Pelajar Vaksinasi</title>
	</head>
	<style>
	h2 {
		text-align: center;
		padding-top: 20px;
	}
	body {
		background-color: #FFE4E1;
	}
	</style>
   

	<body>
	<h2>REKOD VAKSINASI PELAJAR</h2>
	<center>
	<table border=1 cellpadding=5 cellspacing=0 bgcolor=white>
		<tr>
			<th>ID PELAJAR</th>
			<th>NAMA PELAJAR</th>
			<th>KELAS</th>
			<th>JENIS VAKSIN</th>
			<th>TARIKH VAKSIN</th>
			<th>PADAM</th>
		
		</tr>
	  
		<!--memaparkan rekod pelajar-->
		<?php
	    
			$papar=mysqli_query($connect,"SELECT * FROM maklumat");

			while ($row=mysqli_fetch_array($papar)) {
				$totalRecord=mysqli_num_rows($papar);
			 
		echo "
		<tr>
			<td>".$row['id_pelajar']."</td>
			<td>".$row['nama_pelajar']."</td>
			<td>".$row['kelas']."</td>
			<td>".$row['jenis_vaksin']."</td>
			<td>".$row['tarikh_vaksin']."</td>
			<td><a  href=\"padam.php?id_pelajar=$row[id_pelajar]\" Onclick=\return confirm('Rekod ini akan dihapuskan')/>Padam</a></td>
				
		</tr>";
		}
		  ?>		  
	</table>
	<p><a href="tambah.php"><button name='tambah'type="submit">&#43; TAMBAH PELAJAR</button></a></p>
	
	</center>
	</body>
</html>