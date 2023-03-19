<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme 2 - Brushwork Boulevard</title>
    <link rel="shortcut icon" href="images/amt-logo-browser.png
amt-logo.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="style/responsive.css">
    <!-- Ajax Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <header>
        <div class="logo-img">
            <a href="#"><img src="images/amt-logo.png" alt=""></a>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="#welcome">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="#"><img class="store-btn" src="images/store-marker.png" alt="Store Button"></a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Welcome Section Starts here -->
    <div class="welcome-section-con">
        <div class="welcome-content-con" id="welcome" >
            <h1 class="welcome-heading" data-aos="fade-down" data-aos-delay="50">ADSvanced 
                Media Tech 
            </h1>
            <h1 class="welcome-heading" data-aos="fade-down" data-aos-delay="100">Tattoo Studio  
            </h1>
            <p class="parag-content" data-aos="fade-down" data-aos-delay="150">Tattoos are a form of self-expression that allow individuals to tell their unique story through permanent ink on their skin.
              A good tattoo shop should not only provide high-quality work, but also a welcoming and supportive environment for clients to feel comfortable in.
           </p>
           <p class="parag-content" data-aos="fade-down" data-aos-delay="200">"Ink your story, wear it forever."
           </p>
            <a href="#" ><button class="btn" data-aos="zoom-in" >Explore Us</button></a>
        </div>

        <div class="welcome-img-con" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
        </div>
    </div>

      <!-- About Starts here -->
      <div class="about-section-con" id="about">
        <div class="about-video-con" data-aos="fade-in">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/BwKUSAVb_Zw"  frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="about-section-content-con" data-aos="fade-in">
            <h1 class="content-heading">How ADSvanced Media Tech Tattoo Shop start?</h1>
            <h1 class="content-heading">Watch our Story</h1>
            <p class="parag-content">At ADSvanced Media Tech Tattoo, we're dedicated to providing high-quality tattoos that tell your unique story. Our talented artists take the time to understand your vision and bring it to life with their exceptional skills. Whether you're looking for a custom design, 
              a cover-up, or a portrait tattoo, we use only the best equipment and inks to ensure that your tattoo lasts a lifetime. Come visit us and let us help you ink your story today.
            </p>
            <a href="#"><button class="btn" data-aos="zoom-in">Watch More</button></a>
        </div>
    </div>

      <!-- Our Services -->
      <div class="our-services-con" id="our-services">
        <h1 class="content-heading" data-aos="zoom-in" data-aos-delay="50">Our Services</h1>
        <div class="services">
            <div class="service" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                <img src="images/our_service_1.jpg" alt="Henna Picture">
                <div class="desc-con">
                  <div class="subheading">Custom Tattoos</div>
                  <p class="parag-content">Custom tattoos are original designs created specifically for an individual client based on their personal preferences and ideas. </p>
                </div>
                
            </div>

            <div class="service" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="200">
                <img src="images/our_service_2.jpg" alt="Henna Picture">
                <div class="desc-con">
                  <div class="subheading">Cover-up Tattoos</div>
                  <p class="parag-content">Cover-up tattoos are used to conceal an existing tattoo that the client no longer wants visible. This can be due to a change in personal style,
                     poor workmanship of the original tattoo, or simply the desire for a fresh start.</p>
                </div>
                
            </div>

            <div class="service" data-aos="fade-up" data-aos-anchor-placement="center-bottom" data-aos-delay="300">
                <img src="images/our_service_3.jpg" alt="Henna Picture">
                <div class="desc-con">
                  <div class="subheading">Portrait Tattoos</div>
                  <p class="parag-content">Portrait tattoos are depictions of real or fictional people, animals, or objects, in a realistic or stylized manner. These tattoos can be black and grey or full color and 
                    can be used to honor the memory of a loved one, pay homage to a hero or role model, or simply to display an image that holds personal significance. </p>
                </div>       
            </div>
        </div>
    </div>

   <!-- Our Artist -->
   <div class="our-artist-con" id="our-artist">
    <div class="artist-details-con" data-aos="fade-right">
        <h1 class="content-heading">Meet ADSvanced Media Tech</h1>
        <h1 class="content-heading">Tattoo Artist</h1>
        <p class="parag-content">Meet Our Tattoo Artist, a talented and passionate tattoo artist at ADSvanced Media Tech. With decades years of experience, Our Artist is specializes in both traditional and modeern way of making tattoo. 
          We takes pride in creating custom tattoos that are not only visually stunning, but also meaningful to each individual client.</p>
    </div>
    
    <div class="slideshow-container" data-aos="fade-in">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img src="images/artist-1.jpg" style="width:100%">
          <div class="artist-desc">
            <p class="artist-name">Analyn Ampo</p>
            <p class="artist-job-title">Tattoo Artist</p>
          </div>
        </div>
      
        <div class="mySlides fade">
            <img src="images/artist-2.jpg" style="width:100%">
            <div class="artist-desc">
              <p class="artist-name">Dandrev Barrio</p>
              <p class="artist-job-title">Tattoo Artist</p>
            </div>
          </div>
      
          <div class="mySlides fade">
            <img src="images/artist-3.jpg" style="width:100%">
            <div class="artist-desc">
              <p class="artist-name">John Paul Narvasa</p>
              <p class="artist-job-title">Tattoo Artist</p>
            </div>
          </div>
          
          <div class="mySlides fade">
            <img src="images/artist-4.jpg" style="width:100%">
            <div class="artist-desc">
              <p class="artist-name">Roldhan Fulo</p>
              <p class="artist-job-title">Tattoo Artist</p>
            </div>
          </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
 </div>
</div>

    <!-- Testimonial Starts here -->
    <div class="testimonial-con" id="testim">
      <h1 class="content-heading" data-aos="zoom-in">What our clients say about us</h1>
      <div class="img-con">
          <img class="quote-img" src="images/format-quote-open.png" alt="">
      </div>
      <div class="wrap">

          <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
          <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

          <ul class="dots" id="testim-dots">
              <li class="dot active"></li>
              <li class="dot"></li>
              <li class="dot"></li>
              <li class="dot"></li>
              <li class="dot"></li>
          </ul>

          <div class="cont" id="testim-content">
              <div class="active">
                  <p>"Analyn Ampo gave an excellent tattoo. She understood the client's vision and delivered a design that exceeded expectations. Client highly satisfied."</p>
                  <h2>Roldhan Fulo</h2>
                  <h3 class="client-title">Client</h3>
              </div>
              
              <div class="active">
                  <p>"Dandrev Barrio gave an excellent tattoo. She understood the client's vision and delivered a design that exceeded expectations. Client highly satisfied."</p>
                  <h2>Analyn Ampo</h2>
                  <h3 class="client-title">Client</h3>
              </div>
              
              <div class="active">
                  <p>"John Paul Narvasa gave an excellent tattoo. She understood the client's vision and delivered a design that exceeded expectations. Client highly satisfied."</p>
                  <h2>Dandrev Barrio</h2>
                  <h3 class="client-title">Client</h3>
              </div>
              
              <div class="active">
                  <p>"Roldhan Fulo gave an excellent tattoo. She understood the client's vision and delivered a design that exceeded expectations. Client highly satisfied."</p>
                  <h2>Dandrev Barrio</h2>
                  <h3 class="client-title">Client</h3>
              </div>
              
              <div class="active">
                  <p>"AMT Tattoo Shop gave an excellent tattoo. She understood the client's vision and delivered a design that exceeded expectations. Client highly satisfied."</p>
                  <h2>John Paul Narvasa</h2>
                  <h3 class="client-title">Client</h3>
              </div>
          </div>

      </div>
  </div>
    <!-- Tattoo Galler Starts Here -->
    <div class="tattoo-gallery-con" id="gallery">
        <div class="lightBox">
            <div class="lightBox_content">
              <i class="fas fa-times close"></i>
              <div class="logo_icons">
                  <img class="logoImg" src="images/logo.PNG" alt="">
                  <div class="text_content">
                    <span class="creator">Credits to:</span>
                    <span class="creator-name">Unsplash.com</span>
                  </div>
                <div class="icons">
                  <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
              </div>
              <div class="showImg">
                <div class="image">
                  <img src="images/artist-1.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
      
          <div class="image-gallery">
            <h1 class="content-heading">Our Tattoo Gallery</h1>
            <p class="parag-content">We invite you to browse our gallery and see for yourself why ADSvanced Media Tech Tattoo designs is the premier choice for high-quality tattoos. If you see something you 
              like or have questions about a particular tattoo, don't hesitate to reach out to us. We're here to help you find the perfect tattoo that tells your unique story.
            </p>
            <div class="image-container">
              <div class="image-box">
                <img class="gImg" src="images/gallery-1.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-1.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Analyn Ampo</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-2.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-2.jpg" alt=""-->
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Roldhan Fulo</span>
                    </div>          
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-3.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-3.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Dandrev Barrio</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-4.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-4.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">John Paul Narvasa</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-5.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-1.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Analyn Ampo</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-6.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-2.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Roldhan Fulo</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-7.jpg" alt=""\>
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-3.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Dandrev Barrio</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-8.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-4.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">John Paul Narvasa</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-9.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-1.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Analyn Ampo</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-10.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-2.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Roldhan Fulo</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-11.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-3.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Dandrev Barrio</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-12.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-4.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">John Paul Narvasa</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-13.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-1.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Analyn Ampo</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              <div class="image-box">
                <img class="gImg" src="images/gallery-14.jpg" alt="">
                <div class="logo_icons">
                    <img class="logoImg" src="images/artist-2.jpg" alt="">
                    <div class="text_content">
                      <span class="creator">Artist Name:</span>
                      <span class="creator-name">Roldhan Fulo</span>
                    </div>
                  <div class="icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
    </div>
    <!-- Location Starts here -->
    <div class="location-details-con" id="contact">
      <div class="store-details-con">
        <div class="store-details">
          <h1 class="location-heading">Opening Hours</h1>
          <p class="location-details-p">
            Monday - Wednesday 8:00 am - 8:00pm
          </p>
          <p class="location-details-p">
            Thursday - Sunday 8:00 am - 5:00pm
          </p>
        </div>

        <div class="store-details">
          <h1 class="location-heading">Address</h1>
          <p class="location-details-p">
            Quezon City , Philippines
          </p>
        </div>

        <div class="store-details">
          <h1 class="location-heading">Appointment</h1>
          <p class="location-details-p">
            Mobile number: 09486587235
          </p>
          <p class="location-details-p">
            Email Us: ADSmediatech@gmail.com
          </p>
        </div>
      </div>
      <div class="map-con">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123504.11415160535!2d120.99215007073133!3d14.68409131254658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0942ef7375%3A0x4a9a32d9fe083d40!2sQuezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1673094957729!5m2!1sen!2sph" 
        width="100%" height="100%" style="border:0;" allowfullscreen="" 
        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <!-- Email Us Starts here -->
    <div class="email-us-form-con">
        <div class="email-us-details-con" data-aos="fade-right" data-aos-duration="5000">
            <p class="email-us-tagline">Message Us Via Email.
              & We'll Design a Fantastic Tattoo Just For You
            </p>
            <p class="email-us-content">If you have any questions or would like to schedule an appointment, please don't hesitate to email us
              Our team is available to assist you with any inquiries and ensure that your experience at Adsvanced Media Tech is a positive one.
               We look forward to hearing from you and helping you bring your tattoo vision to life.
            </p>
        </div>
        <div class="email-us-form" data-aos="fade-in" data-aos-duration="5000">
          <form action="https://formspree.io/f/xyyakyvb" method="POST">
                <input placeholder="Full Name" type="text" id="fname"  name="Full name" required><br>
                <input placeholder="Email" type="email" id="email" name="Email" required> <br>
                <textarea placeholder="Message" name="Message" id="message" cols="30" rows="10" required></textarea> <br>
                <button type="submit" id="submit">Send</button>
          </form> 
        </div>
    </div>

    <!-- Footer Starts here -->

    <div class="footer">
      <a href="#"><img class="logo" src="images/logo.PNG" alt="logo"></a>
      <p class="copyright">©2022 ADSvanced Media Tech </p>
      <p class="contact-us">Contact Us:+639078009349</p>
      <div class="icons">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
      </div>

    </div>

    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>


    <!-- Custom JS -->
    <script src="js/script.js"></script>

    <!-- Swiper JS-->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- Chat Feature JS -->
    <script src="js/chat-feature.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/aos.js"></script>
</body>
</html>