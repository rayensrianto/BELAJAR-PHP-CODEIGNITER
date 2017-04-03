<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tampil Admin</title>
  </head>
  <body>
    <center>
      <h1>Daftar Admin</h1>
      <hr>
      <p><a href="<?php echo base_url().'admin/form_tambah/'; ?>">Tambah Admin</a></p>

      <table width = '900'>
        <tr align='left'>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Password</th>
          <th>Opsi</th>
        </tr>
        <?php
        $no = 1;
        foreach($admin as $key)
        {
        ?>
        <tr align='left'>
          <td><?php echo $no++; ?></td>
          <td><?php echo $key->nama_depan." ".$key->nama_belakang; ?></td>
          <td><?php echo $key->email; ?></td>
          <td><?php echo $key->password; ?></td>
          <td>
            <a href="<?php echo base_url().'admin/form_edit/'.$key->id_admin; ?>">Edit</a>
            |
            <a href="<?php echo base_url().'admin/action_hapus/'.$key->id_admin; ?>">Hapus</a>
          </td>
        </tr>
        <?php
        }
        ?>
      </table>

    </center>

  </body>
</html>
