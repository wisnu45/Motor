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
 <div id="header"><img src="Images/bgr.jpg" alt="" width="850" height="130" />
   <div>
<strong>
            <marquee direction="left">
            <font color="#FF0000" size="2">
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
</script></font> </marquee></strong></div></div>
 <table width="242" height="30" border="0" align="right">
   <tr>
     <td><font color="#0000FF" size="3" face="Arial">
       <marquee behavior="alternate"><blink>
         Design By. Rohimin</blink>
        </marquee>
     </font></td>
   </tr>
 </table>
 <!--------------- #menu --------------->
 <div id="menu">
 <ul>
 <li><a href="index.php">Beranda</a></li>
 <li><a href="index.php?page=profil">Profil</a></li>
 <li><a href="produk.php">Produk</a></li>
 <li><a href="index.php?page=kontak">Contact Us</a>
 </li> <a href="index.php?page=admin">Login Admin</a>
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
<table>
<tr><td>Username</td><td>:</td><td><input name="txt_user" type="text" class="input" id="txt_user" size="25"/></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="txt_pass" class="input" size="25" id="txt_pass"/></td></tr>
<tr><td></td><td></td><td><input type="submit" value="Masuk" class="submitButton" />
 <input type="reset" value="Hapus" class="submitButton" /></td></tr>
</table>
</form>
<a href="index.php?page=registrasi"><div class="submitButton2">Gak Punya Akun? Daftar Akun Baru</div>
</a>
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
<div id="judul">Toko Offline Kami</div><div id="widget"><div><ul>
<li class="li-class">Lubuklinggau</li><li class="li-class-no">Jl. Yos Sudarso no.09 Simpang Priuk, Lubuklinggau</li>
<li class="li-class">Mirasi</li><li class="li-class-no">Jl. Jend Sudirman, F Trikoyo, Mirasi, Lubuklinggau</li>
<li class="li-class">Rejang Lebong</li>
<li class="li-class-no">Jl. Raya Zainal Abidin, Desa Muara Aman, Rejang Lebong</li>
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
  <p>
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
$query=mysql_query("select * from motor where kode_motor='$_GET[kode_motor]'");
$no=1;
while($r=mysql_fetch_array($query)){
$nama=$r['nama_motor'];
$harga=$r['harga'];
$merk=$r['merk'];
$id_m=$r['kode_motor'];
$gbr=$r['gambar'];
}
$query2=mysql_query("select * from konsumen where user='$_SESSION[namamember]'");
$no=1;
while($q=mysql_fetch_array($query2)){
$id_k=$q['id_konsumen'];
$tgl_pesan=date('d-m-Y');
}
echo"<p> Ketentuan-ketentuan:</p>
  <ol>
    <li>Pemesanan diluar kota Lubuklinggau dikenakan ongkos kirim sebesar Rp. 100.000,-.</li>
    <li>Pembayaran dilakukan dengan mentransfer ke rekening BCA No. 4333015193 atas nama Citra Motor Lubuklinggau.</li>
    <li>Barang akan dikirim jika telah dilakukan pembayaran.</li>
    <li>Jika seminggu setelah tanggal pemesanan tidak dilakukan pembayaran maka pembelian dianggap batal.</li>
  </ol>
  <p>";
echo"<div id='judul'>Pesan $nama</div>";
echo"<img src='Motor/$gbr' class='gambar2' width='170'>
<table>
<tr><td width='100' valign='top'>Nama Produk</td><td valign='top' width='5'>:</td><td><b>$nama</b></td></tr>
<tr><td width='100' valign='top'>Harga Produk</td><td valign='top' width='5'>:</td><td><b>$harga</b></td></tr>
<tr><td width='100' valign='top'>Merk</td><td valign='top' width='5'>:</td><td><b>$merk</b></td></tr>
<tr><td width='100' valign='top'>Tanggal Pesan</td><td valign='top' width='5'>:</td><td><b>$tgl_pesan</b></td></tr>
</table>";
echo"<form method='post' action='simpan_pesanan.php'>";
{
echo"<input type='hidden' value='$id_m' name='kode_motor'><input type='hidden' value='$id_k' name='id_konsumen'> <input type='submit' value='Pesan & Kirim' class='submitButton4'>";
echo"<input type='button' value='Batal' class='submitButton4' onclick='self.history.back();' /></form>";
}}
?>
  </p>
  <p>&nbsp;    </p>
</div>
<a href="index.php?page=lihat_pesanan">Lihat Pemesanan </a>
<!--------------- #footer --------------->
<div id="footer">Copyright &copy; 2012 by: <a href="index.php">Citra Motor</a></div>
</div>
</div>
</body>
</html>