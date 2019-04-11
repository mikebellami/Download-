(function($){
    "use strict"
    var WAY = {};


      var countDownDate = new Date("Oct 1, 2018 15:00:00").getTime();

      var x = setInterval(function() {


        var now = new Date().getTime();


        var distance = countDownDate - now;


        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);


        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);

    /*--------------------
      * Pre Load
    ----------------------*/
    WAY.WebLoad = function(){
      document.getElementById("loading").style.display = "none"; 
    }

    /*--------------------
        * Header Class
    ----------------------*/
    WAY.HeaderSticky = function(){
        $(".navbar-toggler").on("click", function(a) {
            a.preventDefault(), 
            $(".navbar").addClass("fixed-header")
        });
    }

    /*--------------------
        * Menu Close
    ----------------------*/
    WAY.MenuClose = function(){
      $('.navbar-nav .nav-link').on('click', function() {
       var toggle = $('.navbar-toggler').is(':visible');
       if (toggle) {
         $('.navbar-collapse').collapse('hide');
       }
      });
    }


    /*--------------------
        * Smooth Scroll
    ----------------------*/
    WAY.HeaderScroll = function(){
        $('header a[href*="#"]:not([href="#"])').on('click', function() {
          var PathName = location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname;
            if (PathName) {
              var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $('html,body').animate({
                      scrollTop: target.offset().top - 65,
                      }, 1000);
                      return false;
                  }
            }
        });
    }

    /*--------------------
        * Header Fixed
    ----------------------*/
    WAY.HeaderFixed = function(){
      var varHeaderFix = $(window).scrollTop() >= 60;
        if (varHeaderFix) {
           $('.navbar').addClass('fixed-header');
        }
        else {
           $('.navbar').removeClass('fixed-header');
        }
    }    


    /*--------------------
    * owl Slider
    ----------------------*/

    WAY.ClientSlider = function(){
      var testimonials_slider = $('#client-slider-single');
        testimonials_slider.owlCarousel({
            loop: true,
            margin: 0,
            nav:false,
            dots:true,
            responsive: {
              0: {
                items: 1
              },
              600: {
                items: 1
              },
              768: {
                items: 2
              },
              991: {
                items: 3
              },
              1140: {
                items: 2
              }
            }
        });
    }

    WAY.WorkSlider = function(){
      var work_slider = $('.brand-slider');
        work_slider.owlCarousel({
            loop: true,
            margin: 0,
            nav:false,
            dots:true,
            responsive: {
              0: {
                items: 2
              },
              600: {
                items: 3
              },
              768: {
                items: 3
              },
              991: {
                items: 4
              },
              1140: {
                items: 7
              }
            }
        });
    }

    WAY.PopupVideo = function(){
      $('.popup-video').magnificPopup({
              disableOn: 700,
              type: 'iframe',
              mainClass: 'mfp-fade',
              removalDelay: 160,
              preloader: false,
              fixedContentPos: false
        });
    }

    WAY.LightboxGallery = function(){
      $('.portfolio-col').magnificPopup({
          delegate: '.lightbox-gallery',
          type: 'image',
          tLoading: '#%curr%',
          mainClass: 'mfp-fade',
          fixedContentPos: true,
          closeBtnInside: true,
          gallery: {
              enabled: true,
              navigateByImgClick: true,
              preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
          }
      });
    }
    

    /*--------------------
        * Progress Bar 
    ----------------------*/
    WAY.ProgressBar = function(){
        $(".progress .progress-bar").each(function () {
          var bottom_object = $(this).offset().top + $(this).outerHeight();
          var bottom_window = $(window).scrollTop() + $(window).height();
          var progressWidth = $(this).attr('aria-valuenow') + '%';
          if(bottom_window > bottom_object) {
            $(this).css({
              width : progressWidth
            });
          }
        });
    }

    /*--------------------
    * Counter JS
    ----------------------*/
    var a = 0;
    WAY.Counter = function(){
      var oTop = $('.counter-box').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
          $('.count').each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
          a = 1;
        }
    }

    // Window on Load
    $(window).on("load", function(){
      WAY.WebLoad();
    });

    $(document).on("ready", function(){
        WAY.WorkSlider(),
        WAY.PopupVideo(),
        WAY.ClientSlider(),
        WAY.LightboxGallery(),
        WAY.MenuClose(),
        WAY.HeaderScroll(),
        WAY.Counter(),
        WAY.ProgressBar(),
        WAY.HeaderSticky();
    });

    $(window).on("scroll", function(){
        WAY.Counter(),
        WAY.ProgressBar(),
        WAY.HeaderFixed();
    });

})(jQuery);


$(document).ready(function(){
  $("#want-in").on('click', ()=>{
    $('#email').val($('#first-email').val());
  });

  $(document).on('click', '.trigger', function (event) {
    event.preventDefault();
    if($('#first-email').val() == ""){
      console.log('No email yet');
      $('#first-email').removeClass('fadeInLeft')
      $('#first-email').addClass('shake input-error')
    } else {
      $('#modal').iziModal('open');
    }
    // $('#modal').iziModal('setZindex', 99999);
    // $('#modal').iziModal('open', { zindex: 99999 });
  });

  /* Form Controller */
  $('#reg-form').on('submit', (e)=>{
    e.preventDefault();
    var fd = $('#reg-form').serializeArray();

    $.ajax({
      type: 'POST',
      data: fd,
      url: './backend/operation/Reg.php',
      success: (res, e)=>{
        var resp = JSON.parse(res);
        if(resp.status == 200){
          swal(
            'Success',
            'Your entry was successful! Please check your email for further details.',
            'success'
          );
          $('#reg-form').reset();
        } else{
          swal(
            'Error',
            resp.message,
            'error'
          )
        }
      },
      err: (e)=>{
        console.log(e);
      }
    })
  })


})