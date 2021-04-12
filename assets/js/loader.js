/*============================================
    Preloader
=============================================*/
var string = "Portfolio";
var str = string.split("");
var el = document.getElementById('str');
(function animate() {
str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running); 
var running = setTimeout(animate, 90);
})();



$(window).on('load', function() {
  $('#preloader').delay(1000).fadeOut();
});

