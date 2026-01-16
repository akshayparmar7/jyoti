<?php include "hedare.php"; ?>

    <div id="imgSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="img/electric.jpg" class="d-block w-100 carousel-img" alt="image">
                <div class="carousel-caption d-flex align-items-center justify-content-end h-100">
                    <div class="content-box">
                        <p class="fs-4 text-white">
                            We provide high-quality electric panels engineered to ensure maximum safety, efficiency, and long-term reliability. Empower your business with our trusted electrical solutions.
                        </p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/electric1.jpg" class="d-block w-100 carousel-img" alt="image">
                <div class="carousel-caption d-flex align-items-center justify-content-end h-100">
                    <div class="content-box">
                        <p class="fs-4 text-white">
                            From automation systems to renewable energy applications, our custom-built electric panels are designed to meet a wide range of industrial requirements using advanced technology and skilled craftsmanship.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-line"></div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#imgSlider" data-bs-slide="prev">
            <!-- <span class="carousel-control-prev-icon"></span> -->
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#imgSlider" data-bs-slide="next">
            <!-- <span class="carousel-control-next-icon"></span> -->
        </button>
    </div>
    <section class="feature-overlap">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center h-100">
                        <div class="icon-circle">✔</div>
                        <h4 class="mt-4">Solution</h4>
                        <p>We offer comprehensive power solutions to meet the diverse needs ofyour business, ensuring seamless operations and maximum efficiency.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center h-100">
                        <div class="icon-circle">💬</div>
                        <h4 class="mt-4">Free Consultation</h4>
                        <p>Get expert advice and personalized recommendations for your power supply needs with our free consultation service.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="feature-card text-center h-100">
                        <div class="icon-circle">⚙</div>
                        <h4 class="mt-4">Production</h4>
                        <p>Our advanced production capabilities deliver high-quality power supplies, tailored to enhance your manufacturing processes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="product-section">
        <div class="container">
            <h1 class="text-center">Our Products</h1>
            <div class="title-decoration">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
            <p class="text-center mt-4 productcon">With years of expertise in providing power solutions, we ensure your business achieves excellence and efficiency.</p>
            
            <div id="fuse">
                <h3 class="text-center colorcode mt-4">FUSE</h3>
                <div class="card-container">
                    <?php
                        foreach ($fuses as $fusecard) {
                            fuseCard($fusecard);
                        }
                    ?>
                </div>
            </div>
            <div id="lv-panel">
                <h3 class="text-center colorcode">LV PANEL</h3>
                <div class="card-container">
                    <?php
                        foreach ($cards as $card) {
                            if($card['panel']=="lv_panel"){
                                productCard($card);
                            }
                        }
                    ?>
                </div>
            </div>
            <div id="mv-panel">
                <h3 class="text-center colorcode">MV PANEL</h3>
                <div class="card-container">
                    <?php
                        foreach ($cards as $card) {
                            if($card['panel']=="mv_panel"){
                                productCard($card);
                            }
                        }
                    ?>
                </div>
            </div>
        </div>

        <section class="why-choose py-5">
            <div class="container-fluid">
                <div class="row align-items-center g-4">

                    <!-- Left Image -->
                    <div class="col-lg-3">
                        <img src="img/electrical_repair.jpg" class="img-fluid" alt="Electrical Panel">
                    </div>

                    <!-- Right Content -->
                    <div class="col-lg-7 ps-4">
                        <h2>Why Choose</h2>
                        <div class="why-decoration">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="line"></span>
                        </div>
                        <p class="text-muted mb-4">
                        Recognized as a leading electrical panel board manufacturer in India, Electro Control Systems India Pvt. Ltd. brings over 25 years of industry expertise, offering comprehensive solutions for every electrical need.
                        </p>

                        <div class="row g-4">
                            <!-- Feature -->
                            <div class="col-md-6">
                                <div class="d-flex gap-3">
                                    <div class="icon-circle-choose">
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>Resource</h6>
                                        <p>Operating from a 50,000+ sq. ft. workspace featuring state-of-the-art machines and experienced professionals.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex gap-3">
                                    <div class="icon-circle-choose">
                                        <i class="fa-solid fa-chart-line"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>Analyze</h6>
                                        <p>Our experienced team carefully evaluates your requirements to deliver the most effective solutions.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex gap-3">
                                    <div class="icon-circle-choose">
                                        <i class="fa-solid fa-face-smile"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>Transparent</h6>
                                        <p>We provide straightforward offers with complete clarity in technical specifications.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex gap-3">
                                    <div class="icon-circle-choose">
                                        <i class="fa-solid fa-bolt"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>Quality</h6>
                                        <p>Premium-quality products engineered to deliver outstanding performance.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex gap-3">
                                    <div class="icon-circle-choose">
                                        <i class="fa-solid fa-shield"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>Confidential</h6>
                                        <p>We ensure complete confidentiality of all business-related information.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex gap-3">
                                    <div class="icon-circle-choose">
                                        <i class="fa-solid fa-clock"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>24/7 Premium Support</h6>
                                        <p>Our committed support team provides round-the-clock assistance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div id="about-us">
        <div class="mt-4 text-center colorcode">
            <h3>Authorized distribution of world-class brands, trusted by leading industry names.</h3>
        </div>
        <div class="section-header">
            <h5 class="section-title">Government Clients</h5>
            <div class="title-decoration">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="logo-slider">
            <div class="logo-track">
                <img src="img/pgvcl_logo.jpg" alt="">
                <img src="img/mgvcl_logo.png" alt="">
                <img src="img/kseb_logo.jpg" alt="">
                <img src="img/mseb_logo.png" alt="">
                <img src="img/ugvcl_logo.png" alt="">
                <img src="img/dgvcl_logo.png" alt="">

                <!-- duplicate logos for smooth loop -->
                <img src="img/pgvcl_logo.jpg" alt="">
                <img src="img/mgvcl_logo.png" alt="">
                <img src="img/kseb_logo.jpg" alt="">
                <img src="img/mseb_logo.png" alt="">
                <img src="img/ugvcl_logo.png" alt="">
                <img src="img/dgvcl_logo.png" alt="">
            </div>
        </div>
        <div class="section-header">
            <h5 class="section-title">Corporate Clients</h5>
            <div class="title-decoration">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="logo-slider">
            <div class="logo-track">
                <img src="img/pgvcl_logo.jpg" alt="">
                <img src="img/mgvcl_logo.png" alt="">
                <img src="img/kseb_logo.jpg" alt="">
                <img src="img/mseb_logo.png" alt="">
                <img src="img/ugvcl_logo.png" alt="">
                <img src="img/dgvcl_logo.png" alt="">

                <!-- duplicate logos for smooth loop -->
                <img src="img/pgvcl_logo.jpg" alt="">
                <img src="img/mgvcl_logo.png" alt="">
                <img src="img/kseb_logo.jpg" alt="">
                <img src="img/mseb_logo.png" alt="">
                <img src="img/ugvcl_logo.png" alt="">
                <img src="img/dgvcl_logo.png" alt="">
            </div>
        </div>
    </div>

    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9 hero-content mt-2">
                    <h3 class="fw-bold mb-3">
                        Empowering Your World with Trusted Electrical Solutions
                    </h3>
                    <p class="lead">
                        From home electrical needs to industrial-grade solutions, we provide expert services to light up your spaces and optimize your operations.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-bottom-line"></div>

    <div class="container py-5" id="contact">
        <div class="row align-items-center">
            <div class="col-md-5">
                <form action="send_mail.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" name="send" class="btn btn-custom w-100 py-2">
                        Send Now
                    </button>
                </form>
            </div>


            <div class="col-md-7 ps-md-5 mt-5 mt-md-0">
                <h2 class="quote-title"><b>Get Pricing Instantly</b></h2>
                <div class="why-decoration">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="line"></span>
                </div>
                <div class="divider"></div>

                <p class="text-muted">
                    At Electro Group, we know how important it is for your business to get the right solutions without delay and with complete reliability. Whether you are searching for a switched power supply, an LED driver, or advanced automation components, we provide competitive pricing on trusted brands such as ABB, Siemens, and many others.
                </p>

                <p class="text-muted">
                    With a large inventory and millions of units available, we are able to ship standard models within three days, helping keep your projects on track. You can rely on us for premium-quality products and tailored solutions.
                </p>
            </div>
        </div>
    </div>

    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 hero-content mt-2">
                    <h3 class="fw-bold mb-3">
                        Empowering Innovation, Together
                    </h3>
                    <p class="lead">
                        Are you ready to take your business to the next level with advanced solutions designed for your industry? At Electro Group, we work alongside you to drive innovation, improve efficiency, and achieve lasting success.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-bottom-line"></div>
    <div class="footer py-5">
        <div class="container">
            <div class="row gy-4">
                <!-- Logo & About -->
                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <img src="img/jyoti_logo.png" alt="Logo" class="mb-3" width="120">
                    <p class="small">
                        Electro Control Systems Jyoti Electrical Industries is a renowned name among the
                        electrical panel board manufacturers in India.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 text-center">
                    <h5 class="footer-title">Quick Links</h5>
                    <div class="title-decoration mx-auto">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>

                    <ul class="list-unstyled mt-3">
                       <?php foreach ($fuses as $fusecard){ ?>
                            <li><?= htmlspecialchars($fusecard['title']) ?></li>
                        <?php } ?>
                    </ul>
                </div>

                <!-- Our Products -->
                <div class="col-lg-2 col-md-6 text-center">
                    <h5 class="footer-title">Our Products</h5>
                    <div class="title-decoration mx-auto">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>

                    <ul class="list-unstyled mt-3">
                        <?php foreach ($cards as $card){ ?>
                            <li><?= htmlspecialchars($card['title']) ?></li>
                        <?php } ?>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="col-lg-4 col-md-6 col-12 text-center">
                    <h5 class="footer-title">Contact us</h5>
                    <div class="title-decoration d-flex mb-3">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="line"></span>
                    </div>
                    <!-- Call -->
                    <div class="d-flex ms-5 mt-3">
                        <div class="contact-icon me-3">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="text-start">
                            <small>Call us</small><br>
                            <strong>+91 95125 05020</strong>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="d-flex ms-5">
                        <div class="contact-icon me-3">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="text-start">
                            <small>Email us</small><br>
                            <strong>info@electrogroups.org</strong>
                        </div>
                    </div>
                    <!-- Address -->
                    <div class="d-flex ms-5">
                        <div class="contact-icon me-3">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <div class="text-start small">
                            <small>Address</small><br>
                            Pl.No.116,117,118, Road-H, Nr. Monica Mandap Unit-1,<br>
                            Kuvadva GIDC, Ahmedabad Highway Rajkot-360023,<br>
                            Gujarat, India
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>