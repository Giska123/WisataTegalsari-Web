<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Daftar Pengunjung</h4>

<form action="<?php echo base_url(); ?>admin/daftar/rekap" method="POST">
<input type="hidden" name="nilairekap" value="1">

Bulan
<select class="form-control" id="bulan" name="bulan">
<option value="01">Januari</option>
<option value="02">Februari</option>
<option value="03">Maret</option>
<option value="04">April</option>
<option value="05">Mei</option>
<option value="06">Juni</option>
<option value="07">Juli</option>
<option value="08">Agustus</option>
<option value="09">September</option>
<option value="10">Oktober</option>
<option value="12">November</option>
<option value="12">Desember</option>
</select>

Tahun
	<select class="form-control" id="tahun" name="tahun">
		<?php
			$mulai= date('Y') - 50;
			for($i = $mulai;$i<$mulai + 100;$i++)
			  {
    		    $sel = $i == date('Y') ? ' selected="selected"' : '';
    		    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
			  }
		?>
 	</select>

<button type="submit" class="btn btn-secondary">REKAP</button>
</form>

              </div>

              <div id="data">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Tgl Daftar
                      </th>
                      <th>
                        Nama Instansi
                      </th>
                      <th>
                        Daerah
                      </th>
                      <th>
                        Tgl Kunjungan
                      </th>
                      <th>
                        Jumlah
                      </th>
                      <th>
                        Tujuan
                      </th>
                      <th>
                        Kontak
                      </th>
                      <th>
                        Status
                      </th>
                     
                
                    </thead>
                    

  <tbody>
    <?php if (!empty($daftar)) {
         foreach ($daftar as $list) { }?> 

    <tr>
      <td><?php echo $list ['daftar_id']; ?></td>
      <td><?php echo $list ['tgl_daftar']; ?></td>
      <td><?php echo $list ['nama_instansi']; ?></td>
      <td><?php echo $list ['alamat']; ?></td>
      <td><?php echo $list ['tanggal']; ?></td>
      <td><?php echo $list ['jumlah']; ?></td>
      <td><?php echo $list ['tujuan']; ?></td>
      <td><?php echo $list ['kontak']; ?></td>
      <td><?php if ($list['status'] != '1') : ?>
          <span>belum</span>
        <?php else: ?>
          <span>datang</span>
        <?php endif; ?>
        </td>
      </tr>
     <?php } ?> 
  </tbody> 

</table>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
