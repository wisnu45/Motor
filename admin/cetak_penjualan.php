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
<?
include "../koneksi.php";
$a=mysql_query("select * from penjualan where id='$_GET[id]' ");
$b=mysql_fetch_array($a);
$c=mysql_fetch_array(mysql_query("select * from motor where kode_motor='$_GET[kode_motor]'"));
$tgl=date('d M Y');
?>
<table width="462" border="0" align="center" cellpadding="0" cellspacing="0">
  <col width="148" />
  <col width="12" />
  <col width="195" />
  <tr height="20">
    <td height="20" colspan="3"><table width="682" border="0">
      <tr>
        <td width="100" rowspan="3"><img src="../Images/logocm.png" alt="" width="100" height="100" /></td>
        <td width="570"><div align="center"><strong>CITRA MOTOR</strong></div></td>
        </tr>
      <tr>
        <td><div align="center"><strong>JUAL BELI TUKAR TAMBAH MOTOR BERKUALITAS, TUNAI DAN KREDIT</strong></div></td>
        </tr>
      <tr>
        <td><div align="center"><strong>JL. YOS SUDARSO TANAH PRIUK NO. 09 LUBUKLINGGAU</strong></div></td>
        </tr>
    </table></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3"><hr noshade="noshade" /></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3"><div align="center" class="style1">
      <table width="673" border="0">
        <tr>
          <td width="695"><div align="center">BERITA ACARA    SERAH TERIMA KENDARAAN</div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr height="20">
    <td width="312"></td>
    <td width="70"></td>
    <td width="300" height="20"></td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3">Pada Hari: <script>
		var dtNow = new Date();
		if (dtNow.getDay()==0) {
		   var dtDay = "Minggu" }
		if (dtNow.getDay()==1) {
		   var dtDay = "Senin" }
		if (dtNow.getDay()==2) {
		   var dtDay = "Selasa" }
		if (dtNow.getDay()==3) {
		   var dtDay = "Rabu" }
		if (dtNow.getDay()==4) {
		   var dtDay = "Kamis" }
		if (dtNow.getDay()==5) {
		   var dtDay = "Jumat" }
		if (dtNow.getDay()==6) {
		   var dtDay = "Sabtu" }
		var dtDate = dtNow.getDate();
		document.write(dtDay);
</script> Tanggal: <?=$tgl?></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3">Telah    melakukan serah terima 1 (Satu) unit kendaraan dengan data sebagai berikut:</td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3"><table width="375" border="0" align="left">
      <tr>
        <td width="190">Nama Pembeli</td>
        <td width="10">:</td>
        <td width="168"><?=$b[1]?></td>
      </tr>
      <tr>
        <td>Alamat tempat tinggal</td>
        <td>:</td>
        <td><?=$b[2]?></td>
      </tr>
      <tr>
        <td>No.Tlp/Hp</td>
        <td>:</td>
        <td><?=$b[3]?></td>
      </tr>
      <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?=$b[4]?></td>
      </tr>
      <tr>
        <td>Nama BPKB</td>
        <td>:</td>
        <td><?=$c[6]?></td>
      </tr>
      <tr>
        <td>Nomor Polisi</td>
        <td>:</td>
        <td><?=$c[7]?></td>
      </tr>
      <tr>
        <td>Type</td>
        <td>:</td>
        <td><?=$c[2]?></td>
      </tr>
      <tr>
        <td>Tahun</td>
        <td>:</td>
        <td><?=$c[4]?></td>
      </tr>
      <tr>
        <td>Warna</td>
        <td>:</td>
        <td><?=$c[10]?></td>
      </tr>
      <tr>
        <td>Isi Silinder</td>
        <td>:</td>
        <td><?=$c[5]?></td>
      </tr>
      <tr>
        <td>Nomor Rangka</td>
        <td>:</td>
        <td><?=$c[9]?></td>
      </tr>
      <tr>
        <td>Nomor Mesin</td>
        <td>:</td>
        <td><?=$c[8]?></td>
      </tr>
    </table></td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3">Motor    bekas/seken dengan keadaan baik.</td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20">Lubuklinggau,
    <?=$tgl?></td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td><div align="center">Yang Menerima,</div></td>
    <td>&nbsp;</td>
    <td height="20">Yang Membuat Pernyataan</td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td><div align="center">( <?=$b[1]?> )</div></td>
    <td>&nbsp;</td>
    <td height="20">CECEP ARYANTO</td>
  </tr>
  <tr height="20">
    <td><div align="center"><em>Konsumen</em></div></td>
    <td>&nbsp;</td>
    <td height="20">&nbsp;</td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3">Catatan:</td>
  </tr>
  <tr height="20">
    <td height="20" colspan="3">Barang yang    dibeli tidak dapat ditukar/dikembalikan</td>
  </tr>
  <tr height="20">
    <td></td>
    <td></td>
    <td height="20"></td>
  </tr>
</table>
<?php
}
?>
