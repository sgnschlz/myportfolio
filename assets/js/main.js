/*============================================
	Hamburger Menu
=============================================*/
const btnHamburger = document.querySelector('#btnHamburger');
const header = document.querySelector('.header');
const fadeElems = document.querySelectorAll('.has-fade');
const ahrefHamburger = document.querySelector('.header__menu')

  btnHamburger.addEventListener('click', function(){
    console.log('click hamburger');

    if(header.classList.contains('open')) { //close hamburger menu
    header.classList.remove('open');
    fadeElems.forEach(function(element){
      element.classList.remove('fade-in');
      element.classList.add('fade-out');
      });
    }
    else { //open hamburger menu
      header.classList.add('open'); 
      fadeElems.forEach(function(element){
        element.classList.remove('fade-out');
        element.classList.add('fade-in');
      });
    }
  });

/*============================================
	Initialize Animate on Scroll
=============================================*/

  AOS.init({
  delay: 200, // values from 0 to 3000, with step 50ms
  duration: 1000, // values from 0 to 3000, with step 50ms
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  });

/*============================================
    Scroll to Top
=============================================*/
// function scrollTopAnimated() { 
//   $("html, body").animate({ scrollTop: 0 }); 
// };

// window.onscroll = function() {
//   scrollFunction()
// };

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     document.getElementById("myBtn").style.display = "block";
//   } else {
//     document.getElementById("myBtn").style.display = "none";
//   }
// }

// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }



// $('#home').height($(document).height());
// $('.showcase__left').height($(document).height());