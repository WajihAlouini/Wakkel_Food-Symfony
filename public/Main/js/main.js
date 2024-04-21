(function ($) {
    "use strict";

    // Back to top button
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        var $videoModal = $('#videoModal');
        $videoModal.on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        });

        $videoModal.on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        });
    });

    // Function to fetch restaurants by category
    function fetchRestaurantsByCategory(idCategory) {
        $.ajax({
            url: '/get_restaurants',
            type: 'GET',
            data: {
                id_category: idCategory
            },
            success: function(response) {
                $('#restaurant-list').empty(); // Clear existing restaurant list
                response.forEach(function(restaurant) {
                    // Check if restaurant object is valid and has nomRestaurant property
                    if (restaurant && restaurant.Nom !== undefined) {
                        $('#restaurant-list').append('<li>' + restaurant.Nom + '</li>');
                    } else {
                        console.error('Invalid restaurant object or nomRestaurant property is undefined:', restaurant);
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching restaurants:', error);
            }
        });
    }

    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

})(jQuery);
