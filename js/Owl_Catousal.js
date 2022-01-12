$(document).ready(function(){

    var foryourow1 = $('#foryourow1');
    var foryourow2 = $('#foryourow2');
    var foryourow3 = $('#foryourow3');
    var foryourow4 = $('#foryourow4');

    var albumslider = $('#album-slider');

    foryourow1.owlCarousel({
      loop: true,
      margin: 50 ,
      nav: false,
      items: 7.5,
      dots: false,
      autoplay: true,
      autoplayTimeout: 10000,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 4
        },
        1000: {
          items: 7.5
        }
      }
    })
    foryourow2.owlCarousel({
      loop: true,
      margin: 50 ,
      nav: false,
      items: 7.5,
      dots: false,
      autoplay: true,
      autoplayTimeout: 10000,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 4
        },
        1000: {
          items: 7.5
        }
      }
    })
    foryourow3.owlCarousel({
      loop: true,
      margin: 50 ,
      nav: false,
      items: 7.5,
      dots: false,
      autoplay: true,
      autoplayTimeout: 10000,
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 4
        },
        1000: {
          items: 7.5
        }
      }
    })
  

    
    albumslider.owlCarousel({
      loop: true,
      margin: 50 ,
      nav: false,
      items: 7,
      dots: false,
      /*autoplay: true,
      autoplayTimeout: 5000,*/
      responsive: {
        0: {
          items: 2
        },
        600: {
          items: 4
        },
        1000: {
          items: 7
        }
      }
    })


  })