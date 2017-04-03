<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Admin</title>
  </head>
  <body>
    <center>
      <h1>Edit Admin</h1>
      <hr>
      <?php echo validation_errors(); ?>
      <?php echo form_open('admin/action_edit'); ?>
      <?php
      foreach ($admin as $key)
      {
      ?>
      <form class="" action="<?php echo base_url().'admin/action_edit'; ?>" method="post">
        <table>
          <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td>
              <input type="hidden" name="id_admin" value="<?php echo $key->id_admin ?>">
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
            <td>Password</td>
            <td>:</td>
            <td><input type="text" name="password" value="<?php echo $key->password ?>"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td align='right'><input type="submit" name="" value="Edit"></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td align='right'> <a href="<?php echo base_url().'admin/index'; ?>">Kembali</a> </td>
          </tr>
        </table>
      </form>

      <?php
      }
      ?>
    </center>

  </body>
</html>
