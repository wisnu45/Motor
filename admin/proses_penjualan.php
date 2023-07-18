<?
if ($_POST['kirim'] == "S I M P A N") {
$nama = $_POST['txt_nama'];
$alamat = $_POST['txt_alamat'];
$telp = $_POST['txt_tlp'];
$pekerjaan = $_POST['txt_kerja'];
$kode_motor = $_POST['txt_kdm'];

if (empty($_POST['txt_nama'])|| empty($_POST['txt_kdm'])) 
{
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='Index.php?page=penjualan';
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
$tambah="INSERT INTO penjualan VALUES('null','$nama','$alamat','$telp','$pekerjaan','$kode_motor')";
$kueri_tbh=mysql_db_query($db,$tambah,$conn_db);
if ($kueri_tbh)
{
?>
<script language="JavaScript">
alert('Data Berhasil diinput');
document.location='Index.php?page=penjualan';
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