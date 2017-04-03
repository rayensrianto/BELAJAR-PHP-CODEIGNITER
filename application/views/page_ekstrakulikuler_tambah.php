<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Ekstrakulikuler</title>
  </head>
  <body>
    <center>
      <h1>Tambah Ekstrakulikuler</h1>
      <hr>

      <form class="" action="<?php echo base_url().'ekstrakulikuler/action_tambah'; ?>" method="post">
        <table>
          <tr>
            <td>Nama Ekstrakulikuler</td>
            <td>:</td>
            <td><input type="text" name="nama_ekstrakulikuler" value=""></td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td><textarea name="keterangan" rows="8" cols="40"></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td align='right'><input type="submit" name="" value="Simpan"></td>
          </tr>
          </tr>
            <td></td>
            <td></td>
            <td align='right'> <a href="<?php echo base_url().'siswa/index'; ?>">Kembali</a> </td>
          </tr>
        </table>
      </form>
      <?php echo validation_errors(); ?>
      <?php echo form_open('ekstrakulikuler/action_nambah'); ?>
    </center>
  </body>
</html>
