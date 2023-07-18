<?
if ($_POST['daftar'] == "DAFTAR") {
$user = $_POST['txt_user'];
$pass=$_POST['txt_pass'];
$nama=$_POST['txt_nama'];
$jk=$_POST['jenkel'];
$pekerjaan = $_POST['txt_pekerjaan'];
$alamat=$_POST['txt_alamat'];
$kota=$_POST['txt_kota'];
$provinsi=$_POST['txt_provinsi'];
$kode_pos=$_POST['txt_kdpos'];
$no_tlp=$_POST['txt_notel'];
$email=$_POST['txt_email'];
$no_rekening=$_POST['txt_norek'];
$nama_bank=$_POST['txt_bank'];

if (empty($_POST['txt_user'])|| empty($_POST['txt_pass'])|| empty($_POST['txt_norek'])|| empty($_POST['txt_alamat'])|| empty($_POST['txt_notel'])) 
{
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='index.php?page=registrasi';
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
if ($cek_daftar=mysql_fetch_row(mysql_query("select * from konsumen where nama='$nama' and user='$user' ")))
{
?>
<script language="JavaScript">
alert('User Name Sudah Ada ! Silakan ulangi lagi');
document.location='index.php?page=registrasi';
</script>
<?
}
else
{		
$cek_daftar=mysql_num_rows(mysql_query('select * from konsumen'));
$id_konsumen = $cek_daftar+1;
$tambah="INSERT INTO konsumen VALUES('null','$user','$pass','$nama','$jk','$pekerjaan','$alamat','$kota','$provinsi','$kode_pos','$no_tlp','$email','$no_rekening','$nama_bank')";
$kueri_tbh=mysql_db_query($db,$tambah,$conn_db);
if ($kueri_tbh)
{
?>
<script language="JavaScript">
alert('Data Berhasil Disimpan, Sekarang Anda Bisa Login');
document.location='index.php';
</script>
<?
}
else
{
?>
<script language="JavaScript">
alert('Data Gagal disimpan ! Silakan ulangi lagi');
document.location='index.php?page=registrasi';
</script>
<?
}
}
}
}
?>