<?php
/**
 * The main template file
 * Template Name: Speakers
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package green_conclave
 */

get_header();
?>


 <!-- Hero Start -->
    <div class="container-fluid pt-5 hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-start mb-lg-5">
                    <h1 class="display-5 text-white mb-4 animated slideInRight">
                        <span class="fw-bold" style="color: #9CBC41;">GREEN</span> <br>
                        <span class="fw-bold" style="color: #064a56;">CONCLAVE 25</span>
                    </h1>
                    <p class="text-dark mb-4 animated fadeInLeftBig">Green Conclave Offers Straightforward
                        Industrial Refrigeration Solutions Tailored For Efficiency And Reliability. We Streamline
                        Complex Systems, Ensuring Seamless Performance And Minimal Downtime. Trust Us To Simplify Your
                        Refrigeration Needs With Innovative Technology And Expert Support For Optimal Cooling And Energy
                        Savings.</p>
                </div>
                <div class="col-lg-6 align-self-end text-center mb-lg-5 pb-5">
                    <div class="container d-flex justify-content-center align-items-end p-0">
                        <div class="d-flex justify-content-center gap-4 flex-wrap" style="width: 90%;">
                            <div class="card p-4 text-center rounded-0 border-0">
                                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/abc.jpg" alt="Day 1 QR Code"
                                    class="card-img-top mx-auto bounce-button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Start Spekers -->
    <section class="container-fluid p-0">
        <div class="text-center bg-success text-white py-5 mb-5 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="fs-2 text-uppercase text-white">Leading the Conversation: Our Speakers</h1>
            <p>Explore the expertise, insights, and inspiration brought to you by our dynamic and
                accomplished speakers.</p>
        </div>
        <div class="container pb-5">
            <div class="row pt-5">
                <!-- Speaker 1 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="0.3s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Ajit Gulabchand.png" alt="Jack Human" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Ajit Gulabchand</h5>
                        <p class="speaker-role text-primary">Chief Guest</p>
                        <p class="speaker-description">Renowned businessman and visionary leader, Ajit Gulabchand has
                            made significant contributions to the construction industry, pioneering sustainable urban
                            development with an emphasis on innovation and community growth.</p>
                    </div>
                </div>
                <!-- Speaker 2 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="0.4s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Ar. Hafeez Contractor.png" alt="Sara Brudt" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Ar. Hafeez Contractor</h5>
                        <p class="speaker-role text-danger">Architect Hafeez Contractor</p>
                        <p class="speaker-description">A distinguished architect, Hafeez Contractor is celebrated for
                            his groundbreaking urban designs, creating iconic structures that seamlessly blend
                            functionality with aesthetic beauty, and redefining India's architectural landscape.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!-- Speaker 3 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="0.5s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Mr. Sayaji Shinde.png" alt="Jack Human" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Mr. Sayaji Shinde</h5>
                        <p class="speaker-role text-primary">Actor & Social Activist</p>
                        <p class="speaker-description">Sayaji Shinde is a well-known Indian actor, recognized for his
                            versatile roles in Marathi and Hindi cinema. He is celebrated for his intense performances
                            in both character and antagonist roles across various films.</p>
                    </div>
                </div>
                <!-- Speaker 4 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="0.6s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Anil Kashyap.png" alt="Sara Brudt" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Dr. Anil Kashyap</h5>
                        <p class="speaker-role text-danger">President and Chancellor, NICMAR</p>
                        <p class="speaker-description">A prominent environmental scientist, Dr. Kashyap is committed to
                            promoting eco-sustainable solutions in urban planning, leveraging research and innovations
                            to minimize ecological footprints and enhance environmental resilience.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Speaker 5 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="0.7s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Sushma Kulkarni.png" alt="Jack Human" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Dr. Sushma Kulkarni</h5>
                        <p class="speaker-role text-primary">Vice Chancellor, NICMAR</p>
                        <p class="speaker-description">Dr. Kulkarni is a renowned architect and educator, specializing
                            in sustainable building practices and energy-efficient design. Her work integrates advanced
                            technologies with eco-friendly solutions to create future-ready environments.</p>
                    </div>
                </div>
                <!-- Speaker 6 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="0.8s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Mr. Abhiir Bhalla.png" alt="Sara Brudt" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Mr. Abhiir Bhalla</h5>
                        <p class="speaker-role text-danger">Youth Environmentalist</p>
                        <p class="speaker-description">A youth environmentalist and passionate sustainability advocate,
                            Abhiir inspires action through his initiatives for environmental conservation, raising
                            awareness about green practices to build a better, eco-friendly future.</p>
                    </div>
                </div>
            </div>

            <!-- Day 2 Speaker -->
            <div class="row pt-5">
                <!-- Speaker 1 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="0.9s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Christopher Charles Benninger.png" alt="Jack Human"
                        class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Christopher Charles Benninger</h5>
                        <p class="speaker-role text-primary">Chief Guest</p>
                        <p class="speaker-description">Chief Guest and globally acclaimed architect, Christopher is
                            celebrated for his iconic urban planning projects and dedication to sustainable design,
                            shaping modern cities with visionary concepts and innovative approaches.</p>
                    </div>
                </div>
                <!-- Speaker 2 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="1s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Cary Chan.png" alt="Sara Brudt" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Dr. Cary Chan</h5>
                        <p class="speaker-role text-danger">Executive Director Hong Kong Green Building Council</p>
                        <p class="speaker-description">Executive Director of the Hong Kong Green Building Council, Dr.
                            Chan is a pioneer in green technologies, advocating for sustainable urban environments and
                            innovative solutions to combat climate challenges.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <!-- Speaker 3 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="1.1s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Ken Yeang.png" alt="Jack Human" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Dr. Ken Yeang</h5>
                        <p class="speaker-role text-primary">Architect and Ecologist</p>
                        <p class="speaker-description">An architect and ecologist, Dr. Yeang is a leader in bioclimatic
                            design, blending nature with architecture through eco-friendly innovations and emphasizing
                            harmony between the built environment and the natural world.</p>
                    </div>
                </div>
                <!-- Speaker 4 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="1.2s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Ar. Mili Majumda.png" alt="Sara Brudt" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Ar. Mili Majumdar</h5>
                        <p class="speaker-role text-danger">Architect-Building Technology</p>
                        <p class="speaker-description">A leading architect and sustainability expert, Mili specializes
                            in energy-efficient building technologies and advocates for sustainable architectural
                            practices to create eco-friendly spaces that support modern living needs.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Speaker 5 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="1.3s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Ar. Anuja Sawant.png" alt="Jack Human" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Ar. Anuja Sawant</h5>
                        <p class="speaker-role text-primary">Principal Architect</p>
                        <p class="speaker-description">Principal Architect and design visionary, Anuja combines
                            creativity with practicality to deliver innovative architectural solutions, focusing on
                            client satisfaction and modern, sustainable design principles.</p>
                    </div>
                </div>
                <!-- Speaker 6 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="1.4s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Mr. Abhiir Bhalla.png" alt="Sara Brudt" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Mr. Abhiir Bhalla</h5>
                        <p class="speaker-role text-danger">Youth Environmentalist</p>
                        <p class="speaker-description">A youth environmentalist and passionate sustainability advocate,
                            Abhiir inspires action through his initiatives for environmental conservation, raising
                            awareness about green practices to build a better, eco-friendly future.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <!-- Speaker 7 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="1.5s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Mr. Pankaj Dharkar.png" alt="Jack Human" class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Mr. Pankaj Dharkar</h5>
                        <p class="speaker-role text-primary">Founder - President of PDA</p>
                        <p class="speaker-description">Founder-President of PDA and a prominent engineering consultant,
                            Pankaj specializes in advanced HVAC systems and energy-efficient technologies, contributing
                            significantly to building management innovations.</p>
                    </div>
                </div>
                <!-- Speaker 8 -->
                <div class="col-12 col-md-6 speaker-card wow fadeIn" data-wow-delay="1.6s">
                    <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Hariharan Chandrashekhar.png" alt="Sara Brudt"
                        class="speaker-img">
                    <div class="pt-3 pt-lg-0">
                        <h5>Dr. Hariharan Chandrashekhar.</h5>
                        <p class="speaker-role text-danger">Economist</p>
                        <p class="speaker-description">Economist and sustainability leader, Dr. Chandrashekhar
                            integrates economic development with environmental strategies, fostering balanced growth
                            while promoting eco-friendly practices for long-term global sustainability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Spekers -->


<?php
// get_sidebar();
get_footer();