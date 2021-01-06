
/*--------------------------------------------------------------
# Logo redirct to homepage
--------------------------------------------------------------*/

$("#logo").click(function () {
  window.location.href = $(this).data('href');
});

/*--------------------------------------------------------------
# Navbar on scroll (Desktop)
--------------------------------------------------------------*/

if (screen.width > 720) {
    $(window).scroll(function() {
        //After scrolling 100px from the top...
        if ($(window).scrollTop() >= 50 || document.documentElement.scrollTop > 50) {
            $('#brand-name').css('display', 'none');
            $('#navbar').css('background', '#FFF');
            $('#navbar').css('box-shadow', '0 15px 50px rgba(0, 0, 0, 0.2)');
            $('.navbar-custom .navbar-nav .nav-link').css('color', '#253543');
            $('.navbar-nav').css('margin-top', '0%');
            $('.search-form').css('top', '20%');
            $('.aa-input-container').css('margin', '0 auto');

            //Otherwise remove inline styles and thereby revert to original stying
        } else {
            $('#brand-name').css('display', 'block');
            $('#navbar').css('background', 'transparent');
            $('#navbar').css('box-shadow', 'none');
            $('.navbar-custom .navbar-nav .nav-link').css('color', '#FFF');
            $('.navbar-nav').css('margin-top', '-2%');
            $('.search-form').css('top', '30%');
            $('.aa-input-container').css('margin-top', '-15px');
        }
    });
}


if (screen.width > 720) {
    // When the user scrolls down 50px from the top of the document, resize the header's font size
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("logo").style.width = "60px";
            document.getElementById("logo").style.width = "60px";
        } else {
            document.getElementById("logo").style.width = "120px";
        }
    }
}

/*--------------------------------------------------------------
# Navbar on scroll (Mobile)
--------------------------------------------------------------*/


if (screen.width < 992) {
    // When the user scrolls down 50px from the top of the document, resize the header's font size
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("logo").style.width = "45px";
            document.getElementById("brand-name").style.display = "none";
        } else {
            document.getElementById("logo").style.width = "80px";
            document.getElementById("brand-name").style.display = "block";
        }
    }
}

if (screen.width < 992) {
    $(window).scroll(function() {
        //After scrolling 100px from the top...
        if ($(window).scrollTop() >= 50 || document.documentElement.scrollTop > 50) {
            $('#brand-name').css('display', 'none');
            $('#navbar').css('margin-top', '0');
            $('.logo').css('margin-top', '-2px');
            $('.navbar').css('background', '#FFF');
            $('.toggler-bars').css('color', '#E0E0E0');
            $('#navbar').css('box-shadow', '0 15px 50px rgba(0, 0, 0, 0.2)');

            //Otherwise remove inline styles and thereby revert to original stying
        } else {
            $('#brand-name').css('display', 'block');
            $('#navbar').css('margin-top', '-10%');
            $('.logo').css('margin-top', '35%');
            $('.navbar').css('background', 'transparent');
            $('.toggler-bars').css('color', '#FFF');
            $('#navbar').css('box-shadow', 'none');
        }
    });
}

/*--------------------------------------------------------------
# Selection Section (Mobile)
--------------------------------------------------------------*/


$(document).ready(function() {
    if (window.innerWidth < 992) {
        $('.selection-section h2').removeClass('border-right');
    }
});



/*--------------------------------------------------------------
# Counter section
--------------------------------------------------------------*/
// $(function () {
//     function isScrolledIntoView($elem) {
//         var docViewTop = $(window).scrollTop();
//         var docViewBottom = docViewTop + $(window).height();
//         var elemTop = $elem.offset().top;
//         var elemBottom = elemTop + $elem.height();
//         return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
//     }
//
//     function count($this) {
//         var current = parseInt($this.html(), 10);
//         if (isScrolledIntoView($this) && !$this.data("isCounting") && current < $this.data('count')) {
//             $this.html(++current);
//             $this.data("isCounting", true);
//             setTimeout(function () {
//                 $this.data("isCounting", false);
//                 count($this);
//             }, 50);
//         }
//     }
//
//     $(".c-section4").each(function () {
//         $(this).data('count', parseInt($(this).html(), 10));
//         $(this).html('0');
//         $(this).data("isCounting", false);
//     });
//
//     function startCount() {
//         $(".c-section4").each(function () {
//             count($(this));
//         });
//     };
//
//     $(window).scroll(function () {
//         startCount();
//     });
//
//     startCount();
// });

//
//
// document.addEventListener("DOMContentLoaded", () => {
//     function counter(id, start, end, duration) {
//         let obj = document.getElementById(id),
//             current = start,
//             range = end - start,
//             increment = end > start ? 1 : -1,
//             step = Math.abs(Math.floor(duration / range)),
//             timer = setInterval(() => {
//                 current += increment;
//                 obj.textContent = current;
//                 if (current == end) {
//                     clearInterval(timer);
//                 }
//             }, step);
//     }
//     counter("count1", 0, 300, 3000);
//     counter("count2", 100, 500, 2500);
//     counter("count3", 0, 450, 3000);
// });
