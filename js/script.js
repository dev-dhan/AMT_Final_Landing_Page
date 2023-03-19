hamburger = document.querySelector(".hamburger" );
hamburger.onclick = function() { 
    navBar = document.querySelector(".nav-bar");
    navBar.classList.toggle("active");
}


/*Slider-Themes JS*/
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";

  
} 




function showSlides2(n) {
  let i;
  let slides2 = document.getElementsByClassName("mySlides2");
  let dots2 = document.getElementsByClassName("dot2");
  if (n > slides2.length) {slideIndex2 = 1}
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
    slides2[i].style.display = "none";
  }
  for (i = 0; i < dots2.length; i++) {
    dots2[i].className = dots2[i].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";
  dots2[slideIndex2-1].className += " active";
} 

/**Go Up Button */
$(document).ready(function(){

  $(window).scroll(function(){
    if($(this).scrollTop() > 40){
      $('#topBtn').fadeIn();
    } else{
      $('#topBtn').fadeOut();
    }
  });

  $("#topBtn").click(function(){
    $('html ,body').animate({scrollTop : 0},800);
  });
});


/*Services JS */

const panels = document.querySelectorAll('.panel')
panels.forEach(panel => {
  panel.addEventListener('click',() => {
    removeActiveClasses()
    panel.classList.add('active')
  })
})

function removeActiveClasses(){
  panels.forEach(panel => {
    panel.classList.remove('active')
  })
}