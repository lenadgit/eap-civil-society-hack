<!-- jQuery  -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
{{--<script src="{{ asset("/front/bxslider/jquery.bxslider.min.js") }}"></script>--}}
{{--<script src="{{ asset("/front/js/menu.js") }}"></script>--}}


{{--<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"--}}
{{--        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="--}}
{{--        crossorigin=""></script>--}}
{{--<script type="text/javascript" src = "{{ asset("front/js/novyirozdil.js") }}"></script>--}}
{{--<script type="text/javascript" src = "{{ asset("front/js/novyirozdil-coord.js") }}"></script>--}}


<!-- All JS Custom Plugins Link Here here -->
<script src="{{ asset('/front/js/vendor/modernizr-3.5.0.min.js') }}"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('/front/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('/front/js/popper.min.js') }}"></script>
<script src="{{ asset('/front/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('/front/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/front/js/slick.min.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('/front/js/gijgo.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('/front/js/wow.min.js') }}"></script>
<script src="{{ asset('/front/js/animated.headline.js') }}"></script>
<script src="{{ asset('/front/js/jquery.magnific-popup.js') }}"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="{{ asset('/front/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('/front/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('/front/js/jquery.sticky.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('/front/js/contact.js') }}"></script>
<script src="{{ asset('/front/js/jquery.form.js') }}"></script>
<script src="{{ asset('/front/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('/front/js/mail-script.js') }}"></script>
<script src="{{ asset('/front/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('/front/js/plugins.js') }}"></script>
<script src="{{ asset('/front/js/main.js') }}"></script>

<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
<script type="text/javascript" src = "{{ asset('/front/js/novyirozdil.js') }}"></script>
<script type="text/javascript" src = "{{ asset('/front/js/novyirozdil-coord.js') }}"></script>



@stack('scripts')
