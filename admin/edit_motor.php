<?php
include "../koneksi.php";

if (isset($_GET['kode'])) {
	$kode = $_GET['kode'];
} else {
	die ("Error. No Nip Selected! ");	
}
//Tampilkan datanya
$query = "SELECT kode_motor,nama_motor,type,merk,thn_buat,isi_silinder,nm_bpkb,no_polisi,no_mesin,no_rangka,warna,harga,gambar FROM motor WHERE kode_motor='$kode'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$kode = $hasil['kode_motor'];
$nama = $hasil['nama_motor'];
$type = $hasil['type'];
$merk = $hasil['merk'];
$tahun = $hasil['thn_buat'];
$isi = $hasil['isi_silinder'];
$bpkb = $hasil['nm_bpkb'];
$n_polisi = $hasil['no_polisi'];
$n_mesin = $hasil['no_mesin'];
$n_rangka = $hasil['no_rangka'];
$warna = $hasil['warna'];
$harga = $hasil['harga'];
$gambar = stripslashes ($hasil['gambar']);
$foto = $hasil['gambar'];
//Memecah tanggal Lahir
list($thn,$bln,$tgl) = explode ("-",$hasil['tgllahir']);
$alamat = $hasil['alamat'];
//proses edit 
if (isset($_POST['Edit'])) {
	$kode_motor = $_POST['kode'];
	$nama_motor = $_POST['nama'];
	$type = $_POST['type'];
	$merk = $_POST['merk'];
	$thn_buat = $_POST['tahun'];
	$isi_silinder = $_POST['isi'];
	$nm_bpkb = $_POST['bpkb'];
	$no_polisi = $_POST['n_polisi'];
	$no_mesin = $_POST['n_mesin'];
	$no_rangka = $_POST['n_rangka'];
	$warna = $_POST['warna'];
	$harga = $_POST['harga'];
	$gambar = $_FILES['foto']['name'];
	//Cek Photo
	if (strlen($gambar)>0) {
		//upload Photo
		if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			move_uploaded_file ($_FILES['foto']['tmp_name'], "../Motor/".$gambar);
			mysql_query ("UPDATE motor SET gambar='$gambar' WHERE kode_motor='$kode'");
		}
	}
	//update data
	$query = "UPDATE motor SET nama_motor='$nama_motor',type='$type',merk='$merk',thn_buat='$thn_buat',isi_silinder='$isi_silinder',nm_bpkb='$nm_bpkb',no_polisi='$no_polisi',no_mesin='$no_mesin',no_rangka='$no_rangka',warna='$warna',harga='$harga' WHERE kode_motor='$kode'";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color=#8BB2D9><center>Data Motor Berhasil Diedit</center></font></h2>";	
		echo "<meta http-equiv='refresh' content='0; url=index.php?page=lihat_motor'>";
	} else {
		echo "<h2><font color=red><center>Data Motor Gagal Diedit</center></font></h2>";	
	}
}
?>
<div>
  <h2 align="center">Edit Data Motor</h2>
  <form action="" method="post" enctype="multipart/form-data" name="Edit" id="Edit">
    <table width="491" border="0" align="center">
      
      <tr>
        <td width="181">Kode Motor</td>
        <td width="29">:</td>
        <td width="267"><label for="nama"><b>
          <?=$kode?>
          <input name="kode" type="hidden" id="kode" value="<?=$kode?>" />
        </b></label></td>
      </tr>
      <tr>
        <td>Nama Motor</td>
        <td>:</td>
        <td><label for="type"></label>
            <input name="nama" type="text" id="textfield3" value="<?=$nama?>" /></td>
      </tr>
      <tr>
        <td>Type</td>
        <td>:</td>
        <td><label for="n_polisi"></label>
            <input name="type" type="text" id="textfield4" value="<?=$type?>" /></td>
      </tr>
      <tr>
        <td>Merk</td>
        <td>:</td>
        <td><label for="merk"></label>
          <select name="merk" id="merk">
            <option selected="selected"><?=$merk?></option>
            <option>Honda</option>
            <option>Yamaha</option>
            <option>Suzuki</option>
            <option>Kawasaki</option>
            <option>Viar</option>
                                        </select></td>
      </tr>
      <tr>
        <td>Tahun Perakitan</td>
        <td>:</td>
        <td><label for="tahun"></label>
            <select name="tahun" id="tahun">
              <option selected="selected"><?=$tahun?></option>
              <option>2000</option>
              <option>2001</option>
              <option>2002</option>
              <option>2004</option>
              <option>2005</option>
              <option>2006</option>
              <option>2007</option>
              <option>2008</option>
              <option>2009</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
                                                </select>
            <label for="tahun"></label></td>
      </tr>
      <tr>
        <td>Isi Silinder</td>
        <td>:</td>
        <td><label for="n_rangka"></label>
            <input name="isi" type="text" id="textfield8" value="<?=$isi?>" /></td>
      </tr>
      <tr>
        <td>Nama BPKB</td>
        <td>:</td>
        <td><label>
          <input name="bpkb" type="text" id="bpkb" value="<?=$bpkb?>" />
        </label></td>
      </tr>
      <tr>
        <td>Nomor Polisi</td>
        <td>:</td>
        <td><label for="n_polisi"></label>
            <input name="n_polisi" type="text" id="textfield5" value="<?=$n_polisi?>" /></td>
      </tr>
      <tr>
        <td>Nomor Mesin</td>
        <td>:</td>
        <td><label for="harga"></label>
            <input name="n_mesin" type="text" id="textfield6" value="<?=$n_mesin?>" /></td>
      </tr>
      <tr>
        <td>Nomor Rangka</td>
        <td>:</td>
        <td><label for="n_rangka"></label>
            <input name="n_rangka" type="text" id="n_rangka" value="<?=$n_rangka?>" /></td>
      </tr>
      <tr>
        <td>Warna</td>
        <td>:</td>
        <td><label for="warna"></label>
            <input name="warna" type="text" id="warna" value="<?=$warna?>" /></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td><label for="warna"></label>
            <input name="harga" type="text" id="textfield7" value="<?=$harga?>" /></td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td>:</td>
        <td><? if (empty($foto)) 
		        echo "<strong><img src='../Motor/nopic.gif' width='50' height='50'> <br> No Image </strong>";
		        else
				echo"<img class='shadow' align=left src='../Motor/$foto' width=100 heigth=50/ title='Foto $nama_lengkap'>"
				?>
          <p>
            <?=$gambar?> 
            <input type="file" name="foto"/>
          </p>
          </td>
      </tr>
      <tr>
        <td colspan="3"><div align="center">
          <input type="submit" name="Edit" value="Edit Data" id="Edit" />
          &nbsp;
          <input type="reset" name="reset" value="Reset" />
        </div></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
</div>
