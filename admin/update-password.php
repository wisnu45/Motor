<?php
$p=md5($_POST[pass]);
if (empty($_POST['pass']))
{
?>
<script language="JavaScript">
alert('Password Harus diisi');
document.location='index.php?page=password';
</script>
<?
}
else
{
include('../koneksi.php');
$query=mysql_query("update admin set pass='$p' where id_admin='$_POST[id]'") or die (mysql_error());
?>
<script language="JavaScript">
alert('Password Berhasil diubah');
document.location='index.php';
</script>
<?
{
echo "Data gagal diinput, Silakan Ulangi";
}
}
?>