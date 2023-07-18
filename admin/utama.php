<?php
session_start();
if(empty($_SESSION[adm])){
echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
}
else{
include('../koneksi.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="780" border="0">
  <tr>
    <td width="30">&nbsp;</td>
    <td width="710"><div>
      <p align="justify">Selamat Datang di Website Citra Motor Lubuklinggau.</p>
      <p align="justify">Ini adalah halaman administrator, disni anda dapat me-manajemen konten web, diantaranya : Menambah, mengedit, menghapus, serta memberikan akses untuk menampilkan konten. Admin juga dapat me-manajeman pemesanan, seperti :mengkonfirmasi pemesanan,cetak fatur dan surat jalan.</p>
      <p align="justify">Untuk <em><strong>menjaga keamanan </strong></em>diharapkan anda meng-klik tombol <strong>Logout</strong> sehingga akses ke halaman ini akan tertutup</p>
      <p align="justify"><a href="index.php?page=password">Ganti Password</a></p>
    </div></td>
    <td width="26">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php }?>