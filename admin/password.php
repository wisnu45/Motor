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
<div id="isi">
<div id="judul"><br />
  <p>Selamat Datang di Control Panel Admin</p>
</div>
<?php
include('../koneksi.php');
$query=mysql_query("select * from admin where user='$_SESSION[adm]'");
while($r=mysql_fetch_array($query))
{
$user=$r['user'];
$id=$r['id_admin'];
}
?>
<form method="post" action="update-password.php">
<table>
<tr><td width="100">Username</td><td width="20">:</td><td><input type="text" class="input" size="25" name="user" readonly="readonly" value="<?php echo $user; ?>"/> 
*</td></tr>
<tr><td width="100">Password Baru</td><td width="20">:</td><td><input type="text" class="input" size="25" name="pass" /> 
*</td></tr>
<tr><td width="100"></td><td width="20"></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /><input type="submit" class="submitButton" value="Ganti Password"/> <input type="reset" class="submitButton" value="Hapus"/></td></tr>
</table>
<p>&nbsp;</p>
</form>
</div>
</body>
</html>
<?php }?>
