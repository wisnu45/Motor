<?php
session_start();
if(empty($_SESSION[adm])){
echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
include('../koneksi.php');
?>
<?PHP
 $Koneksi=mysql_connect('localhost','root','')
 	or die ('Koneksi Gagal');
 mysql_select_db('citra_motor')
 	or die ('Database Gagal');
?>
<?php
$tgl_skrg=date ('Ymd');
$update=mysql_query("update pemesanan set kd_status=2 where batas_akhir < $tgl_skrg")
	or die ( 'Update salah');
?>
<p align="center"><b><u>Daftar Pesanan Yang Diambil<br>
  </u></b> 

<div align="center">
  <table width="650" border=1>
    <tr> 
      <td width="130"><strong> Kode Pemesanan</strong></td>
      <td width="100"><strong> Kode Motor</strong></td>
      <td width="130"><strong> Nama</strong></td>
      <td width="118"><strong> Tanggal Pesan</strong></td>
      <td width="138"><strong> Batas Akhir</strong></td>
    </tr>
    <?php
$ambil=mysql_query(" select pemesanan.kd_pemesanan,pemesanan.kode_motor,konsumen.nama,pemesanan.tgl_pemesanan,
					pemesanan.batas_akhir
					from pemesanan,konsumen
					where pemesanan.id_konsumen=konsumen.id_konsumen and kd_status=3")
	or die ('cek ambil salah');
while ($ambil2=mysql_fetch_row($ambil))
{
print '<tr>';
print '<td>';
print $ambil2[0];
print '</td>';
print '<td>';
print $ambil2[1];
print '</td>';
print '<td>';
print $ambil2[2];
print '</td>';
print '<td>';
print $ambil2[3];
print '</td>';
print '<td>';
print $ambil2[4];
print '</td>';
}
?>
  </table>
</div>
<hr align="center" width="650">
<p align="center"><b><u>Daftar Pesanan Yang Batal<br></u></b> 

<div align="center">
  <table width="650" border=1>
    <tr> 
      <td width="130"><strong> Kode Pemesanan</strong></td>
      <td width="100"><strong> Kode Motor</strong></td>
      <td width="130"><strong> Nama</strong></td>
      <td width="118"><strong> Tanggal Pesan</strong></td>
      <td width="138"><strong> Batas Akhir</strong></td>
    </tr>
    <?php
$ambil=mysql_query("select pemesanan.kd_pemesanan,pemesanan.kode_motor,konsumen.nama,pemesanan.tgl_pemesanan,
					pemesanan.batas_akhir
					from pemesanan,konsumen
					where pemesanan.id_konsumen=konsumen.id_konsumen and kd_status=2")
	or die ('cek ambil salah');
while ($ambil2=mysql_fetch_row($ambil))
{
print '<tr>';
print '<td>';
print $ambil2[0];
print '</td>';
print '<td>';
print $ambil2[1];
print '</td>';
print '<td>';
print $ambil2[2];
print '</td>';
print '<td>';
print $ambil2[3];
print '</td>';
print '<td>';
print $ambil2[4];
print '</td>';
}
?>
  </table>
</div>
<hr align="center" width="650">
<p align="center"><b><u>Daftar Pesanan Yang Menunggu</u></b>

<div align="center">
  <table width="650" border=1>
    <tr> 
      <td width="124"><strong> Kode Pemesanan</strong></td>
      <td width="99"><strong> Kode Motor</strong></td>
      <td width="111"><strong> Nama</strong></td>
      <td width="98"><strong> Tanggal Pesan</strong></td>
      <td width="96"><strong> Batas Akhir</strong></td>
      <td width="82"><strong> Action</strong></td>
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
{
?>
      <tr>
        <td>
          <div align="left">
            <?=$kd_psn?>
          </div></td>
        <td>
          <div align="left">
            <?=$kd_mtr?>
          </div></td>
        <td>
          <div align="left">
            <?=$nm?>
          </div></td>
        <td>
          <div align="left">
            <?=$tgl_psn?>
          </div></td>
        <td>
          <div align="left">
            <?=$ba?>
          </div></td>
        <td><div align="center">
          <div align="center"><a href="index.php?page=konfir_psn&kode=<?=$kd_psn?>">Konfirmasi</a>
        </div></td></tr>
        <?  
	    }}
	    ?> 
  </table>
</div>
<p><a href="cetak_pemesanan.php" target="main">Cetak Data Pemesanan</a></p>
<?php
}
?>
