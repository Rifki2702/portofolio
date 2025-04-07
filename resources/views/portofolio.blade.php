<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>GitHub Projects</h2>
        <p>Telusuri proyek open-source dan karya pribadi saya yang mencerminkan keterampilan pengembangan web, teknologi kesehatan, dan solusi inovatif.</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-web">Laravel</li>
                <li data-filter=".filter-health">Codeigniter</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <!-- Project 1 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('template/assets/img/portfolio/suherman.png') }}" class="img-fluid" alt="Web Profile Klinik Suherman">
                        <div class="portfolio-info">
                            <h4>Web Profile</h4>
                            <p>Laravel, Bootstrap, MySQL</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('template/assets/img/portfolio/suherman.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Medical Records Management System - A comprehensive solution for healthcare providers"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://github.com/Rifki2702/klinik-suherman" target="_blank" title="GitHub Repository"><i class="bi bi-github"></i></a>
                            </div>
                            <div class="github-stats">
                                <span class="stars"><i class="bi bi-star-fill"></i> 48</span>
                                <span class="forks"><i class="bi bi-diagram-2-fill"></i> 12</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- Project 2 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('template/assets/img/portfolio/klpcm.png') }}" class="img-fluid" alt="KLPCM RS Citra Husada">
                        <div class="portfolio-info">
                            <h4>KLPCM RS Citra Husada</h4>
                            <p>Laravel, Bootstrap, MySQL</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('template/assets/img/portfolio/klpcm.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Personal Health Tracker - Monitor your health metrics"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://github.com/Rifki2702/klpcm" target="_blank" title="GitHub Repository"><i class="bi bi-github"></i></a>
                            </div>
                            <div class="github-stats">
                                <span class="stars"><i class="bi bi-star-fill"></i> 32</span>
                                <span class="forks"><i class="bi bi-diagram-2-fill"></i> 8</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- Project 3 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('template/assets/img/portfolio/haji.png') }}" class="img-fluid" alt="Inden Kamar RS Haji Jatim">
                        <div class="portfolio-info">
                            <h4>Inden Kamar Pasien</h4>
                            <p>Laravel, Bootstrap, MySQL</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('template/assets/img/portfolio/haji.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Medical Data CLI - Process healthcare data from command line"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://github.com/Rifki2702/inden-kamar" target="_blank" title="GitHub Repository"><i class="bi bi-github"></i></a>
                            </div>
                            <div class="github-stats">
                                <span class="stars"><i class="bi bi-star-fill"></i> 25</span>
                                <span class="forks"><i class="bi bi-diagram-2-fill"></i> 5</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- Project 4 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-health">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('template/assets/img/portfolio/deteksi.png') }}" class="img-fluid" alt="Deteksi BPJS RS Citra Husada">
                        <div class="portfolio-info">
                            <h4>Deteksi BPJS</h4>
                            <p>Codeigniter, Tailwind, MySQL</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('template/assets/img/deteksi.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Hospital Appointment System - Streamline patient scheduling"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://github.com/Rifki2702/deteksi_bpjs" target="_blank" title="GitHub Repository"><i class="bi bi-github"></i></a>
                            </div>
                            <div class="github-stats">
                                <span class="stars"><i class="bi bi-star-fill"></i> 41</span>
                                <span class="forks"><i class="bi bi-diagram-2-fill"></i> 9</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- Project 5 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('template/assets/img/portfolio/register.png') }}" class="img-fluid" alt="Register dan Penjualan Obat Klinik">
                        <div class="portfolio-info">
                            <h4>Register dan Penjualan Obat</h4>
                            <p>Laravel, Bootstrap, MySQL</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('template/assets/img/portfolio/register.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Healthcare API Gateway - Secure access to medical data"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://github.com/Rifki2702/rm" target="_blank" title="GitHub Repository"><i class="bi bi-github"></i></a>
                                <a href="https://klinikharapansehat.my.id" title="Project Details"><i class="bi bi-link-45deg"></i></a>
                            </div>
                            <div class="github-stats">
                                <span class="stars"><i class="bi bi-star-fill"></i> 36</span>
                                <span class="forks"><i class="bi bi-diagram-2-fill"></i> 7</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <!-- Project 6 -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('template/assets/img/portfolio/retensi.png') }}" class="img-fluid" alt="Retensi RM Puskesmas Jelbuk">
                        <div class="portfolio-info">
                            <h4>Retensi Rekam Medis</h4>
                            <p>Laravel, Bootstrap, MySQL</p>
                            <div class="portfolio-links">
                                <a href="{{ asset('template/assets/img/portfolio/retensi.png') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Patient Portal - Access medical records online"><i class="bi bi-zoom-in"></i></a>
                                <a href="https://github.com/Rifki2702/retensi" target="_blank" title="GitHub Repository"><i class="bi bi-github"></i></a>
                            </div>
                            <div class="github-stats">
                                <span class="stars"><i class="bi bi-star-fill"></i> 28</span>
                                <span class="forks"><i class="bi bi-diagram-2-fill"></i> 6</span>
                            </div>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

            <div class="text-center mt-5" data-aos="fade-up">
                <a href="https://github.com/Rifki2702" target="_blank" class="btn btn-primary btn-lg">
                    <i class="bi bi-github me-2"></i> View All Projects on GitHub
                </a>
            </div>

        </div>

    </div>

</section><!-- /Portfolio Section -->