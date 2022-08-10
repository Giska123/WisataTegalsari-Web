<div class="wrap">
<section class="blog_area section-padding">
        <div class="container">
        <div class="row">
        <div class="col-lg-12">
        <div class="all-blog-posts">
        <div class="row">
                        <?php foreach($berita as $list) { ?>
                        <div class="col-lg-6">
                        <article class="blog_item">
                            <div class="blog_item_img">
                            <span class="responsive"><img class="card-img rounded-0" src="<?php echo base_url('upload/files/'.$list['gambar']); ?>" alt=""></span>
                                <div class="blog_item_date">
                                    <p><?php echo $list['tanggal']; ?></p>
                        </div>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url() ?>artikel/baca/<?php echo $list['slug']; ?>">
                                    <h2><?php echo $list['judul'] ?></h2>
                                </a>
                            </div>
                        </article>
                        </div>
                        <?php } ?>

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</div>