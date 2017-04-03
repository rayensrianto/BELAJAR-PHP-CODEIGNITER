<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tampil Ekstrakulikuler</title>
  </head>
  <body>
    <center>
      <h1>Tampil Ekstrakulikuler</h1>
      <hr>

      <b><a href="<?php echo base_url().'ekstrakulikuler/form_tambah'; ?>">Tambah Ekstrakulikuler</a></b>
      <table width='100%' height='20'>
        <tr align='left'>
          <th>No</th>
          <th>Nama Ekstrakulikuler</th>
          <th>Keterangan</th>
          <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($ekstrakulikuler as $key)
        {
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $key->nama_ekstrakulikuler; ?></td>
          <td><?php echo $key->keterangan; ?></td>
          <td>
            <a href="<?php echo base_url().'ekstrakulikuler/form_edit/'.$key->id_ekstrakulikuler; ?>">Edit</a>
            |
            <a href="<?php echo base_url().'ekstrakulikuler/action_hapus/'.$key->id_ekstrakulikuler; ?>">Hapus</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
    </center>
  </body>
</html>
