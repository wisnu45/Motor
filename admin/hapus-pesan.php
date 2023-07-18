<?php
session_start();
include('../koneksi.php');
if (empty($_SESSION[adm])){
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
$query=mysql_query("delete from bukutamu where id='$_GET[id]'") or die (mysql_error());
?>
<script language="JavaScript">
alert('Data Berhasil Dihapus');
document.location='lihat_tamu.php';
</script>
<?
echo "<meta http-equiv='refresh' content='0; url=index.php?page=lihat_tamu'>";
}
?>