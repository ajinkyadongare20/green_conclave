<?php
/**
 * The main template file
 * Template Name: Contact
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
<div class="container-fluid pt-5 contact-header banner-heading">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-12 align-self-end text-start py-5 m-0">
                <div class="d-flex justify-content-end align-items-end about-header-card pt-5 mt-0 mt-lg-5">
                    <div class="card banner-header-text">
                        <p class="text-dark mb-0">
                            Get in touch with Green Conclave! Whether you have questions, feedback, or are
                            interested in partnering with us, we’d love to hear from you. Visit our Contact Us page
                            for easy access to our team, and let’s work together for a sustainable future with
                            innovative solutions and shared goals for a better tomorrow.
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


<!-- Contact Start -->
<div class="container-fluid bg-light py-3">
    <div class="container py-3 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4 px-lg-5">
        <div class="mx-auto text-center" style="max-width: 500px;">
            <h1 class="mb-4 mb-md-5">Get in Touch with Our Team</h1>
        </div>
        <div class="bg-white shadow p-3 p-sm-4 p-md-5">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                        <div class="py-2">
                            <div class="text-uppercase text-success text-start fw-bold fs-6 mb-3">Green Conclave
                                2025 - Official Contact Details</div>
                            <p><strong>Email:</strong> coordinator@greenconclave.com</p>
                            <p><strong>Phone:</strong> +91 9922954841/42 (Mr. Virendra Borade)</p>
                            <p><strong>Office Address:</strong><br>
                                ISHRAE Pune Chapter,<br>
                                4th Floor, Pune-Satara Road,<br>
                                KK Market, Mangawadi,<br>
                                Pune, Maharashtra, 411037, India</p>
                            <h5 class="mt-4">Social Media</h5>
                            <p>Stay connected with us through our social media handles:</p>
                            <div class="d-flex gap-3">
                                <a class="btn btn-outline-primary rounded-pill"
                                    href="https://www.linkedin.com/company/ishrae-pune-chapter/?originalSubdomain=in"
                                    target="_blank" style="border-width: 1px;">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a class="btn btn-outline-primary rounded-pill"
                                    href="https://www.facebook.com/p/Ishrae-Pune-Chapter-100064681809939/"
                                    target="_blank" style="border-width: 1px;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary rounded-pill"
                                    href="https://www.youtube.com/channel/UCJ1Z08ryTel6YD5IXb3WSAA" target="_blank"
                                    style="border-width: 1px;">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a class="btn btn-outline-primary rounded-pill"
                                    href="https://www.instagram.com/ishraepunechapter/" target="_blank"
                                    style="border-width: 1px;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary rounded-pill" href="https://wa.me/9922954841"
                                    target="_blank" style="border-width: 1px;">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="py-2">
                        <form action="https://api.web3forms.com/submit" method="POST">
                            <div class="row g-3">
                                <!-- Hidden Input for Web3Forms Access Key -->
                                <input type="hidden" name="access_key" value="c9db945c-32e3-414e-8f98-ea2ac4166cf7">

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="Your Mobile Number" required>
                                        <label for="mobile">Mobile Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            name="message" style="height: 150px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php
// get_sidebar();
get_footer();