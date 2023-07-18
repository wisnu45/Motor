<?php
session_start();
if(empty($_SESSION[adm])){
echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
include('../koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>Citra Motor Lubuklinggau</title>
<link rel="stylesheet" href="SpryAssets/style.css" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/icon.jpg" />
</head>
<body>
<?php
include('../koneksi.php');
?>
<div id="wrapper">
<!--------------- #header --------------->
 <div id="header"><img src="../Images/bgr.jpg" width="1100" height="160" /><strong>
 <marquee direction="left"><font color="#FF0000" size="2">
<script>
<!--//
  var d = new Date();
  var h = d.getHours();
  if (h < 11) { document.write('Selamat Pagi ! - '); }
  else { if (h < 15) { document.write('Selamat Siang ! - '); }
  else { if (h < 19) { document.write('Selamat Sore ! - '); }
  else { if (h <= 23) { document.write('Selamat Malam ! - '); }
  }}}
//--></script>
<script>
		var dtNow = new Date();
		var dtMonth = dtNow.getMonth();
		var dtYear = dtNow.getFullYear();		

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
		document.write(dtDay + ", " + dtDate + " " + dtMonthNow + " " + dtYear + " ");
            </script>
    </font></marquee></strong>
 <div></div></div>
<!--------------- #menu --------------->
 <div id="menu">
   <ul id="MenuBar" class="MenuBarHorizontal">
     <li><div align="center"><a href="Index.php">Home</a></div></li>
     <li><a href="#" class="MenuBarItemSubmenu">Product</a><ul>
     <li><a href="Index.php?page=Input_Motor">Input Data</a></li>
     <li><a href="Index.php?page=lihat_motor">Lihat Data</a></li></ul></li>
     <li><a href="#" class="MenuBarItemSubmenu">Konsumen</a><ul>
     <li><a href="Index.php?page=lihat_konsumen">Data Konsumen</a></li>
     <li><a href="lihat_tamu.php"> Lihat Buku Tamu</a></li></ul></li>
     <li><a href="#" class="MenuBarItemSubmenu">Pemesanan</a><ul>
     <li><a href="Index.php?page=lihat_pemesanan">View Pemesanan</a></li>
     <li><a href="Index.php?page=faktur">Faktur</a> </li>
     <li><a href="Index.php?page=pengiriman">Surat Pengiriman</a> </li></ul></li>
     <li><a href="Index.php?page=penjualan">Penjualan</a> </li>
    <li><a href="../logout.php">LogOut</a></li></ul>
 </div>
<!--------------- #content --------------->
<div id="content">
<?php //DISINI UNTUK SET HALAMAN PHP
$page = (isset($_GET['page']))? $_GET['page'] : "main";
switch ($page) {
	case 'Input_Motor': include "Input_Motor.php"; break;
	case 'lihat_motor'	: include "lihat_motor.php"; break;
	case 'lihat_konsumen' : include "lihat_konsumen.php"; break;
	case 'edit_motor' : include "edit_motor.php"; break;
	case 'faktur' : include "faktur.php"; break;
	case 'pengiriman' : include "pengiriman.php"; break;
	case 'lihat_pemesanan' : include "lihat_pemesanan.php"; break;
	case 'konfir_psn' : include "konfir_psn.php"; break;
	case 'penjualan' : include "penjualan.php"; break;
	case 'password' : include "password.php"; break;
	case 'main' :
	default : include 'utama.php';	
}
?>
</div>
 <!--------------- #footer --------------->
 <div id="footer">
 Copyright &copy; 2012 by: <a href="../index.php">Citra Motor</a></div>
</div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
<?php
}
?>