$(document).ready(function(){

// slick slider
$('.slider').slick({
  dots: true,
  infinite: true,
  speed: 500,
  prevArrow:'.prev',
  nextArrow:'.next',
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// slick slider

$('.slider2').slick({
  dots: false,
  infinite: true,
  speed: 300,
  prevArrow:'.prev0',
  nextArrow:'.next0',
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

// venobox

$('.venobox').venobox();

// venobox

// headhesive js

var options = {
            offset: '#showHere',
            offsetSide: 'top',
            classes: {
                clone:   'header--clone',
                stick:   'header--stick',
                unstick: 'header--unstick'
            }
        };

        // Initialise with options
        var header = new Headhesive('.header', options);

// headhesive js

/*up counter*/

$('.counter').counterUp({
  delay: 10,
  time: 2000
});
$('.counter').addClass('animated fadeInDownBig');
$('h3').addClass('animated fadeIn');

/*up counter*/

// Countdown JS

const countdown = new Date(2025, 6, 15, 0, 0, 0, 0);

function getRemainingTime(endtime) {
  const milliseconds = Date.parse(endtime) - Date.parse(new Date());
  const seconds = Math.floor( (milliseconds/1000) % 60 );
  const minutes = Math.floor( (milliseconds/1000/60) % 60 );
  const hours = Math.floor( (milliseconds/(1000*60*60)) % 24 );
  const days = Math.floor( milliseconds/(1000*60*60*24) );

  return {
    'total': milliseconds,
    'seconds': seconds,
    'minutes': minutes,
    'hours': hours,
    'days': days,
  };
}

function initClock(id, endtime) {
  const counter = document.getElementById(id);
  const daysItem = counter.querySelector('.js-countdown-days');
  const hoursItem = counter.querySelector('.js-countdown-hours');
  const minutesItem = counter.querySelector('.js-countdown-minutes');
  const secondsItem = counter.querySelector('.js-countdown-seconds');

  function updateClock() {
    const time = getRemainingTime(endtime);

    daysItem.innerHTML = time.days;
    hoursItem.innerHTML = ('0' + time.hours).slice(-2);
    minutesItem.innerHTML = ('0' + time.minutes).slice(-2);
    secondsItem.innerHTML = ('0' + time.seconds).slice(-2);

    if (time.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  const timeinterval = setInterval(updateClock, 1000);
}

initClock('js-countdown', countdown);

// Countdown JS























});
