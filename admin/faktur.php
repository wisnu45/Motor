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
<div>
  <form id="form1" name="form1" method="post" action="simpan_faktur.php">
    <table width="555" border="0" align="center">
      <tr>
        <td colspan="3"><div align="center">
            <h2>Faktur Penjualan</h2>
        </div></td>
      </tr>
      <tr>
        <td width="179">No. Faktur</td>
        <td width="20">:</td>
        <td width="342"><label for="txt_kd"></label>
            <input type="text" name="txt_kd" id="txt_kd" /></td>
      </tr>
      <tr>
        <td>Tanggal Faktur</td>
        <td>:</td>
        <td><select name="tgl">
            <? 
					for ($i=1; $i<=31; $i++) {
						$tg = ($i<10) ? "0$i" : $i;
						echo "<option value='$tg'>$tg</option>";	
					}
				?>
          </select>
          -
          <select name="bln">
            <? 
					for ($i=1; $i<=12; $i++) {
						$bl = ($i<10) ? "0$i" : $i;
						echo "<option value='$bl'>$bl</option>";	
					}
				?>
          </select>
          -
          <select name="thn">
            <? 
					for ($i=2010; $i<=2020; $i++) {
						echo "<option value='$i'>$i</option>";	
					}
				?>
          </select></td>
      </tr>
      <tr>
        <td>Jumlah Uang</td>
        <td>:</td>
        <td><label for="jml_uang"></label>
            <input type="text" name="jml_uang" id="jml_uang" />
        </td>
      </tr>
      <tr>
        <td>Terbilang</td>
        <td>:</td>
        <td><label for="terbilang"></label>
            <textarea name="terbilang" cols="40" rows="2" id="terbilang"></textarea>
            <label for="id_konsumen"></label></td>
      </tr>
      <tr>
        <td>Id Konsumen</td>
        <td>:</td>
        <td><label>
          <input type="text" name="id_konsumen" id="id_konsumen" />
          </label>
        </td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
            <p>
              <input type="submit" name="kirim" id="kirim" value="S I M P A N" />
            </p>
        </div></td>
      </tr>
    </table>
  </form>
  <hr width="85%" />
  <h2 align="center">Data Faktur Penjulan</h2>
  <table width="867" border="1" align="center">
    <tr>
      <td width="27" bgcolor="#00CCCC"><div align="center">No</div></td>
      <td width="100" bgcolor="#00CCCC"><div align="center">No Faktur</div></td>
      <td width="110" bgcolor="#00CCCC"><div align="center">Tanggal Faktur</div></td>
      <td width="107" bgcolor="#00CCCC"><div align="center">Jumlah Uang</div></td>
      <td width="250" bgcolor="#00CCCC"><div align="center">Terbilang</div></td>
      <td width="125" bgcolor="#00CCCC"><div align="center">Id Konsumen</div></td>
      <td width="102" bgcolor="#00CCCC"><div align="center">Action</div></td>
    </tr>
    <?
	include "../koneksi.php";
	$sql="SELECT * FROM faktur inner join konsumen on faktur.id_konsumen=konsumen.id_konsumen ORDER BY no_faktur";
	$tampil = mysql_query($sql);
    while (	$hasil = mysql_fetch_array ($tampil)) {
			$txt_kd = stripslashes ($hasil['no_faktur']);
			$tgl_faktur = stripslashes ($hasil['tgl_faktur']);
			$jml_uang = stripslashes ($hasil['jml_uang']);
			$terbilang = stripslashes ($hasil['terbilang']);
			$id_konsumen = stripslashes ($hasil['id_konsumen']);
      {
		$no++;
	?>
    <tr>
      <td><div align="center">
        <?=$no?>
      </div></td>
      <td><div align="center">
        <?=$txt_kd?>
      </div></td>
      <td><div align="center">
        <?=$tgl_faktur?>
      </div></td>
      <td><div align="center">
        <?=$jml_uang?>
      </div>      </td>
      <td><div align="center">
        <?=$terbilang?>
      </div>      </td>
      <td><div align="center">
        <?=$id_konsumen?>
      </div>
      <td bgcolor="#009900"><div align="center"><a href="cetak_faktur.php?no_faktur=<?=$txt_kd?>&amp;id_konsumen=<?=$id_konsumen?>" target="main">Cetak</a></div></td>
    <tr>
    <?  
	}}
	?>
   </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
<?php }?>