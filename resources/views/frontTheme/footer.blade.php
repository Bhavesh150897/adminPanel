  <!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3 class="logo me-auto"><a href="{{ route('landingPage') }}"><span style="color: white !important;">Sona</span>gra</a></h3>
                    <p>
                      www.sonagra.com is a team of developers and designers working towards learning programming and design easy for the world
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('landingPage') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blog.aboutus') }}">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blog.contactus') }}">Contact Us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blog.disclaimer') }}">Disclaimer</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blog.privacypolicy') }}">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>We are Providing</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('landingPage') }}">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('latest.post') }}">Latest Posts</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{ route('blog.categories') }}">List Of Categories</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>www.sonagra.com is a team of developers and designers working towards learning programming and design easy for the world</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright {{ now()->year }} {{ $frontSettings['footer-text'] }}. All Rights Reserved
            </div>
            {{-- <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                Licensing information: https://bootstrapmade.com/license/
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div> --}}
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="{{ $frontSettings['twitter-link'] }}" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="{{ $frontSettings['facebook-link'] }}" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="{{ $frontSettings['linked-in-link'] }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->