<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link rel="preconnect" href="https://fonts.gstatic.com" />
      <link
         href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap"
         rel="stylesheet"
         />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
         integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
         crossorigin="anonymous"
         />
      <!-- Animate on Scroll CSS -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
      <link rel="stylesheet" href="dist/css/style.css" />
   </head>
   <body>
      <!--=====================================
         Preloader
         ========================================-->
      <div id="preloader" class="flexpre">
         <div id="str"></div>
      </div>
      <!--=====================================
         Menu
         ========================================-->
      <header class="header">
         <nav class="flex flex-jc-sb flex-ai-c container">
            <a href="http://signeschulz.com/minu/" class="header__logo"
               >
               Inspired By Web
               <!-- <img src="assets/images/logo.jpg" alt="Inspired By Web" /> -->
            </a>
            <a
               id="btnHamburger"
               href="#"
               class="header__toggle hide-for-desktop burger"
               >
            <span class="icon-bar burger__line"></span>
            <span class="icon-bar burger__line"></span>
            <span class="icon-bar burger__line"></span>
            </a>
            <div class="header__links hide-for-mobile">
               <a class="scroll active" href="#home">Home</a>
               <a class="scroll" href="#about">About</a>
               <a class="scroll" href="#skills">Skills</a>
               <a class="scroll" href="#portfolio">Portfolio</a>
               <a class="scroll" href="#contact1">Contact</a>
            </div>
         </nav>
         <div class="header__menu has-fade">
            <a class="scroll active" href="#home">Home</a>
            <a class="scroll" href="#about">About</a>
            <a class="scroll" href="#skills">Skills</a>
            <a class="scroll" href="#portfolio">Portfolio</a>
            <a class="scroll" href="#contact1">Contact</a>
         </div>
      </header>
      <!--=====================================
         Header
         ========================================-->
      <!-- http://jsfiddle.net/8SUmn/3/ -->
      <!-- https://stackoverflow.com/questions/23746556/how-to-have-content-disappear-hidden-behind-transparent-header-while-scrolling/23746858 -->
      <section id="home" class="showcase">
         <div class="showcase__content flex">
            <div class="showcase__left home__me">
               <h2 class="home">Home</h2>
               <p class="getting" data-aos="fade-down" data-aos-delay="1200">
                  Getting Started
               </p>
               <h1 data-aos="fade-right" class="l__heading" data-aos-delay="1500">
                  Inspired <br />
                  By <br />Web
               </h1>
            </div>
            <div class="showcase__right" data-aos="fade-left">
               <p>Hello!</p>
               <p>
                  I'm Signe, an aspiring web-developer from Estonia based in London.
               </p>
               <p>
                  Being constantly impressed by web I started this site to share my
                  excitement and tips.
               </p>
            </div>
         </div>
      </section>
      <!--=====================================
         About
         https://preview.colorlib.com/theme/noah/index.html
         ========================================-->
      <section id="about" class="flex">
         <div class="about about__me">
            <h2 data-aos="fade-down">About</h2>
            <h1 class="aboutme" data-aos="fade-right" data-aos-delay="500">
               Signe Schulz
            </h1>
         </div>
         <!-- <div class="about transform">About</div> -->
         <div class="about about__p" data-aos="fade-left">
            <!-- <div class="about transform">About</div>   -->
            <p>
               This website is a result of my evergrowing interest in
               web-development.
            </p>
            <p>
               I'm self-taught (or rather web-taught), spending hours on little
               details to get it right.
            </p>
            <p>
               I focus on finding the most efficient techniques suitable for the
               project.
            </p>
            <p>
               When possible I try to avoid libraries and hand-code from scratch, e.g
               using vanilla JavaScript instead of jQuery.
            </p>
            <p>I'm eager to learn new web technologies.</p>
            <!-- <p>Here are some languages and tools I have used in my projects.</p>
               <p>HTML5, CSS, SASS, Bootstrap, JavaScript etc</p> -->
            <div class="about transform">About</div>
         </div>
      </section>
      <!--=====================================
         Skills
         ========================================-->
      <section id="skills" class="flex">
         <div class="about skills__p" data-aos="fade-right">
            <p>Here are some web technologies I have used in my projects.</p>
            <ul>
               <li>HTML5</li>
               <li>CSS3</li>
               <li>SASS</li>
               <li>Bootstrap</li>
               <li>JavaScript</li>
               <li>jQuery</li>
            </ul>
            <div class="about transform">Skills</div>
         </div>
         <div class="about about__me">
            <h2 data-aos="fade-down">Expertise</h2>
            <h1 class="aboutme myskills" data-aos="fade-left" data-aos-delay="500">
               My Skills
            </h1>
         </div>
      </section>
      <!--=====================================
         Portfolio
         ========================================-->
      <!-- https://francoisxaviermanceau.com/projects/digital-work/alban-delachaume-portfolio -->
      <section id="portfolio" class="work work1">
         <div class="about about__me my__work">
            <h2 data-aos="fade-down">Portfolio</h2>
            <!-- https://stackoverflow.com/questions/55329546/line-before-and-after-text-not-responsive -->
            <h1 class="aboutme scratch" data-aos="fade-left" data-aos-delay="500">
               A Website Built from Scratch
            </h1>
            <!-- <h1 class="scratch">A Website Built from Scratch</h1> -->
         </div>
         <div class="flex__portfolio">
            <div class="portfolio__img" data-aos="fade-right" data-aos-delay="1500">
               <a href="http://www.funkiwala.com" target="_blank">
               <img src="assets/img/websites/funkiwala.jpg" alt="Funkiwala website"
                  /></a>
               <div class="viewlive">
                  <a href="http://www.funkiwala.com" target="_blank"
                     ><span class="letterspacing">View Liv</span>e
                  <i class="fas fa-external-link-alt"></i
                     ></a>
               </div>
               <div class="about transform portfolio__transform">Portfolio</div>
            </div>
            <div class="portfolio__ul" data-aos="fade-up">
               <ul>
                  <li>Record Label Funkiwala did not have an online presence.</li>
                  <li>
                     Handcoded website using HTML5, CSS3, SASS, JavaScript, jQuery,
                     Flexbox, Grid and AOS Library that helped out with animations on
                     scroll.
                  </li>
                  <li>Ajax Gmail SMTP Server was used for contact form.</li>
               </ul>
            </div>
         </div>
      </section>
      <!--=====================================
         Contact
         ========================================-->
      <section id="contact1">
         <div class="about__me contact__me">
            <h2 data-aos="fade-down">Contact</h2>
            <h1 class="contactline" data-aos="fade-right" data-aos-delay="500">
               Contact Me
            </h1>
         </div>
         <div id="contact__me" class="flex">
            <div
               class="contact__left contact"
               data-aos="fade-right"
               data-aos-delay="800"
               >
               <h2>Contact Details</h2>
               <ul>
                  <li><i class="fas fa-phone-alt"></i>07576783338</li>
                  <li><i class="far fa-envelope"></i>signe.schulz@gmail.com</li>
               </ul>
            </div>
            <div
               class="contact__right contact"
               data-aos="fade-up"
               data-aos-delay="800"
               >
      
               <form id="contact">
          
          <div>
            <input type="text" name="name" id="name" placeholder="Your name">
          </div>
     
          <div>
            <input type="email" name="email" id="email" placeholder="Your email">
          </div>
      
          <div>
            <textarea rows="5" cols="10" name="message" id="message" class="form-control" style="resize:none" placeholder="Your message"></textarea>
          </div>
    

          <div>
            <div id="msg"></div>
            <button id="submit-btn" class="btn">SEND MESSAGE</button>
          </div>


      </form>




            </div>
         </div>
         <div class="about transform">Contact</div>
      </section>
      <!--=====================================
         Footer
         https://ejosue.com/contact/
         ========================================-->
      <section id="footer" class="flex">
         <!-- contact 
            http://ivang-design.com/wordpress-demos/oreades/home-parallax-no-border/#home -->
         <div class="social footer">
            <h3>Social Media</h3>
            <p>
               <a
                  href="https://www.youtube.com/channel/UCzcZpSGkkAY5qRpf7PCQOHw"
                  target="_blank"
                  ><i class="fab fa-youtube"></i
                  ></a>
               <a href="https://twitter.com/SigneSchulz" target="_blank"
                  ><i class="fab fa-twitter"></i
                  ></a>
               <a href="https://github.com/sgnschlz" target="_blank"
                  ><i class="fab fa-github"></i
                  ></a>
            </p>
         </div>
         <div class="footer__menu footer">
            <h3>Menu</h3>
            <div class="footer__menu">
               <a class="scroll active" href="#home">Home</a>
               <a class="scroll" href="#about">About</a>
               <a class="scroll" href="#skills">Skills</a>
               <a class="scroll" href="#portfolio">Portfolio</a>
               <a class="scroll" href="#contact1">Contact</a>
            </div>
         </div>
         <div class="footer__contact footer">
            <h3>Contact</h3>
            <ul>
               <li><i class="fas fa-phone-alt"></i> 07576783338</li>
               <li><i class="far fa-envelope"></i>&nbsp;signe.schulz@gmail.com</li>
            </ul>
         </div>
      </section>
      <footer>
         <p class="copy">
            Copyright &copy; 2021, Inspired By Web, All Rights Reserved
         </p>
      </footer>
      <script
         src="https://code.jquery.com/jquery-3.5.1.min.js"
         integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
         crossorigin="anonymous"
         ></script>

      <!-- Preloader -->
      <script src="assets/js/loader.js"></script>
      <!-- Animate on Scroll -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <!-- <script>
         AOS.init();
         </script> -->
      <script src="assets/js/main.js" defer></script>
      <script src="assets/js/smoothscroll.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script>
$(document).ready(function(){
  $('#submit-btn').click(function(event){
    event.preventDefault();
     $.ajax({
        dataType: 'JSON',
        url: 'sendmail.php',
        type: 'POST',
        data: $('#contact').serialize(),
        beforeSend: function(xhr){
          $('#submit-btn').html('SENDING...');
        },
        success: function(response){
          if(response){
            console.log(response);
            if(response['isSuccess']){
             $('#msg').html('<div class="alert alert-success">'+ response['msg']  +'</div>');
              $('input, textarea').val(function() {
                 return this.defaultValue;
              });
            }
            else{
              $('#msg').html('<div class="alert alert-danger">'+ response['msg'] +'</div>');
            }
          }
        },
        error: function(){
          $('#msg').html('<div class="alert alert-danger">Errors occur. Please try again later.</div>');
        },
        complete: function(){
          $('#submit-btn').html('SEND MESSAGE');
        }
      });
  });
});
</script>
   </body>
</html>