<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tampil Siswa</title>
    <style media="screen">
    textarea {
      white-space: normal;
      text-align: justify;
      -moz-text-align-last: center; /* Firefox 12+ */
      text-align-last: center;
      font-style: oblique;  
    }
    </style>
  </head>
  <body>
    <center>
      <h1>Tampil Siswa</h1>
      <hr>

      <b><a href="<?php echo base_url().'siswa/form_tambah'; ?>">Tambah Siswa</a></b>
      <table width='100%' height='20'>
        <tr align='left'>
          <th>No</th>
          <th>Nama Depan</th>
          <th>Email</th>
          <th>No Hp</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($siswa as $key)
        {
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $key->nama_depan." ".$key->nama_belakang; ?></td>
          <td><?php echo $key->email; ?></td>
          <td><?php echo $key->no_hp; ?></td>
          <td><textarea style="overflow:auto;resize:none" name="name" rows="2" cols="70" readonly><?php echo $key->alamat; ?></textarea></td>
          <td><?php echo $key->jenis_kelamin; ?></td>
          <td>
            <a href="<?php echo base_url().'siswa/form_edit/'.$key->id_siswa; ?>">Edit</a>
            |
            <a href="<?php echo base_url().'siswa/action_hapus/'.$key->id_siswa; ?>">Hapus</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
    </center>
  </body>
</html>
