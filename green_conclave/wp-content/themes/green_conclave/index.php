<?php
/**
 * The main template file
 * Template Name: Index
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
<div class="container-fluid pt-5 home-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-start mb-lg-5">
                <div class="d-flex justify-content-start align-items-start py-3">
                    <img src="<?php bloginfo('template_directory'); ?>/img/gc_images/03.png" alt="Ishare"
                        class="index-banner-img img-fluid">
                </div>
                <p class="text-dark mb-4">Green Conclave Offers Straightforward
                    Industrial Refrigeration Solutions Tailored For Efficiency And Reliability. We Streamline
                    Complex Systems, Ensuring Seamless Performance And Minimal Downtime. Trust Us To Simplify Your
                    Refrigeration Needs With Innovative Technology And Expert Support For Optimal Cooling And Energy
                    Savings.</p>
                <!-- Acronym Section -->
                <div class="py-3">
                    <img src="<?php bloginfo('template_directory'); ?>/img/gc_images/11.png" alt="Ishare"
                        class="img-fluid">
                </div>
                <div class="pt-0 pt-lg-3">
                    <img src="<?php bloginfo('template_directory'); ?>/img/gc_images/02.png" alt="Ishare"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6 align-self-center text-center mb-lg-5 pb-5">
                <!-- Event Information Section -->
                <div class="container d-flex justify-content-end align-items-end p-0">
                    <div class="event-container">
                        <div class="d-flex justify-content-center gap-4 flex-wrap">
                            <div class="card px-4 text-center rounded-0 border-0" style="width: 18rem;">
                                <h5 class="card-title mb-3">Registration link</h5>
                                <img src="<?php bloginfo('template_directory'); ?>/img/index_images/Day1.png"
                                    alt="Day 1 QR Code" style="width: 200px; height: 180px; margin: auto;">
                                <a href="https://ishraehq.in/Admin/CalenderEventMaster/Registration_new/y86oGrUlKUE="
                                    target="_blank">
                                    <button
                                        style="background: #007bff; color: #fff; font-weight: bold; padding: 10px 15px; border: none; border-radius: 5px; width: 100%; margin-top: 15px;">
                                        Register Now
                                    </button>
                                </a>
                            </div>
                        </div>
                        <h5 class="text-dark py-3 fs-3">Event Details</h5>

                        <!-- Date -->
                        <div class="event-info">
                            <div class="event-icon">
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                            <p id="eventDate" class="event-text align-self-end"> Saturday, January 18, 2025</p>
                        </div>

                        <!-- Time -->
                        <div class="event-info">
                            <div class="event-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <p id="eventTime" class="event-text align-self-end">09:00 AM Onwards</p>
                        </div>

                        <!-- Location -->
                        <div class="event-info">
                            <div class="event-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p class="event-text align-self-end">Suzlon One Earth, Magarpatta Pune</p>
                        </div>

                        <!-- Button -->
                        <a href="https://maps.app.goo.gl/pvtWJYBeem2FNqkGA" target="_blank" rel="noopener noreferrer">
                            <button class="event-button mt-2">View on Map</button>
                        </a>
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


<!--Start Introduction Section -->
<section class="bg-light py-5 text-center">
    <div class="container text-start text-lg-center px-3">
        <!-- Welcome Title -->
        <h5 class="fs-3 fw-bold text-success mb-4 text-uppercase">Welcome to Green Conclave 2025 (GC25)</h5>
        <!-- Event Details -->
        <p class="mb-4 fs-6">
            Green Conclave, hosted by the <strong>ISHRAE Pune Chapter</strong>, is India’s premier event on
            sustainable HVAC, refrigeration, and cold chain technologies.
            Entering its third edition, GC25 is centered around the theme <strong>“Shunya - Our Dharma to Net
                Zero.”</strong>
        </p>
        <p class="mb-5 fs-6">
            This year’s conclave gathers industry experts, policymakers, & innovators to discuss modern trends
            and
            strategies for achieving Net Zero.
        </p>
        <!-- About the Theme -->
        <div class="py-2">
            <h5 class="fs-3 fw-bold text-primary text-uppercase mb-3">Shunya - Our Dharma to Net Zero</h5>
            <p class="text-muted fs-6">
                GC25 explores Net Zero as both a goal and a responsibility, focusing on <strong>Air, Water,
                    Fire,
                    Earth,</strong> and <strong>Aether</strong>—the five environmental elements.
                This theme underscores our commitment to driving sustainability, fostering collaboration, and
                promoting a holistic approach toward achieving Net Zero.
            </p>
            <p class="text-muted fs-6">
                Together, we will address key challenges in energy efficiency, waste reduction, and carbon
                neutrality.
            </p>
        </div>
    </div>
</section>
<!--End Introduction Section -->


<!-- Start Section  -->
<section class="bg-primary myhome-container">
    <div class="opacity">
        <div class="container pb-5">
            <div class="text-center mb-5">
                <h2 class="text-white text-uppercase">Key Features of Green Conclave</h2>
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
                            <h5 class="mb-2">Keynote Speakers & Thought Leaders</h5>
                            <p class="mb-2">Gain insights from industry experts and policy leaders on sustainability
                                and Net Zero strategies.</p>
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
                            <h5 class="mb-2">Panel Discussions & Knowledge Sharing</h5>
                            <p class="mb-2">Explore trends in cooling, refrigeration, and energy systems through
                                engaging panel discussions.</p>
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
                            <h5 class="mb-2">Cutting-edge Innovations on Display</h5>
                            <p class="mb-2">Discover innovative green technologies and energy-efficient solutions
                                for achieving the Net Zero vision.</p>
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
                            <h5 class="mb-2">Real-time Engagement & Surveys</h5>
                            <p class="mb-2">Participate in surveys and live discussions to shape event topics and
                                actionable takeaways.</p>
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
                            <h5 class="mb-2">Focus on Collaboration & Networking</h5>
                            <p class="mb-2">Connect with peers, industry leaders, and changemakers to inspire
                                collaborative sustainable actions.</p>
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
                            <h5 class="mb-2">Multi-dimensional Media Coverage</h5>
                            <p class="mb-2">Experience widespread media coverage, social updates, and post-event
                                visibility for sponsors and partners.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->


<!-- About Green Conclave -->
<div class="container py-5">
    <div class="row py-0 py-lg-5">
        <div class="col-md-6">
            <img src="<?php bloginfo('template_directory'); ?>/img/GC'23 Group Photo.jpg" alt="Building"
                class="img-fluid home-index-main">
        </div>
        <div class="col-md-6 d-flex flex-column justify-content-center ps-3 hero-home-desc">
            <h5 class="fs-2 text-dark fw-bold">About Green Conclave 2025</h5>
            <p>
                Green Conclave is India’s premier sustainability event, driving the transition to a Net Zero
                economy. With its third edition in 2025, the event gathers industry leaders, policymakers, and
                sustainability advocates to address climate change, energy transition, and environmental
                conservation. Focused on the five elements of nature—Earth, Water, Fire, Air, and Aether—Green
                Conclave promotes innovative solutions, sustainable policies, and technological advancements. Join
                us in shaping a greener future through collaboration, thought leadership, and actionable outcomes.
            </p>
            <a href="https://drive.google.com/file/d/15SKSvd4Eybd0MLts7Vev9_wdKmFfO9I8/view?usp=drive_link"
                target="_blank" rel="noopener noreferrer">
                <button class="btn btn-success btn-lg mt-3 w-100">View More</button>
            </a>
        </div>
    </div>
</div>
<!--  -->


<!-- Start this security -->
<section class="container">
    <div class="text-start text-lg-center py-5">
        <h5 class="fs-3 fw-bold text-dark text-uppercase mb-3">Green Conclave: Sustainable Development</h5>
        <p class="mb-4">Promote eco-friendly practices and ensure sustainability with industry-leading green
            initiatives.</p>
        <div>
            <a href="https://ishraehq.in/Admin/CalenderEventMaster/Registration_new/y86oGrUlKUE=" target="_blank">
                <button class="btn btn-success mb-5">Join the Movement</button>
            </a>
        </div>
        <div class="row text-start">
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Carbon Footprint Reduction <span
                            class="badge bg-success text-white">PREMIUM</span></h5>
                    <p class="mb-0">Implement carbon offsetting measures and eco-friendly strategies to minimize
                        your organization's environmental impact.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Renewable Energy Integration</h5>
                    <p class="mb-0">Embrace renewable energy sources like solar and wind power to reduce
                        dependency
                        on fossil fuels.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Sustainable Practices <span class="badge bg-success text-white">GREEN
                            INITIATIVE</span></h5>
                    <p class="mb-0">Incorporate zero-waste practices and resource-efficient processes to
                        minimize
                        environmental footprint.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-start mb-4">
                <div class="me-3">
                    <span class="badge bg-dark rounded-circle" style="padding: 8px;">
                        <i class="bi bi-check-lg text-white"></i>
                    </span>
                </div>
                <div>
                    <h5 class="fw-bold">Green Certifications</h5>
                    <p class="mb-0">Achieve sustainability certifications and align your operations with global
                        environmental standards.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Green Conclave Trust & Sustainability Section -->
<section class="container-fluid p-0">
    <div class="bg-success text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-12 col-lg-8 mb-4 mb-lg-0 text-start text-lg-start">
                    <h5 class="fs-3 fw-bold text-uppercase text-white">Trust & Sustainability in Green Conclave</h5>
                    <p class="my-4">
                        We are committed to fostering a sustainable future, ensuring that our products and
                        practices
                        support environmental stewardship and long-term ecological balance.
                        Our Green Conclave is a hub for all things eco-friendly, offering solutions that benefit
                        both the planet and business.
                    </p>
                    <div class="text-center text-lg-start">
                        <a href="https://ishraehq.in/Admin/CalenderEventMaster/Registration_new/y86oGrUlKUE="
                            target="_blank">
                            <button class="btn btn-light">Join the Green Movement</button>
                        </a>
                    </div>
                </div>
                <!-- Image Section -->
                <div class="col-12 col-lg-4 text-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/trust_security.png" alt="Green Conclave"
                        class="img-fluid rounded" style="max-height: 300px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End this security  -->


<!-- Start Event Date -->
<section class="container-fluid py-5 schedule-container">
    <div class="container pt-3">
        <h5 class="fs-2 fw-bold text-uppercase text-center mb-3">Green Conclave: Conference Schedule</h5>
        <p class="mb-4 text-center">
            Comprehensive schedule highlighting eco-friendly initiatives and industry-leading practices
        </p>
        <ul class="nav nav-pills justify-content-center mb-3 tab-buttons" role="tablist"
            style="border-bottom: 4px solid #198754;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#day1" type="button" role="tab">
                    Green Conclave
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#day2" type="button" role="tab">
                    CEO Round Table
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#day3" type="button" role="tab">
                    Awards Night
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Day 1 Content -->
            <div class="tab-pane fade show active" id="day1" role="tabpanel">
                <div class="bg-success py-4 text-center text-white my-4">
                    <p class="mb-1 fw-bold">Saturday, January 18, 2025</p>
                    <p class="mb-1">
                        <span class="fw-bold">09:00 AM</span> Onwards
                    </p>
                    <p class="mb-0">
                        <span class="fw-bold">Location:</span> Suzlon One Earth, Magarpatta, Pune
                    </p>
                </div>

                <table class="table table-bordered border-success m-0">
                    <thead class="table-light text-center border-success">
                        <tr>
                            <th style="vertical-align: middle; width: 20%;">Agenda</th>
                            <th style="vertical-align: middle; width: 40%;">Topic</th>
                            <th style="vertical-align: middle; width: 20%;">Speaker</th>
                            <th style="vertical-align: middle; width: 20%;">Session Chair</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td colspan="4" class="fw-bold">Registration</td>
                        </tr>
                        <tr class="text-center">
                            <td colspan="4" class="fw-bold">Green Conclave 2025 - Inauguration</td>
                        </tr>
                        <tr>
                            <td>Master Speaker 01</td>
                            <td>From Ambition to Action - A global Case Study of Net Zero Implementation and Impact</td>
                            <td>
                                <ul class="m-0">
                                    <li>Ar.Karin Missenberger</li>
                                    <li>Coop Himmalblau</li>
                                    <li>Vienna</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Panel Discussion 01</td>
                            <td>Policies and Programs for Accelerating NETZERO</td>
                            <td>
                                <ul class="m-0">
                                    <li>Ms. Shruti Narayan</li>
                                    <li>Mr. Aditya Chunekar</li>
                                    <li>Mr. R.S. Kulkarni</li>
                                    <li>Jai Dhar Gupta</li>
                                </ul>
                            </td>
                            <td>Mr. Ashish Rakheja</td>
                        </tr>

                        <tr>
                            <td>Panel Discussion 02</td>
                            <td>Policies and Programs for Accelerating NETZERO</td>
                            <td>
                                <ul class="m-0">
                                    <li>Ms. Shruti Narayan</li>
                                </ul>
                            </td>
                            <td>Mr. Ashish Rakheja</td>
                        </tr>

                        <tr>
                            <td>Panel Discussion 02</td>
                            <td>Decarbonisation Policies and Programs at City Level</td>
                            <td>
                                <ul class="m-0">
                                    <li>Ms Shruti Narayan</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Panel Discussion 03</td>
                            <td>Energy Policies for NetZero</td>
                            <td>
                                <ul class="m-0">
                                    <li>Mr Aditya Chunekar</li>
                                    <li>PRAYAS Energy Group</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Panel Discussion 03</td>
                            <td>Air Quality Policies for Healthy India</td>
                            <td>
                                <ul class="m-0">
                                    <li>Mr Jai Dhar Gupta</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Panel Discussion 03</td>
                            <td>Standards for Low Energy Cooling</td>
                            <td>
                                <ul class="m-0">
                                    <li>R S Kulkarni</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>

                        <tr class="text-center">
                            <td colspan="4" class="fw-bold">Lunch + Visit to Stalls</td>
                        </tr>
                        <tr>
                            <td>Panel Speaker 01</td>
                            <td>Smart Technologies for Sustainable Cooling</td>
                            <td>
                                <ul class="m-0">
                                    <li>Mr Shailendra Sharma</li>
                                    <li>MD.Azbil India Private
                                        Limited</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Panel Speaker 02</td>
                            <td>Solar Passive Architectural Inventions</td>
                            <td>Ar Shekhar Ganti,Ganti &
                                Associates Inc. (USA)</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Panel Speaker 03</td>
                            <td>District Cooling Opportunities</td>
                            <td>Dr. Satish Kumar, AEEE</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Panel Speaker 04</td>
                            <td>Ground Source Heat pumps as sustainable Cooling
                                option</td>
                            <td>Mr Singh</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Panel Speaker 05</td>
                            <td>Low Energy Cooling System</td>
                            <td>Mr. Jagdeep Singh</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Panel Discussion 02</td>
                            <td>Role of Sustainable Cooling and Energy Efficiency in
                                Decarbonising Built Environment</td>
                            <td>
                                <ul class="m-0">
                                    <li>Mr. Jagdeep Singh</li>
                                    <li>Mr. Shailendra Sharma</li>
                                    <li>Ar. Shekhar Ganti</li>
                                    <li>Dr. Satish Kumar</li>
                                </ul>
                            </td>
                            <td>Mr. N. S. Chandrasekar</td>
                        </tr>

                        <tr>
                            <td>Master Speaker 02</td>
                            <td></td>
                            <td>
                                <ul class="m-0">
                                    <li>Ar Deependra Prasad</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr class="text-center">
                            <td colspan="4" class="fw-bold">High Tea</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Day 2 Content -->
            <div class="tab-pane fade show" id="day2" role="tabpanel">
                <div class="bg-success py-4 text-center text-white my-4">
                    <p class="mb-1 fw-bold">Saturday, January 18, 2025</p>
                    <p class="mb-1">
                        <span class="fw-bold">12 Noon</span> Onwards
                    </p>
                    <p class="mb-0">
                        <span class="fw-bold">Location:</span> Suzlon One Earth, Magarpatta, Pune
                    </p>
                </div>

                <table class="table table-bordered border-success m-0">
                    <thead class="table-light text-center border-success">
                        <tr>
                            <th style="vertical-align: middle; width: 20%;">Agenda</th>
                            <th style="vertical-align: middle; width: 40%;">Topic</th>
                            <th style="vertical-align: middle; width: 20%;">Speaker</th>
                            <th style="vertical-align: middle; width: 20%;">Session Chair</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td colspan="4" class="fw-bold">Green Conclave 2025 - CEO Round Table</td>
                        </tr>
                        <tr>
                            <td>CEO Round Table Conference + Net Zero Charter Signing</td>
                            <td>Decarbonisation of Real Estate Value Chain: Each Player has a Role</td>
                            <td></td>
                            <td>
                                <ul class="m-0">
                                    <li>Mr.Pankaj Dharkar</li>
                                    <li>Dr. Sunita Purushottam</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Day 3 Content -->
            <div class="tab-pane fade show" id="day3" role="tabpanel">
                <div class="bg-success py-4 text-center text-white my-4">
                    <p class="mb-1 fw-bold">Saturday, January 18, 2025</p>
                    <p class="mb-1">
                        <span class="fw-bold">18:30 PM</span> Onwards
                    </p>
                    <p class="mb-0">
                        <span class="fw-bold">Location:</span> Suzlon One Earth, Magarpatta, Pune
                    </p>
                </div>

                <table class="table table-bordered border-success m-0">
                    <thead class="table-light text-center border-success">
                        <tr>
                            <th style="vertical-align: middle; width: 20%;">Agenda</th>
                            <th style="vertical-align: middle; width: 40%;">Topic</th>
                            <th style="vertical-align: middle; width: 20%;">Speaker</th>
                            <th style="vertical-align: middle; width: 20%;">Session Chair</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td colspan="4" class="fw-bold">Green Conclave 2025 - Awards Night</td>
                        </tr>
                        <tr>
                            <td>Sustainable Fashion Show</td>
                            <td>Circular Fashion Odyssey</td>
                            <td></td>
                            <td>
                                <ul class="m-0">
                                    <li>Ms. Simple Jain</li>
                                    <li>Ms. Sunita More</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Awards Show/td>
                            <td>SHUNYA Net Zero Accelerator Awards</td>
                            <td></td>
                            <td>
                                <ul class="m-0">
                                    <li>Ar. Namrata Dhamankar</li>
                                    <li>Mr. Amit Gulwade</li>
                                </ul>
                            </td>
                        <tr class="text-center">
                            <td colspan="4" class="fw-bold">Networking & Dinner</td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--End Event Date  -->


<!-- Pricing Start -->
<!-- <section class="container-fluid">
    <div class="container py-5">
        <p class="fs-2 text-center fw-bold text-dark mb-3">Partnership Program</p>
        <p class="text-center mb-5">Choose a plan that fits your needs and unlock the full potential of
            <strong>Green
                Conclave</strong>
            for efficient task management and collaboration.
        </p>
        <div class="row g-4">

            <div class="col-md-4 py-4">
                <div class="card border-0 h-100 bg-success text-white rounded-0">
                    <div class="card-body text-center position-relative px-4 py-5 plan-body">
                        <h5 class="card-title fw-bold text-white">Title Partner</h5>
                        <h2 class="fw-bold text-white">15,00,000<span class="fs-6 fw-normal text-white"> /
                                month</span>
                        </h2>
                        <p class="my-3">Exclusive sponsorship for maximum visibility and engagement.</p>
                        <h6 class="fw-bold text-white">Features Included:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2">Meet & Greet with 25+ VVIPs</li>
                            <li class="mb-2">Stall size: 8m x 2m</li>
                            <li class="mb-2">25 Free Delegate Passes</li>
                            <li class="mb-2">Logo at the top in all collateral</li>
                            <li class="mb-2">5 Video Teasers</li>
                            <li class="mb-2">Prominent website presence</li>
                            <li class="mb-2">Social media and press coverage</li>
                            <li class="mb-2">25 Free Delegate Passes</li>
                            <li class="mb-2">Delegate data for two days</li>
                        </ul>
                        <a href="#" class="btn btn-light w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-4">
                <div class="card border-0 h-100 pricing-card rounded-0">
                    <div class="card-body text-center px-4 py-5 plan-body">
                        <h5 class="card-title fw-bold">Platinum Partner</h5>
                        <h2 class="fw-bold">10,00,000<span class="fs-6 fw-normal"> / month</span></h2>
                        <p class="my-3 text-muted">Premium visibility with leading sponsorship benefits.</p>
                        <h6 class="fw-bold">Features Included:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2">Meet & Greet with 20+ VVIPs</li>
                            <li class="mb-2">Stall size: 6m x 2m</li>
                            <li class="mb-2">20 Free Delegate Passes</li>
                            <li class="mb-2">Logo at second-top position in all collateral</li>
                            <li class="mb-2">4 Video Teasers</li>
                            <li class="mb-2">Prominent website presence</li>
                            <li class="mb-2">Social media and press coverage</li>
                            <li class="mb-2">Delegate data for two days</li>
                            <li class="mb-2">Post-event mileage</li>
                        </ul>
                        <a href="#" class="btn btn-success w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-4">
                <div class="card border-0 h-100 pricing-card rounded-0">
                    <div class="card-body text-center px-4 py-5 plan-body">
                        <h5 class="card-title fw-bold">Gold Partner</h5>
                        <h2 class="fw-bold">7,00,000<span class="fs-6 fw-normal"> / month</span></h2>
                        <p class="my-3 text-muted">Strategic sponsorship with excellent exposure.</p>
                        <h6 class="fw-bold">Features Included:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2"> Meet & Greet with 15+ VVIPs/li>
                            <li class="mb-2"> Stall size: 4m x 2m</li>
                            <li class="mb-2"> 15 Free Delegate Passes</li>
                            <li class="mb-2"> Logo at third-top position in all collateral</li>
                            <li class="mb-2"> 3 Video Teasers</li>
                            <li class="mb-2"> Website presence</li>
                            <li class="mb-2"> Social media and press coverage</li>
                            <li class="mb-2"> Delegate data for two days</li>
                            <li class="mb-2"> Post-event mileage</li>
                        </ul>
                        <a href="#" class="btn btn-success w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-4">
                <div class="card border-0 h-100 pricing-card rounded-0">
                    <div class="card-body text-center px-4 py-5 plan-body">
                        <h5 class="card-title fw-bold">Silver Partner</h5>
                        <h2 class="fw-bold">3,00,000<span class="fs-6 fw-normal"> / month</span></h2>
                        <p class="my-3 text-muted">Support sustainability while showcasing your brand.</p>
                        <h6 class="fw-bold">Features Included:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2"> Meet & Greet with 10+ VVIPs</li>
                            <li class="mb-2"> Stall size: 3m x 2m</li>
                            <li class="mb-2"> 10 Free Delegate Passes</li>
                            <li class="mb-2"> Logo at fourth-top position in all collateral</li>
                            <li class="mb-2"> 2 Video Teasers</li>
                            <li class="mb-2"> Social media and press coverage</li>
                            <li class="mb-2"> Delegate data for two days</li>
                        </ul>
                        <a href="#" class="btn btn-success w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-4">
                <div class="card border-0  h-100 pricing-card rounded-0">
                    <div class="card-body text-center px-4 py-5 plan-body">
                        <h5 class="card-title fw-bold">Session Partner</h5>
                        <h2 class="fw-bold">2,00,000<span class="fs-6 fw-normal"> / month</span></h2>
                        <p class="my-3 text-muted">Sponsor a session and engage directly with the audience.</p>
                        <h6 class="fw-bold">Features Included:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2">Meet & Greet with 7+ VVIPs</li>
                            <li class="mb-2">Stall size: 2m x 2m</li>
                            <li class="mb-2">7 Free Delegate Passes</li>
                            <li class="mb-2">Logo at fourth-top position in session invitations and collateral</li>
                            <li class="mb-2">1 Video Teaser</li>
                            <li class="mb-2">Website presence</li>
                            <li class="mb-2">Social media and press coverage</li>
                            <li class="mb-2">Delegate data for two days</li>
                            <li class="mb-2">Post-event mileage</li>
                        </ul>
                        <a href="#" class="btn btn-success w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-4">
                <div class="card border-0  h-100 pricing-card rounded-0">
                    <div class="card-body text-center px-4 py-5 plan-body">
                        <h5 class="card-title fw-bold">Other Sponsorships</h5>
                        <h2 class="fw-bold">Custom Pricing</h2>
                        <p class="my-3 text-muted">nique sponsorship opportunities to fit your brand.</p>
                        <h6 class="fw-bold">Options Include:</h6>
                        <ul class="list-unstyled text-start mt-3">
                            <li class="mb-2">Gala Dinner Partner – ₹3,00,000</li>
                            <li class="mb-2">Hospitality Partner – ₹3,00,000</li>
                            <li class="mb-2">Award Partner – ₹5,00,000</li>
                            <li class="mb-2">CEOs Roundtable Partner – ₹5,00,000</li>
                            <li class="mb-2">Lanyard Partner – ₹2,00,000</li>
                            <li class="mb-2">Fleet Partner – ₹3,00,000</li>
                            <li class="mb-2">Stall Partner – ₹1,50,000</li>
                            <li class="mb-2">Apparel Partner – ₹2,50,000</li>
                        </ul>
                        <a href="#" class="btn btn-success w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section> -->
<!-- Pricing End -->


<!-- Start Award  -->
<section class="container-fluid bg-light p-0">
    <!-- Hero Section -->
    <div class="text-center text-white py-5" style="background: linear-gradient(45deg, #25BFDB, #9CBC41);">
        <h5 class="fs-2 fw-bold text-uppercase text-white">Awards</h5>
        <p class="lead">Celebrating Innovations for a Sustainable Future</p>
    </div>
    <!-- Categories Section -->
    <div class="container py-5">
        <div class="text-center mb-4">
            <h5 class="fs-2 fw-bold text-uppercase text-dark">Introducing New Award Categories</h5>
            <p class="text-muted">Recognizing advancements in sustainability and innovation</p>
        </div>
        <div class="row g-4 py-4">
            <!-- Net Zero Design Accelerator Award -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png"
                        alt="Design Accelerator Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Net Zero Design Accelerator Award</h5>
                    <p class="text-muted mb-0">Recognizing innovative and forward-thinking designs that
                        contribute
                        to achieving net-zero goals in architecture and construction.</p>
                </div>
            </div>
            <!-- Net Zero Accelerator Award for Sustainable Cooling -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                        alt="Sustainable Cooling Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Net Zero Accelerator Award for Sustainable Cooling</h5>
                    <p class="text-muted mb-0">Awarded for advancements in sustainable cooling technologies that
                        support energy-efficient and low-carbon cooling systems.</p>
                </div>
            </div>
            <!-- Net Zero Energy Accelerator Award in Cold Chain Sector -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/calendar.png"
                        alt="Cold Chain Sector Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Net Zero Energy Accelerator Award in Cold Chain Sector</h5>
                    <p class="text-muted mb-0">Honoring initiatives that drive energy efficiency and
                        sustainability
                        in the cold chain sector, focusing on reducing energy consumption and emissions.</p>
                </div>
            </div>
            <!-- Innovative Technology/Product for Net Zero Acceleration in Built Environment -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/completed-task.png"
                        alt="Technology/Product Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Innovative Technology/Product for Net Zero Acceleration in Built
                        Environment
                    </h5>
                    <p class="text-muted mb-0">Recognizing technologies or products that significantly
                        contribute to
                        reducing energy consumption, water usage.</p>
                </div>
            </div>
            <!-- Sustainability Leadership Award for Accelerating Net Zero -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                        alt="Leadership Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Sustainability Leadership Award for Accelerating Net Zero</h5>
                    <p class="text-muted mb-0">Awarded to leaders and organizations that have shown exemplary
                        leadership in driving the transition to net-zero carbon emissions.</p>
                </div>
            </div>
            <!-- Net Zero Water Accelerator Award -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_training.jpg"
                        alt="Water Accelerator Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Net Zero Water Accelerator Award</h5>
                    <p class="text-muted mb-0">Recognizing innovative solutions in water management,
                        conservation,
                        and reuse that contribute to achieving net-zero water goals.</p>
                </div>
            </div>
            <!-- Net Zero Waste Accelerator Award -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png"
                        alt="Waste Accelerator Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Net Zero Waste Accelerator Award</h5>
                    <p class="text-muted mb-0">Honoring organizations and initiatives that excel in waste
                        reduction,
                        recycling, and circular economy practices towards achieving zero waste.</p>
                </div>
            </div>
            <!-- Net Zero Carbon Accelerator Award -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/visionary.png"
                        alt="Carbon Accelerator Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Net Zero Carbon Accelerator Award</h5>
                    <p class="text-muted mb-0">Awarded for outstanding efforts to eliminate carbon emissions
                        through
                        innovative technologies, strategies, and programs that contribute to carbon neutrality.
                    </p>
                </div>
            </div>
            <!-- Net Zero Innovation Excellence Award -->
            <div class="col-12 col-sm-6 col-lg-4 px-3 py-2">
                <div class="award-card rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                        alt="Innovation Excellence Award" class="award-icon">
                    <h5 class="fs-5 fw-bold">Net Zero Innovation Excellence Award</h5>
                    <p class="text-muted mb-0">Recognizing groundbreaking innovations and technologies that
                        accelerate progress towards achieving net-zero goals in various sectors.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Award -->


<!-- FAQs Start -->
<div class="container-fluid py-5">
    <div class="container pb-0 pb-lg-5">
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
                                What is the Green Conclave?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionGreenConclave1">
                            <div class="accordion-body">
                                The Green Conclave is an initiative focused on promoting sustainable practices,
                                eco-friendly innovations, and environmental awareness.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Who can participate in the Green Conclave?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionGreenConclave1">
                            <div class="accordion-body">
                                Anyone passionate about sustainability, including individuals, businesses, and
                                organizations, can participate in the Green Conclave.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What activities are included in the Green Conclave?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionGreenConclave1">
                            <div class="accordion-body">
                                Activities include workshops, panel discussions, networking sessions, and
                                exhibitions showcasing green technologies and practices.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can I register for the Green Conclave?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionGreenConclave1">
                            <div class="accordion-body">
                                You can register online via our official website by filling out the registration
                                form and submitting the required details.
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
                                Are there any fees to attend the Green Conclave?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionGreenConclave2">
                            <div class="accordion-body">
                                The event may have free and paid sessions, depending on the activities and
                                workshops. Details will be shared during registration.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How does the Green Conclave promote sustainability?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionGreenConclave2">
                            <div class="accordion-body">
                                By showcasing sustainable solutions, encouraging eco-conscious practices, and
                                fostering collaboration for a greener future.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What industries are involved in the Green Conclave?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionGreenConclave2">
                            <div class="accordion-body">
                                Industries like renewable energy, sustainable construction, waste management,
                                and
                                eco-friendly manufacturing participate in the conclave.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How can I volunteer for the Green Conclave?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionGreenConclave2">
                            <div class="accordion-body">
                                Volunteers can apply through the website by submitting their profiles and
                                selecting
                                preferred roles during the event.
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