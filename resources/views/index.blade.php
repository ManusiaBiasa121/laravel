@extends('layouts.main')

    <body id="page-top">
        <!-- Navigation-->

        <!-- Masthead-->
        @section('content')
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-black font-weight-bold animate__animated animate__bounce" >SMK Teratai Putih Global 2 Bekasi</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, facere iusto maxime laborum nam quo tempora, laudantium est architecto ab, qui velit tenetur! Harum, dicta officia? Eaque ullam possimus eligendi.</p>
                        
                    </div>
                </div>
            </div>
        </header>
        <!-- Visi -->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="fade-right">
                        <h2 class="text-white mt-0">Visi TPG 2</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa rem sit iste quo provident saepe assumenda, sapiente accusantium quasi? Accusamus corrupti totam alias odio iure eaque. Impedit odio eos suscipit!</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Misi-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center" data-aos="fade-left">
                        <h2 class="text-white mt-0">Misi TPG 2</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa rem sit iste quo provident saepe assumenda, sapiente accusantium quasi? Accusamus corrupti totam alias odio iure eaque. Impedit odio eos suscipit!</p>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Fasilitas-->
        <section class="page-section" id="fasilitas">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Fasilitas</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5" >
                    
                    <div class="col-lg-3 col-md-6 text-center" data-aos="fade-right" data-aos-duration="500">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Tema Belajar </h3>
                            <p class="text-muted mb-0">Belajar yang menyenangkan sekali di teratai Putih global 2 bekasi.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center "  data-aos="fade-down" data-aos-duration="1000">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Fasilitas Komputer</h3>
                            <p class="text-muted mb-0">Sekolah Memfasilitasi komputer untuk seluruh kebutuhan jurusan siswa di sekolah SMK TPG 2 Bekasi.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center"  data-aos="fade-up" data-aos-duration="1500">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Bantuan internet Wifi</h3>
                            <p class="text-muted mb-0">Dengan internet wifi yang dipasang di seluruh lab jurusan, siswa dapat menelusuri search engine untuk keperluan jurusan atau pelajaran.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center"  data-aos="fade-left" data-aos-duration="2000">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Kasih Sayang Guru</h3>
                            <p class="text-muted mb-0">Dengan guru yang sangat ramah kita jadi bersemangat untuk belajar di SMK TPG 2 Bekasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Tentang Kami</h2>
                <iframe width="750" height="400" src="https://www.youtube.com/embed/DtyvJvqRdpY?autoplay=1&mute=1">
                </iframe>
            </div>
        </section>
        <!-- Jurusan-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/akl.jpg" title="AKL">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/akl.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Jurusan</div>
                                <div class="project-name">Akuntansi Dan Keuangan Lembaga (AKL)</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/bdp.jpg" title="BDP">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/bdp.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Jurusan</div>
                                <div class="project-name">Bisnis Daring Dan Pemasaran(BDP)</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/dkv.jpeg" title="DKV">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/dkv.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Jurusan</div>
                                <div class="project-name">Desain komunikasi Visual(DKV)</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/mm.jpeg" title="MM">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/mm.jpeg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Jurusan</div>
                                <div class="project-name">Multimedia(MM)</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/otkp.jpg" title="OTKP">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/otkp.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Jurusan</div>
                                <div class="project-name">Otomatisasi dan Tata Kelola Perkantoran(OTKP)</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/rpl.jpg" title="RPL">
                            <img class="img-fluid" src="assets/img/portfolio/thumbnails/rpl.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Jurusan</div>
                                <div class="project-name">Rekayasa Perangkat Lunak(RPL)</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Lokasi</h2>
                <div class="mapouter"><div class="gmap_canvas"><div class="justify-content-center"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=469&amp;height=385&amp;hl=en&amp;q=Teratai Putih Global 2 &amp;t=h&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div><style>.mapouter{position:relative;text-align:right;width:100%;height:385px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:385px;}.gmap_iframe {height:385px!important;}</style></div></div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center" data-aos="flip-left">
                        <h2 class="mt-0">Mari Mengobrol!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Apakah Anak Anda Ingin Masuk SMK? Mari Mengobrol Dengan Kami.</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Nama</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Butuh Nama</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Butuh Email</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email Tidak Valid</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">No. Telp</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Butuh No. Telp</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Pesan</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Pesan Dibutuhkan</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Pengiriman Form Sukses</div>
                                    
                                    <br />
                                    <a href="#">Oke!</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Ada eror saat mengirim</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Kirim</button></div>
                        </form>
                    </div>
                </div>
                
                </div>
            </div>
        </section>
        @endsection
        <!-- Footer-->

    </body>
</html>
