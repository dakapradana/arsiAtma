<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <?php if(!empty($informasi->foto2_pamiy)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <?php } if(!empty($informasi->foto3_pamiy)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <?php } if(!empty($informasi->foto4_pamiy)) { ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        <?php } if(!empty($informasi->foto5_pamiy)){ ?>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                        <?php } ?>
                                    </ol>
                                        
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiPamiy/').$informasi->foto1_pamiy; ?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php if(!empty($informasi->foto2_pamiy)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiPamiy/').$informasi->foto2_pamiy ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto3_pamiy)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiPamiy/').$informasi->foto3_pamiy ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto4_pamiy)) { ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiPamiy/').$informasi->foto4_pamiy ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } if(!empty($informasi->foto5_pamiy)){ ?>
                                        <div class="carousel-item">
                                            <img class="img-fluid" src="<?php echo base_url('assets/img/informasiPamiy/').$informasi->foto5_pamiy ;?>" style="width: 100%; max-height: 350px;" alt="">                                        
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <?php if(!empty($informasi->foto2_pamiy)) { ?>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                            
                            <br>
                            <div class="detail">
                                    <p title="Penulis">Penulis : <a ><?php echo $informasi->nama_penulis ?><i class="ti-user" title="Penulis"></i></a></p>
                                    <p title="Tanggal Ditulis"><a >12 Dec, 2017<i class="ti-calendar"></i></a></p>
                                    <?php if(empty($cek_fav)){ ?>
                                        <p title="Simpan Ke Akun Saya?" ><a <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" href="" <?php }else {?> href="<?php echo base_url('Informasi/saveinformasipamiy/').$informasi->id_informasi_pamiy?> <?php } ?> " >Simpan ke Akun<i id="icon" class="fas fa-download"></i></a></p>
                                    <?php }else { ?>
                                        <p title="Sudah Tersimpan di Akun, hapus?" ><a href="<?php echo base_url('Informasi/hapusfavpamiy/').$informasi->id_informasi_pamiy?>" >Hapus <i id="icon" class="fas fa-trash-alt"></i></a></p>
                                    <?php }?>                            
                            </div>
                        </div>
                        <hr>  
                        <!-- <div class="col-lg-3  col-md-3"> -->
                            <!-- <div class="blog_info text-right"> -->
                                <!-- <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div> -->
                                <!-- <ul class="blog_meta list">
                                    <li title="Penulis"><a ><?php echo $informasi->nama_penulis ?><i class="ti-user" title="Penulis"></i></a></li>
                                    <li title="Tanggal Ditulis"><a >12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                    <?php if(empty($cek_fav)){ ?>
                                    <li title="Simpan Ke Akun Saya?" ><a <?php if(empty($id) || $type_akun=='1'){ ?> onclick="konfirmasi()" <?php }else {?> href="<?php echo base_url('Informasi/saveinformasi/').$informasi->id_informasi_pamiy?> <?php } ?> " >Simpan ke Akun<i id="icon" class="fas fa-download"></i></a></li>
                                    <?php }else { ?>
                                        <li title="Sudah Tersimpan di Akun, hapus?" ><a href="<?php echo base_url('Informasi/hapusfav/').$informasi->id_informasi_pamiy?>" >Hapus <i id="icon" class="fas fa-trash-alt"></i></a></li>
                                    <?php }?>
                                </ul> -->
                                <!-- <ul class="social-links">
                                    <li><a href="#"><i class="fas fa-download"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-github"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul> -->
                            <!-- </div> -->
                        <!-- </div>  -->
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php echo $informasi->judul_pamiy ?></h2>
                            
                        </div>
                        <div class="col-lg-12">                        
                            <div class="row">                               
                                <div class="col-lg-12 mt-25">
                                    <p >
                                    <?php                                     
                                       echo $informasi->deskripsi_pamiy;
                                    ?>
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- Syntac Load asidebar Content -->
                <?php
                if(isset($asidebar))
                    {
                        $this->load->view($asidebar);
                    }
                    ?>
            </div>
        </div>
    </section>