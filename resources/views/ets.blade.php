<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Greenpeace Indonesia</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="img-ets/favicon/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />

        <!-- SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Bootstrap 4 JS & dependencies -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function validation(){
                event.preventDefault();
                const name = document.getElementById('name').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const email = document.getElementById('email').value.trim();
                const message = document.getElementById('message').value.trim();

                let errors = [];

                if (!name) {
                    errors.push('Name is required.');
                } else if (name.length < 2) {
                    errors.push('Name must be at least 2 characters long.');
                }

                if (!email) {
                    errors.push('Email is required.');
                } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    errors.push('Please enter a valid email address.');
                }

                if (!phone){
                    errors.push('Phone number is required.')
                } else if (phone && !/^\+?\d{10,15}$/.test(phone)) {
                    errors.push('Please enter a valid phone number (10-15 digits).');
                }

                if (!message) {
                    errors.push('Message is required.');
                } else if (message.length < 10) {
                    errors.push('Message must be at least 10 characters long.');
                }

                if (errors.length > 0) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops! Please fill in the form correctly.',
                        html: errors.join('<br>'),
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: 'Your message has been sent successfully!',
                    }).then(() => {
                        document.getElementById('contactForm').reset();
                    });
                }
            }
        </script>
        <!-- <script src="../js/scripts.js"></script> -->
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="img-ets/greenpeace-logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Bidang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Artikel</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Kampanye</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-heading">Saatnya Melawan! #TimeToResist</div>
                <div class="masthead-subheading">Oligarki dan korporasi tengah berusaha mengambil kendali atas hak-hak kita, mereka menggunakan kekayaan untuk melobi dan melemahkan peraturan yang melindungi manusia dan planet ini. Namun, mereka salah meremehkan kita sebagai rakyat untuk melawan. </div>
                <a class="btn btn-primary btn-xl" href="#services">Saya Ikut Melawan!</a>
            </div>
        </header>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading">Membangun Masa Depan Bersama</h2>
                    <h3 class="section-subheading text-black-50">Bayangkan sebuah dunia dimana hutan tumbuh berkembang dan lautan penuh dengan kehidupan. Dunia dimana energi bersih tersedia secara adil dan merata. Setiap orang, di desa maupun di kota bisa mendapatkan hidup layak, aman dan bahagia. Kita tidak dapat membangun masa depan ini sendiri, tapi kita bisa membangunnya bersama. </h3>
                </div>
                <div class="row" >
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="https://www.greenpeace.org/indonesia/kampanye/hutan/">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img-ets/bg-card/bg-card1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Hutan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="https://www.greenpeace.org/indonesia/kampanye/iklim-dan-energi/">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <div>

                                </div>
                                <img class="img-fluid" src="img-ets/bg-card/bg-card2.webp" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Iklim & Energi</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="https://www.greenpeace.org/indonesia/kampanye/laut/">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img-ets/bg-card/bg-card3.webp" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Laut</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="https://www.greenpeace.org/indonesia/kampanye/perkotaan/">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img-ets/bg-card/bg-card4.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Perkotaan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="https://www.greenpeace.org/indonesia/kampanye/perkotaan/">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="img-ets/bg-card/bg-card5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Masa Depan Alternatif</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading">Artikel Terbaru</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-article" src="img-ets/articles/article1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <a href="https://www.greenpeace.org/indonesia/cerita/62879/gas-bumi-solusi-sementara-atau-bukan-solusi-sama-sekali/" style="text-decoration: none;">
                                <div class="timeline-heading">
                                    <h4>Gas Bumi</h4>
                                    <h4 class="subheading">Solusi Sementara atau Bukan Solusi Sama Sekali?</h4>
                                </div>
                            </a>
                            <div class="timeline-body"><p class="text-muted">Pernah nggak sih kamu mendengar tentang gas bumi sebagai energi transisi yang lebih bersih dan ramah lingkungan? Gampang banget untuk terjebak dalam narasi ini, apalagi kalau kita sadar sedikit banget…</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img-ets/articles/article2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <a href="https://www.greenpeace.org/indonesia/siaran-pers-2/62803/hari-buruh-2025-seruan-dari-laut-nelayan-desak-pemerintah-ratifikasi-ilo-k-188/" style="text-decoration: none;"">
                                <div class="timeline-heading">
                                    <h4 class="subheading">Hari Buruh 2025, Seruan dari Laut: Nelayan Desak Pemerintah Ratifikasi ILO K-188</h4>
                                </div>
                            </a>
                            <div class="timeline-body"><p class="text-muted">Jakarta 1 Mei 2025 — Peringatan Hari Buruh Internasional 2025 tak hanya diwarnai orasi dan poster dari buruh daratan. Suara dari laut pun turut bergema di jantung ibu kota. Sejumlah…!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img-ets/articles/article3.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <a href="https://www.greenpeace.org/indonesia/siaran-pers-2/62621/pembangkit-gas-fosil-bukan-solusi-transisi-energi/" style="text-decoration: none;">
                                <div class="timeline-heading">
                                    <h4>Pembangkit Gas Fosil Bukan Solusi Transisi Energi</h4>
                                </div>
                            </a>
                            <div class="timeline-body"><p class="text-muted">Jakarta, 24 April 2025. Kebijakan transisi energi di Indonesia masih dinilai kurang ambisius. Pasalnya sejumlah solusi palsu masuk ke dalam skema transisi energi.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="img-ets/articles/article4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <a href="https://www.greenpeace.org/indonesia/siaran-pers-2/62610/greenpeace-indonesia-menggelar-aksi-damai-pada-rabu-pagi-23-04-di-depan-kedutaan-besar-korea-selatan-di-jakarta-aksi-ini-membawa-pesan-tegas-bebaskan-para-aktivis-dan-hormati-hak-kebebasan-bere/" style="text-decoration: none;">
                                <div class="timeline-heading">
                                    <h4>Desak Penghentian Produksi Plastik Sekali Pakai, Aktivis Greenpeace Ditahan Pemerintah Korea Selatan</h4>
                                </div>
                            </a>
                            <div class="timeline-body"><p class="text-muted">Desak Penghentian Produksi Plastik Sekali Pakai, Aktivis Greenpeace Ditahan Pemerintah Korea Selatan</p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Membangun Kekuatan Bersama</h2>
                    <h3 class="section-subheading text-muted">Jika kamu ingin dunia yang lebih hijau dan adil, kami akan berdiri berjalan bersamamu. Jika kamu memiliki ide menuju kesana, kami ingin belajar darimu. Mari bermimpi bersama, merencanakan bersama, dan beraksi bersama. Bersama, kita bisa mengungkap persoalan lingkungan, mendesak pemerintah dan korporasi bertanggung jawab, serta mendorong solusi keberlanjutan yang ditopang ilmu pengetahuan dan kearifan lokal yang selaras dengan alam. </h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img-ets/cta/cta1.jpg" alt="..." />
                            <h4>Kebarakan Hutan Papua</h4>
                            <p class="text-muted">Aktivis Greenpeace melakukan aksi teatrikal dengan membawa "kebakaran hutan Papua" ke Kementerian Lingkungan Hidup dan Kehutanan (KLHK).</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img-ets/cta/cta2.jpg" alt="..." />
                            <h4>Cegah Api Kebakaran</h4>
                            <p class="text-muted">Tim cegah Api Greenpeace memadamkan api di lahan gambut yang terbakar di wilayah Desa Punggur Kecil, Kec. Sungai Kakap, Kab. Kubu Raya, Pontianak, Kalimantan Barat.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="img-ets/cta/cta3.webp" alt="..." />
                            <h4>Blokade "Quit Coal'</h4>
                            <p class="text-muted" style="text-overflow: clip;">Aktivis Greenpeace Indonesia membentangkan banner dengan pesan "Quit Coal", saat mereka memblokade crane yang akan memuat batu bara di PLTU batu bara Cirebon, Jawa Barat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center" style="margin-bottom: 4rem;">
                    <h2 class="section-heading">Bersama kita buat perubahan</h2>
                    <p class="text-white" style="text-overflow: clip;">Bergabung sekarang untuk mendapatkan informasi terbaru seputar kampanye lingkungan.</p>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" method="get" onsubmit="return validation()">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Bergabung Sekarang</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div>Copyright &copy; Greenpeace Indonesia</div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <!-- <script src="../js/scripts.js"></script> -->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
