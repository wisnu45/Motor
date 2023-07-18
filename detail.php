<style>
body{
	background-image:url(images/bg-body.jpg);
	background-repeat:repeat-x;
	background-attachment:fixed;
	background-position:bottom;
	font-family:Arial, Helvetica, sans-serif;
	font-size:11px;
}
h2{
	font-size:14px;
	padding:0px;
	margin:0px;
	font-weight:bold;
	color:#666666;
}
h3{
	font-size:11px;
	font-weight:normal;
	color:#666666;
	margin-top:0px;
	margin-bottom:10px;
}
.gambar{
padding:5px;
background-color:#CCCCCC;
border:1px dashed #000;
	-moz-border-radius:4px;
	-khtml-border-radius: 4px;
	-webkit-border-radius: 4px;
	margin:5px;
	float:left;
}
b {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
</style>
<?php
mysql_connect("localhost","root","");
mysql_select_db("citra_motor");
?>
<?php
$query=mysql_query("select * from motor where kode_motor='$_GET[kode_motor]'");
$no=1;
while($r=mysql_fetch_array($query)){
echo"<img src='Motor/$r[gambar]' class='gambar' height='200' width='210'>";
echo"<h2>$r[nama_motor]</h2>";
echo"<h3>Harga Rp: $r[harga] <i>(belum termasuk ongkir)</i></h3>";
echo"<b>Type:</b>$r[type]<br>";
echo"<b>Merk:</b>$r[merk]<br>";
echo"<b>Tahun Pembuatan:</b>$r[thn_buat]<br>";
echo"<b>Isi Silinder:</b>$r[isi_silinder]<br>";
echo"<b>No Polisi:</b>$r[no_polisi]<br>";
echo"<b>No Mesin:</b>$r[no_mesin]<br>";
echo"<b>No Rangka:</b>$r[no_rangka]<br>";
echo"<b>Warna:</b>$r[warna]";
}
?>