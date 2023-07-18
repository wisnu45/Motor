<?php
include "../koneksi.php";

if (isset($_GET['kode'])) {
	$kd_psn = $_GET['kode'];
} else {
	die ("Error. No Kode Selected! ");	
}
$query = "SELECT kd_pemesanan,tgl_pemesanan,id_konsumen,kode_motor,kd_status,batas_akhir FROM pemesanan WHERE kd_pemesanan='$kd_psn'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$kd_psn = $hasil['kd_pemesanan'];
$tgl_psn = $hasil['tgl_pemesanan'];
$id_k = $hasil['id_konsumen'];
$kd_mtr = $hasil['kode_motor'];
$kd_sts = $hasil['kd_status'];
$ba = $hasil['batas_akhir'];
if (isset($_POST['ok'])) {
$kd_pemesanan = $_POST['kd_psn'];
$tgl_pemesanan = $_POST['tgl_psn'];
$id_konsumen = $_POST['id_k'];
$kode_motor = $_POST['kd_mtr'];
$kd_status = $_POST['kd_sts'];
$batas_akhir = $_POST['ba'];
$query = "update pemesanan set kd_status= 3 WHERE kd_pemesanan=$kd_psn";
$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color=#8BB2D9><center>Konfirmasi Berhasil</center></font></h2>";	
	} else {
		echo "<h2><font color=red><center>Konfirmasi Gagal</center></font></h2>";	
	}
}
?>
<div align="center">
  <p align="center"><font color="#0000CC" size="+2"><strong>KONFIRMASI PENGAMBILAN PESANAN </strong></font></p>
  <form action="" method="post" name="konfirmasi" id="konfirmasi">
  <table width="39%" border="1">
  <tr><td width="58%"><strong>Kode Pemesanan</strong></td>
  <td width="42%"><?=$kd_psn?></td>
  </tr>
  <tr>
    <td><strong>Tanggal Pemesanan</strong></td>
    <td><?=$tgl_psn?></td>
  </tr>
  <tr>
    <td><strong>Id Konsumen</strong></td><td><?=$id_k?></td>
  </tr>
  <tr>
    <td><strong>Kode Motor</strong></td><td><?=$kd_mtr?></td>
  </tr>
  <tr>
    <td><strong>Kode Status</strong></td><td><?=$kd_sts?></td>
  </tr>
  <tr><td><strong>Batas Akhir</strong></td><td><?=$ba?></td>
  </tr>
  </table>
  <br>
    <input type="submit" name="ok" value="OK" id="ok">
    <em>
    <input type="button" value="Batal" onclick="self.history.back();" />
    </em>
  </form>
  <p><strong><font size="+2"></font></strong></p>
</div>