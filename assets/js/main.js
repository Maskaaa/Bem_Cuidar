function passaSlide() {
var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
    counter = 1;
  }
}, 4000);
};
passaSlide();


// SLIDER DE SERVIÇOS
$(document).ready(function() {
  $('#autoWidth').lightSlider({
      autoWidth:true,
      loop:true,
      onSliderLoad: function() {
          $('#autoWidth').removeClass('cS-hidden');
      } 
  });  
});


// DEBOUNCE
const debounce = function(func, wait, immediate) {
  let timeout;
  return function(...args) {
    const context = this;
    const later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
};

// ANIMAÇÃO SCROLL
(function() {
  const target = document.querySelectorAll('[data-anime]');
  const animationClass = 'animate';
  // CALCULADORA PARA INICIAR ANIMAÇAO
  function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 3);
    target.forEach(function(element) {
      if((windowTop) > element.offsetTop) {
        element.classList.add(animationClass);
        console.log("rodou")
      } else {
        element.classList.remove(animationClass);
      }
    })
  }
  setTimeout(animeScroll, 4500);
  $(document).scroll(debounce(function(){
    animeScroll();
  }, 50));
  }());