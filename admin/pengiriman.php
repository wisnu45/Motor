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
  <form id="form1" name="form1" method="post" action="proses_pengiriman.php">
    <table width="458" border="0" align="center">
      <tr>
        <td colspan="3"><div align="center">
            <h2>Pengiriman Barang</h2>
        </div></td>
      </tr>
      <tr>
        <td width="170">Kode Pengiriman</td>
        <td width="7">:</td>
        <td width="262"><label for="txt_kd"></label>
            <input type="text" name="txt_kd" id="txt_kd" />
        </td>
      </tr>
      <tr>
        <td>Tanggal Pengiriman</td>
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
        <td>Jasa Pengiriman</td>
        <td>:</td>
        <td><label>
          <input type="text" name="txt_jp" id="txt_jp" />
        </label></td>
      </tr>
      <tr>
        <td>No Faktur</td>
        <td>:</td>
        <td><label>
          <input type="text" name="no_faktur" id="no_faktur" />
        </label></td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
            <input type="submit" name="kirim" id="kirim" value="S I M P A N" />
        </div></td>
      </tr>
    </table>
    </form>
  <hr width="85%" />
  <h2 align="center">Data Pengiriman Barang</h2>
  <table width="656" border="1" align="center">
    <tr>
      <td width="26" bgcolor="#00CCCC"><div align="center">No</div></td>
      <td width="127" bgcolor="#00CCCC"><div align="center">Kode Pengiriman</div></td>
      <td width="129" bgcolor="#00CCCC"><div align="center">Tanggal Pengiriman</div></td>
      <td width="134" bgcolor="#00CCCC"><div align="center">Jasa Pengiriman</div></td>
      <td width="95" bgcolor="#00CCCC"><div align="center">No Faktur</div></td>
      <td width="94" bgcolor="#00CCCC"><div align="center">Action</div></td>
    </tr>
    <?
	include "../koneksi.php";
	$sql="SELECT * FROM pengiriman ORDER BY kd_pengiriman";
	$tampil = mysql_query($sql);
    while (	$hasil = mysql_fetch_array ($tampil)) {
			$txt_kd = stripslashes ($hasil['kd_pengiriman']);
			$tgl_pengiriman = stripslashes ($hasil['tgl_pengiriman']);
			$txt_jp = stripslashes ($hasil['jasa_pengiriman']);
			$no_faktur = stripslashes ($hasil['no_faktur']);
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
        <?=$tgl_pengiriman?>
      </div></td>
      <td><div align="center">
        <?=$txt_jp?>
      </div></td>
      <td><div align="center">
        <?=$no_faktur?>
      </div></td>
      <td bgcolor="#009900"><div align="center"><a href="cetak_pengiriman.php?kd_pengiriman=<?=$txt_kd?>&amp;no_faktur=<?=$no_faktur?>" target="main">Cetak</a></div></td>
    </tr>
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