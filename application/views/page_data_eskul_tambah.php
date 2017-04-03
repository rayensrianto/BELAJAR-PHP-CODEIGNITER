<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tambah Eskul</title>
  </head>
  <body>
    <center>
      <h1>Tambah Siswa Ekstrakulikuler</h1>
      <hr>
      <form class="" action="<?php echo base_url().'data_ekstrakulikuler/action_tambah'; ?>" method="post">
        <table>
          <tr>
            <td>Pilih Siswa</td>
            <td>:</td>
            <td>
              <select class="" name="id_siswa">
                <option value="" selected="">Pilih Siswa</option>
                <?php
                foreach ($siswas as $key) {
                ?>
                <option value="<?php echo $key->id_siswa ?>"><?php echo $key->nama_depan.' '.$key->nama_belakang; ?></option>
                ?>
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
              <select class="" name="id_ekstrakulikuler">
                <option value="" selected="">Pilih Ekstrakulikuler</option>
                <?php foreach ($ekstrakulikulers as $key => $value): ?>
                  <option value="<?php echo $value->id_ekstrakulikuler ?>"><?php echo $value->nama_ekstrakulikuler; ?></option>
                <?php endforeach; ?>
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
