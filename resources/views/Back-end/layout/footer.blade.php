<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-12 me-auto">
                <em class="text-white d-block mb-4">Where to find us?</em>

                <strong class="text-white">
                    <i class="bi-geo-alt me-2"></i>
                    Bandra West, Mumbai, Maharashtra 400050, India
                </strong>

                <ul class="social-icon mt-4">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-facebook">
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://x.com/minthu" target="_new" class="social-icon-link bi-twitter">
                        </a>
                    </li>

                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-whatsapp">
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-12 mt-4 mb-3 mt-lg-0 mb-lg-0">
                <em class="text-white d-block mb-4">Contact</em>

                <p class="d-flex mb-1">
                    <strong class="me-2">Phone:</strong>
                    <a href="tel: 305-240-9671" class="site-footer-link">
                        (65) 
                        305 2409 671
                    </a>
                </p>

                <p class="d-flex">
                    <strong class="me-2">Email:</strong>

                    <a href="mailto:info@yourgmail.com" class="site-footer-link">
                        hello@barista.co
                    </a>
                </p>
            </div>


            <div class="col-lg-5 col-12">
                <em class="text-white d-block mb-4">Opening Hours.</em>

                <ul class="opening-hours-list">
                    <li class="d-flex">
                        Monday - Friday
                        <span class="underline"></span>

                        <strong>9:00 - 18:00</strong>
                    </li>

                    <li class="d-flex">
                        Saturday
                        <span class="underline"></span>

                        <strong>11:00 - 16:30</strong>
                    </li>

                    <li class="d-flex">
                        Sunday
                        <span class="underline"></span>

                        <strong>Closed</strong>
                    </li>
                </ul>
            </div>

            {{-- <div class="col-lg-8 col-12 mt-4">
                <p class="copyright-text mb-0">Copyright © Barista Cafe 2048 
                    - Design: <a rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a></p>
            </div> --}}
    </div>
</footer>
</main>

<!-- JAVASCRIPT FILES -->
<script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('Assets/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('Assets/js/click-scroll.js') }}"></script>
<script>

(function ($) {

"use strict";

// NAVBAR
$('.navbar-collapse a').on('click',function(){
$(".navbar-collapse").collapse('hide');
});

$(function() {
    var branchInfoElement = document.getElementById('branch-info');

      // Get the data attribute value
    var branchName = branchInfoElement.getAttribute('data-branch-name');
  
    console.log(branchName);
    $('.hero-slides').vegas({
        slides: [
                { src: "{{ asset('Assets/images/meal_1.jpg') }}" },
                { src: "{{ asset('Assets/images/meal_2.jpg') }}" },
                { src: "{{ asset('Assets/images/meal_3.jpg') }}" },
                { src: "{{ asset('Assets/images/restaurant_staff_1.jpg') }}" },
            ],
        timer: false,
        animation: 'kenburns',
    });
});

// CUSTOM LINK
$('.smoothscroll').click(function(){
var el = $(this).attr('href');
var elWrapped = $(el);
var header_height = $('.navbar').height() + 60;

scrollToDiv(elWrapped,header_height);
return false;

function scrollToDiv(element,navheight){
    var offset = element.offset();
    var offsetTop = offset.top;
    var totalScroll = offsetTop-navheight;

    $('body,html').animate({
    scrollTop: totalScroll
    }, 300);
}
});

})(window.jQuery);
</script>
<script src="{{ asset('Assets/js/vegas.min.js') }}"></script>

</body>
</html>