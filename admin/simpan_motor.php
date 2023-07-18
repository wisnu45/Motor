<?
if ($_POST['simpan'] == "SIMPAN") {
$kode_motor = $_POST['kode'];
$nama_motor = $_POST['nama'];
$type=$_POST['type'];
$merk=$_POST['merk'];
$thn_buat=$_POST['tahun'];
$isi_silinder=$_POST['isi'];
$nm_bpkb=$_POST['bpkb'];
$no_polisi=$_POST['n_polisi'];
$no_mesin=$_POST['n_mesin'];
$no_rangka=$_POST['n_rangka'];
$warna=$_POST['warna'];
$harga=$_POST['harga'];
$foto = $_POST['foto'];
$gambar=$_FILES['foto']['name'];

if (empty($_POST['kode'])|| empty($_POST['nama'])) 
{
?>
<script language="JavaScript">
alert('Data Harap Dilengkapi');
document.location='index.php?page=Input_Motor';
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
if (strlen($gambar)>0) {
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file ($_FILES['foto']['tmp_name'], "../Motor/".$gambar);
		}
	}
$tambah="INSERT INTO motor VALUES('$kode_motor','$nama_motor','$type','$merk','$thn_buat','$isi_silinder','$nmbpkb','$no_polisi','$no_mesin','$no_rangka','$warna','$harga','$gambar')";
$kueri_tbh=mysql_db_query($db,$tambah,$conn_db);
if ($kueri_tbh)
{
?>
<script language="JavaScript">
alert('Data Berhasil diinput');
document.location='index.php?page=lihat_motor';
</script>
<?
}
else
{
?>
<script language="JavaScript">
alert('Kode Sudah Ada ! Silakan ulangi lagi');
document.location='index.php?page=Input_Motor';
</script>
<?
}
}
}
?>