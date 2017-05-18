<?php if($this->session->flashdata('info')): ?>
  <div class="alert">
<?php echo $this->session->flashdata('info'); ?>         
  </div>
<?php endif; ?>
<a href="<?php echo base_url('siswa/tambah'); ?>" class="btn btn-primary">Tambah Data Siswa</a>
  <hr>
  <?php 
  echo $tabel; //ini ada di bagian con siswa
   ?>
