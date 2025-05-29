<?php
/**
 * The main template file
 * Template Name: Awards
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
<div class="container-fluid py-5 awards-header banner-heading">
    <div class="container pt-5 pb-lg-5">
        <div class="row g-5 pt-5">
            <div class="col-12 align-self-end text-start pt-5 pt-lg-0 pb-0 pb-lg-5 m-0">
                <div class="d-flex justify-content-start align-items-start">
                    <div class="card banner-header-text awards-banner-text">
                        <p class="text-dark mb-0">
                            Green Conclave, we take pride in our journey of excellence and innovation. Our Awards
                            page celebrates the recognition we've earned for pioneering sustainable solutions,
                            driving environmental change, and shaping a brighter, greener future. These accolades
                            reflect our relentless commitment to sustainability and inspiring global transformation.
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


<!-- Section Strat Awrads -->
<section class="container-fluid p-0">
    <div class="text-center bg-success text-white py-5 mb-5">
        <h5 class="fs-2 fw-bold text-white">Awards: Celebrating Excellence</h5>
        <p>Recognizing the outstanding achievements and contributions that define the vision of sustainability and
            innovation at Green Conclave.</p>
    </div>
    <div class="container">
        <h2 class="text-center mb-4 fw-bold">Green Conclave Awards</h2>
        <div class="awards-timeline">
            <!-- Awards timeline items -->
            <div class="award-item">
                <div class="award-badge-wrapper">
                    <div class="award-badge-bg"></div>
                    <div class="award-badge">Design Accelerator</div>
                </div>
                <div class="award-content">
                    <h5 class="award-title">Net Zero Design Accelerator Award</h5>
                    <p>Recognizing innovative and forward-thinking designs that contribute to achieving net-zero
                        goals in architecture and construction.</p>
                </div>
            </div>

            <div class="award-item">
                <div class="award-badge-wrapper">
                    <div class="award-badge-bg"></div>
                    <div class="award-badge">Sustainable Cooling</div>
                </div>
                <div class="award-content">
                    <h5 class="award-title">Net Zero Accelerator Award for Sustainable Cooling</h5>
                    <p>Awarded for advancements in sustainable cooling technologies that support energy-efficient
                        and low-carbon cooling systems.</p>
                </div>
            </div>

            <div class="award-item">
                <div class="award-badge-wrapper">
                    <div class="award-badge-bg"></div>
                    <div class="award-badge">Cold Chain</div>
                </div>
                <div class="award-content">
                    <h5 class="award-title">Net Zero Energy Accelerator Award in Cold Chain Sector</h5>
                    <p>Honoring initiatives that drive energy efficiency and sustainability in the cold chain
                        sector, focusing on reducing energy consumption and emissions.</p>
                </div>
            </div>

            <div class="award-item">
                <div class="award-badge-wrapper">
                    <div class="award-badge-bg"></div>
                    <div class="award-badge">Built Environment</div>
                </div>
                <div class="award-content">
                    <h5 class="award-title">Innovative Technology/Product for Net Zero Acceleration in Built
                        Environment</h5>
                    <p>Recognizing technologies or products that significantly contribute to reducing energy
                        consumption, water usage, and emissions in buildings and construction projects.</p>
                </div>
            </div>

            <div class="award-item">
                <div class="award-badge-wrapper">
                    <div class="award-badge-bg"></div>
                    <div class="award-badge">Leadership</div>
                </div>
                <div class="award-content">
                    <h5 class="award-title">Sustainability Leadership Award for Accelerating Net Zero</h5>
                    <p>Awarded to leaders and organizations that have shown exemplary leadership in driving the
                        transition to net-zero carbon emissions.</p>
                </div>
            </div>

            <div class="award-item">
                <div class="award-badge-wrapper">
                    <div class="award-badge-bg"></div>
                    <div class="award-badge">Water Accelerator</div>
                </div>
                <div class="award-content">
                    <h5 class="award-title">Net Zero Water Accelerator Award</h5>
                    <p>Recognizing innovative solutions in water management, conservation, and reuse that contribute
                        to achieving net-zero water goals.</p>
                </div>
            </div>

            <div class="award-item">
                <div class="award-badge-wrapper">
                    <div class="award-badge-bg"></div>
                    <div class="award-badge">Waste Accelerator</div>
                </div>
                <div class="award-content">
                    <h5 class="award-title">Net Zero Waste Accelerator Award</h5>
                    <p>Honoring organizations and initiatives that excel in waste reduction, recycling, and circular
                        economy practices towards achieving zero waste.</p>
                </div>
            </div>

            <div class="award-item">
                <div class="award-badge-wrapper">
                    <div class="award-badge-bg"></div>
                    <div class="award-badge">Carbon Accelerator</div>
                </div>
                <div class="award-content">
                    <h5 class="award-title">Net Zero Carbon Accelerator Award</h5>
                    <p>Awarded for outstanding efforts to eliminate carbon emissions through innovative
                        technologies, strategies, and programs that contribute to carbon neutrality.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Awards -->


<!-- Start Section  -->
<section class="bg-primary award-container">
    <div class="opacity">
        <div class="container pb-0 pb-lg-5">
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
<!-- End Section -->


<!--  -->
<section class="container-fluid py-5">
    <div class="container">
        <!-- Title Section -->
        <h3 class="text-success">PLANNING YOUR GREEN CONCLAVE SELECTION PROCESS
        </h3>
        <blockquote class="blockquote py-2" style="font-style: italic;">
            “To achieve great things, two things are needed: a plan, and not quite enough time.”
            <footer class="blockquote-footer pt-3">Leonard Bernstein</footer>
        </blockquote>
        <p>
            We laugh at Bernstein’s words. In order to get through a successful selection process for the Green
            Conclave,
            you’ll need a well-structured plan. You’ll also need urgency that prioritizes the plan above all the
            other
            competing projects clamoring for resources.
        </p>
        <p>
            If you started at the beginning of this guide, you have identified your objectives for the Conclave,
            mapped out
            key activities, and gathered input from your team. Now is the time to create a detailed roadmap to guide
            you
            through the selection process for participation and contribution to the Green Conclave 2025.
        </p>

        <!-- Subsection -->
        <h3 class="text-success py-2">WHAT'S IN THE PLAN</h3>
        <p>
            A plan should include these five components at a minimum. You might have other considerations to add for
            your
            situation. Some of these topics warrant detailed focus. We’ll discuss each of them briefly here and
            provide
            guidance for next steps.
        </p>
        <ul>
            <li class="py-1"><strong>Goal Setting:</strong> Define the outcomes you hope to achieve by participating
                in the Green Conclave.</li>
            <li class="py-1"><strong>Resource Allocation:</strong> Identify the team members, time, and budget
                required to participate effectively.</li>
            <li class="py-1"><strong>Proposal Development:</strong> Prepare compelling content and solutions to
                showcase during the Conclave.</li>
            <li class="py-1"><strong>Engagement Strategy:</strong> Plan how you will connect with attendees,
                experts, and jury members.</li>
            <li class="py-1"><strong>Follow-Up Plan:</strong> Outline steps to maintain relationships and implement
                learnings post-event.</li>
        </ul>

        <!-- Green Conclave Highlights -->
        <h3 class="text-success py-2">GREEN CONCLAVE 2025: THE FIVE ELEMENT AWARDS</h3>
        <p>
            The Green Conclave 2025 will spotlight sustainability innovations through the prestigious Five Element
            Awards.
            These awards recognize individuals and organizations making a significant impact in the realm of
            environmental
            sustainability.
        </p>
        <ul>
            <li class="py-1"><strong>Nomination Period:</strong> Stay tuned for the official dates to submit your
                entries.</li>
            <li class="py-1"><strong>Jury Panel:</strong> A distinguished group of environmentalists, government
                officials, and industry
                leaders will assess nominations based on environmental impact, scalability, and innovation.
            </li>
            <li class="py-1"><strong>Award Ceremony:</strong> Winners will be announced during a special awards
                segment at GC25, where
                their groundbreaking efforts will be celebrated.
            </li>
        </ul>
        <p>
            If you or your organization are driving sustainable change, this is your chance to gain recognition for
            your
            efforts. Start preparing your nominations now to make a lasting impression.
        </p>
    </div>
</section>
<!--  -->


<?php
// get_sidebar();
get_footer();