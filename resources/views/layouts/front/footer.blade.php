<footer style="background-image: url({{asset('resources/front/images/footer-bg.jpg')}});">
    <div class="foot-menu">
        <div class="container">
            <ul class="foot-menuwrap">
                <li class="footmenu-list">
                    <a href="{{route('menu')}}">menu</a>
                </li>
                <li class="footmenu-list">
                    <a href="http://alforno.ca/wp-content/uploads/2016/10/catering.pdf">catering</a>
                </li>
                <li class="footmenu-list">
                    <a href="{{url('gift-card')}}">gift cards</a>
                </li>
                <li class="footmenu-list">
                    <a href="{{url('delivery-pickup')}}">delivery/pickup</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="foot-wrap">
                    <h5>Location</h5>
                    <ul class="foot-cont">
                        <li><i class="fas fa-map-marker-alt"></i>301-2903 Kingsview <br> Blvd SE Alberta, <br>Canada, T4A OC4</li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="foot-wrap">
                    <h5>Get in touch</h5>
                    <ul class="foot-cont">
                        <li><i class="fas fa-phone-alt"></i>(403) 808 - 3126</li>
                        <li><i class="fas fa-envelope"></i>info@latablepastry.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="foot-wrap">
                    <h5>Socailize</h5>
                    <ul class="head-socio">
                        <li><a href="#"><i class="fab fa-facebook-f"></i>@LaTablePastry</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i>@LaTablePastry</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i>@LaTablePastry</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-r">
        <div class="container">
            <div class="copy-wrap">
                <p>
                    Copyright © La Table Pastry {{date('Y')}}
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type='text/javascript' src="{{asset('resources/front/js/bootstrap.min.js')}}"></script>
<script type='text/javascript' src="{{asset('resources/front/js/owl.carousel.min.js')}}"  crossorigin="anonymous"></script>
<script type='text/javascript' src="{{asset('resources/front/js/lightbox.js')}}"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<script src="http://cdn.craig.is/js/rainbow-custom.min.js"></script>
@yield('page-specific-scripts')
<script>
    $(document).ready(function() {
        var dateToday = new Date();
        $.datetimepicker.setLocale('en');
        $('#datetimepicker').datetimepicker({
            minDate: dateToday,
        });
    });
</script>
<script type='text/javascript' src="{{asset('resources/front/js/site-script.js')}}"  crossorigin="anonymous"></script>
