
     

        <div class="content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
              <h5 class="title">Buat Artikel</h5>
              </div>
              <div class="card-body">

              <?php echo validation_errors(); ?>
              <?php echo form_open_multipart('admin/berita/tambah') ?>
              
                 
              <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                      
                        <label for="gambar">Gambar</label>
                        <input type="file"  class="form-control" name="gambar" id="gambar">
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
                        <input type="text" name="isi" class="form-control" id="isi" rows="10" ></textarea>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="status_berita">Status Berita</label>
                        <select name="status_berita" class="form-control" id="status_berita">
                          <option value="publish">publish</option>
                          <option value="draft">draft </option>
                        </SELECT>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary">Simpan</button>
               
                <?php echo form_close();?>
                </div>
              </div>
            </div>
          </div>
        </div>