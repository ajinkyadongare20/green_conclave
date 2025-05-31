<?php
/**
 * The main template file
 * Template Name: Event1
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
<div class="container-fluid py-5 gc24-header banner-heading">
    <div class="container pt-5 pb-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 align-self-end text-start m-0">
                <div class="d-flex justify-content-end align-items-end about-header-card pt-5 pt-lg-0 pb-0 pb-lg-5">
                    <div class="card banner-header-text">
                        <p class="text-dark mb-0">
                            Green Conclave 24 is a premier event dedicated to advancing sustainability and
                            environmental innovation. Join us for insightful discussions, workshops, and
                            collaborations with industry leaders and changemakers. Together, we will explore
                            cutting-edge solutions, inspire green practices, and pave the way for a more sustainable
                            future at this landmark event
                        </p>
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


<!-- Start Main Section -->
<section class="container-fluid bg-light">
    <div class="container py-5">
        <div class="text-center">
            <h1 class="fs-2 fw-bold text-start text-uppercase">Green Conclave 2024 - The Second Edition</h1>
        </div>

        <div class="row mt-4">
            <!-- Text Section -->
            <div class="col-lg-8 text-start d-lg-flex flex-column justify-content-start">
                <ul class="list-unstyled">
                    <li>
                        <strong>At Green Conclave,</strong> we have consistently brought together
                        thought leaders, innovators, and industry pioneers to discuss, share, and implement
                        sustainability solutions.
                    </li>
                    <li>
                        <strong>Our past events</strong> have set the foundation for transformative
                        change, driving the conversation on environmental sustainability and the path to Net Zero.
                    </li>
                </ul>
                <h3 class="mt-4">
                    <span class="text-uppercase">Theme:</span> Carbon
                </h3>
                <p class="mt-3">
                    The second edition of Green Conclave was held with great success, attracting over 500 delegates
                    from diverse industries and backgrounds. GC24 explored the theme of Carbon, addressing the
                    critical
                    role of carbon reduction and management in achieving Net Zero emissions.
                </p>
                <p class="py-0">
                    The event provided a platform for discussions, actionable strategies, and collaborative
                    solutions to tackle one of the most pressing challenges of our time—our collective carbon
                    footprint.
                    Attendees gained insights into emerging technologies, policy advancements, and innovative
                    practices
                    shaping a sustainable future.
                </p>

                <p class="py-0">The second edition of Green Conclave focused on the theme of Carbon, uniting over
                    500 delegates
                    to explore strategies, technologies, and solutions for carbon reduction and management, driving
                    collective action toward achieving Net Zero emissions.</p>
            </div>

            <!-- Image Section -->
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <!-- Image Preview -->
                <img src="<?php bloginfo('template_directory'); ?>/img/events/theme_Carbon_GC.jpg"
                    alt="Download Brochure" class="img-fluid download-img">

                <!-- Button to Trigger Modal -->
                <button type="button" class="btn btn-warning mt-3 w-100 text-center download-btn" data-bs-toggle="modal"
                    data-bs-target="#imageModal">
                    View Now
                </button>
            </div>

            <!-- Modal Structure -->
            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/events/theme_Carbon_GC.jpg"
                                alt="Theme Carbon GC" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Topics Section -->
        <div class="row g-4 mt-3">
            <!-- First Div -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 hover-effect" style="height: 100%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3 bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 50px; height: 50px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/completed-task.png"
                                alt="Carbon Reduction Strategies" style="width: 50px; height: 50px; object-fit: cover;">
                        </div>
                        <h5 class="mb-0" style="font-size: 16px; font-weight: bold;">Carbon Reduction Strategies
                        </h5>
                    </div>
                    <ul style="font-size: 14px; color: #555; padding-left: 20px;">
                        <li>Sustainable Technologies</li>
                        <li>Renewable Energy Solutions</li>
                        <li>Green Supply Chain Management</li>
                        <li>Energy Efficiency Innovations</li>
                    </ul>
                </div>
            </div>

            <!-- Second Div -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 hover-effect" style="height: 100%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3 bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 50px; height: 50px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                alt="Climate Policy Frameworks" style="width: 50px; height: 50px; object-fit: cover;">
                        </div>
                        <h5 class="mb-0" style="font-size: 16px; font-weight: bold;">Climate Policy Frameworks</h5>
                    </div>
                    <ul style="font-size: 14px; color: #555; padding-left: 20px;">
                        <li>Corporate Sustainability</li>
                        <li>Carbon Capture and Storage</li>
                        <li>Life Cycle Analysis</li>
                        <li>Carbon Offsetting Programs</li>
                    </ul>
                </div>
            </div>

            <!-- Third Div -->
            <div class="col-md-6 col-lg-4">
                <div class="p-3 hover-effect" style="height: 100%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                    <div class="d-flex align-items-center mb-3">
                        <div class="me-3 bg-light rounded-circle d-flex justify-content-center align-items-center"
                            style="width: 50px; height: 50px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg"
                                alt="Net Zero Strategies" style="width: 50px; height: 50px; object-fit: cover;">
                        </div>
                        <h5 class="mb-0" style="font-size: 16px; font-weight: bold;">Net Zero Strategies</h5>
                    </div>
                    <ul style="font-size: 14px; color: #555; padding-left: 20px;">
                        <li>Green Building Innovations</li>
                        <li>Environmental Impact Assessments</li>
                        <li>Sustainable Urban Development</li>
                        <li>Future of Transportation</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Main Section -->


<!-- Start Spekers -->
<section class="container-fluid p-0">
    <div class="text-center bg-success text-white py-5 mb-5">
        <h1 class="fs-2 text-uppercase text-white">Leading the Conversation: Our Speakers</h1>
        <p>Explore the expertise, insights, and inspiration brought to you by our dynamic and
            accomplished speakers.</p>
    </div>
    <div class="container pb-5">
        <div class="row pt-5">
            <!-- Speaker 1 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Ajit Gulabchand.png"
                    alt="Jack Human" class="speaker-img">
                <div class="pt-3 pt-lg-0">
                    <h5>Ajit Gulabchand</h5>
                    <p class="speaker-role text-primary">Chief Guest</p>
                    <p class="speaker-description">Renowned businessman and visionary leader, Ajit Gulabchand has
                        made significant contributions to the construction industry, pioneering sustainable urban
                        development with an emphasis on innovation and community growth.</p>
                </div>
            </div>
            <!-- Speaker 2 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Ar. Hafeez Contractor.png"
                    alt="Sara Brudt" class="speaker-img">
                <div class="pt-3 pt-lg-0">
                    <h5>Ar. Hafeez Contractor</h5>
                    <p class="speaker-role text-primary">Architect Hafeez Contractor</p>
                    <p class="speaker-description">A distinguished architect, Hafeez Contractor is celebrated for
                        his groundbreaking urban designs, creating iconic structures that seamlessly blend
                        functionality with aesthetic beauty, and redefining India's architectural landscape.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <!-- Speaker 3 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Mr. Sayaji Shinde.png"
                    alt="Jack Human" class="speaker-img">
                <div class="pt-3 pt-lg-0">
                    <h5>Mr. Sayaji Shinde</h5>
                    <p class="speaker-role text-primary">Actor & Social Activist</p>
                    <p class="speaker-description">Sayaji Shinde is a well-known Indian actor, recognized for his
                        versatile roles in Marathi and Hindi cinema. He is celebrated for his intense performances
                        in both character and antagonist roles across various films.</p>
                </div>
            </div>
            <!-- Speaker 4 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Anil Kashyap.png"
                    alt="Sara Brudt" class="speaker-img">
                <div class="pt-3 pt-lg-0">
                    <h5>Dr. Anil Kashyap</h5>
                    <p class="speaker-role text-primary">President and Chancellor, NICMAR</p>
                    <p class="speaker-description">A prominent environmental scientist, Dr. Kashyap is committed to
                        promoting eco-sustainable solutions in urban planning, leveraging research and innovations
                        to minimize ecological footprints and enhance environmental resilience.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Speaker 5 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Sushma Kulkarni.png"
                    alt="Jack Human" class="speaker-img">
                <div class="pt-3 pt-lg-0">
                    <h5>Dr. Sushma Kulkarni</h5>
                    <p class="speaker-role text-primary">Vice Chancellor, NICMAR</p>
                    <p class="speaker-description">Dr. Kulkarni is a renowned architect and educator, specializing
                        in sustainable building practices and energy-efficient design. Her work integrates advanced
                        technologies with eco-friendly solutions to create future-ready environments.</p>
                </div>
            </div>
            <!-- Speaker 6 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Mr. Abhiir Bhalla.png"
                    alt="Sara Brudt" class="speaker-img">
                <div class="pt-3 pt-lg-0">
                    <h5>Mr. Abhiir Bhalla</h5>
                    <p class="speaker-role text-primary">Youth Environmentalist</p>
                    <p class="speaker-description">A youth environmentalist and passionate sustainability advocate,
                        Abhiir inspires action through his initiatives for environmental conservation, raising
                        awareness about green practices to build a better, eco-friendly future.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Speaker 7 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Mr. Pankaj Dharkar.png"
                    alt="Jack Human" class="speaker-img">
                <div class="pt-3 pt-lg-0">
                    <h5>Mr. Pankaj Dharkar</h5>
                    <p class="speaker-role text-primary">Founder - President of PDA</p>
                    <p class="speaker-description">Founder-President of PDA and a prominent engineering consultant,
                        Pankaj specializes in advanced HVAC systems and energy-efficient technologies, contributing
                        significantly to building management innovations.</p>
                </div>
            </div>
            <!-- Speaker 8 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Hariharan Chandrashekhar.png"
                    alt="Sara Brudt" class="speaker-img">
                <div class="pt-3 pt-lg-0">
                    <h5>Dr. Hariharan Chandrashekhar.</h5>
                    <p class="speaker-role text-primary">Economist</p>
                    <p class="speaker-description">Economist and sustainability leader, Dr. Chandrashekhar
                        integrates economic development with environmental strategies, fostering balanced growth
                        while promoting eco-friendly practices for long-term global sustainability.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Spekers -->


<!-- Start Award Section  -->
<section class="bg-primary award-container">
    <div class="opacity">
        <div class="container pb-5">
            <div class="text-center mb-5">
                <h5 class="fs-2 text-uppercase text-white">Award Prizes & Recognition</h5>
                <p class="text-white">Efficient environmental solutions and sustainability for a greener future.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                        style="background-color: #f8fbff; height: auto;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Trophies for each category</h5>
                            <p class="mb-2">Elegant trophies honoring outstanding contributions across various
                                sustainability categories.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                        style="background-color: #f8fbff; height: auto;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Special certificates of excellence</h5>
                            <p class="mb-2">Prestigious certificates recognizing exceptional achievements in
                                environmental innovation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                        style="background-color: #f8fbff; height: auto;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/completed-task.png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Exclusive media coverage</h5>
                            <p class="mb-2">Extensive media exposure showcasing winners' efforts on leading
                                environmental and industry platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                        style="background-color: #f8fbff; height: auto;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/visionary.png"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Innovator's Spotlight Award</h5>
                            <p class="mb-2">Special recognition for groundbreaking solutions driving environmental
                                sustainability and innovation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                        style="background-color: #f8fbff; height: auto;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Post-event promotion on Green Conclave platforms</h5>
                            <p class="mb-2">Continuous spotlight through features on Green Conclave’s digital and
                                social platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                        style="background-color: #f8fbff; height: auto;">
                        <div class="me-3"
                            style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                            <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg"
                                alt="Service Icon" style="width: 40px; height: 40px;">
                        </div>
                        <div>
                            <h5 class="mb-2">Feature in the Green Conclave Sustainability Report</h5>
                            <p class="mb-2">Inclusion in the annual report highlighting winners' sustainability
                                initiatives and success stories.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Awrad Section -->


<!-- Start Utube Videos -->
<!-- <section class="container-fluid pt-3 pb-5 mx-auto text-center">

        <div class="container my-5">
            <h1 class="text-center fs-2 mb-5 text-uppercase">Green Conclave 2023 - Scroll to Auto Play YouTube Video
            </h1>

            <div id="videoSection">
                <iframe id="youtubeVideo" src="https://www.youtube.com/embed/-_-hezIflJo" class="unique-video-frame"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>
            </div>
        </div>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe class="" style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section> -->
<!-- End Utube Videos -->


<!-- Start Key Achivement -->
<section class="container-fluid bg-light py-5">
    <div class="container my-3">
        <h2 class="text-center text-uppercase mb-5">Key Achievements</h2>
        <p class="py-0">At Green Conclave, we take immense pride in our accomplishments
            that showcase our commitment to
            sustainability. From initiating eco-friendly practices to contributing towards a greener future, our
            milestones represent the collective effort of a dedicated team striving for environmental excellence and
            innovative solutions.</p>
        <div class="row g-4">
            <!-- Achievement Card 1 -->
            <div class="col-md-6 col-lg-4 ">
                <div class="achievement-card">
                    <img src="<?php bloginfo('template_directory'); ?>/img/dummy-image_m.jpg" alt="Achievement 1">
                    <div class="overlay"></div>
                    <div class="content-ac">
                        <h5>Widespread Media Recognition</h5>
                        <p>Extensive media coverage across national and regional platforms.</p>
                    </div>
                </div>
            </div>
            <!-- Achievement Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="achievement-card">
                    <img src="<?php bloginfo('template_directory'); ?>/img/dummy-image_m.jpg" alt="Achievement 2">
                    <div class="overlay"></div>
                    <div class="content-ac">
                        <h5>Strategic Partnerships for Net Zero</h5>
                        <p>Collaborative discussions that resulted in new partnerships aimed at accelerating the
                            journey toward Net Zero.</p>
                    </div>
                </div>
            </div>
            <!-- Achievement Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="achievement-card">
                    <img src="<?php bloginfo('template_directory'); ?>/img/dummy-image_m.jpg" alt="Achievement 3">
                    <div class="overlay"></div>
                    <div class="content-ac">
                        <h5>Innovative Sustainability Initiatives</h5>
                        <p>Green Conclave has launched a series of groundbreaking sustainability initiatives.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Key Achivement -->


<!-- <div class="owl-carousel ">
    <div class="item" style="width:10%"><h4>1</h4></div>
    <div class="item" style="width:10%"><h4>2</h4></div>
    <div class="item" style="width:10%"><h4>3</h4></div>
</div> -->

<!-- Start Images Gallary -->
<section class="container-fluid">
    <div class="container client-container pt-5 px-0 mx-auto" style="max-width: 1200px;">
        <h2 class="text-center" style="margin-bottom: 20px;">Green Conclave Event 24</h2>
        <div class="section-line" style="height: 4px; width: 80px; background-color: #000; margin: 10px auto;">
        </div>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/1.jpg" alt="Image 1"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/2.jpg" alt="Image 2"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/3.jpg" alt="Image 3"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/4.jpg" alt="Image 4"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/5.jpg" alt="Image 5"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/6.jpg" alt="Image 6"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/7.jpg" alt="Image 7"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/8.jpg" alt="Image 8"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/9.jpg" alt="Image 9"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/10.jpg" alt="Image 10"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/11.jpg" alt="Image 11"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/12.jpg" alt="Image 12"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/13.jpg" alt="Image 13"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/14.jpg" alt="Image 14"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/15.jpg" alt="Image 15"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/16.jpg" alt="Image 16"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/17.jpg" alt="Image 17"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/18.jpg" alt="Image 18"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/19.jpg" alt="Image 19"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/20.jpg" alt="Image 20"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/21.jpg" alt="Image 21"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/22.jpg" alt="Image 22"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/23.jpg" alt="Image 23"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/24.jpg" alt="Image 24"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/25.jpg" alt="Image 25"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/26.jpg" alt="Image 26"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/27.jpg" alt="Image 27"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/28.jpg" alt="Image 28"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/29.jpg" alt="Image 29"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/30.jpg" alt="Image 30"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/31.jpg" alt="Image 31"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/32.jpg" alt="Image 32"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/33.jpg" alt="Image 33"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/34.jpg" alt="Image 34"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/35.jpg" alt="Image 35"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/36.jpg" alt="Image 36"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/37.jpg" alt="Image 37"
                        style="width: 100%; height: auto;">
                </div>
            </div>
            <div class="item">
                <div class="image-box">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/38.jpg" alt="Image 38"
                        style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Images Gallary -->


<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container pb-5">
        <div class="mx-auto text-center" style="max-width: 500px;">
            <h1 class="mb-5">Frequently Asked Questions</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion" id="accordionGreenConclave24_1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is the primary focus of Green Conclave 2024?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionGreenConclave24_1">
                            <div class="accordion-body">
                                Green Conclave 2024 will emphasize innovative solutions to combat climate change,
                                promote biodiversity, and foster circular economies.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Will Green Conclave 2024 have virtual participation options?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionGreenConclave24_1">
                            <div class="accordion-body">
                                Yes, we will have live-streaming and virtual sessions to allow global participation
                                from anywhere.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Are there any networking opportunities during Green Conclave 2024?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionGreenConclave24_1">
                            <div class="accordion-body">
                                Yes, there will be designated networking sessions where participants can meet with
                                like-minded individuals, companies, and innovators.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can I showcase my sustainable products at Green Conclave 2024?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionGreenConclave24_1">
                            <div class="accordion-body">
                                Yes, there will be an exhibition area dedicated to showcasing green technologies and
                                sustainable products. Interested exhibitors can apply on our website.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionGreenConclave24_2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Will there be any international speakers at Green Conclave 2024?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionGreenConclave24_2">
                            <div class="accordion-body">
                                Yes, we are hosting renowned international environmental leaders and experts who
                                will share their knowledge and insights.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How can businesses support Green Conclave 2024?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionGreenConclave24_2">
                            <div class="accordion-body">
                                Businesses can sponsor, partner, or participate as exhibitors to demonstrate their
                                commitment to sustainability and green innovation.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What is the goal of the Green Conclave 2024 event?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionGreenConclave24_2">
                            <div class="accordion-body">
                                The goal is to promote sustainability and discuss actionable solutions for
                                addressing the environmental challenges of our time.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How can I stay updated about Green Conclave 2024?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionGreenConclave24_2">
                            <div class="accordion-body">
                                You can subscribe to our newsletter or follow us on social media to receive regular
                                updates about the event.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

<?php
// get_sidebar();
get_footer();