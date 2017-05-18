<?php 
echo form_open();
echo validation_errors();
 ?>
<legend>User Data User</legend> 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Nama User</label>
	 		<input type="text" class="form-control" name="n_namaus"  value="<?php echo $editdata->nama_user; ?>">
	 	</div>
	 </div>
 </div>
 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Jabatan User</label>
	 		<input type="text" class="form-control" name="n_jabatanus" value="<?php echo $editdata->jabatan_user; ?>">
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
	 		<input type="text" class="form-control" name="n_jkus"  value="<?php echo $editdata->jabatan_user; ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>No Telepon</label>
	 		<input type="date" class="form-control" name="n_notelus" value="<?php echo $editdata->notel_user; ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>Alamat</label>
	 		<input type="text" class="form-control" name="n_alamatus" value="<?php echo $editdata->alamat_user; ?>">
	 		<textarea name="n_alamatus" class="form-control"><?php echo set_value('n_alamatus'); ?></textarea>
	 	</div>
	 </div>
 </div>
	
	<input type="submit" class="btn" name="submit" value="Simpan">
	