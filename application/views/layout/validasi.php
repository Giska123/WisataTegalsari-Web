

<div id="footer">

<h2>Konfirmasi Kedatangan</h2>

<?php echo $this->session->flashdata('msg3'); ?>

<form method="POST" action="<?php echo base_url('validasi/confirm'); ?>" >

<div class="box">
<div class="content">					
<div class="row">
<div class="col-lg-12">
<div class="row">


<div class="col-lg-6">
<div class="form-group">
<label for="nama_instansi" class="col-sm-4">Nama Instansi</label>
<div class="col-sm-11">
   <input type="text" name="nama_instansi" class="form-control" required autofocus >
</div>
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label class="col-sm-4">Kontak</label>
<div class="col-sm-11">
  <input type="text" name="kontak" class="form-control" required >
</div>
</div>
</div>


<div class="form-group">
<div class="submit">
<div class="col-lg-6">
<button type="submit" class="btn btn-primary" name="status" id="status" value="1" onclick="getConfirmation('kontak');">simpan</button>
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

<script>
  function getConfirmation(kontak) {
		$.ajax({
				url: "validasi/confirm",
				type: "post",
				data: kontak,
				success: function (response) {
				 location.reload();              
		
				}
			});
		}
  </script>




   


