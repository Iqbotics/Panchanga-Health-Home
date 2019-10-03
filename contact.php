<title>Contact &mdash; Ayurveda</title>

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

<div class="breadcrumb" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.5)),url(pics/bread-contact.jpg) center no-repeat; background-size: cover;background-attachment: fixed">
    <div class="breadcrumb-text text-center mx-auto">
        <h1 class="text-white font-weight-bold display-4 my-4">Contact Us</h1>
        <h4 class="font-weight-bold mb-5"><a href="index.php">Home</a><span class="text-white"> / Contact Us</span></h4>
    </div>
</div>

<!-- -----------------------Contact-us------------------- -->


<section class="contact-us py-5">
    <div class="container px-5">
        <p class="title text-center">Find Us</p>
        <h1 class="text-center font-weight-bold">Contacts & Location</h1>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.091964212953!2d85.34678271440124!3d27.68355238280177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a18187378f%3A0x8ba2460dd7896e64!2sOnline%20Zeal!5e0!3m2!1sen!2snp!4v1569723732600!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;margin-top: 50px;" allowfullscreen=""></iframe>
        </div>
        <div class="row my-5">
            <div class="col-lg-7">
                <h2 class="font-weight-bold">Send Us a message</h2>
                <div class="get-in-touch mt-4">
                    <form action="#" method="POST" >
                        <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your name*">
                        </div>
                        <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your e-mail*">
                        </div>
                        <textarea class="form-control" name="message" placeholder="Your message*" rows="6"></textarea>
                        <div class="custom-control custom-checkbox mt-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">I agree that my submitted data is being collected and stored.</label>
                        </div>
                        <div class="btn-group">
                            <button class="mt-3 btn" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <h2 class="font-weight-bold">Health Home Center</h2>
                <p class="text-muted mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil mollitia adipisci voluptates dolores itaque odio ut maiores eum debitis eligendi ipsam deserunt quo iure, voluptatum nam fugit. Ipsa, necessitatibus obcaecati.</p>

                <div class="marker d-flex">
                    <i class="fas m-2 fa-map-marker-alt"></i>
                    <p>Nepal,<br>Tinkune, Kathmandu</p>
                </div> 
                <a href="mailto:" class="mail d-block d-flex">
                    <i class="fas mx-2 fa-envelope-open"></i>
                    <p>info@panchanga.com</p>
                </a>
                <a href="tel:" class="call d-block d-flex">
                    <i class="fas m-2 fa-phone-alt"></i>
                    <p>+977 9813822002</p>
                </a>
            </div>
        </div>
    </div>
</section>












<?php include('include/footer.php');?>