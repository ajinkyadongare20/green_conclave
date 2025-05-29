<?php
/**
 * The main template file
 * Template Name: Event2
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
<div class="container-fluid py-5 gc23-header banner-heading">
    <div class="container pt-5 pb-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 align-self-end text-start m-0">
                <div class="d-flex justify-content-end align-items-end about-header-card pt-5 pt-lg-0 pb-0 pb-lg-5">
                    <div class="card banner-header-text">
                        <p class="text-dark mb-0">
                            Green Conclave 23 was a transformative event that brought together sustainability
                            pioneers, thought leaders, and innovators to share groundbreaking ideas and solutions.
                            The event fostered collaboration and sparked new initiatives aimed at promoting
                            eco-friendly practices, driving change, and building a greener, more sustainable future
                            for all.
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
            <h1 class="fs-2 fw-bold text-start text-uppercase">Green Conclave 2023 - The Inaugural Edition</h1>
        </div>

        <div class="row mt-5">
            <div class="col-lg-8 text-start d-lg-flex flex-column justify-content-start">
                <ul class="list-unstyled">
                    <li>
                        <strong>At Green Conclave,</strong> we have consistently brought together
                        thought leaders, innovators, and industry pioneers to discuss, share, and implement
                        sustainability solutions.
                    </li>
                    <li>
                        <strong>Our inaugural edition</strong> marked the beginning of what is now recognized as a
                        premier event in the sustainability calendar.
                    </li>
                </ul>
                <h3 class="mt-4"><span class="text-uppercase"> Theme:</span>
                    Sustainability in High Rise</h3>
                <p class="mt-3">
                    The inaugural edition of Green Conclave marked the beginning of what is now recognized as a
                    premier event in the sustainability calendar. Focused on high-rise buildings and sustainable
                    urban design, GC23 laid the groundwork for building a community of sustainability advocates,
                    particularly in the context of vertical urbanization.
                </p>
                <p>
                    The event explored energy-efficient building practices, waste management, and sustainable design
                    strategies for high-rise structures.
                </p>
                <p>Green Conclave, we unite thought leaders, innovators, and industry pioneers to champion
                    sustainability. Recognized as a premier event in the sustainability calendar, our inaugural
                    edition, themed "Sustainability in High Rise," focused on energy-efficient practices, waste
                    management, and sustainable urban design for high-rise structures, fostering a community of
                    advocates.
                </p>
                <p>Green Conclave has become a hallmark event in the sustainability calendar, fostering
                    collaboration among industry pioneers, thought leaders, and innovators. With the theme
                    "Sustainability in High Rise," the inaugural edition emphasized energy-efficient practices,
                    waste management, and sustainable urban design, laying a solid foundation for advancing vertical
                    urbanization and community building.</p>
            </div>

            <!-- Image Section -->
            <div class="col-lg-4 d-flex flex-column align-items-center">
                <!-- Image Preview -->
                <img src="<?php bloginfo('template_directory'); ?>/img/events/gc23_boucher.jpg" alt="Download Brochure"
                    class="img-fluid download-img">

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
                            <img src="<?php bloginfo('template_directory'); ?>/img/events/gc23_boucher.jpg"
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
                        <li>Energy-Efficient Building Practices</li>
                        <li>Waste Management Strategies</li>
                        <li>Sustainable Design for High-Rise Structures</li>
                        <li>Vertical Urbanization Solutions</li>
                        <li>Green Building Innovations</li>
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
                        <li>Urban Sustainability Frameworks</li>
                        <li>Renewable Energy Integration</li>
                        <li>Lifecycle Analysis of Buildings</li>
                        <li>Climate Resilient Urban Design</li>
                        <li>Smart Cities and IoT in Sustainability</li>
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
                        <li>Net Zero Strategies for High Rises</li>
                        <li>Sustainable Construction Materials</li>
                        <li>Impact of Urban Density</li>
                        <li>Future of Urban Transportation</li>
                        <li>Community-Centric Design</li>
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
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Christopher Charles Benninger.png"
                    alt="Jack Human" class="speaker-img">
                <div>
                    <h5>Christopher Charles Benninger</h5>
                    <p class="speaker-role text-primary">Chief Guest</p>
                    <p class="speaker-description">Chief Guest and globally acclaimed architect, Christopher is
                        celebrated for his iconic urban planning projects and dedication to sustainable design,
                        shaping modern cities with visionary concepts and innovative approaches.</p>
                </div>
            </div>
            <!-- Speaker 2 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Cary Chan.png"
                    alt="Sara Brudt" class="speaker-img">
                <div>
                    <h5>Dr. Cary Chan</h5>
                    <p class="speaker-role text-primary">Executive Director Hong Kong Green Building Council</p>
                    <p class="speaker-description">Executive Director of the Hong Kong Green Building Council, Dr.
                        Chan is a pioneer in green technologies, advocating for sustainable urban environments and
                        innovative solutions to combat climate challenges.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <!-- Speaker 3 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Dr. Ken Yeang.png"
                    alt="Jack Human" class="speaker-img">
                <div>
                    <h5>Dr. Ken Yeang</h5>
                    <p class="speaker-role text-primary">Architect and Ecologist</p>
                    <p class="speaker-description">An architect and ecologist, Dr. Yeang is a leader in bioclimatic
                        design, blending nature with architecture through eco-friendly innovations and emphasizing
                        harmony between the built environment and the natural world.</p>
                </div>
            </div>
            <!-- Speaker 4 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Ar. Mili Majumda.png"
                    alt="Sara Brudt" class="speaker-img">
                <div>
                    <h5>Ar. Mili Majumdar</h5>
                    <p class="speaker-role text-primary">Architect-Building Technology</p>
                    <p class="speaker-description">A leading architect and sustainability expert, Mili specializes
                        in energy-efficient building technologies and advocates for sustainable architectural
                        practices to create eco-friendly spaces that support modern living needs.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <!-- Speaker 5 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Ar. Anuja Sawant.png"
                    alt="Jack Human" class="speaker-img">
                <div>
                    <h5>Ar. Anuja Sawant</h5>
                    <p class="speaker-role text-primary">Principal Architect</p>
                    <p class="speaker-description">Principal Architect and design visionary, Anuja combines
                        creativity with practicality to deliver innovative architectural solutions, focusing on
                        client satisfaction and modern, sustainable design principles.</p>
                </div>
            </div>
            <!-- Speaker 6 -->
            <div class="col-12 col-md-6 speaker-card">
                <img src="<?php bloginfo('template_directory'); ?>/img/spekears_images/Mr. Abhiir Bhalla.png"
                    alt="Sara Brudt" class="speaker-img">
                <div>
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
                <div>
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
                <div>
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
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
            <div class="item">
                <div class="youtb-video">
                    <iframe style="width: 100%; max-width: 360px; height: 200px;"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section> -->
<!-- End Utube Videos -->


<!--Start Key Achivement  -->
<section class="container-fluid bg-light py-5">
    <div class="container my-3">
        <h2 class="text-center text-uppercase mb-5">Key Achievements</h2>
        <p>At Green Conclave, we take immense pride in our accomplishments
            that showcase our commitment to
            sustainability. From initiating eco-friendly practices to contributing towards a greener future, our
            milestones represent the collective effort of a dedicated team striving for environmental excellence and
            innovative solutions.</p>
        <div class="row g-4">
            <!-- Achievement Card 1 -->
            <div class="col-md-6 col-lg-4">
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


<!-- Start Images Gallary -->
<section class="container-fluid">
    <div class="container client-container pt-5 px-0 mx-auto" style="max-width: 1200px;">
        <h2 class="text-center" style="margin-bottom: 20px;">Green Conclave Event 23</h2>
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
                <div class="accordion" id="accordionGreenConclave1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is Green Conclave 2023?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionGreenConclave1">
                            <div class="accordion-body">
                                Green Conclave 2023 is an event focusing on sustainability, eco-friendly
                                innovations, and creating awareness on environmental protection.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Who can participate in Green Conclave 2023?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionGreenConclave1">
                            <div class="accordion-body">
                                Anyone passionate about environmental sustainability, including individuals,
                                businesses, organizations, and students, can participate.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What activities will be part of Green Conclave 2023?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionGreenConclave1">
                            <div class="accordion-body">
                                Green Conclave 2023 will include panel discussions, sustainability workshops,
                                networking events, and exhibitions on green technologies.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can I register for Green Conclave 2023?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionGreenConclave1">
                            <div class="accordion-body">
                                Registration can be done online through the official Green Conclave 2023 website.
                                Fill out the registration form and submit the required details.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion" id="accordionGreenConclave2">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Are there any fees to attend Green Conclave 2023?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionGreenConclave2">
                            <div class="accordion-body">
                                There will be both free and paid sessions depending on the type of activity or
                                workshop. Pricing details will be provided upon registration.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How does Green Conclave 2023 promote sustainability?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionGreenConclave2">
                            <div class="accordion-body">
                                By providing a platform for sustainable innovations, raising awareness about
                                eco-friendly practices, and fostering collaborations across industries.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What industries are involved in Green Conclave 2023?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionGreenConclave2">
                            <div class="accordion-body">
                                Green Conclave 2023 involves industries such as renewable energy, sustainable
                                construction, waste management, and eco-friendly manufacturing.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How can I volunteer for Green Conclave 2023?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionGreenConclave2">
                            <div class="accordion-body">
                                Volunteers can sign up through the official website by submitting their details and
                                selecting roles during the event.
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