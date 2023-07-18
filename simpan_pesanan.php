<?php
session_start();
if(empty($_SESSION[namamember])){
?>
	<script type="text/javascript">
		alert("Anda tak berhak masuk ke halaman ini...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
else{
include('koneksi.php');
$id_m=$_POST['kode_motor'];
$id_k=$_POST['id_konsumen'];
$tgl_pesan=date('Ymd');
$tgl_skrg=time();
$tgl_skrg2=$tgl_skrg + 180 * 60 * 60;
$tgl_skrg3=date ('Ymd',$tgl_skrg2);
mysql_query("insert into pemesanan (tgl_pemesanan,id_konsumen,kode_motor,kd_status,batas_akhir)values('$tgl_pesan','$id_k','$id_m','1','$tgl_skrg3')");
?>
	<script type="text/javascript">
		alert("Pesan Terkirim...!!!");
		document.location='index.php?page=lihat_pesanan';
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>