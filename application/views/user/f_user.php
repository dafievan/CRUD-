<?php 
echo form_open();
echo validation_errors();
 ?>
<legend>Tambah Data User</legend> 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Nama User</label>
	 		<input type="text" class="form-control" name="n_namaus" placeholder="Masukkan Nama Judul" value="<?php echo set_value('n_namaus'); ?>">
	 	</div>
	 </div>
 </div>
 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Jabatan User</label>
	 		<input type="text" class="form-control" name="n_jabatanus" placeholder="Masukkan Isi" value="<?php echo set_value('n_jabatanus'); ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Jenis Kelamin</label>
	 		<select name="n_jkus" class="form-control">
	 			<option></option>
	 		</select>
	 		<input type="text" class="form-control" name="n_jkus" placeholder="Masukkan Keterangan" value="<?php echo set_value('n_jkus'); ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>No Telepon</label>
	 		<input type="date" class="form-control" name="n_notelus" placeholder="Masukkan Tanggal" value="<?php echo set_value('n_notelus'); ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>Alamat</label>
	 		<input type="text" class="form-control" name="n_alamatus" placeholder="Masukkan Tipe" value="<?php echo set_value('n_alamatus'); ?>">
	 		<textarea name="n_alamatus" class="form-control"><?php echo set_value('n_alamatus'); ?></textarea>
	 	</div>
	 </div>
 </div>
	
	<input type="submit" class="btn" name="submit" value="Simpan">
	