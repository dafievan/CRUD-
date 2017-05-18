<?php 
echo form_open();
echo validation_errors();
 ?>
<legend>Tambah Data Siswa</legend> 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Nama Awal</label>
	 		<input type="text" class="form-control" name="n_awal" placeholder="Masukkan Nama Awal" value="<?php echo set_value('n_awal'); ?>">
	 	</div>
	 </div>
 </div>
 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Nama Akhir</label>
	 		<input type="text" class="form-control" name="n_akhir" placeholder="Masukkan Nama Akhir" value="<?php echo set_value('n_akhir'); ?>">
	 	</div>
	 </div>
 </div>

 
 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>Alamat</label>
	 		<textarea name="alamat" class="form-control"><?php echo set_value('alamat'); ?></textarea>
	 	</div>
	 </div>
 </div>
	
	<input type="submit" class="btn" name="submit" value="Simpan">
	