<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
  </head>
  <body>
    <center>
      <h1>Login</h1>
      <form class="" action="<?php echo base_url().'login/login_action'; ?>" method="post">
        <table>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" value=""></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" value=""></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="" value="Login"></td>
          </tr>
          <tr>
            <td><b>Demo Akun</b></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td>admin@mail.com</td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td>password</td>
          </tr>
        </table>
      </form>

    </center>

  </body>
</html>
