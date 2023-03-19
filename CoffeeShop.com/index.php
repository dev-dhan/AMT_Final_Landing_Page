<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Theme 1 - Blissful Bites</title>
    <link rel="shortcut icon" href="images/amt-logo-browser.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"  />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>


<body>
    <!-- Header Starts here -->
    <header>
        <div class="container-fluid">
            <div class="nav-logo">
                <img src="images/amt-logo.png" alt="" >
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
                        <a href="#best-seller">Our Best Seller</a>
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
    
    <!-- welcome page starts here -->
    <div class="welcome-page-con"  id="home">
        <div class="heading-con">
            <h2 class="welcome-"data-aos="fade-out"  data-aos-delay="100">All Coffee Is Not</h2>
            <h1 data-aos="fade-down"  data-aos-delay="200">Created Equal </h1>
            <p data-aos="fade-down"  data-aos-delay="300">"Live,Love,Coffee"</p>
            <div class="welcome-button" data-aos="zoom-in"  data-aos-delay="400">
                <a href="#" type="button" >Shop Now</a>
                <img src="images/store-search.png" alt="">
            </div>
        </div>
        <div class="image-con"  data-aos="flip-up"></div>
    </div>

    <!-- About us starts here -->

    <div class="about-us-con" id="about-us">
        <div class="video-cont" data-aos="fade-in"   data-aos-duration="1000">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/lAd3LYIZMjs" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div> 
        <div class="about-us-content-con" data-aos="fade-down">
            <div class="about-us-heading-con">
                <div class="heading-line"></div>
                <p class="title-heading" >About Us</p>
                <div class="heading-line"></div>
            </div>
            <p class="sub-heading">Our Story</p>
            <p class="content-desc">Once upon a time, there was a small town nestled in the heart of a bustling city. The town was known for its friendly residents 
                and warm community spirit, but one thing was missing – a place where people could come together to relax and enjoy a cup of coffee.
                Enter our coffee shop. The shop was opened by a passionate coffee lover who had a dream of creating a cozy and inviting space where locals could 
                gather and enjoy the simple pleasures in life.From the moment you step inside, you'll be enveloped by the rich, comforting aroma of freshly brewed 
                coffee. The shop features warm, inviting décor with soft lighting, comfortable seating, and just the right ambiance for catching up with friends, reading 
                a book, or simply relaxing after a long day.
            </p>

            <p class="content-desc">At our coffee shop, we believe in using only the highest quality ingredients in all of our drinks. Our coffee beans are carefully selected
                 from the best growing regions in the world, and our baristas are trained to craft the perfect cup every time. Whether you prefer a classic cappuccino, a rich 
                 latte, or a bold espresso, we've got you covered. 
            </p>
            
            <a href="#" class="button-link-about" data-aos="zoom-in" data-aos-delay="200"><button class="about-us-button" >Read more</button></a>
            
        </div>
    </div>

    <!--Best Seller Starts here-->
    <div class="best-seller-con" id="best-seller">
        <div class="best-seller-content-con" data-aos="zoom-in">
            <div class="best-seller-heading-con">
                <div class="heading-line"></div>
                <p class="title-heading">Best Seller</p>
                <div class="heading-line"></div>
            </div>
            <p class="sub-heading">Our Best Offer</p>
        </div>

        <div class="best-seller-product-con">
            <div class="coffee-product-card" data-aos="fade-in" data-aos-delay="100">
                <img class="product-photo" src="images/Product-1.png" alt="Product Photo">
                <div class="product-desc-con">
                    <div class="rating">
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                    </div>
                    <p class="product-title">Kape Amerikano</p>
                    <p class="product-price">₱200 </p>
                    <a href="#" ><button class="welcome-button">Order now</button></a>
                        <!-- <img src="/images/store-search.png" alt=""> -->   
                </div>
            </div>
            
            <div class="coffee-product-card" data-aos="fade-in" data-aos-delay="200">
                <img class="product-photo" src="images/Product-2.png" alt="Product Photo">
                <div class="product-desc-con">
                    <div class="rating">
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                    </div>
                    <p class="product-title">Krema Mallows</p>
                    <p class="product-price">₱210 </p>
                    <a href="#" ><button class="welcome-button">Order now</button></a>
                        <!-- <img src="/images/store-search.png" alt=""> -->   
                </div>
            </div>

            <div class="coffee-product-card" data-aos="fade-in" data-aos-delay="300">
                <img class="product-photo" src="images/Product-3.png" alt="Product Photo">
                <div class="product-desc-con">
                    <div class="rating">
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                    </div>
                    <p class="product-title">Kape Grande</p>
                    <p class="product-price">₱240 </p>
                    <a href="#" ><button class="welcome-button">Order now</button></a>
                        <!-- <img src="/images/store-search.png" alt=""> -->   
                </div>
            </div>

            <div class="coffee-product-card" data-aos="fade-in" data-aos-delay="400">
                <img class="product-photo" src="images/Product-7.png" alt="Product Photo">
                <div class="product-desc-con">
                    <div class="rating">
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                    </div>
                    <p class="product-title">Mocha Krema</p>
                    <p class="product-price">₱250 </p>
                    <a href="#" ><button class="welcome-button">Order now</button></a>
                        <!-- <img src="/images/store-search.png" alt=""> -->   
                </div>
            </div>

            <div class="coffee-product-card" data-aos="fade-in" data-aos-delay="500">
                <img class="product-photo" src="images/Product-1.png" alt="Product Photo">
                <div class="product-desc-con">
                    <div class="rating">
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                    </div>
                    <p class="product-title">Kape Amerikano</p>
                    <p class="product-price">₱200 </p>
                    <a href="#" ><button class="welcome-button">Order now</button></a>
                        <!-- <img src="/images/store-search.png" alt=""> -->   
                </div>
            </div>
            
            <div class="coffee-product-card" data-aos="fade-in" data-aos-delay="600">
                <img class="product-photo" src="images/Product-2.png" alt="Product Photo">
                <div class="product-desc-con">
                    <div class="rating">
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                    </div>
                    <p class="product-title">Krema Mallows</p>
                    <p class="product-price">₱210 </p>
                    <a href="#" ><button class="welcome-button">Order now</button></a>
                        <!-- <img src="/images/store-search.png" alt=""> -->   
                </div>
            </div>

            <div class="coffee-product-card" data-aos="fade-in" data-aos-delay="700">
                <img class="product-photo" src="images/Product-3.png" alt="Product Photo">
                <div class="product-desc-con">
                    <div class="rating">
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                    </div>
                    <p class="product-title">Kape Grande</p>
                    <p class="product-price">₱240 </p>
                    <a href="#" ><button class="welcome-button">Order now</button></a>
                        <!-- <img src="/images/store-search.png" alt=""> -->   
                </div>
            </div>

            <div class="coffee-product-card" data-aos="fade-in" data-aos-delay="800">
                <img class="product-photo" src="images/Product-7.png" alt="Product Photo">
                <div class="product-desc-con">
                    <div class="rating">
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                        <div class="star"><img src="images/star.png" alt=""></div>
                    </div>
                    <p class="product-title">Mocha Krema</p>
                    <p class="product-price">₱250 </p>
                    <a href="#" ><button class="welcome-button">Order now</button></a>
                        <!-- <img src="/images/store-search.png" alt=""> -->   
                </div>
            </div>
            
            </div>
        </div>
    </div>

    <!-- Our team Slider starts here -->
    <div class="testimonial-con">
        <div class="testimonial-content-con" data-aos="zoom-in">
            <div class="testimonial-heading-con">
                <div class="heading-line"></div>
                <p class="title-heading">Testimonials</p>
                <div class="heading-line"></div>
            </div>
            <p class="sub-heading">Our Customer Experience</p>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/Testimonials.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Analyn Ampo</h2>
                            <div class="rating">
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                            </div>
                            <div class="about-us-heading-con">
                                <div class="heading-line"></div>
                                <p class="title-heading">Food Critique</p>
                                <div class="heading-line"></div>
                            </div>
                            <p class="description">"I recently tried the AMT blend coffee from this local roastery and I was blown away by the rich and bold flavor. It has become my new go-to coffee in the morning. Highly recommend giving it a try."</p>

                            <!-- <button class="button">View More</button> -->
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/Testimonials2.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Dandrev Barrio</h2>
                            <div class="rating">
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                            </div>
                            <div class="about-us-heading-con">
                                <div class="heading-line"></div>
                                <p class="title-heading">Food Critique</p>
                                <div class="heading-line"></div>
                            </div>
                            <p class="description">"I was pleasantly surprised by the quality of coffee from this gas station. I expected it to be average, but it turned out to be rich and flavorful. It was the perfect pick-me-up during my road trip. I will definitely be making a pit stop here for coffee again."</p>

                            <!-- <button class="button">View More</button> -->
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <!-- <span class="overlay"></span> -->
                            <div class="card-image">
                                <img src="images/Testimonials3.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">John Paul Narvasa</h2>
                            <div class="rating">
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                            </div>
                            <div class="about-us-heading-con">
                                <div class="heading-line"></div>
                                <p class="title-heading">Food Critique</p>
                                <div class="heading-line"></div>
                            </div>
                            <p class="description">"I have tried many different types of coffee from this chain, but their French roast remains my favorite. The strong and bold flavor never fails to satisfy my coffee cravings. I always grab a bag of this coffee when I'm in need of a caffeine fix."</p>

                            <!-- <button class="button">View More</button> -->
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="images/Testimonials4.png" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">Roldhan Fulo</h2>
                            <div class="rating">
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                                <div class="star"><img src="images/star.png" alt=""></div>
                            </div>
                            <div class="about-us-heading-con">
                                <div class="heading-line"></div>
                                <p class="title-heading">Food Critique</p>
                                <div class="heading-line"></div>
                            </div>
                            <p class="description">"The iced coffee from this cafe is the perfect pick-me-up on a hot day. The smooth and creamy texture is combined with a great coffee flavor to create an enjoyable and refreshing drink. I will definitely be back for more."</p>

                            <!-- <button class="button">View More</button> -->
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="our-store-con" id="our-location" > 
        <div class="out-store-content-con" data-aos="zoom-in">
            <div class="out-store-heading-con">
                <div class="heading-line"></div>
                <p class="title-heading">Our Store</p>
                <div class="heading-line"></div>
            </div>
            <p class="sub-heading">Visit Us!</p>
        </div>

        <div class="store-details-con" data-aos="fade-in" data-aos-delay="100">
            <div class="store-img"></div>
            <div class="store-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123504.11415160567!2d120.99215007073133!3d14.68409131254658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ba0942ef7375%3A0x4a9a32d9fe083d40!2sQuezon%20City%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1671367592596!5m2!1sen!2sph" 
                width="600" height="450" style="border:0;" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        
    </div>
    
    <!-- Email Us starts here-->
    <div class="email-us-cont">
         <div class="email-us-content-con" data-aos="zoom-in">
            <div class="email-us-heading-con">
                <div class="heading-line"></div>
                <p class="title-heading">Email Us</p>
                <div class="heading-line"></div>
            </div>
            <p class="sub-heading">Your Suggestion Matters</p>
        </div>
        <div class="email-us-form-con">
            <div class="email-us-image-con" data-aos="fade-in"> 
                <p class="email-us-tagline">Share Us your Experience via Email
                </p>
                <p class="email-subheading-tagline">Help Us to improve our Coffee!
                </p>
                <p class="email-us-content">We would like to invite you to come visit us and see the changes for yourself. Our staff is eager 
                    to serve you and make your next visit a memorable one.
                </p>
                <p class="email-us-content">
                    Thank you for your continued support and loyalty. We look forward to serving you.</p>
            </div>
            <div class="email-us-form" data-aos="fade-in" data-aos-delay="100">
                <p class="form-heading">Get In Touch</p>
                <form action="https://formspree.io/f/xyyakyvb" method="POST">
                    <input placeholder="Full Name" type="text" id="fname" id="fname" name="Full Name" required><br>
                    <input placeholder="Email" type="email" id="email" name="Email" required> <br>
                    <textarea placeholder="Message" name="Message" id="message" cols="30" rows="10" required></textarea> <br>
                    <button type="submit" id="submit">Send</button>
                  </form> 
            </div>
        </div>
    </div>

    <footer>
        <p class="footer-header" data-aos="zoom-in">ADSvanced Media Tech Coffee Shop</p>
        <p class="footer-desc">"Where every cup is crafted with passion and served with a smile."</p>
        <div class="soc-icons-con">
            <a href="https://www.facebook.com/" class="soc-icon"><img src="images/facebook.png" alt="Facebook Image"></a>
            <a href="https://twitter.com/?lang=en" class="soc-icon"><img src="images/twitter.png" alt="Facebook Image"></a>
            <a href="https://www.youtube.com/" class="soc-icon"><img src="images/youtube.png" alt="Facebook Image"></a>
            <a href="https://www.instagram.com/" class="soc-icon"><img src="images/instagram.png" alt="Facebook Image"></a>
    </footer>
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>



    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>
      
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <!-- Messenger JS -->
    <script src="js/messenger.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/aos.js"></script>
</body>

</html>
