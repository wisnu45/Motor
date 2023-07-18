<?php
$n=$_POST['nama'];
$e=$_POST['email'];
$s=$_POST['situs'];
$p=$_POST['pesan'];
if (empty($_POST['nama'])|| empty($_POST['email'])) 
{
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='index.php?page=kontak';
</script>
<?
}
else
{
include('koneksi.php');
mysql_query("insert into bukutamu (nama,email,situs,pesan) values ('$n','$e','$s','$p')");
{
?>
	<script type="text/javascript">
		alert("Pesan Terkirim...!!!");
		document.location='lihat_buta.php';
	</script>
<?php
{
echo "Data gagal diinput, Silakan Ulangi";
}
}
}
?>