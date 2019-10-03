<title>About Us &mdash; Ayurveda</title>

<?php include('include/header.php');?>

<style>
    .navbar{
        background:#3e474e;
        position:fixed!important;
        top:-2.5%!important;
    }
    .logo-search *{
        display:none!important;
    }
    .search1{
        position: fixed;
        right:5%;
        z-index: 2;
        top:1.5%;
    }
    .search1 form{
        border:1px solid  white;
        border-radius: 10px;
    }
    .search1 .form-control:focus{
        background:none;
        border:none;
        font-family: var(--sec-font);
        box-shadow: none;
        color:white;
    }
    .search1 .form-control::placeholder{
        color:white;
        font-family: var(--sec-font);
        letter-spacing: 3px;

    }
    .search1 input{
        background: none;
        border:none;
        font-family: var(--sec-font);
        box-shadow: none;
        letter-spacing: 3px;

    }
    .search1 button{
        background: none;
        color: white;
        border:none;
    }
</style>


<img class="d-none d-md-block" src="pics/logo_footer_x2.png" height="40px" style="position: fixed; z-index:2; left: 5%; top:1.5%;">
<div class="search1 d-none d-md-block">
    <form class="d-flex align-items-center" method="GET" action="#">
        <input type="text" class="form-control" placeholder="Search" maxlength="20" required>
        <button type="submit" class="fas fa-search pr-3"></button>
    </form>
</div>

<div class="breadcrumb mb-0" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.5)),url(pics/about-bread.jpg) center no-repeat; background-size: cover;background-attachment: fixed">
    <div class="breadcrumb-text text-center mx-auto">
        <h1 class="text-white font-weight-bold display-4 my-4">About Us</h1>
        <h4 class="font-weight-bold mb-5"><a href="index.php">Home</a><span class="text-white"> / About Us</span></h4>
    </div>
</div>

<!-- ---------------------------------about-us-------------------------- -->

<section class="our-center py-5 bg-light">
    <div class="container px-5">
        <div class="row">
            <div class="col-lg-6">
                <p class="title">
                    Our Center
                </p>
                <h1 class="font-weight-bold my-4">
                    Welcome To <br> Panchanga Health Home
                </h1>
                <p>At Panchanga, we do our best to help our patients reach their health care goals safely and effectively. We use modern diagnostic equipment to analyze nutritional status, toxic loading of the body, emotional states, musculo-skeletal status, bioenergetic blockages and much more.</p>
                <br>
                <a class="appointment" href="service.php#in-touch">
                    Make an Appointment
                </a>
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div class="hr-time mx-auto w-75 py-4 mt-4">
                    <h4 class="text-center font-weight-bold my-3">
                        Hours of Operation
                    </h4>
                    <ul class="list-unstyled px-4">
                        <li><span class="title">Sunday:</span><span class="float-right font-weight-bold">Closed</span></li>
                        <li><span class="title">Monday:</span><span class="float-right font-weight-bold"> 9:00 am – 6:30 pm</span></li>
                        <li><span class="title">Tuesday:</span><span class="float-right font-weight-bold">3:00 pm – 6:00 pm</span></li>
                        <li><span class="title">Wednesday:</span><span class="float-right font-weight-bold">9:00 am – 6:30 pm</span></li>
                        <li><span class="title">Thursday:</span><span class="float-right font-weight-bold">9:00 am – 6:30 pm</span></li>
                        <li><span class="title">Friday:</span><span class="float-right font-weight-bold"> 9:00 am – 11:30 am</span></li>
                        <li><span class="title">Saturday:</span><span class="float-right font-weight-bold">Closed</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-us" >
    <div class="container ">
        <div class="row py-5">
            <div class="offset-lg-7">
                <p class="title ">Our Mission</p>
                <h1 class="font-weight-bold">
                    Your Natural Health
                </h1>
                <p>At Avicenna, we do our best to help our patients reach their health care goals safely and effectively. We use modern diagnostic equipment to analyze nutritional status, toxic loading of the body, emotional states, musculo-skeletal status, bioenergetic blockages and much more.</p>
                <p>Alternative medicine works on all levels – body, mind and spirit and uses various modalities to conquer health issues. Our educated doctors are dedicated to helping our patients get their lives back.</p>
            </div>
        </div>
    </div>
</section>

<section class="banner-about">
        <div class="container pt-5 mt-5">
            <p class="title text-center">About Us</p>
            <div class="container">
                <h1 class="font-weight-bold text-center">We Teach Your Body To Treat Itself</h1>
                <p class="text-center mx-auto text-muted">Our goal is to treat patients using old traditional techniques of Acupuncture along with homeopathic drugs prepared from all natural ingredients.</p>
            </div>
            <div id="waypoint" class="row px-5">
                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center flex-column">
                    <div class="circle mt-4 d-flex align-items-center justify-content-center">
                        <div class="inner-circle">
                            <span class="counter">100</span>
                        </div>
                    </div>
                    <h4 class="text-center font-weight-bold mt-4">Acupuncture</h4>
                    <p class="text-center text-muted">Using acupuncture we balance your energy letting your body to treat itself</p>
                </div>
                <div class=" col-lg-3 col-md-6 d-flex align-items-center justify-content-center flex-column">
                    <div class="circle d-flex align-items-center justify-content-center">
                        <div class="inner-circle1">
                            <span class="counter">100</span>
                        </div>
                    </div>
                    <h4 class="text-center font-weight-bold mt-4">Hypnotherapy</h4>
                    <p class="text-center text-muted">The real taste of hypnotherapy performed by Dr. Walker</p>
                </div>
                <div class=" col-lg-3 col-md-6 d-flex align-items-center justify-content-center flex-column">
                    <div class="circle d-flex align-items-center justify-content-center">
                        <div class="inner-circle">
                            <span class="counter">100</span>
                        </div>
                    </div>
                    <h4 class="text-center font-weight-bold mt-4">Homeopathy</h4>
                    <p class="text-center text-muted">00% Natural and 100% Organic Medicine</p>
                </div>
                <div class="col-lg-3 col-md-6 d-flex align-items-center justify-content-center flex-column">
                    <div class="circle d-flex align-items-center justify-content-center">
                        <div class="inner-circle1">
                            <span class="counter">100</span>
                        </div>
                    </div>
                    <h4 class="text-center font-weight-bold mt-4">Reiki</h4>
                    <p class="text-center text-muted">Open your chakras and talk to universe</p>
                </div>
            </div>
        </div>
    </section>

<section class="video-tour py-5">
    <div class="container py-5 text-white">
        <p class="title text-center text-white">Video Tour</p>
        <h1 class=" text-center font-weight-bold">Panchanga Health Tour</h1>
        <div class="vdo-image mt-5">
             <a href=""><i class="fas fa-play"></i></a>        
        </div>
    </div>
</section>

<section class="news-letter py-5">
    <div class="container text-center px-5">
        <p class="title">Free Tips & Tools</p>
        <h1 class="font-weight-bold">Newsletter Sign Up</h1>
        <form action="#" method="POST">
            <input type="email" name="email" placeholder="Enter Your Email" class="form-control my-4">
            <button class="btn" type="submit">Sign Up Now!</button>
        </form>
    </div>
</section>







<?php include('include/footer.php');?>
