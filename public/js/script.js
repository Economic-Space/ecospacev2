// TYPE ANIMATION
var typed = new Typed(".auto-type", {
    strings: ["Idaman Rekruter", "Favorit Dosen", "Kesayangan HR"],
    typeSpeed: 150,
    backSpeed: 150,
    loop: true
});


// NUMBER COUNTER ANIMATION

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min((timestamp - startTimestamp) / duration, 1);
      obj.innerHTML = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  }

  // animation only played after user enter the viewport

  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const obj1 = document.getElementById("numcounter1");
        animateValue(obj1, 0, 250, 3000);

        const obj2 = document.getElementById("numcounter2");
        animateValue(obj2, 0, 70, 3000);

        const obj3 = document.getElementById("numcounter3");
        animateValue(obj3, 0, 90, 3000);
      }
    });
  }, options);

  const target1 = document.querySelector('#numcounter1');
  observer.observe(target1);

  const target2 = document.querySelector('#numcounter2');
  observer.observe(target2);

  const target3 = document.querySelector('#numcounter3');
  observer.observe(target3);


  // marquee
const swiper = new Swiper('.sample-slider', {
    loop: true,
    autoplay: {
        delay: 0,
    },
    speed: 3000,
    slidesPerView: 3,
})

const swiper2 = new Swiper('.mobile-slider', {
    loop: true,
    autoplay: {
        delay: 0,
    },
    speed: 3000,
    slidesPerView: 2,
})

// flip

const swiper3 = new Swiper('.step-slider', {
    loop: true,
    autoplay: {
        delay: 0,
    },
    speed: 2000,
    mousewheel: true,
    slidesPerView: 1,                    // slide speed
    effect: 'flip',                     // apply flip effect
    flipEffect: {
        slideShadows: false,            // Remove the shadow on the slide surface
    },
})


// agar besar div sama
window.addEventListener('load', function () {
    var cards = document.querySelectorAll('#card-testimoni');
    var services = document.querySelectorAll('#label-service');

    var maxHeight = 0;
    cards.forEach(function(card) {
        maxHeight = Math.max(maxHeight, card.offsetHeight);
    });

    console.log( maxHeight);

    cards.forEach(function(card) {
        card.style.height = maxHeight + 'px';
    });

    var maxHeightLabel = 0;
    services.forEach(function(service) {
        maxHeightLabel = Math.max(maxHeightLabel, service.offsetHeight);
    });

    console.log( maxHeightLabel);

    services.forEach(function(service) {
        service.style.height = maxHeightLabel + 'px';
    });

});

