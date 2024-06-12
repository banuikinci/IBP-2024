@php
    $setting=\App\Http\Controllers\HomeController::settinglist();

@endphp
<!-- Footer Start -->
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Bize Yazın</h2>
                    <div class="contact-info">
                        <p><i class="fa fa-map-marker"></i>{{$setting->adress}}</p>
                        <p><i class="fa fa-envelope"></i>{{$setting->email}}</p>
                        <p><i class="fa fa-phone"></i>{{$setting->phone}}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Follow Us</h2>
                    <div class="contact-info">
                        <div class="social">
                            <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                            <a href="{{$setting->youtube}}"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Company Info</h2>
                    <ul>
                        <li><a href="/aboutus">About Us</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h2>Purchase Info</h2>
                    <ul>
                        <li><a href="#">Pyament Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Return Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row payment align-items-center">
            <div class="col-md-6">
                <div class="payment-method">
                    <h2>We Accept:</h2>
                    <img src="{{asset("assets/home")}}/img/payment-method.png" alt="Payment Method" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="payment-security">
                    <h2>Secured By:</h2>
                    <img src="{{asset("assets/home")}}/img/godaddy.svg" alt="Payment Security" />
                    <img src="{{asset("assets/home")}}/img/norton.svg" alt="Payment Security" />
                    <img src="{{asset("assets/home")}}/img/ssl.svg" alt="Payment Security" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Footer Bottom Start -->
<div class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6 copyright">
                <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
            </div>

            <div class="col-md-6 template-by">
                <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer Bottom End -->

<!-- Back to Top -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{asset("assets/home")}}/lib/easing/easing.min.js"></script>
<script src="{{asset("assets/home")}}/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="{{asset("assets/home")}}/js/main.js"></script>

