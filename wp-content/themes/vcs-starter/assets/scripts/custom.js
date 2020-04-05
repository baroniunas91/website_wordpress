"use strict";
//Fifth section (work gallery block):
$(document).ready(function() {

$('[data-fancybox="gallery1"]').fancybox({
    loop: true,
    animationEffect: "zoom",
});
//Sixth section (work process block - video):
$('[data-fancybox="gallery2"]').fancybox({
    loop: true,
    animationEffect: "zoom-in-out",
});
//Loaded photos:
$('[data-fancybox="gallery3"]').fancybox({
  loop: true,
  animationEffect: "zoom",
});

})

//Eight section (testimonials block - slider):
var slider = tns({
    container: '.slider-container',
    items: 1,
    slideBy: 'page',
    autoplay: true, 
    mouseDrag: true,
    autoplayButtonOutput: false,
    navPosition: "bottom",
    controls: false,
});

//Smooth scrolling
$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });

//Fifth section (work gallery block): Load more gallery
let galerija = document.querySelector('.link');

galerija.addEventListener('click', function(){
	document.querySelector('.img-section-more').classList.toggle('show');
});

//Fifth section (work gallery block): Change link name
let skaitliukas = document.querySelector('.link');

skaitliukas.addEventListener('click', function(e){
  e.preventDefault();
  document.querySelector('.main-gallery').classList.toggle('closed');
  document.querySelector('.all-gallery').classList.toggle('open');
});

//Burger menu
const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', function() {
  if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
  } else {
    menuBtn.classList.remove('open');
    menuOpen = false;
  }
});

//Burger menu content
let burger = document.querySelector('.menu-btn');

burger.addEventListener('click', function(){
    document.querySelector('.nav').classList.toggle('show2');
});

//Filter content
let mygtukai = document.querySelectorAll('.btn');

let posts = document.querySelectorAll('.gallery .post');

for (let i=0; i < mygtukai.length; i++) {
    mygtukai[i].addEventListener('click', function(e){
        e.preventDefault();
        for (let k=0; k < posts.length; k++) {
            // if (this.dataset.type != "all") {
                if (posts[k].dataset.type == this.dataset.type || this.dataset.type == "all") {
                    posts[k].classList.remove('hide');
                }
                else {
                    posts[k].classList.add('hide');
                }
        }
    });
}



