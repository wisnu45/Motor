<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.formreg {
	font-family: "Comic Sans MS", cursive;
	background-color: #CCCCCC;
}
</style>
</head>

<body>
<form id="Registrasi" name="Registrasi" method="post" action="proses_registrasi.php">
  <table width="530" border="0" align="center" class="formreg">
    <tr>
      <td colspan="4"><div align="center">
        <h1>REGISTRASI</h1>
      </div></td>
    </tr>
    <tr>
      <td width="64">&nbsp;</td>
      <td width="143">User Name</td>
      <td width="80">:</td>
      <td width="345"><label for="txt_pass"></label>
          <input name="txt_user" type="text" class="formreg" id="textfield2" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Password</td>
      <td>:</td>
      <td><label for="txt_nama"></label>
        <label>
        <input name="txt_pass" type="password" class="formreg" id="txt_pass" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nama</td>
      <td>:</td>
      <td><label for="txt_kota"></label><input name="txt_nama" type="text" class="formreg" id="textfield4" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td id="Laki-laki"><input name="jenkel" type="radio" class="formreg" id="radio" value="Pria" />
          <label for="jenkel"></label>
          <label for="jenkel">Pria
            <input name="jenkel" type="radio" class="formreg" id="radio2" value="Wanita" />
            Wanita </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Pekerjaan</td>
      <td>:</td>
      <td><label for="txt_pekerjaan"></label>
          <input name="txt_pekerjaan" type="text" class="formreg" id="txt_pekerjaan" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Alamat</td>
      <td>:</td>
      <td><label for="txt_alamat"></label>
          <textarea name="txt_alamat" cols="35" rows="4" class="formreg" id="txt_alamat"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kota</td>
      <td>:</td>
      <td><label for="txt_kdpos"></label>
          <input name="txt_kota" type="text" class="formreg" id="textfield5" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Provinsi</td>
      <td>:</td>
      <td><label for="txt_provinsi"></label>
          <select name="txt_provinsi" class="formreg" id="txt_provinsi">
            <option>PILIH</option>
            <option>Sumatera Selatan</option>
            <option>Jambi</option>
            <option>Bengkulu</option>
            <option>Lampung</option>
            <option>Sumatera Barat</option>
        </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Kode Pos</td>
      <td>:</td>
      <td><label for="txt_notel"></label>
          <input name="txt_kdpos" type="text" class="formreg" id="textfield6" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>No. Telp</td>
      <td>:</td>
      <td><label for="txt_email"></label>
          <input name="txt_notel" type="text" class="formreg" id="textfield7" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Email</td>
      <td>:</td>
      <td><label for="txt_norek"></label>
          <input name="txt_email" type="text" class="formreg" id="textfield8" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td class="formreg">No. Rekening</td>
      <td>:</td>
      <td><label for="textfield9"></label>
          <input name="txt_norek" type="text" class="formreg" id="textfield9" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>Nama Bank</td>
      <td>:</td>
      <td><label for="txt_bank"></label>
          <select name="txt_bank" class="formreg" id="txt_bank">
            <option>PILIH</option>
            <option>BRI</option>
            <option>BCA</option>
            <option>BNI</option>
            <option>Mandiri</option>
        </select></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <p>&nbsp; </p>
        <p>
          <input name="daftar" type="submit" id="daftar" value="DAFTAR" />
          <input type="reset" name="batal" id="batal" value="BATAL" />
        </p>
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>