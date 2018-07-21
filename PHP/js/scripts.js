$(document).ready(function () {

    /* ==========================================================================
    SIDEBAR HIDE/SHOW
    ========================================================================== */
    
    $('.sidebar-arrow-box .fa-arrow-left').click(function () {
        if ($('.sidebar-arrow-box').hasClass('box_rotateback box_transitionback')) {
            $('.sidebar-arrow-box').removeClass('box_rotateback box_transitionback');
            $('.sidebar-arrow-box').addClass('box_rotate box_transition');
        } else {
            $('.sidebar-arrow-box').removeClass('box_rotate box_transition');
            $('.sidebar-arrow-box').addClass('box_rotateback box_transitionback');
        }

        $('#sidebar').toggleClass('hide-left-bar');
        if ($('#sidebar').hasClass('hide-left-bar')) {
            $(".sidebar-content").getNiceScroll().hide();
        }

        $(".sidebar-content").getNiceScroll().show();
        $('#main-content').toggleClass('force-left');

    });
    
    /* ==========================================================================
    NICE SCROLL
    ========================================================================== */
    if ($.fn.niceScroll) {
        $(".sidebar-content").niceScroll({
            cursorcolor: "#1FB5AD",
            cursorborder: "0px solid #fff",
            cursorborderradius: "0px",
            cursorwidth: "3px",
            cursoropacitymin: "0",
            cursoropacitymax: "1"
        });
        $(".sidebar-content").getNiceScroll().resize();
        if ($('#sidebar').hasClass('hide-left-bar')) {
            $(".sidebar-content").getNiceScroll().hide();
        }
        $(".sidebar-content").getNiceScroll().show();
    };

    /* ==========================================================================
    FIXING LABEL
    ========================================================================== */
    
    $("form :input").each(function (index, elem) {
        var eId = $(elem).attr("id");
        var label = null;
        if (eId && (label = $(elem).parents("form").find("label[for=" + eId + "]")).length == 1) {
            $(elem).attr("placeholder", $(label).html());
            $(label).remove();
        }
    });

    /* ==========================================================================
    FIXING MENU
    ========================================================================== */
    
    $(document).on('click', '.yamm .dropdown-menu', function (e) {
        e.stopPropagation()
    });

    /* ==========================================================================
    STICKY SIDEBAR FOR BOXED WIDTH (FIXING WRAPPER HEIGHT > SIDEBAR HEIGHT)
    ========================================================================== */
    
    var stickySidebarTop = $('body.boxed #sidebar').offset().top;
    var stickySidebar = function(){
      var scrollTop = $(window).scrollTop();
      if (scrollTop > stickySidebarTop) {
          $('body.boxed #sidebar').addClass('sticky-sidebar');
      } else {
          $('body.boxed #sidebar').removeClass('sticky-sidebar');
      }
    };
    
    stickySidebar();
    $(window).scroll(function() {
        stickySidebar();
    });
    
    /* ==========================================================================
    YOUR CODES
    ========================================================================== */

    $(document).ready(function () {
        //YOUR JAVASCRIPT CODES GOES HERE
    });
    
});
