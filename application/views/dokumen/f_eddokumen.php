<?php 
echo form_open();
echo validation_errors();
 ?>
<legend>Edit Data Dokumen</legend> 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Judul</label>
	 		<input type="text" class="form-control" name="n_juduldok" value="<?php echo $editdata->judul_doc; ?>">
	 	</div>
	 </div>
 </div>
 
 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Isi</label>
	 		<input type="text" class="form-control" name="n_isidok" value="<?php echo $editdata->isi_doc; ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
	 <div class="row">
	 	<div class="col-xs-4">
	 		<label>Keterangan</label>
	 		<input type="text" class="form-control" name="n_keterangandok" value="<?php echo $editdata->ket_doc; ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>Tanggal Masuk</label>
	 		<input type="date" class="form-control" name="n_tglmskdok" value="<?php echo $editdata->tgl_masuk; ?>">
	 	</div>
	 </div>
 </div>

 <div class="form-group">
 	<div class="row">
	 	<div class="col-xs-4">
	 		<label>Tipe</label>
	 		<input type="text" class="form-control" name="n_tipedok" value="<?php echo $editdata->type_doc; ?>">
	 	</div>
	 </div>
 </div>
	
	<input type="submit" class="btn" name="submit" value="Simpan">
	