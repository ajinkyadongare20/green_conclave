<?php
/**
 * The main template file
 * Template Name: Sponsors
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
<div class="container-fluid py-5 sponsars-header banner-heading">
    <div class="container pt-5 pb-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 align-self-end text-start m-0">
                <div class="d-flex justify-content-end align-items-end sponsars-header-card pt-5 pt-lg-0 pb-0 pb-lg-5">
                    <div class="card banner-header-text">
                        <p class="text-dark mb-0">
                            Green Conclave is proud to partner with forward-thinking sponsors who share our vision
                            for a sustainable future. Our Sponsors page recognizes their invaluable support in
                            driving eco-friendly initiatives and fostering innovation. Together, we are making a
                            lasting impact on the environment and promoting green practices across industries. </p>
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
    <div class="container text-center px-0 px-lg-3">
        <h5 class="fs-2 text-capitalize fw-bold">Green Conclave Sponsorship
            opportunity</h5>
        <div class="row align-items-center mt-5">
            <!-- Left Section -->
            <div class="col-lg-6 mb-4">
                <div class="position-relative bg-success p-3 p-lg-5">
                    <div class="bg-white p-4 text-start" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
                        <h3 style="font-size: 20px; font-weight: bold;">Sponsorship Opportunities</h3>
                        <p style="font-size: 14px; color: #555;">Become a part of Green Conclave 2025, an
                            extraordinary
                            platform to elevate your brand's visibility, strengthen connections, and contribute to
                            sustainability initiatives.</p>
                        <div class="mt-3">
                            <div class="bg-light p-3 rounded mb-3" style="font-size: 14px; color: #555;">
                                <strong>Why Sponsor?</strong><br>
                                Gain access to an exclusive audience of industry leaders, environmental advocates,
                                and
                                decision-makers.
                            </div>
                            <div class="bg-light p-3 rounded mb-3" style="font-size: 14px; color: #555;">
                                <strong>Audience Insights</strong><br>
                                - 50% of attendees are sustainability professionals.<br>
                                - 60% hold executive-level positions.<br>
                                - 80% have a direct influence on organizational strategy.<br>
                                - Equal gender representation with 50% male / 50% female.
                            </div>
                            <div class="bg-light p-3 rounded" style="font-size: 14px; color: #555;">
                                <strong>Exclusive Sponsorship Packages</strong><br>
                                Align your organization with sustainability goals through options like:<br>
                                - Event branding<br>
                                - Social media inclusion<br>
                                - Public relations<br>
                                - Networking opportunities
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Section -->
            <div class="col-lg-6 ps-5">
                <h3 class="text-start fw-bold" style="font-size: 20px;">Join as a Sponsor or Partner for Green
                    Conclave
                    2025 (GC25)</h3>
                <p class="text-start" style="font-size: 14px;">Green Conclave 2025 provides an exceptional
                    opportunity
                    for organizations to showcase their commitment to sustainability. Partnering with us connects
                    your
                    brand to a highly engaged audience while promoting environmental progress.</p>
                <h3 class="text-start fw-bold" style="font-size: 20px;">Highlights of Sponsorship</h3>
                <p class="text-start" style="font-size: 14px;">Our carefully curated sponsorship packages are
                    designed
                    to maximize brand exposure, create meaningful relationships, and drive a greener future.
                    Showcase
                    your leadership and commitment to sustainability by becoming an integral part of this
                    transformative
                    event.</p>
                <ul style="list-style: none; text-align: left; padding: 0;">
                    <li style="display: flex; align-items: center; margin-bottom: 15px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/app-development.jpg"
                            alt="Icon 1"
                            style="width: 50px; height: 50px; margin-right: 15px; background-color: #e8f5e9; padding: 5px; border-radius: 8px;">
                        <span style="font-size: 14px;">Sustainability strategy consultations</span>
                    </li>
                    <li style="display: flex; align-items: center; margin-bottom: 15px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/coding (1).png" alt="Icon 2"
                            style="width: 50px; height: 50px; margin-right: 15px; background-color: #e8f5e9; padding: 5px; border-radius: 8px;">
                        <span style="font-size: 14px;">Lead development for green initiatives</span>
                    </li>
                    <li style="display: flex; align-items: center; margin-bottom: 15px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/completed-task.png"
                            alt="Icon 3"
                            style="width: 50px; height: 50px; margin-right: 15px; background-color: #e8f5e9; padding: 5px; border-radius: 8px;">
                        <span style="font-size: 14px;">Eco-friendly campaign training and tools</span>
                    </li>
                    <li style="display: flex; align-items: center; margin-bottom: 15px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/sw_implemention.jpg"
                            alt="Icon 4"
                            style="width: 50px; height: 50px; margin-right: 15px; background-color: #e8f5e9; padding: 5px; border-radius: 8px;">
                        <span style="font-size: 14px;">Outreach for green partnerships and contracts</span>
                    </li>
                </ul>
                <a href="contact.html">
                    <button class="bg-success text-white border-0 rounded"
                        style="padding: 10px 30px; font-size: 14px;">Contact Us</button>
                </a>
            </div>
        </div>
    </div>
</section>
<!--  -->


<!-- Start Sponsars -->
<section>
    <div class="container py-5">
        <p class="fs-2 text-center fw-bold text-dark mb-3">Partnership Program</p>
        <p class="text-center mb-5">Choose a plan that fits your needs and unlock the full potential of
            <strong>Green
                Conclave</strong>
            for efficient task management and collaboration.
        </p>
        <div class="row g-4">

            <!-- Basic Plan -->
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
                            <!-- <li class="mb-2">Special mention in major branding</li> -->
                            <!-- <li class="mb-2">Post-event mileage</li> -->
                        </ul>
                        <a href="#" class="btn btn-light w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>

            <!-- Standard Plan -->
            <div class="col-md-4 py-4">
                <div class="card border-0 h-100 pricing-card rounded-0">
                    <div class="card-body text-center px-4 py-5 plan-body">
                        <!-- Title and Pricing -->
                        <h5 class="card-title fw-bold">Platinum Partner</h5>
                        <h2 class="fw-bold">10,00,000<span class="fs-6 fw-normal"> / month</span></h2>
                        <p class="my-3 text-muted">Premium visibility with leading sponsorship benefits.</p>
                        <h6 class="fw-bold">Features Included:</h6>
                        <!-- Features List -->
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
                        <!-- Buy Button -->
                        <a href="#" class="btn btn-success w-100" style="border-radius: 8px;">Buy Now →</a>
                    </div>
                </div>
            </div>


            <!-- Premium Plan -->
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

            <!-- Basic Plan -->
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

            <!-- Standard Plan -->
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

            <!-- Premium Plan -->
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
</section>
<!-- End Sponsars -->


<!-- Start Section -->
<section class="bg-light py-5">
    <div class="container pb-3 pb-lg-5">
        <div class="text-center mb-5">
            <h5 class="fs-2 text-capitalize text-center fw-bold mb-3">Partner Benefits</h5>
            <p class="text-dark">In addition to the exposure listed above, all sponsors and partners receive
                the following benefits:</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                    style="background-color: #f8fbff; height: auto;">
                    <div class="me-3"
                        style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sponsars/branding.png"
                            alt="Branding Icon" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h5 class="mb-2">Branding</h5>
                        <p class="mb-2">Your logo and branding on event materials, websites, and media.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                    style="background-color: #f8fbff; height: auto;">
                    <div class="me-3"
                        style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sponsars/networking.png"
                            alt="Networking Icon" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h5 class="mb-2">Networking</h5>
                        <p class="mb-2">Exclusive access to decision-makers, government representatives, and
                            industry leaders.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                    style="background-color: #f8fbff; height: auto;">
                    <div class="me-3"
                        style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sponsars/visible.png"
                            alt="Event Visibility Icon" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h5 class="mb-2">Event Visibility</h5>
                        <p class="mb-2">Increased brand recognition across multiple channels before, during, and
                            after the event.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                    style="background-color: #f8fbff; height: auto;">
                    <div class="me-3"
                        style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sponsars/magnetism.png"
                            alt="Lead Generation Icon" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h5 class="mb-2">Lead Generation</h5>
                        <p class="mb-2">Direct engagement with delegates and other stakeholders for potential
                            business development.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                    style="background-color: #f8fbff; height: auto;">
                    <div class="me-3"
                        style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sponsars/broadcast.png"
                            alt="Media Coverage Icon" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h5 class="mb-2">Media Coverage</h5>
                        <p class="mb-2">Extensive media coverage, both during and post-event, via traditional
                            media and digital platforms.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-start p-3 border rounded-0 shadow-sm"
                    style="background-color: #f8fbff; height: auto;">
                    <div class="me-3"
                        style="flex-shrink: 0; width: 60px; height: 60px; background-color: #eef7ff; display: flex; justify-content: center; align-items: center; border-radius: 5px;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/sponsars/alignment.png"
                            alt="Media Coverage Icon" style="width: 40px; height: 40px;">
                    </div>
                    <div>
                        <h5 class="mb-2">Sustainability Alignment</h5>
                        <p class="mb-2">Opportunity to showcase your commitment to sustainability and environmental
                            responsibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->


<!-- Sponsars Compnay -->
<section class="container-fluid">
    <div class="container py-5">
        <div class="d-flex justify-content-center align-items-start py-3">
            <img src="<?php bloginfo('template_directory'); ?>/img/gc_images/14.png" alt="Ishare"
                class="about-client-img img-fluid">
        </div>
        <div class="d-flex justify-content-center align-items-start py-3">
            <img src="<?php bloginfo('template_directory'); ?>/img/gc_images/15.png" alt="Ishare"
                class="about-client-img img-fluid">
        </div>
        <div class="d-flex justify-content-center align-items-start py-3">
            <img src="<?php bloginfo('template_directory'); ?>/img/gc_images/16.png" alt="Ishare"
                class="about-client-img img-fluid">
        </div>
    </div>
</section>
<!-- End Sponsars Compnay -->

<?php
// get_sidebar();
get_footer();