<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADSvanced Media Tech</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/AMT19.PNG">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animation.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="css/form-success.css">
    <!-- Ajax Script -->
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <div class="welcome-con" id="welcome-main">
        <header>
            <div class="logo-con">
                <img class="logo" src="images/AMT19.PNG" alt="">
                <div class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <nav class="nav-bar">
                <ul>
                    <li><a href="#welcome-main">Home</a></li>
                    <li><a href="#about-us-con">About Us</a></li>
                    <li><a href="#slideshow-container">Our Themes</a></li>
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="#our-plans-pricing-con">Pricing & Plans</a></li>
                </ul>
            </nav>
        </header>
        <!-- Welcome starts here -->
        <section class="welcome-main">
            <div class="welcome-desc-con">
                <h1 class="heading">need a business website?</h1>
                <p class="parag">Build a strong Brand Identity website with us
                    that makes your Business Standout.</p>
            </div>
            <div class="img-container">
                <img id="particles" src="images/welcome-particles.png" alt="">
                <div class="person-main-img">
                    <img id="person" src="images/welcome-person-img.png" alt="">
                </div>

            </div>
        </section>
    </div>
    <!-- About us starts here -->
    <section class="about-us-con" id="about-us-con">
        <div class="about-video-con">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qhYf8kO9NAk?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
            <div class="about-desc-con">
                <p class="all-parag-subheading">Click the video to know more about our services</p>
                <p class="all-parag">We are the go to place of small Business owners to Manage their work, Build a strong identity,
                    attractive website, and captivate clients through social media and digital marketing.</p>
            </div>
    </section>
    <!-- Themes selection starts here -->
    <section class="slideshow-container" id="slideshow-container">
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
        </div>
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="theme-con">
                <div class="img-con">
                    <img src="images/theme-1.png" alt="">
                </div>
                <div class="theme-desc-con">
                    <h1 class="theme-heading">Coffee Shop</h1>
                    <p class="theme-subheading">THEME 1</p>
                    <p class="style">style: modern look</p>
                    <div class="color-theme-1">
                        <p>color: </p>
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <div class="circle-3"></div>
                    </div>
                    <p class="theme-content">This website template is suitable for businesses, stores, or shops that are related to pastry businesses, shops or stores, such as bakeries and coffee shops
                    </p>
                    <div class="btn-container ">
                        <a href="CoffeeShop.com/" target="_blank"><button class="btn-theme btn-theme-top">View Website</button></a>
                        <a href="https://www.figma.com/file/szRcWbqpeVy7qqshBZLLub/Theme-1?node-id=85%3A2&t=GPsagiJ5T1uPtopJ-0" target="_blank"><button class="btn-theme btn-theme-bottom">View Design</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="theme-con">
                <div class="img-con">
                    <img src="images/theme-2.png" alt="">
                </div>
                <div class="theme-desc-con">
                    <h1 class="theme-heading">Tattoo Studio </h1>
                    <p class="theme-subheading">THEME 2</p>
                    <p class="style">style: modern look</p>
                    <div class="color-theme-2">
                        <p>color: </p>
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <div class="circle-3"></div>
                    </div>
                    <p class="theme-content">This website template is suitable for businesses, stores, or shops that are related to art
                        and photography, such as tattoo shops,
                        photo studios, art galleries, and museums.
                    </p>
                    <div class="btn-container ">
                        <a href="TattooShop.com/" target="_blank"><button class="btn-theme btn-theme-top">View Website</button></a>
                        <a href="https://www.figma.com/file/UuGgIWOOa5SS3Ipetlhso8/Theme-2?node-id=5%3A10&t=KO041MTZkEElg979-0" target="_blank"><button class="btn-theme btn-theme-bottom">View Design</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="theme-con">
                <div class="img-con">
                    <img src="images/theme-3.png" alt="">
                </div>
                <div class="theme-desc-con">
                    <h1 class="theme-heading">Restaurant</h1>
                    <p class="theme-subheading">THEME 3</p>
                    <p class="style">style: modern look</p>
                    <div class="color-theme-3">
                        <p>color: </p>
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <div class="circle-3"></div>
                    </div>
                    <p class="theme-content">This website template is suitable for businesses, stores, or shops that are related to the food industry, such as restaurants and cafeterias.
                    </p>
                    <div class="btn-container ">
                        <a href="RestaurantShop.com/" target="_blank"><button class="btn-theme btn-theme-top">View Website</button></a>
                        <a href="https://www.figma.com/file/xyQ61O2XMDLIV977cHFpCX/THEME-3?node-id=2%3A3&t=Q6dkk0w6xOynXGsu-0" target="_blank"><button class="btn-theme btn-theme-bottom">View Design</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="theme-con">
                <div class="img-con">
                    <img src="images/theme-4.png" alt="">
                </div>
                <div class="theme-desc-con">
                    <h1 class="theme-heading">Shoes Store</h1>
                    <p class="theme-subheading">THEME 4</p>
                    <p class="style">style: modern look</p>
                    <div class="color-theme-4">
                        <p>color: </p>
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <div class="circle-3"></div>
                    </div>
                    <p class="theme-content">This website template is suitable for businesses, stores, or shops that are related to the fashion industry, such as shoe or sneaker stores.
                    </p>
                    <div class="btn-container ">
                        <a href="ShoeShop.com/" target="_blank"><button class="btn-theme btn-theme-top">View Website</button></a>
                        <a href="https://www.figma.com/file/UXayFv9RCeYcusVPktunRa/Theme-4-Shoe-Theme?node-id=0%3A1&t=gJeIgVpNdbl9GNya-0" target="_blank"><button class="btn-theme btn-theme-bottom">View Design</button></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="mySlides fade">
            <div class="theme-con">
                <div class="img-con">
                    <img src="images/theme-5.png" alt="">
                </div>
                <div class="theme-desc-con">
                    <h1 class="theme-heading">Pizzateria</h1>
                    <p class="theme-subheading">THEME 5</p>
                    <p class="style">style: modern look</p>
                    <div class="color-theme-5">
                        <p>color: </p>
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <div class="circle-3"></div>
                        <div class="circle-4"></div>
                    </div>
                    <p class="theme-content">This website template is suitable for businesses, stores, or shops that are related to small food industry, such as Pizzateria and milk tea shops.
                    </p>
                    <div class="btn-container ">
                        <a href="PizzaShop.com/" target="_blank"><button class="btn-theme btn-theme-top">View Website</button></a>
                        <a href="https://www.figma.com/file/2alEIbBYulu7Be5uz80NCi/Theme-5?node-id=0%3A1&t=dVQ1m9aqpKNxZi6A-0" target="_blank"><button class="btn-theme btn-theme-bottom">View Design</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="theme-con">
                <div class="img-con">
                    <img src="images/theme-6.png" alt="">
                </div>
                <div class="theme-desc-con">
                    <h1 class="theme-heading">Cosmetics Shop</h1>
                    <p class="theme-subheading">THEME 6</p>
                    <p class="style">style: modern look</p>
                    <div class="color-theme-6">
                        <p>color: </p>
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <div class="circle-3"></div>
                    </div>
                    <p class="theme-content">This website template is suitable for businesses, stores, or shops that are related to the cosmetics industry, such as salons and makeup stores.
                    </p>
                    <div class="btn-container ">
                        <a href="#" style="pointer-events: none"><button class="btn-theme" style="background-color: #8fdbaa">Comming Soon</button></a>
                        <a href="https://www.figma.com/file/ND52n7YTDuF7UjrwPgpN2z/Theme-6?node-id=0%3A1&t=z7wNiFPHnTYYlPcj-0" target="_blank"><button class="btn-theme btn-theme-bottom">View Design</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="theme-con">
                <div class="img-con">
                    <img src="images/theme-8.png" alt="">
                </div>
                <div class="theme-desc-con">
                    <h1 class="theme-heading">Gadgets Store</h1>
                    <p class="theme-subheading">THEME 7</p>
                    <p class="style">style: modern look</p>
                    <div class="color-theme-8">
                        <p>color: </p>
                        <div class="circle-1"></div>
                        <div class="circle-2"></div>
                        <div class="circle-3"></div>
                    </div>
                    <p class="theme-content">This website template is suitable for businesses, stores, or shops that are related to the Electronic industry, such as Gadgets and Accessories stores.
                    </p>
                    <div class="btn-container ">
                        <a href="#" style="pointer-events: none"><button class="btn-theme" style="background-color: #8fdbaa">Comming Soon</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

    </section>

    <section class="website-benefits" id="website-benefits">
        <h1 class="all-heading">WHY CHOOSE US?</h1>
        <p class="all-parag-subheading">"Partner with us for success - Our collaborative approach ensures your goals are achieved"</p>
        <div class="benefits-con">
            <div class="benefit">
                <div class="benefit-img-con benefit-img-con-1">
                    <img src="images/benefit1.png" alt="">
                </div>
                <h3>WEBSITE AND MOBILE PHONE
                    FRIENDLY </h3>
                <p>Responsive design and compatible into
                    different devices. </p>
            </div>

            <div class="benefit">
                <div class="benefit-img-con benefit-img-con-2">
                    <img src="images/benefit2.png" alt="">
                </div>
                <h3>SEO FRIENDLY WEBSITE</h3>
                <p>
                    Website that rank higher on a search engine
                    result page that gives you advantage over
                    your competitors.
                </p>
            </div>

            <div class="benefit">
                <div class="benefit-img-con benefit-img-con-3">
                    <img src="images/benefit3.png" alt="">
                </div>
                <h3>WORRY FREE WEBSITE MAINTENANCE
                    AND SUPPORT</h3>
                <p>
                    Inclusive in plan and 24/7 tech support.
                </p>
            </div>

            <div class="benefit">
                <div class="benefit-img-con benefit-img-con-4">
                    <img src="images/benefit4.png" alt="">
                </div>
                <h3>SOCIAL MEDIA PROMOTION</h3>
                <p>
                    Provide weekly posting materials for your
                    product advertisement.
                </p>
            </div>

            <div class="benefit">
                <div class="benefit-img-con benefit-img-con-5">
                    <img src="images/benefit5.png" alt="">
                </div>
                <h3>CHAT SYSTEM/ EMAIL SYSTEM </h3>
                <p>
                    Keep in touch to your website and response
                    to all the enquiries about your product.
                </p>
            </div>

            <div class="benefit">
                <div class="benefit-img-con benefit-img-con-6">
                    <img src="images/benefit6.png" alt="">
                </div>
                <h3>SOCIAL MEDIA INTEGRATION </h3>
                <p>
                    link to your company’s Facebook, Instagram,
                    youtube and other social media accounts to
                    your website.
                </p>
            </div>

            <div class="benefit">
                <div class="benefit-img-con benefit-img-con-7">
                    <img src="images/benefit7.png" alt="">
                </div>
                <h3>GET THE DESIGN OF YOUR CHOICE </h3>
                <p>
                    unlimited website layout revision during the
                    design phase as many times as you want.
                </p>
            </div>
        </div>
    </section>

    <section class="email-us-con" id="email-us-con">
        <div class="main-img-con">
            <div class="email-icon-img">
                <img src="images/talk-to-us-mail.png" alt="">
            </div>
            <div class="email-person-img">
                <img src="images/talk-to-us-person.png" alt="">
            </div>

            <div class="email-us-des-con">
                <h1 class="all-parag-subheading">Message Us Via Email.</h1>
                <p class="all-parag-subheading">ADSvaced Media Tech is a Website Development Company
                    in Quezon City,Philippines. AMT is offering a wide variety of services.</p>
            </div>
        </div>


        <div class="form-con">
            <form id="myForm">
                <h2>INQUIRE NOW</h2>
                <p>Will respond as soon as we recieve your message</p>
                <input placeholder="Full Name" type="text" id="fname" name="fullname" required><br>
                <input placeholder="Email" type="email" id="email" name="email" required> <br>
                <textarea placeholder="Message" name="message" id="message" cols="30" rows="10" required></textarea> <br>
                <button type="submit" id="submit">Email Us</button>
                <div id="success-message" style="display:none;">
                    <div class="alert alert-success d-flex" id="success-message-content">
                        <i>Your message was successfully sent!</i>
                        <span id="x-btn">X</span>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="teams" id="teams">
        <h1 class="all-heading">MEET THE TEAM</h1>
        <div class="team-container">
            <div class="team-set-1">
                <div class="team">
                    <img src="images/team-1.png" alt="Team Member">
                    <p class="name">Roldhan Fulo</p>
                    <p class="role">Front end Developer</p>
                </div>

                <div class="team">
                    <img src="images/team-2.png" alt="Team Member">
                    <p class="name">John Paul Narvasa</p>
                    <p class="role">Full stack Developer</p>
                </div>
            </div>

            <div class="team-set-2">
                <div class="team">
                    <img src="images/team-3.png" alt="Team Member">
                    <p class="name">Dandrev Barrio</p>
                    <p class="role">Back end Developer</p>
                </div>

                <div class="team">
                    <img src="images/team-4.png" alt="Team Member">
                    <p class="name">Analyn Ampo</p>
                    <p class="role">UI/UX Designer</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Starts here -->
    <section class="services-main-con" id="services">
        <div class="container">
            <div class="panel active" style="background-image: url(images/service-1-bg.jpg);">
                <img class="service-icon" src="images/service-1-icon.png" alt="">
                <h3 class="service-1-h3">Web Development</h3>
            </div>

            <div class="panel active" style="background-image: url(images/service-2-bg.jpg);">
                <img class="service-icon" src="images/service-2-icon.png" alt="">
                <h3 class="service-1-h3">Web Maintainance</h3>
            </div>

            <div class="panel active" style="background-image: url(images/service-3-bg.jpg);">
                <img class="service-icon" src="images/service-3-icon.png" alt="">
                <h3 class="service-1-h3">Graphics Design</h3>
            </div>

        </div>
    </section>

    <!-- Plans & Pricing -->
    <section class="our-plans-pricing-con" id="our-plans-pricing-con">
        <h1 class="all-heading">Our Plans and Pricing</h1>
        <div class="plans">
            <div class="plan plan-1">
                <img src="images/basic.png" alt="">
                <h3>Basic</h3>
                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Choose your own website name</p>
                </div>
                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">No maintainance needed</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">10x maximum revisions (replenish every month)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Free basic domain</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">No coding required (Templated Website)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Include: Social Media Promotion (Optional)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-xmark"></i>
                    <p class="include">Chat Feature</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-xmark"></i>
                    <p class="include">Email Feature</p>
                </div>
                <div class="price-con">
                    <p>249 PHP/mo</p>
                </div>
            </div>

            <div class="plan plan-2">
                <img src="images/pro.png" alt="">
                <h3>Pro</h3>
                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Choose your own website name</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">No maintainance needed</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">10x maximum revisions (replenish every month)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Free basic domain</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">No coding required (Templated Website)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Include: Social Media Promotion (Optional)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Chat Feature</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-xmark"></i>
                    <p class="include">Email Feature</p>
                </div>
                <div class="price-con">
                    <p>299 PHP/mo</p>
                </div>
            </div>

            <div class="plan plan-3">
                <img src="images/business.png" alt="">
                <h3>Business</h3>
                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Choose your own website name</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">No maintainance needed</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">10x maximum revisions (replenish every month)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Free basic domain</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">No coding required (Templated Website)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Include: Social Media Promotion (Optional)</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Chat Feature</p>
                </div>

                <div class="include-con"><i class="fa-solid fa-check"></i>
                    <p class="include">Email Feature</p>
                </div>
                <div class="price-con">
                    <p>399 PHP/mo</p>
                </div>
            </div>
        </div>
    </section>

    <div class="footer">
        <h1 class="all-heading">ADSvanced Media Tech</h1>
        <div class="contact-us-con">
            <div class="contact-us">
                <div class="img-con location">
                    <img src="images/location.png" alt="">
                </div>
                <div class="location-desc">
                    <h3>Location:</h3>
                    <p>Bagong Silangan, Quezon City</p>
                </div>

            </div>

            <div class="contact-us">
                <div class="img-con">
                    <img src="images/mobile.png" alt="">
                </div>
                <div class="call-us-desc">
                    <h3>Call Us:</h3>
                    <p>+639669901381</p>
                </div>

            </div>

            <div class="contact-us">
                <div class="img-con">
                    <img src="images/email.png" alt="">
                </div>
                <div class="email-us">
                    <h3>Email Us:</h3>
                    <p>adsvanced.media.tech@gmail.com</p>
                </div>

            </div>

            <div class="contact-us">
                <div class="img-con">
                    <img src="images/social-links.png" alt="">
                </div>
                <div class="location-desc">
                    <h3>Visit Us:</h3>
                    <a href="https://www.facebook.com/profile.php?id=100090568896826" target="_blank">
                        <p>Facebook</p>
                    </a>
                </div>

            </div>
        </div>

    </div>

    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const form = document.getElementById("myForm");
            const successMessage = document.getElementById("success-message");
            const buttonClose = document.querySelector("#x-btn");
            buttonClose.addEventListener("click", function() {
                successMessage.style.display = "none";
            });

            $('#myForm').submit(function(e) {
                e.preventDefault(); // prevent the form from submitting normally

                // get the form data
                var formData = $(this).serialize();
                // send the form data to the PHP script using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'mail.php',
                    data: formData,
                    success: function(response) {
                        // display a success message to the user
                        // alert('Your message has been sent!');
                        form.reset();
                        successMessage.style.display = "flex";
                    },
                    error: function(error) {
                        // display an error message to the user
                        alert('An error occurred: ' + error.statusText);
                    }
                });
            });
        });
    </script>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "100378746306263");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v15.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script src="js/script.js"></script>
</body>

</html>
