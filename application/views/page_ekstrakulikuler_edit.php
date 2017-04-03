<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Ekstrakulikuler</title>
  </head>
  <body>
    <center>
      <h1>Edit ekstrakulikuler</h1>
      <hr>
      <?php
      foreach ($ekstrakulikuler as $key)
      {
        ?>
        <form class="" action="<?php echo base_url().'ekstrakulikuler/action_edit'; ?>" method="post">
          <table>
            <tr>
              <td>Nama Ekstrakulikuler</td>
              <td>:</td>
              <td>
                <input type="hidden" name="id_ekstrakulikuler" value="<?php echo $key->id_ekstrakulikuler ?>">
                <input type="text" name="nama_ekstrakulikuler" value="<?php echo $key->nama_ekstrakulikuler ?>">
              </td>
            </tr>
            <tr>
              <td>Keterangan</td>
              <td>:</td>
              <td><input type="text" name="keterangan" value="<?php echo $key->keterangan ?>"></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td align='right'><input type="submit" name="" value="Simpan"></td>
            </tr>
            </tr>
            <td></td>
            <td></td>
            <td align='right'> <a href="<?php echo base_url().'ekstrakulikuler/index'; ?>">Kembali</a> </td>
          </tr>

          </table>
        </form>

       <?php
      }
      ?>

      <?php echo validation_errors(); ?>
      <?php echo form_open('ekstrakulikuler/action_edit'); ?>
    </center>
  </body>
</html>
