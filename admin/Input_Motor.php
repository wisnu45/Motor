<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="simpan_motor.php" method="post" enctype="multipart/form-data" name="Motor" id="Motor">
  <table width="424" border="0" align="center">
    <tr>
      <td colspan="3"><div align="center">
        <h2>Input Data Motor</h2>
      </div></td>
    </tr>
    <tr>
      <td width="179">Kode Motor</td>
      <td width="13">:</td>
      <td width="218"><label for="nama"></label>
        <input type="text" name="kode" id="textfield2" /></td>
    </tr>
    <tr>
      <td>Nama Motor</td>
      <td>:</td>
      <td><label for="type"></label>
        <input type="text" name="nama" id="textfield3" /></td>
    </tr>
    <tr>
      <td>Type</td>
      <td>:</td>
      <td><label for="n_polisi"></label>
      <input type="text" name="type" id="textfield4" /></td>
    </tr>
    <tr>
      <td>Merk</td>
      <td>:</td>
      <td><label for="merk"></label>
        <select name="merk" id="merk">
          <option selected="selected">PILIH</option>
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
          <option selected="selected">TAHUN</option>
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
        </select>        <label for="tahun"></label></td>
    </tr>
    <tr>
      <td>Isi Silinder</td>
      <td>:</td>
      <td><label for="n_rangka"></label>
      <input type="text" name="isi" id="textfield8" /></td>
    </tr>
    <tr>
      <td>Nama BPKB</td>
      <td>:</td>
      <td><label>
        <input type="text" name="bpkb" id="bpkb" />
      </label></td>
    </tr>
    <tr>
      <td>Nomor Polisi</td>
      <td>:</td>
      <td><label for="n_polisi"></label>
      <input type="text" name="n_polisi" id="textfield5" /></td>
    </tr>
    <tr>
      <td>Nomor Mesin</td>
      <td>:</td>
      <td><label for="harga"></label>
        <input type="text" name="n_mesin" id="textfield6" /></td>
    </tr>
    <tr>
      <td>Nomor Rangka</td>
      <td>:</td>
      <td><label for="n_rangka"></label>
      <input type="text" name="n_rangka" id="n_rangka" /></td>
    </tr>
    <tr>
      <td>Warna</td>
      <td>:</td>
      <td><label for="warna"></label>
      <input type="text" name="warna" id="warna" /></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td><label for="warna"></label>
      <input type="text" name="harga" id="textfield7" /></td>
    </tr>
    <tr>
      <td>Gambar</td>
      <td>:</td>
      <td><label for="fileField"></label>
      <input type="file" name="foto" id="fileField" /><label for=></label></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">        <br />
        <input type="submit" name="simpan" id="simpan" value="SIMPAN" />
        <input type="reset" name="batal" id="batal" value="BATAL" />
      </div></td>
    </tr>
  </table>
  <br />
</form>
</body>
</html>