<title>Gallery &mdash; Ayurveda</title>

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

<div class="breadcrumb mb-0" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.5)),url(pics/gallery-bread.jpg) center no-repeat; background-size: cover;background-attachment: fixed">
    <div class="breadcrumb-text text-center mx-auto">
        <h1 class="text-white font-weight-bold display-4 my-4">Our Gallery</h1>
        <h4 class="font-weight-bold mb-5"><a href="index.php">Home</a><span class="text-white"> / Gallery</span></h4>
    </div>
</div>

<!-- ---------------gallery--------------------- -->


<section class="gallery py-5">

<div class="container">
    <div class="row">
        <div class="col-lg-3 my-4">
            <div class="img-box">
            <a data-lightbox="gallery" href="pics/gallery1.jpg"> <img src="pics/gallery1.jpg" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-3 my-4">
            <div class="img-box">
            <a data-lightbox="gallery" href="pics/gallery2.jpg"> <img src="pics/gallery2.jpg" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-3 my-4">
            <div class="img-box">
            <a data-lightbox="gallery" href="pics/gallery3.jpg"> <img src="pics/gallery3.jpg" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-3 my-4">
            <div class="img-box">
            <a data-lightbox="gallery" href="pics/gallery4.jpg"> <img src="pics/gallery4.jpg" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-3 my-4">
            <div class="img-box">
            <a data-lightbox="gallery" href="pics/gallery5.jpg"> <img src="pics/gallery5.jpg" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-3 my-4">
            <div class="img-box">
            <a data-lightbox="gallery" href="pics/gallery6.jpg"> <img src="pics/gallery6.jpg" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-3 my-4">
            <div class="img-box">
            <a data-lightbox="gallery" href="pics/gallery7.jpg"> <img src="pics/gallery7.jpg" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-lg-3 my-4">
            <div class="img-box">
            <a data-lightbox="gallery" href="pics/gallery8.jpg"> <img src="pics/gallery8.jpg" class="img-fluid"></a>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-3 my-4">
                <div class="img-box">
                <a data-lightbox="gallery" href="pics/gallery1.jpg"> <img src="pics/gallery1.jpg" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 my-4">
                <div class="img-box">
                <a data-lightbox="gallery" href="pics/gallery2.jpg"> <img src="pics/gallery2.jpg" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 my-4">
                <div class="img-box">
                <a data-lightbox="gallery" href="pics/gallery3.jpg"> <img src="pics/gallery3.jpg" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 my-4">
                <div class="img-box">
                <a data-lightbox="gallery" href="pics/gallery4.jpg"> <img src="pics/gallery4.jpg" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 my-4">
                <div class="img-box">
                <a data-lightbox="gallery" href="pics/gallery5.jpg"> <img src="pics/gallery5.jpg" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 my-4">
                <div class="img-box">
                <a data-lightbox="gallery" href="pics/gallery6.jpg"> <img src="pics/gallery6.jpg" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 my-4">
                <div class="img-box">
                <a data-lightbox="gallery" href="pics/gallery7.jpg"> <img src="pics/gallery7.jpg" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-3 my-4">
                <div class="img-box">
                <a data-lightbox="gallery" href="pics/gallery8.jpg"> <img src="pics/gallery8.jpg" class="img-fluid"></a>
                </div>
            </div>
        </div>
</div>



</section>









<?php include('include/footer.php');?>