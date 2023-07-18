<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Citra Motor Lubuklinggau</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="images/icon.jpg" />
</head>

<body>
<p>
</p>
<div id="wrapper">
  <!--------------- #header --------------->
  <div id="header"><img src="Images/bgr.jpg" alt="" width="850" height="130" /><strong>
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
          </script>
        </font>
      </marquee>
    </strong>
  </div>
  <table width="242" height="30" border="0" align="right">
  <tr><td><font color="#0000FF" size="3" face="Arial">
  <marquee behavior="alternate"><blink>Design By. Rohimin</blink></marquee></font></td></tr></table>
  <!--------------- #menu --------------->
  <div id="menu">
    <ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="index.php?page=profil">Profil</a></li>
      <li><a href="produk.php">Produk</a></li>
      <li><a href="index.php?page=kontak">Contact Us</a> </li>
      <a href="admin.php">Login Admin</a>
    </ul>
  </div>
  <!--------------- #sidebar --------------->
  <!--------------- #content --------------->
  <form id="admin" name="admin" method="post" action="log_admin.php">
    <p>&nbsp;</p>
    <table width="545" border="0" align="center">
      <tr>
        <td width="138" rowspan="5" align="left" valign="top"><img src="Images/loginadmin.jpg" alt="" width="138" height="200" /></td>
        <td colspan="3" valign="top"><span class="style1">Ini adalah halaman administrator, hanya boleh digunakan untuk admin website citra motor lubuklinggau. <br />
          Bagi yang tidak berkepentingan harap menutup halaman ini. <br />
          <br />
          Jagalah kerahasiaan password anda demi keamanan website ini.</span> </td>
      </tr>
      <tr>
        <td colspan="3" valign="top"><p><span class="style1">Silahkan anda login dahulu</span><br />
        </p></td>
      </tr>
      <tr>
        <td width="129" valign="top">User Name</td>
        <td width="12">:</td>
        <td width="248"><input name="txt_user" type="text" class="input" id="txt_user" size="30" /></td>
      </tr>
      <tr>
        <td valign="top">Password</td>
        <td>:</td>
        <td><input name="txt_pass" type="password" class="input" id="txt_pass" size="30" /></td>
      </tr>
      <tr>
        <td valign="top"><img src="Images/login_admin.gif" width="100" height="20" /></td>
        <td valign="top">&nbsp;</td>
        <td><input name="login" type="submit" class="submitButton" id="login" value="L O G I N" /></td>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
  <!--------------- #footer --------------->
  <div id="footer">Copyright &copy; 2012 by: <a href="index.php">Citra Motor</a></div>
</div>
</div>
</body>
</html>