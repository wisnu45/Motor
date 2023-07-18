<?php
include "../koneksi.php";
if (isset($_GET['kode'])) {
	$kode_motor = $_GET['kode'];
$query   = "SELECT * FROM motor WHERE kode_motor ='$kode_motor'";
$hasil   = mysql_query($query);
$data    = mysql_fetch_array($hasil);
$gambar = $data['gambar'];
} else {
	die ("Error. Tak ada Kode yang dipilih Silakan cek kembali! ");	
}

	if (!empty($kode_motor) && $kode_motor != "") {
		$query = "DELETE FROM motor WHERE kode_motor='$kode_motor'";
		$sql = mysql_query ($query);
		unlink("../Motor/".$gambar);
		if ($sql) {		
			?>
				<script language="JavaScript">
				alert('Data Berhasil dihapus');
				document.location='index.php?page=lihat_motor';
				</script>
			<?
				
		} else {
			echo "<h2><font color=red><center>Data Motor gagal dihapus</center></font></h2>";	
	}}
	?>
</div>