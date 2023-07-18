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
</head>

<body>
<div>
  <h2 align="center"><strong>Input Data Penjualan</strong></h2>
  <form id="penjualan" name="penjualan" method="post" action="proses_penjualan.php">
    <table width="650" border="0" align="center">
      <tr>
        <td width="278">Nama Pembeli</td>
        <td width="8">:</td>
        <td width="347"><label>
          <input type="text" name="txt_nama" id="txt_nama" />
          </label>        </td>
      </tr>
      <tr>
        <td>Alamat Tempat Tinggal</td>
        <td>:</td>
        <td><label>
          <textarea name="txt_alamat" id="txt_alamat" cols="45" rows="5"></textarea>
          </label>        </td>
      </tr>
      <tr>
        <td>No.Tlp/Hp</td>
        <td>:</td>
        <td><label>
          <input type="text" name="txt_tlp" id="txt_tlp" />
          </label>        </td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><label>
          <input type="text" name="txt_kerja" id="txt_kerja" />
          </label>        </td>
      </tr>
      <tr>
        <td>Kode Motor</td>
        <td>:</td>
        <td><label></label>        <label>
          <input type="text" name="txt_kdm" id="txt_kdm" />
        </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><label></label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="kirim" id="kirim" value="S I M P A N" /></td>
      </tr>
    </table>
    </form>
  <hr width="850" />
  <h2 align="center"><strong>Data Penjualan</strong></h2>
  <table width="727" border="1" align="center">
    <tr>
      <td width="25">Kode Penjualan</td>
      <td width="114">Nama Pembeli</td>
      <td width="183">Alamat</td>
      <td width="88">No. Tlp</td>
      <td width="117">Pekerjaan</td>
      <td width="81">Kode Motor</td>
      <td width="73">Action</td>
    </tr>
    <?
	include "../koneksi.php";
	$sql="SELECT * FROM penjualan inner join motor on penjualan.kode_motor=motor.kode_motor ORDER BY id";
	$tampil = mysql_query($sql);
    while (	$hasil = mysql_fetch_array ($tampil)) {
			$kd= stripslashes ($hasil['id']);
			$txt_nama = stripslashes ($hasil['nama']);
			$txt_alamat = stripslashes ($hasil['alamat']);
			$txt_tlp = stripslashes ($hasil['telp']);
			$txt_kerja = stripslashes ($hasil['pekerjaan']);
			$txt_kdm = stripslashes ($hasil['kode_motor']);
      {
	?>
    <tr>
      <td><?=$kd?></td>
      <td><?=$txt_nama?></td>
      <td><?=$txt_alamat?></td>
      <td><?=$txt_tlp?></td>
      <td><?=$txt_kerja?></td>
      <td><?=$txt_kdm?></td>
      <td><div align="center">
      <div align="center"><a href="cetak_penjualan.php?id=<?=$kd?>&amp;kode_motor=<?=$txt_kdm?>" target="main">Cetak</a></div></td>
    </tr>
    <?php }}?>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php }?>
