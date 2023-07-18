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
<div id="content">
  <div align="center">
    <h2>Data Motor</h2>
    <table width="1055" border="1" align="center">
      <tr>
        <td width="20" bgcolor="#009933"><div align="center">No</div></td>
        <td width="63" bgcolor="#009933"><div align="center">Kode Motor</div></td>
        <td width="80" bgcolor="#009933"><div align="center">Nama Motor</div></td>
        <td width="44" bgcolor="#009933"><div align="center">Type</div></td>
        <td width="43" bgcolor="#009933"><div align="center">Merk</div></td>
        <td width="59" bgcolor="#009933"><div align="center">Tahun Perakitan</div></td>
        <td width="66" bgcolor="#009933"><div align="center">Isi Silinder</div></td>
        <td width="65" bgcolor="#009933"><div align="center">Nama BPKB</div></td>
        <td width="113" bgcolor="#009933"><div align="center">Nomor Polisi</div></td>
        <td width="109" bgcolor="#009933"><div align="center">Nomor Mesin</div></td>
        <td width="70" bgcolor="#009933"><div align="center">Nomor Rangka</div></td>
        <td width="60" bgcolor="#009933"><div align="center">Warna</div></td>
        <td width="54" bgcolor="#009933"><div align="center">Harga</div></td>
        <td width="49" bgcolor="#009933"><div align="center">Gambar</div></td>
        <td width="66" bgcolor="#009933"><div align="center">Action</div></td>
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
        <td><div align="center"><?=$bpkb?></div></td>
        <td><div align="center"><?=$n_polisi?>
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
        <td><div align="center"><a href="index.php?page=edit_motor&kode=<?=$kode?>">Edit</a> | <a href="hapus_motor.php?page=hapus_motor&amp;kode=<?=$kode?>" onclick="return confirm('Yakin Data <?=$nama?> akan dihapus');">Delete </a></div></td>
      </tr>
      <?  
	}}
	?>
    </table>
    <p><a href="cetak_motor.php" target="main">Cetak Data Motor</a></p>
  </div>
</div>
</body>
</html>
<?php }?>