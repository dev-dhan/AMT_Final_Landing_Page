<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme 5 Shoe Shop</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="style/responsive.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="style/swiper-bundle.min.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Ajax Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <!-- Header Starts here -->
    <header>
        <div class="container-fluid">
            <div class="nav-logo">
                <a href="#">
                    <img src="images/AMT19.PNG" alt="">
                </a>
                
            </div>
             <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
             </div>
             
             <div class="nav-links">
                <ul>
                    <li>
                        <a href="#home" class="active">Home</a>
                    </li>

                    <li>
                        <a href="#about-us">About Us</a>
                    </li>

                    <li>
                        <a href="#feature-shoes">Feature Shoes</a>
                    </li>

                    <li>
                        <a href="#categories">Our Shoes</a>
                    </li>
                    <li>
                        <a href="#our-location">Our Location</a>
                    </li>
                </ul>
                <div class="nav-button" >
                    <a href="#" type="button">Our Store</a>
                </div>
             </div>
        </div>
    </header>
    
    <!-- Main Page starts here -->
    <section class="main-page-con">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
              <img src="images/main-1.png" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <img src="images/main-2.png" style="width:100%">
            </div>
          
            <div class="mySlides fade">
              <img src="images/main-3.png" style="width:100%">
            </div>
          
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>

          <!-- The dots/circles
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>   -->
    </section>

    <section class="about-us-con" id="about-us">
        <div class="heading" data-aos="zoom-in">
            <h1>About Us</h1>
        </div>
        <div class="content-con-about-us">
            <div class="story-con">
                <h2 data-aos="fade-in" data-aos-delay="100">Our Story</h2>
                <p data-aos="fade-in" data-aos-delay="150">Welcome to our shoe shop, where we strive to provide you with the perfect pair of shoes for any occasion. Our shop was founded with the vision of creating a 
                    one-stop-shop for all your footwear needs.
                </p>

                <p data-aos="fade-in" data-aos-delay="200">We offer a wide range of shoes for men, women, and children, ranging from comfortable casual wear to high-end formal footwear. Our selection includes various styles, 
                    such as sneakers, sandals, boots, loafers, and more, to cater to a diverse range of tastes and preferences.
                </p>

                <p data-aos="fade-in" data-aos-delay="300">At our shoe shop, we prioritize quality and durability, which is why we partner with some of the leading brands in the footwear industry to bring you only the best products.
                     We also ensure that our prices are competitive, so you get value for your money.
                </p>

                <p data-aos="fade-in" data-aos-delay="400">Our team of knowledgeable and friendly staff is always on hand to assist you in finding the right pair of shoes to meet your needs. Whether you need a pair of comfortable walking shoes, 
                    the perfect pair of boots for the winter season, or a stylish pair of heels for a special occasion, we are here to help.
               </p>

               <p data-aos="fade-in" data-aos-delay="500">We believe in delivering exceptional customer service, and that's why we offer a hassle-free return policy to ensure that you are satisfied with your purchase. We also provide a range of shoe 
                care products and accessories to help you maintain the quality and longevity of your shoes.
                </p>

                <p data-aos="fade-in" data-aos-delay="600">At our shoe shop, we are committed to providing you with an unforgettable shopping experience. Come visit us today and discover the perfect pair of shoes for your unique style and needs.
                </p>
            </div>

            <div class="vid-con" data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="2000">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/sbv9AwKVKEo" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!-- Feature Shoes Starts here -->
    <div class="feature-shoes-main-con" id="feature-shoes">
        <div class="heading" data-aos="zoom-in">
            <h1>Featured Shoes</h1>
        </div>
        <div class="shoes-feature-con">
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">

                        <div class="card swiper-slide">
                            <div class="shoes">
                                <div class="card-content">
                                    <div class="card-image">
                                        <img src="images/men-1.png" alt="" class="card-img">
                                    </div>
                                    <h1 class="shoe-name">Casual Shoes</h1>
                                    <p class="shoe-description">Make every step a stylish one with our comfortable and trendy casual shoes.</p>
                                    <p class="price">₱5,000</p>
                                    <div class="button-shoes">
                                        <a href="#"><button class="button">Order now</button></a>
                                    </div>                        
                                </div>
                            </div>                          
                        </div>

                        <div class="card swiper-slide">
                            <div class="shoes">
                                <div class="card-content">
                                    <div class="card-image">
                                        <img src="images/men-2.png" alt="" class="card-img">
                                    </div>
                                    <h1 class="shoe-name">Running Shoes</h1>
                                    <p class="shoe-description">Step up your game with our running shoes - the perfect fit for every stride.</p>
                                    <p class="price">₱9,000</p>
                                    <div class="button-shoes">
                                        <a href="#"><button class="button">Order now</button></a>
                                    </div>                        
                                </div>
                            </div>                          
                        </div>

                        <div class="card swiper-slide">
                            <div class="shoes">
                                <div class="card-content">
                                    <div class="card-image">
                                        <img src="images/men-3.png" alt="" class="card-img">
                                    </div>
                                    <h1 class="shoe-name">Sporty Shoes</h1>
                                    <p class="shoe-description">Get your head in the game with our sporty shoes - built to keep up with your active lifestyle.</p>
                                    <p class="price">₱15,000</p>
                                    <div class="button-shoes">
                                        <a href="#"><button class="button">Order now</button></a>
                                    </div>                        
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
    
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </div>

    <!-- Banner Section starts here -->
    <div class="banner-con">
        <div class="heading" data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000">
            <h1>Step into Style with us</h1>
        </div>
    </div>

    <!-- Categories Starts here -->

    <section class="categories-con" id="categories">
        <!-- Control buttons -->
        <div id="myBtnContainer">
            <button class="btn-active active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('mens')">Mens</button>
            <button class="btn" onclick="filterSelection('girls')">Womens</button>
            <button class="btn" onclick="filterSelection('kids')">Kids</button>
            <!-- <button class="btn" onclick="filterSelection('colors')"> Colors</button> -->
        </div>
        
        <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
        <div class="container">
            <div class="filterDiv mens" data-aos="fade-in" data-aos-delay="50">
                <div class="bg-design"></div>
                <img src="images/shoes-1.png" alt="">
                <p class="shoe-name">Shoes for men</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv mens" data-aos="fade-in" data-aos-delay="150">
                <div class="bg-design"></div>
                <img src="images/shoes-1.png" alt="">
                <p class="shoe-name">Shoes for men</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv mens" data-aos="fade-in" data-aos-delay="200">
                <div class="bg-design"></div>
                <img src="images/shoes-1.png" alt="">
                <p class="shoe-name">Shoes for men</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv mens" data-aos="fade-in" data-aos-delay="250">
                <div class="bg-design"></div>
                <img src="images/shoes-1.png" alt="">
                <p class="shoe-name">Shoes for men</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv girls" data-aos="fade-in" data-aos-delay= "300">
                <div class="bg-design"></div>
                <img src="images/womens-shoes.png" alt="">
                <p class="shoe-name">Shoes for womens</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv girls" data-aos="fade-in" data-aos-delay="350">
                <div class="bg-design"></div>
                <img src="images/womens-shoes.png" alt="">
                <p class="shoe-name">Shoes for womens</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv girls" data-aos="fade-in" data-aos-delay="400">
                <div class="bg-design"></div>
                <img src="images/womens-shoes.png" alt="">
                <p class="shoe-name">Shoes for womens</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv girls" data-aos="fade-in" data-aos-delay="450">
                <div class="bg-design"></div>
                <img src="images/womens-shoes.png" alt="">
                <p class="shoe-name">Shoes for womens</p>
                <a href="#"><button>Order now</button></a>
            </div>


            <div class="filterDiv kids" data-aos="fade-in" data-aos-delay="500">
                <div class="bg-design"></div>
                <img src="images/kids-shoes.png" alt="">
                <p class="shoe-name">Shoes for kids</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv kids" data-aos="fade-in" data-aos-delay="550">
                <div class="bg-design"></div>
                <img src="images/kids-shoes.png" alt="">
                <p class="shoe-name">Shoes for kids</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv kids" data-aos="fade-in" data-aos-delay="600">
                <div class="bg-design"></div>
                <img src="images/kids-shoes.png" alt="">
                <p class="shoe-name">Shoes for kids</p>
                <a href="#"><button>Order now</button></a>
            </div>

            <div class="filterDiv kids" data-aos="fade-in" data-aos-delay="650">
                <div class="bg-design"></div>
                <img src="images/kids-shoes.png" alt="">
                <p class="shoe-name">Shoes for kids</p>
                <a href="#"><button>Order now</button></a>
            </div>
        </div> 
    </section>
     
    <!-- Location Section Starts here -->
    <div class="our-store-con" id="our-location"> 
        <div class="heading" data-aos="zoom-in">
            <h1>Our Store Location</h1>
        </div>

        <div class="store-details-con">
            <div class="store-img" data-aos="flip-right"></div>
            <div class="store-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123504.11415160567!2d120.99215007073133!3d14.68409131254658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0942ef7375%3A0x4a9a32d9fe083d40!2sQuezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1671367592596!5m2!1sen!2sph" 
                width="600" height="450" style="border:0;" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Email Us Starts here -->
    <div class="email-us-form-con">
        <div class="email-us-details-con" data-aos="fade-down">
            <p class="email-us-tagline">Message Us Via Email.
            </p>
            <p class="email-us-content">We would like to invite you to come visit us and see the changes for yourself. Our staff is eager 
                to serve you and make your next visit a memorable one.
            </p>

            <p class="email-us-content">
                Thank you for your continued support and loyalty. We look forward to serving you.</p>
        </div>
        <div class="email-us-form" data-aos="fade-in">
            <form action="https://formspree.io/f/xyyakyvb" method="POST">
                <input placeholder="Full Name" type="text" id="fname"  name="Full name" required><br>
                <input placeholder="Email" type="email" id="email" name="Email" required> <br>
                <textarea placeholder="Message" name="Message" id="message" cols="30" rows="10" required></textarea> <br>
                <button type="submit" id="submit">Send</button>
              </form> 
        </div>
    </div>


    <footer>
        <div class="icons">
            <div class="icon">
                <a href="#">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Quezon City, Philippines</p> 
                </a>   
            </div>
            <div class="icon">
                <a href="#">
                    <i class="fa-solid fa-phone"></i>
                    <p>094875368541</p> 
                </a>   
            </div>
            <div class="icon">
                <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                    <p>adsvancedmediatech@yahoo.com</p> 
                </a>          
            </div>
        </div>

        <div class="footer-logo">
            <a href="#">
                <img src="images/AMT19.PNG" alt="">
            </a>
            
        </div> 
    </footer>

    
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>

    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

   
    <!-- Swips JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <!-- Slider JS -->
    <script src="js/slider.js"></script>
    <!-- Messenger JS -->
    <script src="js/messenger.js"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/aos.js"></script>
</body>
</html>