<?php
session_start();
if(empty($_SESSION[adm])){
echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
include('../koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style5 {font-size: 13.5px}
-->
</style>
</head>

<body>
<div>
  <table width="991" height="53" border="1" align="center">
    <tr>
      <td width="29" height="23" bgcolor="#999999"><div align="center">No</div></td>
      <td width="56" bgcolor="#999999"><div align="center">User Name</div></td>
      <td width="62" bgcolor="#999999"><div align="center">Password</div></td>
      <td width="110" bgcolor="#999999"><div align="center">Nama</div></td>
      <td width="51" bgcolor="#999999"><div align="center">Jenis Kelamin</div></td>
      <td width="71" bgcolor="#999999"><div align="center">Pekerjaan</div></td>
      <td width="61" bgcolor="#999999"><div align="center">Alamat</div></td>
      <td width="44" bgcolor="#999999"><div align="center">Kota</div></td>
      <td width="73" bgcolor="#999999"><div align="center">Provinsi</div></td>
      <td width="55" bgcolor="#999999"><div align="center">Kode Pos</div></td>
      <td width="59" bgcolor="#999999"><div align="center">No. Telp</div></td>
      <td width="46" bgcolor="#999999"><div align="center">E-mail</div></td>
      <td width="84" bgcolor="#999999"><div align="center">No. Rekening</div></td>
      <td width="48" bgcolor="#999999"><div align="center">Nama Bank</div></td>
      <td width="48" bgcolor="#999999">Action</td>
    </tr>
    <?
	include "../koneksi.php";
	$sql="SELECT * FROM konsumen ORDER BY id_konsumen";
	$tampil = mysql_query($sql);
    while (	$hasil = mysql_fetch_array ($tampil)) {
			$id_konsumen= stripslashes($hasil['id_konsumen']);
			$txt_user = stripslashes ($hasil['user']);
			$txt_pass = stripslashes ($hasil['pass']);
			$txt_nama = stripslashes ($hasil['nama']);
			$jenkel = stripslashes ($hasil['jk']);
			$txt_pekerjaan = stripslashes ($hasil['pekerjaan']);
			$txt_alamat = stripslashes ($hasil['alamat']);
			$txt_kota = stripslashes ($hasil['kota']);
			$txt_provinsi = stripslashes ($hasil['provinsi']);
			$txt_kdpos = stripslashes ($hasil['kode_pos']);
			$txt_notel = stripslashes ($hasil['no_tlp']);
			$txt_email = stripslashes ($hasil['email']);
			$txt_norek = stripslashes ($hasil['no_rekening']);
			$txt_bank = stripslashes ($hasil['nama_bank']);
      {
		$no++;
	?>
    <tr>
      <td height="22" align="center"><span class="style5">
        <?=$no?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_user?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_pass?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_nama?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$jenkel?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_pekerjaan?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_alamat?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_kota?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_provinsi?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_kdpos?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_notel?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_email?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_norek?>
      </span></td>
      <td align="center"><span class="style5">
        <?=$txt_bank?>
      </span></td>
      <td align="center"><a href="hapus_konsumen.php?page=hapus_konsumen&amp;id_konsumen=<?=$id_konsumen?>" onclick="return confirm('Yakin Data <?=$txt_nama?> Akan Dihapus');">Delete </a></td>
    </tr>
    <?  
	}}
	?>
  </table>
</div>
<p align="center"><a href="cetak_konsumen.php" target="main">Cetak Data Konsumen</a></p>
</body>
</html>
<?php }?>