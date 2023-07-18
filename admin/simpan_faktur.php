<?
if ($_POST['kirim'] == "S I M P A N") {
$no_faktur = $_POST['txt_kd'];
$tgl_faktur = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
$jml_uang = $_POST['jml_uang'];
$terbilang = $_POST['terbilang'];
$id_konsumen = $_POST['id_konsumen'];

if (empty($_POST['txt_kd'])|| empty($_POST['id_konsumen'])) 
{
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='Index.php?page=faktur';
</script>
<?
}
else
{
$host="localhost";
$user_db="root";
$pass_db="";
$db="citra_motor";
$conn_db=mysql_connect($host,$user_db,$pass_db);
mysql_select_db($db);
$tambah="INSERT INTO faktur VALUES('$no_faktur','$tgl_faktur','$jml_uang','$terbilang','$id_konsumen')";
$kueri_tbh=mysql_db_query($db,$tambah,$conn_db);
if ($kueri_tbh)
{
?>
<script language="JavaScript">
alert('Data Berhasil diinput');
document.location='index.php?page=tampil';
</script>
<?

}
else
{
echo "Data gagal diinput, Silakan Ulangi";
}
}
}
?>