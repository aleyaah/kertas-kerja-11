<?php

include ('config.php');
$id_pelajar = $_GET['id_pelajar'];

$query = "DELETE FROM maklumat WHERE id_pelajar = '$id_pelajar'";

$result = mysqli_query($connect, $query);

if (mysqli_query($connect, $query)) {
	echo "<script>alert('Maklumat berjaya dihapuskan')</script>" . 
	"<script>window.location='index.php'</script>";
	}
else {
	echo "<script>alert('Maklumat tidak berjaya dihapuskan')</script>";
	}
?> 