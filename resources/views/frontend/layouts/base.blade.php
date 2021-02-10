<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;800&family=Oswald:wght@500;600;700&display=swap" rel="stylesheet">
    <title>Talent Tracker</title>
    <link rel="icon" href="{{asset('front/images/favicon.ico')}}" sizes="16x16">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
</head>
<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg topNav__bg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img className="topNav__logoImg" src="{{asset('/assets/images/talent-tracker-logo.webp')}}" alt="Logo" /></a>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-flex">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active topNav__navItem" aria-current="page" href="#">HOME</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active topNav__navItem" aria-current="page" href="#">SERVICE</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active topNav__navItem" aria-current="page" href="#">AVAILABLE JOBS</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active topNav__navItem" aria-current="page" href="#">TRAINING</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active topNav__navItem" aria-current="page" href="#">LABOUR LAW</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active topNav__navItem" aria-current="page" href="#">BLOG</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active topNav__navItem" aria-current="page" href="#">LOGIN/REGISTRATION</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
   
   


    @yield('main-body')




    <!-- Contact Start -->
    <div class="container mt-5">
        <p class="contact__sectionTitle">Contact Us</p>
        <p class="greyBar"></p>
    </div>

    <div class="contact__sectionArea mt-4">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img class="mt-5 mb-3" src="{{asset('front/images/icons/emailIcon.webp')}}" alt="icon"/>
                    <p class="contact__details"> <a href="mailto:contact@mydomain.com">contact@mydomain.com </a></p>
                    <p class="contact__details"> <a href="mailto:info@mydomain.com">info@mydomain.com </a></p>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img class="mt-5 mb-3" src="{{asset('front/images/icons/phoneIcon.webp')}}" alt="icon"/>
                    <p class="contact__details"> <a href="tel:1800-656-1234">1800-656-1234</a></p>
                    <p class="contact__details"> <a href="tel:+1 9865 43210">+1 9865 43210</a></p>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img class="mt-5 mb-3" src="{{asset('front/images/icons/locationIcon.webp')}}" alt="icon"/>
                    <p class="contact__details">
                        111, Main St. Down Town, <br/>
                        City Name, Country 65841
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Full Name"> <br>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Your Email Address"> <br>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Phone Number (Optional)"> <br>
                        </div>

                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Designation (Optional)">
                          </div>
                          
                          <div class="col">
                            <input type="text" class="form-control" placeholder="Organization (Optional)"> <br>
                          </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message"  style="height: 100px"></textarea>
                        </div>

                        <button class="grdiantBtn contact__btn mt-4"> <span> <img src="{{asset('front/images/icons/sendMessage.webp')}}" alt="submit-btn" /> </span> SEND MESSAGE</button>
                    </form>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe class="contact__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.214932281053!2d90.3623941143853!3d23.77535948457705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b93daff949d3%3A0xf5424a1e248e910b!2sHalcyon!5e0!3m2!1sen!2sbd!4v1611571181713!5m2!1sen!2sbd" frameborder="0"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>            
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer start -->
    <footer>
        <div class="footer__area">
            <div> 
                <p class="footer__copyRight">copyright &copy; 2020 talent tracker </p> 
            </div>

            <div> 
                <ul class="footer__socialIcons--area">
                    <li><a href=""><img src="{{asset('front/images/socialIcons/facebook.png')}}" alt="social-icons" /></a></li>
                    <li><a href=""><img src="{{asset('front/images/socialIcons/twitter.png')}}" alt="social-icons" /></a></li>
                    <li><a href=""><img src="{{asset('front/images/socialIcons/youtube.png')}}" alt="social-icons" /></a></li>
                    <li><a href=""><img src="{{asset('front/images/socialIcons/pinterest.png')}}" alt="social-icons" /></a></li>
                    <li><a href=""><img src="{{asset('front/images/socialIcons/linkedin.png')}}" alt="social-icons" /></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

</body>
</html>