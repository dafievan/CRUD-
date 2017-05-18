<?php 
echo form_open();
echo validation_errors();
 ?>
<legend>Tambah Data Dokumen</legend> 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Judul</label>
	 		<input type="text" class="form-control" name="n_juduldok" placeholder="Masukkan Nama Judul" value="<?php echo set_value('n_juduldok'); ?>">
	 	</div>
	 </div>
 </div>
 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Isi</label>
	 		<input type="text" class="form-control" name="n_isidok" placeholder="Masukkan Isi" value="<?php echo set_value('n_isidok'); ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Keterangan</label>
	 		<input type="text" class="form-control" name="n_keterangandok" placeholder="Masukkan Keterangan" value="<?php echo set_value('n_keterangandok'); ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>Tanggal Masuk</label>
	 		<input type="date" class="form-control" name="n_tglmskdok" placeholder="Masukkan Tanggal" value="<?php echo set_value('n_tglmskdok'); ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>Tipe</label>
	 		<input type="text" class="form-control" name="n_tipedok" placeholder="Masukkan Tipe" value="<?php echo set_value('n_tipedok'); ?>">
	 	</div>
	 </div>
 </div>
	
	<input type="submit" class="btn" name="submit" value="Simpan">
	