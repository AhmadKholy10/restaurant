<template>
    <!-- Section with ID and content -->
    <section class="menu-section section-padding" id="section_1">
                    <div class="container">
                        <div class="row">

                            <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                                <div class="menu-block-wrap">
                                    <div class="text-center mb-4 pb-lg-2">
                                        <em class="text-white">Delicious Menu</em>
                                        <h4 class="text-white">Breakfast</h4>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Pancakes</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$12.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h6>
                                                Toasted Waffle
                                            </h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="text-white ms-auto"><del>$16.50</del></strong>

                                            <strong class="ms-2">$12.00</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Fried Chips
                                                <span class="badge ms-3">Recommend</span>
                                            </h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$15.0</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Rich Milk and Foam</small>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h6>Pancakes</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$12.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Banana Cakes</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$18.0</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Rich Milk and Foam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-12">
                                <div class="menu-block-wrap">
                                    <div class="text-center mb-4 pb-lg-2">
                                        <em class="text-white">Favourite Menu</em>
                                        <h4 class="text-white">Coffee</h4>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Latte</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="text-white ms-auto"><del>$12.50</del></strong>

                                            <strong class="ms-2">$7.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h6>
                                                White Coffee
                                                <span class="badge ms-3">Recommend</span>
                                            </h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$5.90</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Chocolate Milk</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$5.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Rich Milk and Foam</small>
                                        </div>
                                    </div>

                                    <div class="menu-block my-4">
                                        <div class="d-flex">
                                            <h6>Greentea</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$7.50</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Fresh brewed coffee and steamed milk</small>
                                        </div>
                                    </div>

                                    <div class="menu-block">
                                        <div class="d-flex">
                                            <h6>Dark Chocolate</h6>
                                        
                                            <span class="underline"></span>

                                            <strong class="ms-auto">$7.25</strong>
                                        </div>

                                        <div class="border-top mt-2 pt-2">
                                            <small>Rich Milk and Foam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
  </template>
  
  <script>
  import $ from 'jquery'; // Import jQuery
  
  export default {
    name: 'HomePage',
    mounted() {
      this.setupScrollEffects();
    },
    methods: {
      setupScrollEffects() {
        $(document).scroll(function() {
          const offsetSection = $('#section_1').offset().top - 154;
          const docScroll = $(document).scrollTop();
          const docScroll1 = docScroll + 1;
  
          if (docScroll1 >= offsetSection) {
            // Adjust navbar links or other elements based on scroll position
            // Example:
            $('.navbar-nav .nav-link').removeClass('active');
            $('.navbar-nav .nav-link:link').addClass('inactive');
            // Add active class to the desired element
          }
        });
  
        $('.click-scroll').click(function(e) {
          const offsetClick = $('#section_1').offset().top - 154;
          e.preventDefault();
          $('html, body').animate({
            'scrollTop': offsetClick
          }, 300);
        });
  
        // Initial setup on document ready
        $(document).ready(function() {
          // Adjust initial state as needed
          $('.navbar-nav .nav-item .nav-link:link').addClass('inactive');
          // Add active class to the desired element
          $('.navbar-nav .nav-item .nav-link').eq(0).addClass('active');
          $('.navbar-nav .nav-item .nav-link:link').eq(0).removeClass('inactive');
        });
      }
    }
  };
  </script>