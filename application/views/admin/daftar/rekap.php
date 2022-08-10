<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Daftar Pengunjung</h4>


<a href="<?php echo base_url(); ?>admin/daftar" class="btn btn-secondary">kembali</a>

<div class="card-body">
<div class="table-responsive">
<table class="table">
    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama Instansi
                      </th>
                      <th>
                        Daerah
                      </th>
                      <th>
                        Tanggal
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
    </thead>

    <tbody>
    <?php $no=0;
      foreach($datafilter as $row) {  $no++; ?> 

    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->nama_instansi; ?></td>
      <td><?php echo $row->alamat; ?></td>
      <td><?php echo $row->tanggal; ?></td>
      <td><?php echo $row->jumlah; ?></td>
      <td><?php echo $row->tujuan; ?></td>
      <td><?php echo $row->kontak; ?></td>
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