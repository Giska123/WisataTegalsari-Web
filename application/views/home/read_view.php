
<div class="wrap">
<div class="container">
<div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="about-img">
                                <span class="responsive"><img src="<?php echo base_url('upload/files/'.$detail['gambar']); ?>"></span>
                                <p style="font-size: 1.3vw">Sumber Foto: <?php echo $detail['sumber'] ?></p>
                                </div>
                                
                                <div class="section-tittle mb-30 pt-30">
                                    <h3><?php echo $detail['judul'] ?></h3>
                                    <p><?php echo $detail['tanggal']; ?></p>
                                </div>
                                
                                <div class="about-prea">
                                    <p>.
                                    <p style="text-align: justify; text-justify: newspaper"><?php echo $detail['isi'] ?></p>
                                    
                                </div> 
                            </div>
                        </div>


            <div class="col-lg-4">
            <div class="sidebar">
            <div class="row">
				<div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2><a href="<?php echo base_url('artikel/daftar') ?>">Daftar Artikel</a></h2>
                    </div>
                    <div class="content">
                      <ul>

					  	<?php $i = 0; foreach($berita as $list) { if ($list['berita_id'] % 2 == 0) { ?>
						  <li>
						   <h5><a href="<?php echo base_url() ?>artikel/baca/<?php echo $list['slug']; ?>"><?php echo $list['judul']; ?></a></h5>
						   <p><?php echo $list['tanggal']; ?></p>
						  </li>
					  	<?php if (++$i == 5) break; } } ?>

                      </ul>
                    </div>
                  </div>
                </div>
		   </div>
		   </div>
		   </div>
</div>
</div>
</div>

                                
                                
