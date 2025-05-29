<?php
/**
 * The main template file
 * Template Name: About
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
<div class="container-fluid pt-5 about-header banner-heading">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-12 align-self-end text-start py-5 m-0">
                <div class="d-flex justify-content-end align-items-end about-header-card pt-0 pt-lg-5 mt-0 mt-lg-5">
                    <div class="card banner-header-text">
                        <p class="text-dark mb-0">
                            Green Conclave is a sustainability-focused platform committed to promoting eco-friendly
                            practices, innovative solutions, and environmental awareness. We aim to inspire
                            businesses, communities, and individuals to adopt sustainable practices, fostering a
                            greener future for all. Through collaboration and education, we strive to create lasting
                            positive impacts on the environment.
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


<!--  -->
<section class="container-fluid bg-light py-5">
    <div class="container py-3">
        <div class="row">
            <div class="col-md-6 pb-3">
                <img src="<?php bloginfo('template_directory'); ?>/img/Gallary/13.jpg" alt="Building" class="img-fluid home-index-main">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-start" data-wow-delay="0.2s">
                <h5 class="fs-2 text-dark">About This Event?</h5>
                <p>
                    Green Conclave is a dynamic event focused on fostering sustainable practices and environmental
                    innovation. It brings together thought leaders, industry experts, and activists to discuss
                    cutting-edge solutions for a greener future. Through insightful discussions, workshops, and
                    networking opportunities, participants gain valuable knowledge on eco-friendly technologies,
                    renewable energy, and sustainable business practices. The event provides a platform to
                    collaborate
                    on initiatives that drive environmental change and promote a more sustainable and eco-conscious
                    world for future generations.
                </p>
                <div class="text-start">
                    <a href="https://www.canva.com/design/DAGWRIHKKIA/OhILIkICuwHDI86vK_GLsg/view?embed&autoplay=1"
                        target="_blank" rel="noopener noreferrer">
                        <button class="btn btn-success btn-lg mt-3 w-100">Read More</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->


<!--  -->
<section class="container py-5">
    <div class="py-2">
        <h5 class="fs-2 text-uppercase text-dark text-center mb-4">Why This Conference Is Best For Customer</h5>
        <p class="text-center mb-5">
            Your content goes here. Edit or remove this text inline or in the module Content settings. You can also
            style
            every aspect of this content in the module Design settings and even apply custom CSS to this text in the
            module
            Advanced settings.
        </p>
    </div>

    <!-- Bootstrap Grid System -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <!-- Great Speakers -->
        <div class="col px-4">
            <div class="card hover-card border-0 rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/loud-speaker.png" class="card-img-top mx-auto mt-3" alt="Great Speakers"
                    style="width: 50px; height: 50px;">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Great Speakers</h5>
                    <p class="card-text text-muted">Your content goes here. Edit or remove this text inline or in
                        the module Content settings.</p>
                </div>
            </div>
        </div>

        <!-- Learn New Skills -->
        <div class="col px-4">
            <div class="card hover-card border-0 rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/capability.png" class="card-img-top mx-auto mt-3" alt="Learn New Skills"
                    style="width: 50px; height: 50px;">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Learn New Skills</h5>
                    <p class="card-text text-muted">Your content goes here. Edit or remove this text inline or in
                        the module Content settings.</p>
                </div>
            </div>
        </div>

        <!-- Participants -->
        <div class="col px-4">
            <div class="card hover-card border-0 rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/group.png" class="card-img-top mx-auto mt-3" alt="Participants"
                    style="width: 50px; height: 50px;">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Participants</h5>
                    <p class="card-text text-muted">Your content goes here. Edit or remove this text inline or in
                        the module Content settings.</p>
                </div>
            </div>
        </div>

        <!-- Proud Sponsors -->
        <div class="col px-4">
            <div class="card hover-card border-0 rounded-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/sponsars.png" class="card-img-top mx-auto mt-3" alt="Proud Sponsors"
                    style="width: 50px; height: 50px;">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Proud Sponsors</h5>
                    <p class="card-text text-muted">Your content goes here. Edit or remove this text inline or in
                        the module Content settings.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->


<!-- Service Start -->
<!-- <div class="container-fluid mt-5 pb-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInLeftBig" data-wow-delay="0.1s">
                    <h5 class="fs-2 text-dark">Business With Sustainable Green Solutions</h5>
                    <p class="mx-auto" style="max-width: 800px;">
                        At Green Conclave, we understand that every business is unique, which is why we offer a range of
                        sustainable
                        solutions designed to address your specific environmental challenges and goals.
                    </p>
                    <div class="row g-4 py-3">
                        <div class="col-12 d-flex align-items-start gap-3 mb-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testing_images/team-1.jpg" alt="Energy Efficient Solutions" class="circle-img"
                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                            <div>
                                <h5>Energy Efficiency Solutions</h5>
                                <p class="mb-0">
                                    Optimize your energy usage and reduce costs with our comprehensive energy-efficient
                                    solutions that
                                    promote sustainability.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 d-flex align-items-start gap-3 mb-4">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testing_images/team-2.jpg" alt="Renewable Energy Systems" class="circle-img"
                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                            <div>
                                <h5>Renewable Energy Systems</h5>
                                <p class="mb-0">
                                    Shift to cleaner energy with our tailored renewable energy solutions, helping you
                                    achieve a
                                    greener, more sustainable future.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 d-flex align-items-start gap-3">
                            <img src="<?php bloginfo('template_directory'); ?>/img/testing_images/team-3.jpg" alt="Sustainability Consulting" class="circle-img"
                                style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                            <div>
                                <h5>Sustainability Consulting</h5>
                                <p class="mb-0">
                                    Leverage our expertise to implement eco-friendly practices and strategies that drive
                                    both environmental
                                    and business success.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/work-bg.png" alt="" class="bg-image shape-animaiton4">

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeInRightBig" data-wow-delay="0.1s">
                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testing_images/team-1.jpg" alt="Service Icon"
                                            class="img-fluid p-3">
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInRightBig" data-wow-delay="0.5s">
                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testing_images/team-2.jpg" alt="Service Icon"
                                            class="img-fluid p-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeInRightBig" data-wow-delay="0.3s">
                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testing_images/team-3.jpg" alt="Service Icon"
                                            class="img-fluid p-3">
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInRightBig" data-wow-delay="0.7s">
                                    <div class="d-flex flex-column justify-content-center text-center">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/testing_images/team-4.jpg" alt="Service Icon"
                                            class="img-fluid p-3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Service End -->


<!-- Start Mission Vision Values -->
<section class="container-fluid bg-light-green py-5 px-0 px-lg-0">
    <p class="green-conclave-heading p-3 p-lg-5 text-start text-lg-center mx-auto my-5 shadow-sm"
        style="font-size: 17px; margin: 0px;">
        <strong class="fs-5">Green Conclave</strong> is an annual event designed to foster dialogue and action
        towards
        sustainability in the HVAC, refrigeration, and cold chain industries. It serves as a platform for
        thought leaders, industry professionals, and policymakers to share ideas, showcase innovations, and
        collaborate for a greener future.
    </p>
    <div class="container">
        <!-- Mission Section -->
        <div class="card mb-4 mission-card rounded-0">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3 mission-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/mission.png" alt="Mission Image" class="img-fluid"
                        style="width: 50px; height: 50px;">
                    <h5 class="card-title mission-title ms-3 text-success">Our Mission: Building a Net Zero
                        Future
                    </h5>
                </div>
                <p>
                    The mission of Green Conclave is to advance sustainable practices across industries by
                    promoting
                    energy-efficient solutions, reducing environmental impact, and fostering collaboration among
                    stakeholders. Through interactive sessions, live demonstrations, and insightful discussions,
                    GC25 will inspire action toward achieving Net Zero across sectors.
                </p>
                <p>We are committed to the following principles in delivering our mission:</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Promote the use of renewable energy sources to
                        reduce
                        carbon footprints.</li>
                    <li><i class="fas fa-check-circle"></i> Foster innovation in green technology to address
                        environmental challenges.</li>
                    <li><i class="fas fa-check-circle"></i> Empower organizations to embrace sustainable
                        practices
                        for long-term environmental benefits.</li>
                    <li><i class="fas fa-check-circle"></i> Provide expert solutions that improve energy
                        efficiency
                        and reduce operational costs.</li>
                    <li><i class="fas fa-check-circle"></i> Drive global awareness around sustainability and
                        eco-friendly living.</li>
                    <li><i class="fas fa-check-circle"></i> Collaborate with partners to create green
                        initiatives
                        for a better future.</li>
                </ul>
            </div>
        </div>

        <!-- Vision Section -->
        <div class="card mb-4 vision-card rounded-0">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3 vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/visionary.png" alt="Vision Image" class="img-fluid"
                        style="width: 50px; height: 50px;">
                    <h5 class="card-title vision-title ms-3 text-success">Our Vision: Shaping a Sustainable
                        Tomorrow
                    </h5>
                </div>
                <p>
                    Green Conclave envisions a future where the HVAC, refrigeration, and cold chain sectors play
                    a
                    crucial role in achieving a sustainable, Net Zero economy. The event seeks to address
                    real-world
                    challenges, provide solutions, and create actionable roadmaps for businesses, industries,
                    and
                    government entities to contribute to environmental preservation and resource efficiency.
                </p>
            </div>
        </div>

        <!-- Values Section -->
        <div class="card mb-4 values-card rounded-0">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3 values-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/values.png" alt="Values Image" class="img-fluid"
                        style="width: 50px; height: 50px;">
                    <h5 class="card-title values-title ms-3 text-success">Core Values</h5>
                </div>
                <p>
                    Green Conclave's core values are centered around sustainability, collaboration, and action.
                    We
                    believe that every step taken towards a greener future must be rooted in integrity and
                    innovative thinking, empowering industries and governments to act with responsibility and
                    vision
                    for a sustainable tomorrow.
                </p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Integrity: We maintain transparency, trust, and
                        accountability in all of our business practices.</li>
                    <li><i class="fas fa-check-circle"></i> Collaboration: We believe in working together with
                        stakeholders to achieve our sustainability goals.</li>
                    <li><i class="fas fa-check-circle"></i> Sustainability: Our solutions aim to protect the
                        environment, conserve natural resources, and reduce waste.</li>
                    <li><i class="fas fa-check-circle"></i> Innovation: We strive to develop creative solutions
                        that
                        drive positive environmental change.</li>
                    <li><i class="fas fa-check-circle"></i> Excellence: We are committed to delivering
                        high-quality
                        solutions that exceed expectations.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Mission Vision Values  -->


<!-- Start Feature -->
<div class="container-fluid p-5 px-3">
    <h5 class="fs-2 fw-bold about-card-heading" style="text-align: center;">Key
        Topics for GC25</h5>
    <div class="row mt-4">
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/feature/app-development.jpg" alt="Extensive Experience"
                    class="card-vision-icon">
                <span class="feature-text">Modern Trends in HVAC & Refrigeration</span>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/feature/coding (1).png" alt="Personalized Approach" class="card-vision-icon">
                <span class="feature-text">Energy-efficient Cold Chain Solutions</span>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/feature/erp.png" alt="Cutting-edge Technology" class="card-vision-icon">
                <span class="feature-text">Reducing Carbon Emissions through Green Technologies</span>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/feature/hvac.png" alt="Global Footprint" class="card-vision-icon">
                <span class="feature-text">Water and Waste Management in Refrigeration</span>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/feature/save-time.png" alt="Comprehensive Project Management"
                    class="card-vision-icon">
                <span class="feature-text">Collaborative Efforts towards Net Zero</span>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/feature/sw_conslutancy.jpg"
                    alt="Sustainability and Environmental Consciousness" class="card-vision-icon">
                <span class="feature-text">Innovative Cooling Technologies for a Sustainable Future</span>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/feature/sw_implemention.jpg" alt="Efficient Supply Chain Management"
                    class="card-vision-icon">
                <span class="feature-text">Digital Transformation in HVAC Systems</span>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/sponsars.png" alt="Innovative Design Solutions" class="card-vision-icon">
                <span class="feature-text">Circular Economy in Refrigeration</span>
            </div>
        </div>
        <div class="col-md-4 my-2">
            <div class="about-feature">
                <img src="<?php bloginfo('template_directory'); ?>/img/about_images/mission.png" alt="Advanced Automation Integration" class="card-vision-icon">
                <span class="feature-text">Policy and Regulations for Net Zero Goals</span>
            </div>
        </div>
    </div>
</div>
<!-- End Feature  -->


<!--  -->
<div class="container-fluid bg-light py-0 py-lg-5">
    <div class="container text-center">
        <div class="d-flex justify-content-center align-items-start py-3">
            <img src="<?php bloginfo('template_directory'); ?>/img/gc_images/16.png" alt="Ishare" class="about-client-img img-fluid">
        </div>
        <h5 class="fw-bold fs-2 text-dark text-start text-lg-center py-4">Leadership</h5>
        <div class="row justify-content-center py-4">
            <!-- Row 1 -->
            <div class="col-6 col-md-3 py-2">
                <div class="p-2 text-start award-text-box">
                    <strong>Chairman :</strong>
                </div>
                <div class="p-2 text-start award-text-value">
                    Mr. Arvind Surange
                </div>
            </div>
            <div class="col-6 col-md-3 py-2">
                <div class="p-2 text-start award-text-box">
                    <strong>Co-Convenor :</strong>
                </div>
                <div class="p-2 text-start award-text-value">
                    Mr. Chetan Thakur
                </div>
            </div>
            <!-- Row 2 -->
            <div class="col-6 col-md-3 py-2">
                <div class="p-2 text-start award-text-box">
                    <strong>Convenor :</strong>
                </div>
                <div class="p-2 text-start award-text-value">
                    Dr. Ar. Poorva Keskar
                </div>
            </div>
            <div class="col-6 col-md-3 py-2">
                <div class="p-2 text-start award-text-box">
                    <strong>Coordinator :</strong>
                </div>
                <div class="p-2 text-start award-text-value">
                    Mr. Virendra Borade
                </div>
            </div>
            <!-- Row 3 -->
            <div class="col-6 col-md-3 py-2">
                <div class="p-2 text-start award-text-box">
                    <strong>President :</strong>
                </div>
                <div class="p-2 text-start award-text-value">
                    Mr. Ashutosh Joshi
                </div>
            </div>
            <div class="col-6 col-md-3 py-2">
                <div class="p-2 text-start award-text-box">
                    <strong>Program Chair :</strong>
                </div>
                <div class="p-2 text-start award-text-value">
                    Ms. Sujal Sheth
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->


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