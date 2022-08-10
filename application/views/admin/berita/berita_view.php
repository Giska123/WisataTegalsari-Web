<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Artikel Tersimpan</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Judul
                      </th>
                      <th>
                        Tanggal
                      </th>
                      <th>
                        Status
                      </th>
                    </thead>
                    <tbody>
                    
<?php foreach($berita as $list) { ?>
<tr>

<td><?php echo $list['berita_id']; ?></a></td>
<td><?php echo $list['judul']; ?></td>
<td><?php echo $list['tanggal']; ?></td>
<td><?php echo $list['status_berita']; ?></td>
<td>
<a href="<?php echo base_url() ?>admin/berita/edit/<?php echo $list['berita_id'] ?>">EDIT</a> | <a href="<?php echo base_url() ?>admin/berita/delete/<?php echo $list['berita_id'] ?>">DELETE</a></td>
</tr>
<?php } ?>
</table>
</div>
</main>