<!--================ Start Home Banner Area =================-->
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">            
                <h2 class="text-uppercase mt-4 mb-5">
                  Informasi Internal Himpunan Mahasiswa Arsitektur Universitas Atma Jaya Yogyakarta
                </h2>               
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <!-- <?php echo $notif ; ?> -->
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area section_gap">   
    <div class="text-center"> 
                    <?php if (!empty($this->session->flashdata('teks'))) : ?>
                    <div id="alerttype" class="alert p-3 mb-2">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                        <h5 id="alerttitle"></h5>
                        <span class="alert alert-info"> <?php echo $this->session->flashdata('teks'); ?></span>
                        <i id="alerticon"></i>
                    </div>
                <?php endif; ?>                      
                        </div>     
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <?php if( $type_akun=="1"){ ?>                       
                        <a href="<?php echo base_url('informasi/formhima/') ?>" class="btn waves-effect waves-light btn-success">Tambah Informasi</a>
                        <?php }; ?>
                    <div class="blog_left_sidebar">                                                           
                    <div class="col-md">                        
                    </div>
                        <?php foreach($Informasi as $informasi) :     ?>      
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <ul class="blog_meta list">
                                            <li><a href="#"><?php echo $informasi->nama_penulis; ?> <i class="ti-user"></i></a></li>
                                            <li><a href="#"><?php echo $informasi->created_date; ?><i class="ti-calendar"></i></a></li>                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <center><img src="<?php echo base_url('assets/img/informasiHima/').$informasi->foto1_hima?>" style="width: 100%; max-height: 450px;" alt=""></center>
                                    <div class="blog_details">
                                        <a href="<?php echo base_url('Hima/').$informasi->id_informasi_hima ;?>">
                                            <h2><?php echo $informasi->judul_hima; ?></h2>
                                        </a>
                                        <p><?php echo UCWORDS(substr($informasi->deskripsi_hima, 0, 300)) . '...'; ?></p>
                                        <a href="<?php echo base_url('Hima/').$informasi->id_informasi_hima ;?>" class="blog_btn">View More</a>
                                        <?php if( $type_akun=='1'){ ?>    
                                        <a href="<?php echo base_url('Informasi/updatehima/').$informasi->id_informasi_hima ;?>" class="btn waves-effect waves-light btn-warning">Edit Informasi</a>
                                        <a href="<?php echo base_url('Informasi/delete/').$informasi->id_informasi_hima?>" class="btn btn-danger remove">Hapus</a> 
                                         <?php }; ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endforeach; ?>  
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">                                    
                                    <div class="center-align pagination ">
                                            <?php echo $this->pagination->create_links(); ?>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                 <!-- ASIDE BAR CHECKER-->
                <?php
                    if(isset($asidebar))
                    {
                        $this->load->view($asidebar);
                    }
                ?>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
   
    