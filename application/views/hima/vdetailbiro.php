<section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">                  
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                 Birokrasi Himpunan Arsitektur
                </h2>
                <div>
                  <a href="#" class="primary-btn mb-3 mb-sm-0">About Us</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->
    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        
                        <img class="img-fluid" src="<?php echo base_url('assets/img/organisasiHima/').$biro->foto2_biro;?>" alt="">
                        
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Deskripsi Biro</h4>
                        <div class="content">
                            
                            <?php echo $biro->deskripsi_biro ?>
                        </div>

                        <h4 class="title">Tugas Biro</h4>
                        <div class="content">
                            <?php echo $biro->tugas_biro ?>
                        </div>
                    </div>
                </div>
    <?php if(!empty($asidebar)){
        $this->load->view($asidebar);
    }
        ?>

                
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->