<html>
<center>
<p>Halo, <?php echo $this->session->userdata('email'); ?></p>
<a href="<?php echo base_url().'login/logout'; ?>">logout</a><br>
<h2>
  <a href="<?php echo base_url().'admin/index'; ?>">Admin</a> |
  <a href="<?php echo base_url().'siswa/index'; ?>">Siswa</a> |
  <a href="<?php echo base_url().'ekstrakulikuler/index'; ?>">Ekstrakulikuler</a> |
  <a href="<?php echo base_url().'data_ekstrakulikuler/index'; ?>">Data Eskul</a>
</h2>
<hr>
</center>
</html>
