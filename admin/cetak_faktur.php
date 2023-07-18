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
<link rel="stylesheet" href="print.css" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<div id="wrapper">
  <div id="isi">
    <table width="495" border="0" align="center">
      <tr>
        <td colspan="4"><div align="center"><img src="../Images/cm.jpg" width="402" height="69" /></div></td>
      </tr>
      <tr>
        <td colspan="4"><hr /></td>
      </tr>
      <tr>
        <td colspan="4"><div align="center">FAKTUR PENJUALAN</div></td>
      </tr>
<?
include "../koneksi.php";
$a=mysql_query("select * from faktur where no_faktur='$_GET[no_faktur]' ");
$b=mysql_fetch_array($a);
$c=mysql_fetch_array(mysql_query("select * from konsumen where id_konsumen='$_GET[id_konsumen]'"));
?>
      <tr>
        <td width="98">&nbsp;</td>
        <td width="145">&nbsp;</td>
        <td width="3">&nbsp;</td>
        <td width="231">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>No Faktur</td>
        <td>:</td>
        <td><?=$b[0]?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Tanggal Faktur</td>
        <td>:</td>
        <td><?=$b[1]?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Nama Konsumen</td>
        <td>:</td>
        <td><?=$c[3]?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Jumlah Uang</td>
        <td>:</td>
        <td>Rp.
        <?=$b[2]?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Terbilang</td>
        <td>:</td>
        <td><?=$b[3]?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Lubuklinggau, 
          <script>var dtNow = new Date();var dtMonth = dtNow.getMonth();var dtYear = dtNow.getFullYear();		
		if (dtMonth==0) {
		   var dtMonthNow = "Januari" }
		if (dtMonth==1) {
		   var dtMonthNow = "Februari" }
		if (dtMonth==2) {
		   var dtMonthNow = "Maret" }
		if (dtMonth==3) {
		   var dtMonthNow = "April" }
		if (dtMonth==4) {
		   var dtMonthNow = "Mei" }
		if (dtMonth==5) {
		   var dtMonthNow = "Juni" }
		if (dtMonth==6) {
		   var dtMonthNow = "Juli" }
		if (dtMonth==7) {
		   var dtMonthNow = "Agustus" }
		if (dtMonth==8) {
		   var dtMonthNow = "September" }
		if (dtMonth==9) {
		   var dtMonthNow = "Oktober" }
		if (dtMonth==10) {
		   var dtMonthNow = "November" }
		if (dtMonth==11) {
		   var dtMonthNow = "Desember" }
		var dtDate = dtNow.getDate();document.write(dtDate + " " + dtMonthNow + " " + dtYear + " ");
         </script></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Owner Citra Motor</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Cecep Ariyanto</td>
      </tr>
</table>
  </div>
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php } ?>