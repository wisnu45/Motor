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
<style type="text/css">
<!--
.style7 {font-family: "Times New Roman", Times, serif; font-size: 12px; }
-->
</style>
</head>

<body>
<div>
  <table width="200" border="0" align="center">
    <tr>
      <td><img src="../Images/cm.jpg" width="650" height="100" /></td>
    </tr>
  </table>
  <hr />
  <p align="center"><strong>LAPORAN DATA KONSUMEN</strong></p>
  <table height="53" border="1" align="center">
    <tr>
      <td width="26" height="23" bgcolor="#999999"><div align="center" class="style7">No</div></td>
      <td width="75" bgcolor="#999999"><div align="center" class="style7">Nama</div></td>
      <td width="76" bgcolor="#999999"><div align="center" class="style7">Jenis Kelamin</div></td>
      <td width="89" bgcolor="#999999"><div align="center" class="style7">Pekerjaan</div></td>
      <td width="77" bgcolor="#999999"><div align="center" class="style7">Alamat</div></td>
      <td width="48" bgcolor="#999999"><div align="center" class="style7">Kota</div></td>
      <td width="79" bgcolor="#999999"><div align="center" class="style7">Provinsi</div></td>
      <td width="59" bgcolor="#999999"><div align="center" class="style7">Kode Pos</div></td>
      <td width="63" bgcolor="#999999"><div align="center" class="style7">No. Telp</div></td>
      <td width="50" bgcolor="#999999"><div align="center" class="style7">E-mail</div></td>
      <td width="79" bgcolor="#999999"><div align="center" class="style7">No. Rekening</div></td>
      <td width="74" bgcolor="#999999"><div align="center" class="style7">Nama Bank</div></td>
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
			$tgl=date('d M Y');
      {
		$no++;
	?>
    <tr>
      <td height="22" align="center">        <span class="style7">
        <?=$no?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_nama?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$jenkel?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_pekerjaan?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_alamat?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_kota?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_provinsi?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_kdpos?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_notel?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_email?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_norek?>
      </span> </td>
      <td align="center">        <span class="style7">
        <?=$txt_bank?>
      </span> </td>
    </tr>
    <?  
	}}
	?>
  </table>
  <table width="253" border="0" align="right">
    <tr>
      <td>&nbsp;</td>
    </tr>
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
</div>
</body>
</html>
<?php } ?>