<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Siswa</title>
  </head>
  <body>
    <center>
      <h1>Edit Siswa</h1>
      <hr>
      <?php
      foreach ($siswa as $key)
      {
        ?>
        <form class="" action="<?php echo base_url().'siswa/action_edit'; ?>" method="post">
          <table>
            <tr>
              <td>Nama Depan</td>
              <td>:</td>
              <td>
                <input type="hidden" name="id_siswa" value="<?php echo $key->id_siswa ?>">
                <input type="text" name="nama_depan" value="<?php echo $key->nama_depan ?>">
              </td>
            </tr>
            <tr>
              <td>Nama Belakang</td>
              <td>:</td>
              <td><input type="text" name="nama_belakang" value="<?php echo $key->nama_belakang ?>"></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td><input type="text" name="email" value="<?php echo $key->email ?>"></td>
            </tr>
            <tr>
              <td>No HP</td>
              <td>:</td>
              <td><input type="text" name="no_hp" value="<?php echo $key->no_hp ?>"></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><input type="text" name="alamat" value="<?php echo $key->alamat ?>"></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><select class="" name="jenis_kelamin">
                <option value="<?php echo $key->jenis_kelamin ?>" selected="selected"><?php echo $key->jenis_kelamin ?></option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempun</option>
              </select></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td align='right'><input type="submit" name="" value="Simpan"></td>
            </tr>
            <td></td>
            <td></td>
            <td align='right'> <a href="<?php echo base_url().'siswa/index'; ?>">Kembali</a> </td>
          </tr>
          </table>
        </form>

        <?php
      }

      ?>

      <?php echo validation_errors(); ?>
      <?php echo form_open('siswa/action_nambah'); ?>
    </center>
  </body>
</html>
