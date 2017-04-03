<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tampil Eskul</title>
  </head>
  <body>
    <center>
      <h1>Daftar Data Ekstrakulikuler</h1>
      <hr>
      <p><a href="<?php echo base_url().'data_ekstrakulikuler/form_tambah/'; ?>">Tambah Ekstrakulikuler</a></p>

      <table width = '600'>
        <tr align='left'>
          <th>No</th>
          <th>Nama</th>
          <th>Ekstrakulikuler</th>
          <th>Tahun Mulai</th>
          <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach($data_ekstrakulikuler as $key => $value)
        {

        ?>
        <tr align='left'>
          <td>
          <?php
          if ($key!=0 && $value->id_siswa == $data_ekstrakulikuler[$key-1]->id_siswa) {

          } else {
            $value->nama_depan." ".$value->nama_belakang;
            echo $no++;
          }
          ?>
          </td>
          <td>
          <?php
          //echo $key!=0 && $value->id_siswa == $data_ekstrakulikuler[$key-1]->id_siswa ? '':$value->nama_depan." ".$value->nama_belakang;
          if ($key!=0 && $value->id_siswa == $data_ekstrakulikuler[$key-1]->id_siswa) {

          } else {
            echo $value->nama_depan." ".$value->nama_belakang;
          }
          ?>
        </td>
          <td><?php echo $value->nama_ekstrakulikuler; ?></td>
          <td><?php echo $value->tahun_mulai; ?></td>
          <td>
            <a href="<?php echo base_url().'data_ekstrakulikuler/form_edit/'.$value->id_siswa.'/'.$value->id_ekstrakulikuler; ?>">Edit</a>
            |
            <a href="<?php echo base_url().'data_ekstrakulikuler/action_hapus/'.$value->id_siswa.'/'.$value->id_ekstrakulikuler; ?>">Hapus</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </table>

    </center>

  </body>
</html>
