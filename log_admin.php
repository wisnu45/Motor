<?php
include "koneksi.php";
$pass=md5($_POST[txt_pass]);
$user=$_POST[txt_user];
$login=sprintf("SELECT * FROM admin WHERE user='$user' AND pass='$pass'", mysql_real_escape_string($user), mysql_real_escape_string($pass));
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);
// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  session_register("adm");
  
  $_SESSION[adm] = $r[user];
  echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
}
else{
?>
	<script type="text/javascript">
	alert("Password dan Username tidak Valid...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=admin.php'>";
}
?>
