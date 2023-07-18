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
  <table width="646" border="0" align="center">
    <tr>
      <td width="67"><img src="../Images/lgcm.jpg" width="67" height="66" /></td>
      <td width="583"><div align="center"><strong>CITRA MOTOR</strong><br />
        JUAL  BELI TUKAR TAMBAH MOTOR BERKUALITAS, TUNAI DAN KREDIT<br />
      Jl. Yos Sudarso No. 09 Rt. 07  Tanah Periuk Lubuklinggau Selatan II</div></td>
    </tr>
  </table>
  <hr width="1050" />
  <p align="center"><strong>LAPORAN DATA SEPEDA MOTOR</strong></p>
  <table border="1" align="center" class="style7">
    <tr>
      <td width="18" bgcolor="#009933"><div align="center">No</div></td>
      <td width="58" bgcolor="#009933"><div align="center">Kode Motor</div></td>
      <td width="71" bgcolor="#009933"><div align="center">Nama Motor</div></td>
      <td width="45" bgcolor="#009933"><div align="center">Type</div></td>
      <td width="40" bgcolor="#009933"><div align="center">Merk</div></td>
      <td width="57" bgcolor="#009933"><div align="center">Tahun Perakitan</div></td>
      <td width="55" bgcolor="#009933"><div align="center">Isi Silinder</div></td>
      <td width="61" bgcolor="#009933"><div align="center">Nama BPKB</div></td>
      <td width="70" bgcolor="#009933"><div align="center">Nomor Polisi</div></td>
      <td width="72" bgcolor="#009933"><div align="center">Nomor Mesin</div></td>
      <td width="73" bgcolor="#009933"><div align="center">Nomor Rangka</div></td>
      <td width="66" bgcolor="#009933"><div align="center">Warna</div></td>
      <td width="61" bgcolor="#009933"><div align="center">Harga</div></td>
      <td width="80" bgcolor="#009933"><div align="center">Gambar</div></td>
    </tr>
    <?
	include "../koneksi.php";
	$sql="SELECT * FROM motor ORDER BY kode_motor";
	$tampil = mysql_query($sql);
    while (	$hasil = mysql_fetch_array ($tampil)) {
			$kode = stripslashes ($hasil['kode_motor']);
			$nama = stripslashes ($hasil['nama_motor']);
			$type = stripslashes ($hasil['type']);
			$merk = stripslashes ($hasil['merk']);
			$tahun = stripslashes ($hasil['thn_buat']);
			$isi = stripslashes ($hasil['isi_silinder']);
			$bpkb = stripslashes ($hasil['nm_bpkb']);
			$n_polisi = stripslashes ($hasil['no_polisi']);
			$n_mesin = stripslashes ($hasil['no_mesin']);
			$n_rangka = stripslashes ($hasil['no_rangka']);
			$warna = stripslashes ($hasil['warna']);
			$harga = stripslashes ($hasil['harga']);
			$gambar = stripslashes ($hasil['gambar']);
			$foto = $hasil['gambar'];
			$tgl=date('d M Y');
      {
		$no++;
	?>
    <tr>
      <td><div align="center">
          <?=$no?>
      </div></td>
      <td><div align="center">
          <?=$kode?>
      </div></td>
      <td><div align="center">
          <?=$nama?>
      </div></td>
      <td><div align="center">
          <?=$type?>
      </div></td>
      <td><div align="center">
          <?=$merk?>
      </div></td>
      <td><div align="center">
          <?=$tahun?>
      </div></td>
      <td><div align="center">
          <?=$isi?>
      </div></td>
      <td><div align="center">
          <?=$bpkb?>
      </div></td>
      <td><div align="center">
          <?=$n_polisi?>
      </div></td>
      <td><div align="center">
          <?=$n_mesin?>
      </div></td>
      <td><div align="center">
          <?=$n_rangka?>
      </div></td>
      <td><div align="center">
          <?=$warna?>
      </div></td>
      <td><div align="center">
          <?=$harga?>
      </div></td>
      <td><div align="center">
          <? 
				if (empty($foto)) 
		        echo "<strong><img src='../Motor/nopic.gif' width='50' height='50'> <br> No Image </strong>";
		        else
				echo"<img class='shadow' src='../Motor/$foto' width=75 heigth=25/ title='Foto $nama' >"
				?>
      </div></td>
    </tr>
    <? }}	?>
  </table>
  <br />
  <table width="253" border="0" align="right" class="style7">
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