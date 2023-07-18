<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
include('koneksi.php');
?>
<div id="kiri">
  <div id="judul">Selamat Datang di Citra Motor Lubuklinggau</div>
  <div align="justify">
    <p>Anda dapat memesan kendaraan sepeda motor dari produk kami dengan kualitas yang terbaik, kami hanya menjual dan membeli serta anda dapat tukar tamba kendaraan anda mungkin andah sudah bosan dengan kendaraan anda dan ingin mengganti dengan produk-produk yang lain tetapi anda tidak cukup untuk biaya menggantinya maka disini tempatnya , kami menjamin kualitas produk kami jelas yang terbaik dan terawat.  </p>
  </div>
  <div id="judul">Rekomendasi Dari Kami</div>
  <?php
$q=mysql_query("select * from motor order by kode_motor DESC LIMIT 3");
while($r=mysql_fetch_array($q))
{
echo"<div id='sub-barang'><div class='jdl-brg'>$r[nama_motor]</div><img src='Motor/$r[gambar]' width='100' class='gambar'><br><br><br><br><br><br><br><div id='harga'><i>Harga Rp.$r[harga]</i><br>
<a href='pesan.php?kode_motor=$r[kode_motor]'><div  class='submitButton3'>Pesan Motor</div></a><a href='detail.php?kode_motor=$r[kode_motor]' onclick=\"return hs.htmlExpand(this, { objectType: 'iframe' } )\"><div  class='submitButton3'>Lihat Detail</div></a>
</div></div>";
}
?>
  <br />
  <br />
  <p align="center">Ingin melihat semua koleksi produk kami...??? Silahkan cek ke : </p>
  <a href="produk.php">
  <div class="submitButton2">Produk Kami</div>
</a> </div>
<p>
</p>
</body>
</html>