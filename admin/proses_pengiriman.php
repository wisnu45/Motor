<?
if ($_POST['kirim'] == "S I M P A N") {
$kd_pengiriman = $_POST['txt_kd'];
$tgl_pengiriman = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
$jasa_pengiriman = $_POST['txt_jp'];
$no_faktur = $_POST['no_faktur'];

if (empty($_POST['txt_kd'])|| empty($_POST['no_faktur'])) 
{
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='Index.php?page=pengiriman';
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
$tambah="INSERT INTO pengiriman VALUES('$kd_pengiriman','$tgl_pengiriman','$jasa_pengiriman','$no_faktur')";
$kueri_tbh=mysql_db_query($db,$tambah,$conn_db);
if ($kueri_tbh)
{
?>
<script language="JavaScript">
alert('Data Berhasil diinput');
document.location='Index.php?page=input_pengiriman';
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