<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package green_conclave
 */

?>


<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-3 pt-lg-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <h2 class="mb-0 text-white">
                    GREEN <br>
                    <span class="fw-bold" style="color: #ffb905;">CONCLAVE 25</span>
                </h2>
                <p class="mb-0 pt-2">Green Conclave is dedicated to delivering sustainable, eco-friendly
                    solutions,
                    fostering innovation, and driving positive environmental impact while promoting growth,
                    efficiency, and a greener future for communities and businesses worldwide.</p>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="about.html">About Us</a>
                <a class="btn btn-link" href="speakers.html">Speakers</a>
                <a class="btn btn-link" href="awards.html">Awards</a>
                <a class="btn btn-link" href="event1.html">Event 24</a>
                <a class="btn btn-link" href="event2.html">Event 23</a>
                <a class="btn btn-link" href="sponsors.html">Sponsors</a>
                <a class="btn btn-link" href="contact.html">Contact Us</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <h5 class="text-white mb-4">Our Services</h5>
                <a class="btn btn-link">Sustainable Energy Solutions</a>
                <a class="btn btn-link">Eco-Friendly Consulting</a>
                <a class="btn btn-link">Green Building Design</a>
                <a class="btn btn-link">Renewable Energy Integration</a>
                <a class="btn btn-link">Environmental Impact Assessments</a>
                <a class="btn btn-link">Waste Management Solutions</a>
                <a class="btn btn-link">Carbon Footprint Reduction Plans</a>
            </div>
            <div class="col-md-6 col-lg-4">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>Office no 90–92, 4th Floor, 'D' Wing, K K Market,
                    Pune-Satara Road, Dhankawadi, Pune 411 043</p>
                <p><i class="fa fa-phone-alt me-3"></i>+91 9922954841</p>
                <p><i class="fa fa-phone-alt me-3"></i>+91 9922954842</p>
                <p>
                    <a href="mailto:coordinator@greenconclave.com" target="_blank"
                        style="text-decoration: none; color: inherit;">
                        <i class="fa fa-envelope me-3"></i>coordinator@greenconclave.com
                    </a>
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social"
                        href="https://www.linkedin.com/company/ishrae-pune-chapter/?originalSubdomain=in"
                        target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social"
                        href="https://www.facebook.com/p/Ishrae-Pune-Chapter-100064681809939/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social"
                        href="https://www.youtube.com/channel/UCJ1Z08ryTel6YD5IXb3WSAA" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/ishraepunechapter/"
                        target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-outline-light btn-social" href="https://wa.me/9922954841" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; All Rights Reserved.
                    | Designed By <a class="border-bottom" href="https://www.lealsolution.com/" target="_blank">Leal
                        Software Solution Pvt Ltd</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
 <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1  
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>

<!-- <script>
       
        function updateDateTime() {
            const now = new Date();
            const dateOptions = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit' };

            document.getElementById('eventDate').textContent = now.toLocaleDateString('en-US', dateOptions);
            document.getElementById('eventTime').textContent = now.toLocaleTimeString('en-US', timeOptions);
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
</script> -->


<?php wp_footer(); ?>

</body>

</html>