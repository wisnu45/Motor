<?php
include "../koneksi.php";
if (isset($_GET['id_konsumen'])) {
	$id_konsumen = $_GET['id_konsumen'];
$query   = "SELECT * FROM konsumen WHERE id_konsumen ='$id_konsumen'";
$hasil   = mysql_query($query);
$data    = mysql_fetch_array($hasil);
} else {
	die ("Error. Tak ada Kode yang dipilih Silakan cek kembali! ");	
}

	if (!empty($id_konsumen) && $id_konsumen != "") {
		$query = "DELETE FROM konsumen WHERE id_konsumen='$id_konsumen'";
		$sql = mysql_query ($query);
		if ($sql) {		
			?>
				<script language="JavaScript">
				alert('Data Berhasil Dihapus');
				document.location='index.php?page=lihat_konsumen';
				</script>
			<?
				
		} else {
			echo "<h2><font color=red><center>Data Konsumen Gagal Dihapus</center></font></h2>";	
	}}
	?>
</div>