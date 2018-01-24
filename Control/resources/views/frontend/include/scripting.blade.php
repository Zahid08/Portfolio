<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.min.js"></script>
 <script type="text/javascript" src="{{asset('frontend')}}/js/bootstrap.min.js"></script>

<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.mobile.customized.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/camera.js"></script>
<script>
    jQuery(function(){
        jQuery('#camera_wrap_2').camera({
            loader: 'bar',
            speed: 1000,
            pagination: false,
            thumbnails: false,
        });
    });
</script>

<script src="{{asset('frontend')}}/js/nav.js"></script>

<script type="text/javascript" src="{{asset('frontend')}}/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/wow.min.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/mousescroll.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/main.js"></script>

<script src="{{asset('frontend')}}/js/waypoints.min.js"></script>
<script src="{{asset('frontend')}}/js/counterup.min.js"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script src="{{asset('frontend')}}/js/cbpFWTabs.js"></script>
<script>
    (function() {
        [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
        });
    })();
</script>
<script src="{{asset('frontend')}}/js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(40.6700, -73.9400),
            styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
        };
        var mapElement = document.getElementById('map');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
        });
    }
</script>
<script type="text/javascript" src="{{asset('frontend')}}/js/move-top.js"></script>
<script type="text/javascript" src="{{asset('frontend')}}/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll, .navbar li a, .footer li a").click(function(event){
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>