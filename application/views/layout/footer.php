

<div id="footer">

<h2>Pendaftaran Kunjungan</h2>


<form method="POST" action="<?php echo base_url() ?>home/daftar" >
<div class="box">
<div class="content">					
<div class="row">
<div class="col-lg-12">
<div class="row">


<div class="col-lg-6">


<input type="hidden" name="tgl_daftar" value="<?php echo set_value('tgl_daftar'); ?>" >
	
<div class="form-group">
<label for="nama_instansi" class="col-sm-4">Nama Instansi</label>
<div class="col-sm-11">
   <input type="text" name="nama_instansi" class="form-control" value="<?php echo set_value('nama_instansi'); ?>" required autofocus >
</div>
</div>	

<div class="form-group">
<label class="col-sm-4">Daerah</label>
<div class="col-sm-11">
   <input type="text" name="alamat" class="form-control" value="<?php echo set_value('alamat'); ?>" required >
</div>
</div>	

<div class="form-group">
<label class="col-sm-6">Tanggal Kunjungan</label>
<div class="col-sm-11">
  <input type="date" name="tanggal" class="form-control" value="<?php echo set_value('tanggal'); ?>" required>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label class="col-sm-4">Jumlah</label>
<div class="col-sm-11">
   <input type="text" name="jumlah" class="form-control" value="<?php echo set_value('jumlah'); ?>" required >
</div>
</div>	

<div class="form-group">
<label class="col-sm-4">Tujuan</label>
<div class="col-sm-11">
   <input type="text" name="tujuan" class="form-control" value="<?php echo set_value('tujuan'); ?>" required >
</div>
</div>

<div class="form-group">
<label class="col-sm-4">Kontak</label>
<div class="col-sm-11">
  <input type="text" name="kontak" class="form-control" value="<?php echo set_value('kontak'); ?>" required >
</div>
</div>
</div>


<div class="form-group">
<div class="submit">
<div class="col-lg-6">
<button type="submit" class="btn btn-primary" name="status" value="belum" <?php echo set_value('status', 'belum', TRUE); ?> >Simpan</button>
</div>
</div>
</div>


</div>
</div>
</div>
</div>
</div>
</form>
</div>







		