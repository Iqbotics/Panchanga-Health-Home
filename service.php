<title>Service &mdash; Ayurveda</title>

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

<div class="breadcrumb" style="background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.5)),url(pics/service-bg.jpg) center no-repeat; background-size: cover;background-attachment: fixed">
    <div class="breadcrumb-text text-center mx-auto">
        <h1 class="text-white font-weight-bold display-4 my-4">Our Services</h1>
        <h4 class="font-weight-bold mb-5"><a href="index.php">Home</a><span class="text-white"> / Our Services</span></h4>
    </div>
</div>

<!-- ------------------------------service------------------------------- -->

<section class="banner-service pb-5">
    <div class="container main mb-5">
        <p class="title text-center">Services</p>
        <h1 class="text-center font-weight-bold">Healthy Life</h1>
        <ul class="nav nav-pills mb-3 isotope-filter" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" data-filter='*'>Show All</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" data-filter='.health'>Digestive Health</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" data-filter='.mood'>Mood Balance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-immune-tab" data-toggle="pill" href="#pills-immune" role="tab" aria-controls="pills-immune" aria-selected="false" data-filter='.immune'>Immunization</a>
            </li>
        </ul>
        <div class="tab-content mt-4 " id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card1 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Acupuncture</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Acupuncture</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card2 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Clinical Hypotherapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Clinical Hypotherapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card3 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Cupping Therapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Cupping Therapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                    
                    
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card4 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Homeopathic Medicine</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Homeopathic Medicine</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card5 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Microdermabrasion</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Microdermabrasion</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card6 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Mesotherapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Mesotherapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card7 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Diet and Exercise</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Diet and Exercise</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card8 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Injury Rehabilitation</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Injury Rehabilitation</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card9">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Aquatic Therapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Aquatic Therapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card11 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Massage Therapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Massage Therapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card12">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Reiki Treatment</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Reiki Treatment</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 wow flipInY text-white card15">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">21 Day Metabolic Cleanse</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">21 Day Metabolic Cleanse</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card7 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Diet and Exercise</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Diet and Exercise</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card8 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Injury Rehabilitation</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Injury Rehabilitation</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card9">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Aquatic Therapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Aquatic Therapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card10 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Clinical Hypnotherapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Clinical Hypnotherapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card11 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Massage Therapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Massage Therapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card12">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Reiki Treatment</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Reiki Treatment</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-immune" role="tabpanel" aria-labelledby="pills-immune-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card13 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Acupuncture</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Acupuncture</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card14 ">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">Cupping Therapy</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">Cupping Therapy</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card my-3 text-white card15">
                                <div class="card-front d-flex flex-column align-items-center justify-content-end p-4">
                                <h4 class="text-white font-weight-bold">21 Day Metabolic Cleanse</h4>
                                <i class="fas text-white fa-1x fa-angle-down"></i>
                                </div>
                                <div class="card-back d-flex flex-column align-items-center justify-content-end p-4">
                                    <h3 class="font-weight-bold">21 Day Metabolic Cleanse</h3>
                                    <p>The most natural way to peel the old skin and let a young new skin grow.</p>
                                <i class="fas text-white fa-1x fa-angle-up"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="disease" class="disease pt-4">
    <div class="container py-5 px-5">
        <p class="title text-white text-center">Diseases</p>
        <h1 class="text-center text-white font-weight-bold">What We Treat</h1>
        <p class="text-light my-3">At Avicenna Center our expert practitioners provide therapies that bridge both conventional and natural medicine and integrate scientific research with the healing powers of nature. We are adept at helping people with a wide range of conditions including, but not limited to:</p>
        <div class="container d-none d-md-block">
            <div class="row text-white my-5 no-gutters">
                <div class="col-lg-4 col-md-12" data-mh="height">
                        <span class="nav-1 active d-block font-weight-bold bg-light text-muted py-3"><i style="transform: rotate(-90deg)" class="fas mx-3 fa-shoe-prints"></i>Internal Medicine</span>
                        <span class="nav-2 d-block font-weight-bold bg-secondary py-3"><i class="fas mx-3 fa-brain"></i>Neurological Diseases</span>
                        <span class="nav-3 d-block font-weight-bold bg-light text-muted  py-3"><i class="fas mx-3 fa-capsules"></i>Gynecological Conditions</span>
                        <span class="nav-4 d-block font-weight-bold bg-secondary py-3"><i class="fas mx-3 fa-radiation"></i>Addictions</span>
                        <span class="nav-5 d-block font-weight-bold bg-light text-muted  py-3"><i class="fas mx-3 fa-prescription-bottle-alt"></i>Endocrine System Disorders</span>
                        <span class="nav-6 d-block font-weight-bold bg-secondary py-3"><i class="fab mx-3 fa-envira"></i>Dermatology</span>
                </div>
                <div class="col-lg-4 col-md-6" data-mh="height">
                    <img class="img-1 img-fluid" src="pics/disease1.jpg">
                    <img class="img-2 hidden" src="pics/disease2.jpg">
                    <img class="img-3 hidden" src="pics/disease3.jpg">
                    <img class="img-4 hidden" src="pics/disease4.jpg">
                    <img class="img-5 hidden" src="pics/disease5.jpg">
                    <img class="img-6 hidden" src="pics/disease6.jpg">
                </div>
                <div class="col-lg-4 col-md-6" style="background: var(--sec-color)" data-mh="height">
                    <div class="text-1 p-5 ">
                        <h3 class="my-3 font-weight-bold">Internal Medicine</h3>
                        <p>Nunc ac dui vel enim at ornare finibus ligula. Maecenas non rutrum tristique placerat. Sed felis a tortor elit sodales eleifend. Aliquam id nunc massa. eleifend. Aliquam id  Sed felis a tortor elit sodales eleifend.</p>
                    </div>
                    <div class="text-2 p-5 hidden">
                        <h3 class="my-3 font-weight-bold">Neurological Disease</h3>
                        <p>Nunc ac dui vel enim at ornare finibus ligula. Maecenas non rutrum tristique placerat. Sed felis a tortor elit sodales eleifend. Aliquam id nunc massa. eleifend. Aliquam id  Sed felis a tortor elit sodales eleifend.</p>
                    </div>
                    <div class="text-3 p-5 hidden">
                        <h3 class="my-3 font-weight-bold">Gynecological Conditions</h3>
                        <p>Nunc ac dui vel enim at ornare finibus ligula. Maecenas non rutrum tristique placerat. Sed felis a tortor elit sodales eleifend. Aliquam id nunc massa. eleifend. Aliquam id  Sed felis a tortor elit sodales eleifend.</p>
                    </div>
                    <div class="text-4 p-5 hidden">
                        <h3 class="my-3 font-weight-bold">Addictions</h3>
                        <p>Nunc ac dui vel enim at ornare finibus ligula. Maecenas non rutrum tristique placerat. Sed felis a tortor elit sodales eleifend. Aliquam id nunc massa. eleifend. Aliquam id  Sed felis a tortor elit sodales eleifend.</p>
                    </div>
                    <div class="text-5 p-5 hidden">
                        <h3 class="my-3 font-weight-bold">Endocrine System Disorders</h3>
                        <p>Nunc ac dui vel enim at ornare finibus ligula. Maecenas non rutrum tristique placerat. Sed felis a tortor elit sodales eleifend. Aliquam id nunc massa. eleifend. Aliquam id  Sed felis a tortor elit sodales eleifend.</p>
                    </div>
                    <div class="text-6 p-5 hidden">
                        <h3 class="my-3 font-weight-bold">Dermatology</h3>
                        <p>Nunc ac dui vel enim at ornare finibus ligula. Maecenas non rutrum tristique placerat. Sed felis a tortor elit sodales eleifend. Aliquam id nunc massa. eleifend. Aliquam id  Sed felis a tortor elit sodales eleifend.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="in-touch" class="get-in-touch py-5 bg-light">
    <div class="container py-4 px-5">
    <div class="row ">
        <div class="col-lg-6">
            <p class="title">Get In Touch</p>
            <h1 class="font-weight-bold my-4">Contact Us Today!</h1>
            <p>We are NOT able to answer specific health questions via this form. If you have questions about our services or would like additional information, please use this form.</p>
            <p>If you are looking for specific advice concerning your health – please call <a href="tel:">(977) 9813-822-002</a> to schedule an appointment.</p>
        </div>
        <div class="col-lg-6 px-4 mt-2">
            <p class="title mb-4">Make An Appointment</p>
            <form action="#" method="POST" >
                <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your name">
                </div>
                <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your e-mail">
                </div>
                <div class="form-group">
                <input type="number" name="phone" class="form-control" placeholder="Your number">
                </div>
                <div class="date d-flex flex-wrap justify-content-between">
                    <div class="form-group font-weight-bold">
                        Date From:
                        <input type="date" name="date-from" class="form-control" placeholder="From">
                    </div>
                    <div class="form-group font-weight-bold">
                        Date To:
                        <input type="date" name="date-to" class="form-control" placeholder="To">
                    </div>
                </div>
                    <button class="mt-3 btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</section>

<section class="faq py-5">
        <div class="container">
            <p class="title text-center">FAQ</p>
            <h1 class="font-weight-bold text-center">Frequently Asked Questions</h1>
            <div class="container my-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="vdo-image">
                            <a href=""><i class="fas fa-play"></i></a>
                        </div>
                        <h4 class="text-muted font-weight-bold mt-4">What Healing Techniques Holistic<br>
                            Doctors Vouch For?</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                              <div class="card-header" id="headingOne">
                                <h2 class="my-0">
                                  <button class="btn btn-link w-100 text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What about insurance coverage?
                                    <i class="fas text-success float-right fa-angle-down"></i>
                                  </button>
                                </h2>
                              </div>
                          
                              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Suspendisse at consectetuer amet sit ligula, accumsan in vel, facilisi vulputate, maxime in lacinia suscipit sagittis diam, cras risus aliquam quis sit. Velit elit nec. Nec non et curabitur augue, aliquet sit. Cursus duis in eget in libero etiam, ac ante magna nec, ante lectus, consectetuer neque.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingTwo">
                                <h2 class="my-0">
                                  <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is Naturopathic Medicine?
                                  <i class="fas text-success float-right fa-angle-down"></i>
                                    </button>
                                </h2>
                              </div>
                              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Naturopathic Medicine is the combination of the greatest achievements of the traditional, western diagnostic and treatment techniques with the therapeutic methodologies of naturopathic and ancient medical methods.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                              <div class="card-header" id="headingThree">
                                <h2 class="my-0">
                                  <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is the difference between modern and holistic?
                                  <i class="fas text-success float-right fa-angle-down"></i>
                                    </button>
                                </h2>
                              </div>
                              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Suspendisse at consectetuer amet sit ligula, accumsan in vel, facilisi vulputate, maxime in lacinia suscipit sagittis diam, cras risus aliquam quis sit. Velit elit nec. Nec non et curabitur augue, aliquet sit. Cursus duis in eget in libero etiam, ac ante magna nec, ante lectus, consectetuer neque.
                                </div>
                              </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                  <h2 class="my-0">
                                    <button class="btn btn-link w-100 text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What is environmental Medicine?
                                    <i class="fas text-success float-right fa-angle-down"></i>
                                    </button>
                                  </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                  <div class="card-body">
                                    Suspendisse at consectetuer amet sit ligula, accumsan in vel, facilisi vulputate, maxime in lacinia suscipit sagittis diam, cras risus aliquam quis sit. Velit elit nec. Nec non et curabitur augue, aliquet sit. Cursus duis in eget in libero etiam, ac ante magna nec, ante lectus, consectetuer neque.
                                  </div>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section>















<?php include('include/footer.php');?>
