<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Siswa</title>
  </head>
  <body>
    <center>
      <h1>Tambah Siswa</h1>
      <hr>

      <form class="" action="<?php echo base_url().'siswa/action_tambah'; ?>" method="post">
        <table>
          <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><input type="text" name="nama_depan" value=""></td>
          </tr>
          <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" name="nama_belakang" value=""></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" value=""></td>
          </tr>
          <tr>
            <td>No HP</td>
            <td>:</td>
            <td><input type="text" name="no_hp" value=""></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" rows="8" cols="40"></textarea></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><select class="" name="jenis_kelamin">
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempun</option>
            </select></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td align='right'><input type="submit" name="" value="Simpan"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td align='right'> <a href="<?php echo base_url().'siswa/index'; ?>">Kembali</a> </td>
          </tr>
        </table>
      </form>
      <?php echo validation_errors(); ?>
      <?php echo form_open('siswa/action_nambah'); ?>
    </center>
  </body>
</html>
