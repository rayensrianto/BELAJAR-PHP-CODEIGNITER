<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Eskul</title>
  </head>
  <body>
    <center>
      <h1>Edit Siswa Ekstrakulikuler</h1>
      <hr>
      <form class="" action="<?php echo base_url().'data_ekstrakulikuler/action_edit'; ?>" method="post">
        <table>
          <tr>
            <td>Pilih Siswa</td>
            <td>:</td>
            <td>
              <select class="" name="id_siswa">
                <?php
                foreach ($data_ekstrakulikuler as $key) {
                ?>
                <option value="<?php echo $key->id_siswa ?>" selected=""><?php echo $key->nama_depan.' '.$key->nama_belakang; ?></option>
                <?php
                }
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td>Pilih Ekstrakurikuler</td>
            <td>:</td>
            <td>

              <?php
              foreach ($data_ekstrakulikuler as $key)
              {
                ?>
                <input type="hidden" name="id_ekstrakulikuler_before" value="<?php echo $key->id_ekstrakulikuler ?>">
                <?php
              }
              ?>

              <select class="" name="id_ekstrakulikuler">
                <?php
                foreach ($data_ekstrakulikuler as $key) {
                  ?>
                  <option value="<?php echo $key->id_ekstrakulikuler ?>"><?php echo $key->nama_ekstrakulikuler; ?></option>
                  <?php
                  foreach ($ekstrakulikulers as $key) {
                    ?>
                    <option value="<?php echo $key->id_ekstrakulikuler ?>"><?php echo $key->nama_ekstrakulikuler; ?></option>
                    <?php
                  }
                }
                ?>


              </select>
            </td>
          </tr>
            <td></td>
            <td></td>
            <td align='right'><input type="submit" name="" value="Simpan"></td>
          </tr>
        </table>
      </form>
      <!-- <?php echo validation_errors(); ?>
      <?php echo form_open('ekstrakulikuler/action_tambah'); ?> -->
    </center>

  </body>
</html>
