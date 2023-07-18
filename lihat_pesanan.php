<?php
if(empty($_SESSION[namamember])){
?>
    <script type="text/javascript">
		alert("Anda belum Log In...!!!\nUntuk melakukan pembelian/pemesanan, anda diwajibkan untuk Log In terbelih dahulu.\nJika belum menjadi member, silahkan mendaftar terlebih dahulu...!!!");
	    </script>
    <?php
	echo "<meta http-equiv='refresh' content='0; url=index.php?page=registrasi'>";
}
else{
$query=mysql_query("select * from konsumen where user='$_SESSION[namamember]'");
$no=1;
while($q=mysql_fetch_array($query)){
$id_k=$q['id_konsumen'];
?>
<div>
  <p>Daftar Pemesanan Sepeda Motor</p>
  <table width="562" border=1>
    <tr>
      <td width="119"><strong> Kode Pemesanan</strong></td>
      <td width="104"><strong> Kode Motor</strong></td>
      <td width="111"><strong> Nama</strong></td>
      <td width="98"><strong> Tanggal Pesan</strong></td>
      <td width="96"><strong> Batas Akhir</strong></td>
    </tr>
    <?php
include "koneksi.php";
	$sql="select pemesanan.kd_pemesanan,pemesanan.kode_motor,konsumen.nama,pemesanan.tgl_pemesanan,
					pemesanan.batas_akhir
					from pemesanan,konsumen,motor
					where konsumen.id_konsumen=pemesanan.id_konsumen and motor.kode_motor=pemesanan.kode_motor and kd_status=1";
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
  <p>&nbsp;</p>
</div>
<?
}} 
?>