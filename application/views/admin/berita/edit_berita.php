
      <div class="content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
              <h5 class="title">Ubah Berita</h5>
              </div>
              <div class="card-body">

              <form  name="form1" action="<?php echo base_url() ?>admin/berita/update" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="berita_id" value="<?= $detail['berita_id'];?>">
           

             <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $detail['judul'] ?>">
                      </div>
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal"value="<?= $detail['tanggal'];?>">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                      
                        <label for="gambar">Gambar</label>
                        <input type="file"  class="form-control" name="gambar" id="gambar">
                        <input type="hidden"  id="old"  name="old"  value="<?php echo $detail['gambar'] ?>">
                    </div>
                </div>
                
                 <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="judul">Sumber</label>
                        <input type="text" class="form-control" name="sumber" id="sumber">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="isi">Isi</label>
                        <input type="text" name="isi" class="form-control" id="isi" rows="10" value="<?php echo $detail['isi'] ?>">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="status_berita">Status Berita</label>
                        <select name="status_berita" class="form-control" id="status_berita">
                          <option value="publish" <?php if($detail['status_berita']=="Published") { echo 'selected'; } ?>>publish</option>
                          <option value="draft" <?php if($detail['status_berita']=="Draft") { echo 'selected'; } ?>>draft </option>
                        </SELECT>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary">Simpan</button>
               
               
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>