<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Mohammad Maulana Rifki Fadilah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('template/assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyResume
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    @include('header')

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section light-background">

            <img src="{{ asset('template/assets/img/aku3.jpg') }}" alt="">

            <div class="container text-center" data-aos="zoom-out">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h2>Mohammad Maulana Rifki Fadilah</h2>
                        <p>I'm <span class="typed" data-typed-items="Medical Record, Developer, Freelancer">Designer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
                        <div class="social-links">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tentang Saya</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ asset('template/assets/img/aku4.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2 class="mb-1">Mohammad Maulana Rifki Fadilah</h2>
                        <p class="py-3">
                            Saya adalah seseorang yang memiliki semangat tinggi dalam belajar dan berkembang, baik secara profesional maupun personal. Saya percaya bahwa setiap tantangan adalah kesempatan untuk tumbuh, dan saya selalu berusaha untuk memberikan yang terbaik dalam setiap hal yang saya lakukan.
                            Saya memiliki latar belakang di bidang Kesehatan, dan saya tertarik dengan Teknologi Informasi khususnya dalam perancangan dan pembuatan aplikasi berbasis website. Saya senang bekerja dalam tim karena saya percaya kolaborasi adalah kunci untuk mencapai hasil yang luar biasa.
                            Selain itu, saya adalah pribadi yang mudah beradaptasi, komunikatif, dan selalu berusaha untuk menjaga hubungan baik dengan orang-orang di sekitar saya. Saya juga memiliki kemampuan manajemen waktu, pemecahan masalah, dan kepemimpinan yang membantu saya dalam menghadapi berbagai situasi.
                            Di luar pekerjaan, saya memiliki hobi membaca, travelling, dan mencoba sesuatu hal baru, karena hal-hal tersebut membantu saya menjaga keseimbangan hidup dan terus menginspirasi saya.
                            Saya selalu terbuka untuk peluang baru dan siap menghadapi tantangan yang dapat membantu saya berkembang lebih jauh.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section" style="font-size: 20px;">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <p>Berbagai keterampilan tambahan dalam bidang teknologi</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row skills-content skills-animation">
                    <div class="col-lg-12">
                        <div class="skill mb-5 text-center">
                            <span class="skilAl mb-5"><strong>Microsoft Office</strong></span>
                            <div class="skill-logos d-flex justify-content-center mb-3">
                                <img src="{{ asset('template/assets/img/skills/word.png') }}" alt="Office Logo" class="skill-logo me-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/powerpoint.png') }}" alt="PowerPoint Logo" class="skill-logo me-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/excel.png') }}" alt="Excel Logo" class="skill-logo me-2" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/visio.png') }}" alt="Visio Logo" class="skill-logo" style="width: 120px; height: 120px;">
                            </div>
                        </div><!-- End Skills Item -->

                        <div class="skill mb-5 text-center">
                            <span class="skill mb-5"><strong>Developer</strong></span>
                            <div class="skill-logos d-flex justify-content-center flex-wrap mb-5">
                                <img src="{{ asset('template/assets/img/skills/php.png') }}" alt="PHP Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/codeigniter.png') }}" alt="CodeIgniter Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/laravel.png') }}" alt="Laravel Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/html.png') }}" alt="HTML Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/css.png') }}" alt="CSS Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/bootstrap.png') }}" alt="Bootstrap Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/github.png') }}" alt="Github Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/mysql.png') }}" alt="MySQL Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                                <img src="{{ asset('template/assets/img/skills/figma.png') }}" alt="Figma Logo" class="skill-logo me-3 mb-3" style="width: 120px; height: 120px;">
                            </div>
                        </div><!-- End Skills Item -->
                    </div>
                </div>
            </div>
        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">
            f
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Pendidikan</h3>
                        <div class="resume-item">
                            <h4>Sarjana Terapan Rekam Medis dan Informasi</h4>
                            <h5>2020 - 2024</h5>
                            <p><em>Politeknik Negeri Jember</em></p>
                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                        </div><!-- End Resume Item -->

                        <h3 class="resume-title">Pengalaman Organisasi</h3>
                        <div class="resume-item">
                            <h4>Anggota BEM Kabinet Hastabrata</h4>
                            <h5>2021 - 2022</h5>
                            <p><em>Politeknik Negeri Jember</em></p>
                            <ul>
                                <li>Actively participated in organizational meetings and events</li>
                                <li>Collaborated with team members to plan and execute student activities</li>
                                <li>Contributed to the development of student welfare programs</li>
                                <li>Engaged in community service and outreach initiatives</li>
                            </ul>
                        </div><!-- End Resume Item -->
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Pengalaman Magang</h3>
                        <div class="resume-item">
                            <h4>RS Citra Husada</h4>
                            <h5>2022</h5>
                            <p><em>RS Citra Husada, Jember, Indonesia</em></p>
                            <ul>
                                <li>Assisted in the management of patient records and data entry</li>
                                <li>Collaborated with medical staff to ensure accurate documentation</li>
                                <li>Participated in patient care activities under supervision</li>
                                <li>Gained experience in hospital administration and operations</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <div class="resume-item">
                            <h4>Puskesmas Rambipuji</h4>
                            <h5>2023</h5>
                            <p><em>Puskesmas Rambipuji, Jember, Indonesia</em></p>
                            <ul>
                                <li>Supported public health initiatives and community outreach programs</li>
                                <li>Assisted in the preparation and distribution of health education materials</li>
                                <li>Conducted health screenings and recorded patient information</li>
                                <li>Worked closely with healthcare professionals to improve service delivery</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <div class="resume-item">
                            <h4>RSUD Haji Provinsi Jawa Timur</h4>
                            <h5>September - Desember 2023</h5>
                            <p><em>RSUD Haji Provinsi Jawa Timur, Surabaya, Indonesia</em></p>
                            <ul>
                                <li>Engaged in various departments to understand hospital workflows</li>
                                <li>Assisted in patient care and administrative tasks</li>
                                <li>Participated in training sessions on medical record management</li>
                                <li>Contributed to the improvement of patient data systems</li>
                            </ul>
                        </div><!-- End Resume Item -->

                        <div class="resume-item">
                            <h4>Klinik Harapan Sehat Jember</h4>
                            <h5>Desember 2024 - Maret 2025</h5>
                            <p><em>Klinik Harapan Sehat, Jember, Indonesia</em></p>
                            <ul>
                                <li>Assisted in daily clinic operations and patient management</li>
                                <li>Supported the medical team in conducting health assessments</li>
                                <li>Helped in organizing health workshops and seminars</li>
                                <li>Learned about primary healthcare delivery and patient interaction</li>
                            </ul>
                        </div><!-- End Resume Item -->
                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Card</li>
                        <li data-filter=".filter-branding">Web</li>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-1.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-1.jpg') }}" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-2.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-2.jpg') }}" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-3.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 1</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-3.jpg') }}" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-4.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-4.jpg') }}" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-5.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-5.jpg') }}" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-6.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 2</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-6.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-7.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-7.jpg') }}" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-8.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-8.jpg') }}" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <img src="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-9.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit</p>
                                <a href="{{ asset('template/assets/img/masonry-portfolio/masonry-portfolio-9.jpg') }}" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="{{ url('forms/contact.php') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    @include('footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('template/assets/js/main.js') }}"></script>

</body>

</html>