<?php 
echo form_open();
echo validation_errors();
 ?>
 <legend>Edit Data Siswa</legend>
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Nama Awal</label>
	 		<input type="text" class="form-control" name="n_awal" value="<?php echo $editdata->nama_awal;//$editdata berasal dari con siswa, nama_awal berasal dari db ?>">
	 	</div>
	 </div>
 </div>
 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Nama Akhir</label>
	 		<input type="text" class="form-control" name="n_akhir" value="<?php echo $editdata->nama_akhir; ?>">
	 	</div>
	 </div>
 </div>

 
 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>Alamat</label>
	 		<textarea name="alamat" class="form-control"><?php echo $editdata->alamat; ?></textarea>
	 	</div>
	 </div>
 </div>
	
	<input type="submit" class="btn" name="submit" value="Simpan">
	