<?php
session_start();
if(empty($_SESSION[adm])){
echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
include('../koneksi.php');
?>
<script language="javascript">
javascript:print();
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="646" border="0" align="center">
  <tr>
    <td width="67"><img src="../Images/lgcm.jpg" width="67" height="66" /></td>
    <td width="583"><div align="center"><strong>CITRA MOTOR</strong><br />
      JUAL  BELI TUKAR TAMBAH MOTOR BERKUALITAS, TUNAI DAN KREDIT<br />
      Jl. Yos Sudarso No. 09 Rt. 07  Tanah Periuk Lubuklinggau Selatan II</div></td>
  </tr>
</table>
<hr width="650" />
<p align="center"><strong>LAPORAN KESELURUHAN DATA PEMESANAN</strong></p>
<p align="center"><b><u>Daftar Pesanan Yang Diambil<br />
</u></b> </p>
<div align="center">
  <table width="650" border="1">
    <tr>
      <td width="130"><strong> Kode Pemesanan</strong></td>
      <td width="103"><strong> Kode Motor</strong></td>
      <td width="129"><strong> Nama</strong></td>
      <td width="124"><strong> Tanggal Pesan</strong></td>
      <td width="130"><strong> Batas Akhir</strong></td>
    </tr>
    <?php
include "../koneksi.php";
	$sql="select pemesanan.kd_pemesanan,pemesanan.kode_motor,konsumen.nama,pemesanan.tgl_pemesanan,
					pemesanan.batas_akhir
					from pemesanan,konsumen
					where pemesanan.id_konsumen=konsumen.id_konsumen and kd_status=3";
	$tampil = mysql_query($sql);
while (	$hasil = mysql_fetch_array ($tampil)) {
			$kd_psn = stripslashes ($hasil['kd_pemesanan']);
			$kd_mtr = stripslashes ($hasil['kode_motor']);
			$nm = stripslashes ($hasil['nama']);
			$tgl_psn = stripslashes ($hasil['tgl_pemesanan']);
			$ba = stripslashes ($hasil['batas_akhir']);
{
?>
    <tr>
      <td><div align="left">
          <?=$kd_psn?>
      </div></td>
      <td><div align="left">
          <?=$kd_mtr?>
      </div></td>
      <td><div align="left">
          <?=$nm?>
      </div></td>
      <td><div align="left">
          <?=$tgl_psn?>
      </div></td>
      <td><div align="left">
          <?=$ba?>
      </div></td>
    </tr>
    <?  
	    }}
	    ?>
  </table>
</div>
<hr align="center" width="650" />
<p align="center"><b><u>Daftar Pesanan Yang Batal<br />
</u></b> </p>
<div align="center">
  <table width="650" border="1">
    <tr>
      <td width="130"><strong> Kode Pemesanan</strong></td>
      <td width="103"><strong> Kode Motor</strong></td>
      <td width="129"><strong> Nama</strong></td>
      <td width="124"><strong> Tanggal Pesan</strong></td>
      <td width="130"><strong> Batas Akhir</strong></td>
    </tr>
    <?php
include "../koneksi.php";
	$sql="select pemesanan.kd_pemesanan,pemesanan.kode_motor,konsumen.nama,pemesanan.tgl_pemesanan,
					pemesanan.batas_akhir
					from pemesanan,konsumen
					where pemesanan.id_konsumen=konsumen.id_konsumen and kd_status=2";
	$tampil = mysql_query($sql);
while (	$hasil = mysql_fetch_array ($tampil)) {
			$kd_psn = stripslashes ($hasil['kd_pemesanan']);
			$kd_mtr = stripslashes ($hasil['kode_motor']);
			$nm = stripslashes ($hasil['nama']);
			$tgl_psn = stripslashes ($hasil['tgl_pemesanan']);
			$ba = stripslashes ($hasil['batas_akhir']);
{
?>
    <tr>
      <td><div align="left">
          <?=$kd_psn?>
      </div></td>
      <td><div align="left">
          <?=$kd_mtr?>
      </div></td>
      <td><div align="left">
          <?=$nm?>
      </div></td>
      <td><div align="left">
          <?=$tgl_psn?>
      </div></td>
      <td><div align="left">
          <?=$ba?>
      </div></td>
    </tr>
    <?  
	    }}
	    ?>
  </table>
</div>
<hr align="center" width="650" />
<p align="center"><b><u>Daftar Pesanan Yang Menunggu</u></b> </p>
<div align="center">
  <table width="650" border="1">
    <tr>
      <td width="130"><strong> Kode Pemesanan</strong></td>
      <td width="103"><strong> Kode Motor</strong></td>
      <td width="129"><strong> Nama</strong></td>
      <td width="124"><strong> Tanggal Pesan</strong></td>
      <td width="130"><strong> Batas Akhir</strong></td>
    </tr>
    <?php
include "../koneksi.php";
	$sql="select pemesanan.kd_pemesanan,pemesanan.kode_motor,konsumen.nama,pemesanan.tgl_pemesanan,
					pemesanan.batas_akhir
					from pemesanan,konsumen
					where pemesanan.id_konsumen=konsumen.id_konsumen and kd_status=1";
	$tampil = mysql_query($sql);
while (	$hasil = mysql_fetch_array ($tampil)) {
			$kd_psn = stripslashes ($hasil['kd_pemesanan']);
			$kd_mtr = stripslashes ($hasil['kode_motor']);
			$nm = stripslashes ($hasil['nama']);
			$tgl_psn = stripslashes ($hasil['tgl_pemesanan']);
			$ba = stripslashes ($hasil['batas_akhir']);
			$tgl=date('d M Y');
{
?>
    <tr>
      <td><div align="left">
        <?=$kd_psn?>
      </div></td>
      <td><div align="left">
        <?=$kd_mtr?>
      </div></td>
      <td><div align="left">
        <?=$nm?>
      </div></td>
      <td><div align="left">
        <?=$tgl_psn?>
      </div></td>
      <td><div align="left">
        <?=$ba?>
      </div></td>
    </tr>
    <?  
	    }}
	    ?>
  </table>
</div>
<br />
<table width="253" border="0" align="right">
  <tr>
    <td>Lubuklinggau,
      <?=$tgl?></td>
  </tr>
  <tr>
    <td>Mengetahui Owner Citra Motor</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Cecep Ariyanto</td>
  </tr>
</table>
</body>
</html>
<?php } ?>