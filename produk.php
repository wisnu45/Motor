<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/highslide.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icon.jpg" />
<script type="text/javascript" src="js/utilities.js"></script>
<script type="text/javascript" src="js/highslide-with-html.js"></script>
<script type="text/javascript" src="js/slideshow.js"></script>
<script type="text/javascript">
hs.graphicsDir = 'http://localhost/cm/images/';
hs.outlineType = 'rounded-white';
hs.wrapperClassName = 'draggable-header';
</script>
<title>Citra Motor Lubuklinggau</title>
</head>
<body>
<?php
include('koneksi.php');
?>
<div id="wrapper">
<!--------------- #header --------------->
 <div id="header"><img src="Images/bgr.jpg" alt="" width="850" height="130" /><strong>
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
//--> 
</script>
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
</script></font></marquee></strong>
</td></div><marquee behavior="alternate"></marquee>
<!--------------- #menu --------------->
 <table width="242" height="30" border="0" align="right"><tr><td><font color="#0000FF" size="3" face="Arial"><marquee behavior="alternate">
 <div align="right"><blink>Design By. Rohimin</blink>
 </div></marquee></font></td></tr></table>
 <div id="menu">
 <ul>
 <li><a href="index.php">Beranda</a></li>
 <li><a href="index.php?page=profil">Profil</a></li>
 <li><a href="produk.php">Produk</a></li>
 <li><a href="index.php?page=kontak">Contact Us</a>
 </li> <a href="admin.php">Login Admin</a>
 </ul>
 </div>
<!--------------- #sidebar --------------->
<div id="sidebar">
<?php
if(empty($_SESSION[namamember])){
?>
<div id="judul">Member Log In</div>
<div id="widget">
<form method="post" action="log_konsumen.php">
<table><tr><td>Username</td><td>:</td><td><input name="txt_user" type="text" class="input" id="txt_user" size="25"/></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="txt_pass" class="input" size="25" id="txt_pass"/></td></tr>
<tr><td></td><td></td><td><input type="submit" value="Masuk" class="submitButton" />
<input type="reset" value="Hapus" class="submitButton" /></td></tr></table></form>
<a href="index.php?page=registrasi"><div class="submitButton2">Gak Punya Akun? Daftar Akun Baru</div></a>
</div>
<?php
}
else{
?>
<div id="judul">Selamat Datang</div>
<div id="widget">
<?php
$d=date('d');
$m=date('m');
$y=date('Y');
?>
<img src="images/user-icon.jpg" class="gambar2" />
Halo "<b><?php echo"$_SESSION[nama]"; ?></b>"<br />
Login Tanggal : <?php echo "$d-$m-$y"; ?><br /><br /><br /><br /><br />
<a href="logout.php"><div class="submitButton2">Keluar</div></a>
</div>
<?php
}
?>
<div id="judul">Toko Offline Kami</div><div id="widget"><div>
<ul>
<li class="li-class">Lubuklinggau</li><li class="li-class-no">Jl. Yos Sudarso no.09 Simpang Priuk, Lubuklinggau</li>
<li class="li-class">Tugu Mulyo</li>
<li class="li-class-no">Jl. Lintas Tugu Mulyo, Desa Mataram, Kec. Tugu Mulyo, Kab. Musi Rawas</li>
<li class="li-class">Rejang Lebong</li>
<li class="li-class-no">Jl. Raya Zainal Abidin, Desa Muara Aman, Rejang Lebong.</li>
</ul>
</div>
<a href="index.php?page=kontak"><div class="submitButton2">Ada Masalah? Hubungi Kami aja..!!</div></a> </div>
<div id="judul">Temukan Kami di :</div>
<div id="widget">
<table width="238" height="72" border="0"><tr>
<td width="73" rowspan="2"><a href="http://www.facebook.com/citra-motor" target="_blank"><img src="Images/facebook.gif" width="69" height="66" /></a></td>
<td width="155" valign="top"><div align="center">FACEBOOK</div></td>
</tr>
<tr>
  <td valign="top"><div align="center">
    <h3>Citra Motor Lubuklinggau</h3>
  </div></td>
</tr></table>
</div>
</div>
<!--------------- #content --------------->
<div id="content">
  <div id="kiri">
    <div id="judul">Katalog Koleksi Produk Kami</div>
    <?php
mysql_connect("localhost","root","");
mysql_select_db("citra_motor");
?>
    <?php
$batas=6;
$paging=$_GET['paging'];
if(empty($paging))
	{
	$posisi=0;
	$paging=1;
	}
else{
	$posisi=($paging-1) * $batas;
	}
$query=mysql_query("select * from motor order by kode_motor desc limit $posisi,$batas");

while($r=mysql_fetch_array($query))
{
echo"<div align='center' id='sub-barang'><div class='jdl-brg'>$r[nama_motor]</div><img src='Motor/$r[gambar]' width='100' class='gambar'><br><br><br><br><br><br><br><div id='harga'><i>Harga Rp.$r[harga]</i><br>
<a href='pesan.php?kode_motor=$r[kode_motor]'><div  class='submitButton3'>Pesan Motor</div></a><a href='detail.php?kode_motor=$r[kode_motor]' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"><div  class='submitButton3'>Lihat Detail</div></a>
</div></div>";
}
echo "<tr><td colspan='2' valign='top' align='center'>";
$query2=mysql_query("select * from motor");
$jumlah_data=mysql_num_rows($query2);
$jumlah_halaman=ceil($jumlah_data/$batas);
echo"<div id='paging'>";
if (1 != $paging){//tanda != berarti perintah akan dijalankan jika $paging tidak sama dengan 1, copyright all teknik paging by go_blind_hacker, powered by V-boys_studio
	$back=$paging-1;
	echo "<div id='kotak-paging'><a href='produk.php?paging=$back'><b>Back</b></a></div>";
	}
	else{
	echo"<div id='kotak-paging'>Back</div>";
	}
	
if ($paging != $jumlah_halaman){
	$next=$paging+1;
	echo" <div id='kotak-paging'><a href='produk.php?paging=$next'>  <b>Next</b></a></div>";
	}
	else
	{
	echo "<div id='kotak-paging'>Next</div>";
	}
echo"</div>";
?>
  </div>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
</div>
<!--------------- #footer --------------->
<div id="footer">Copyright &copy; 2012 by: <a href="index.php">Citra Motor</a></div>
</div>
</div>
</body>
</html>