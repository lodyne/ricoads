@extends('layouts.master')

@section('content')
<div class="container-fluid" style=" padding-left:0px auto">

  @include("layouts.nav")

    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 animated fadeInRight">We Are Leader In</h3>
                            <h1 class="display-3 text-white mb-5 animated fadeInLeft">Construction Design & Services
                                Industry</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated fadeInUp">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated fadeInUp">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 animated fadeInRight">We Are Leader In</h3>
                            <h1 class="display-3 text-white mb-5 animated fadeInLeft">Construction Design & Services
                                Industry</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated fadeInUp">Free Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated fadeInUp">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 animated fadeInRight">We Are Leader In</h3>
                            <h1 class="display-3 text-white mb-5 animated fadeInLeft">Construction Design &
                                Services Industry</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated fadeInUp">Free
                                Quote</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated fadeInUp">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(3, 15, 39, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5 p-0">
        <div class="row g-0">
            <div class="col-lg-4 col-md-12 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center bg-dark p-5 pe-4" style="height: 250px;">
                    <div class="feature-icon flex-shrink-0">
                        <i class="flaticon-worker text-primary"></i>
                    </div>
                    <div class="text-primary pe-2">
                        <h4 class="text-primary mb-3">Expert Worker</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Phasus nec pretim velit non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center bg-primary p-5 pe-4" style="height: 250px;">
                    <div class="feature-icon flex-shrink-0">
                        <i class="flaticon-building text-dark"></i>
                    </div>
                    <div class="text-dark pe-2">
                        <h4 class="text-dark mb-3">Quality Work</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Phasus nec pretim velit non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 wow fadeIn" data-wow-delay="0.6s">
                <div class="d-flex align-items-center bg-dark p-5 pe-4" style="height: 250px;">
                    <div class="feature-icon flex-shrink-0">
                        <i class="flaticon-call text-primary"></i>
                    </div>
                    <div class="text-primary pe-2">
                        <h4 class="text-primary mb-3">24/7 Support</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet elit. Phasus nec pretim velit non</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-header text-start pb-4">
                        <h6 class="bg-white px-2 fw-semi-bold text-uppercase text-primary">Welcome to Builderz</h6>
                        <h1 class="display-5">25 Years Experience</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                        facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                        viverra quis sem.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                        facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                        viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur
                        convallis porttitor. Aliquam interdum at lacus non blandit.</p>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid px-0 my-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="row g-0">
            <div class="col-lg-6 bg-dark fact-left">
                <div class="row g-0">
                    <div class="col-12 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="fact-box bg-dark d-flex align-items-center px-5 py-5 py-md-0">
                            <div class="fact-icon flex-shrink-0">
                                <i class="flaticon-worker text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h2 class="text-primary" data-toggle="counter-up">109</h2>
                                <h6 class="text-primary text-uppercase fw-semi-bold m-0">Expert Worker</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="fact-box bg-dark d-flex align-items-center px-5 py-5 pt-0 py-md-0">
                            <div class="fact-icon flex-shrink-0">
                                <i class="flaticon-building text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h2 class="text-primary" data-toggle="counter-up">485</h2>
                                <h6 class="text-primary text-uppercase fw-semi-bold m-0">Happy Client</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-primary fact-right no-shape">
                <div class="row g-0">
                    <div class="col-12 col-md-6 wow fadeIn" data-wow-delay="0.7s">
                        <div class="fact-box bg-primary d-flex align-items-center px-5 py-5 py-md-0">
                            <div class="fact-icon flex-shrink-0">
                                <i class="flaticon-address text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h2 class="text-dark" data-toggle="counter-up">789</h2>
                                <h6 class="text-dark text-uppercase fw-semi-bold m-0">Complete Project</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 wow fadeIn" data-wow-delay="0.9s">
                        <div class="fact-box bg-primary d-flex align-items-center px-5 py-5 pt-0 py-md-0">
                            <div class="fact-icon flex-shrink-0">
                                <i class="flaticon-crane text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h2 class="text-dark" data-toggle="counter-up">890</h2>
                                <h6 class="text-dark text-uppercase fw-semi-bold m-0">Running Project</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-header text-center pb-5 wow fadeIn" data-wow-delay="0.1s">
                <h6 class="bg-white px-2 fw-semi-bold text-uppercase text-primary">Our Services</h6>
                <h1 class="display-5">Our Quality Services</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-1.jpg" alt="Image">
                            <div class="service-overlay">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida viverra quis sem.
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">General Contracting</h5>
                            <a class="btn btn-primary ms-auto" href="img/service-1.jpg"
                                data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-2.jpg" alt="Image">
                            <div class="service-overlay">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida viverra quis sem.
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">Building Construction</h5>
                            <a class="btn btn-primary ms-auto" href="img/service-2.jpg"
                                data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.9s">
                    <div class="service-item">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-3.jpg" alt="Image">
                            <div class="service-overlay">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida viverra quis sem.
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">House Renovation</h5>
                            <a class="btn btn-primary ms-auto" href="img/service-3.jpg"
                                data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-4.jpg" alt="Image">
                            <div class="service-overlay">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida viverra quis sem.
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">Building Maintenance</h5>
                            <a class="btn btn-primary ms-auto" href="img/service-4.jpg"
                                data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.6s">
                    <div class="service-item">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-5.jpg" alt="Image">
                            <div class="service-overlay">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida viverra quis sem.
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">Architecture Design</h5>
                            <a class="btn btn-primary ms-auto" href="img/service-5.jpg"
                                data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.9s">
                    <div class="service-item">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-6.jpg" alt="Image">
                            <div class="service-overlay">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id
                                gravida viverra quis sem.
                            </div>
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">Interior Design</h5>
                            <a class="btn btn-primary ms-auto" href="img/service-6.jpg"
                                data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-header text-center pb-5 wow fadeIn" data-wow-delay="0.1s">
                <h6 class="bg-white px-2 fw-semi-bold text-uppercase text-primary">Features</h6>
                <h1 class="display-5">Why Choose Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-cubes fs-4 text-dark"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semi-bold">Best In Industry</h5>
                                    <p class="mb-0">Magna sea eos sit dolor ipsum amet lorem diam dolor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-award fs-4 text-dark"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semi-bold">Award Winning</h5>
                                    <p class="mb-0">Magna sea eos sit dolor ipsum amet lorem diam dolor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.6s">
                            <div class="d-flex">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-user fs-4 text-dark"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semi-bold">Happy Clients</h5>
                                    <p class="mb-0">Magna sea eos sit dolor ipsum amet lorem diam dolor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 feature-img wow fadeInUp" data-wow-delay="0.9s">
                    <img class="img-fluid" src="img/feature.png" style="max-height: 450px;">
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-user-check fs-4 text-dark"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semi-bold">Professional Staff</h5>
                                    <p class="mb-0">Magna sea eos sit dolor ipsum amet lorem diam dolor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-check fs-4 text-dark"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semi-bold">Quality Assurance</h5>
                                    <p class="mb-0">Magna sea eos sit dolor ipsum amet lorem diam dolor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                            <div class="d-flex">
                                <div class="bg-primary rounded d-flex align-items-center justify-content-center flex-shrink-0 me-4"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-phone-alt fs-4 text-dark"></i>
                                </div>
                                <div>
                                    <h5 class="fw-semi-bold">24/7 Support</h5>
                                    <p class="mb-0">Magna sea eos sit dolor ipsum amet lorem diam dolor
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid video my-5 wow fadeIn" data-wow-delay="0.1s">
        <button type="button" class="btn-play" data-bs-toggle="modal"
            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
            <span></span>
        </button>
    </div>
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen=""
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="section-header text-start pb-4 wow fadeIn" data-wow-delay="0.1s">
                        <h6 class="bg-white px-2 fw-semi-bold text-uppercase text-primary">Our Skills</h6>
                        <h1 class="display-5">25 Years Experience</h1>
                    </div>
                    <p class="mb-4">Eirmod sea tempor elitr erat. Ipsum elitr erat dolor magna lorem sed
                        rebum diam est diam justo est sea lorem, dolor justo est ipsum dolor sit. Ipsum dolor sit
                        erat elitr eos justo ipsum sea stet clita vero rebum stet sit diam sea ipsum est clita diam.
                    </p>
                    <div class="skill mb-4 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Experience</h6>
                            <h6 class="mb-2">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100"><span class="bg-primary"></span></div>
                        </div>
                    </div>
                    <div class="skill mb-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Machinery</h6>
                            <h6 class="mb-2">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100"><span class="bg-info"></span></div>
                        </div>
                    </div>
                    <div class="skill mb-4 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Engineer</h6>
                            <h6 class="mb-2">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"><span class="bg-success"></span></div>
                        </div>
                    </div>
                    <div class="skill mb-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Design</h6>
                            <h6 class="mb-2">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90"
                                aria-valuemin="0" aria-valuemax="100"><span class="bg-danger"></span></div>
                        </div>
                    </div>
                    <div class="skill mb-0 wow fadeIn" data-wow-delay="0.6s">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Satisfaction</h6>
                            <h6 class="mb-2">95%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95"
                                aria-valuemin="0" aria-valuemax="100"><span class="bg-dark"></span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 skill-img wow fadeInUp" data-wow-delay="0.9s">
                    <img class="img-fluid" src="img/skill.png" style="max-height: 600px;">
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid testimonial my-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                        <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <h5 class="text-primary fw-semi-bold">Customer Name</h5>
                            <h6 class="text-white fst-italic mb-4">profession</h6>
                            <p class="text-white m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam
                                metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl
                                nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h5 class="text-primary fw-semi-bold">Customer Name</h5>
                            <h6 class="text-white fst-italic mb-4">profession</h6>
                            <p class="text-white m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam
                                metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl
                                nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h5 class="text-primary fw-semi-bold">Customer Name</h5>
                            <h6 class="text-white fst-italic mb-4">profession</h6>
                            <p class="text-white m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam
                                metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl
                                nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h5 class="text-primary fw-semi-bold">Customer Name</h5>
                            <h6 class="text-white fst-italic mb-4">profession</h6>
                            <p class="text-white m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam
                                metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl
                                nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h5 class="text-primary fw-semi-bold">Customer Name</h5>
                            <h6 class="text-white fst-italic mb-4">profession</h6>
                            <p class="text-white m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam
                                metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl
                                nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h5 class="text-primary fw-semi-bold">Customer Name</h5>
                            <h6 class="text-white fst-italic mb-4">profession</h6>
                            <p class="text-white m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam
                                metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl
                                nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h5 class="text-primary fw-semi-bold">Customer Name</h5>
                            <h6 class="text-white fst-italic mb-4">profession</h6>
                            <p class="text-white m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam
                                metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl
                                nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h5 class="text-primary fw-semi-bold">Customer Name</h5>
                            <h6 class="text-white fst-italic mb-4">profession</h6>
                            <p class="text-white m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam
                                metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl
                                nec nisi scelerisque maximus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-header text-start pb-4 wow fadeIn" data-wow-delay="0.1s">
                        <h6 class="bg-white px-2 fw-semi-bold text-uppercase text-primary">Request A Quote</h6>
                        <h1 class="display-5">We Are Trusted</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-6 col-md-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="border p-4">
                                <img class="img-fluid" src="img/vendor-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border p-4">
                                <img class="img-fluid" src="img/vendor-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="border p-4">
                                <img class="img-fluid" src="img/vendor-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border p-4">
                                <img class="img-fluid" src="img/vendor-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="border p-4">
                                <img class="img-fluid" src="img/vendor-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-6 col-md-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="border p-4">
                                <img class="img-fluid" src="img/vendor-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="bg-dark d-flex align-items-center p-4 mt-3 wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fs-4 text-dark"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-light mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-dark h-100 d-flex align-items-center p-5 wow fadeIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-white border-0"
                                        placeholder="Your Name" style="height: 50px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-white border-0"
                                        placeholder="Your Email" style="height: 50px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-white border-0" style="height: 50px;">
                                        <option selected="">Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0" rows="2"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Request A
                                        Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-header text-center pb-5 wow fadeIn" data-wow-delay="0.1s">
                <h6 class="bg-white px-2 fw-semi-bold text-uppercase text-primary">Latest Blog</h6>
                <h1 class="display-5">From Our Blog</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="Image">
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">Lorem ipsum dolor sit</h5>
                            <a class="btn btn-primary ms-auto" href="">+</a>
                        </div>
                        <div class="blog-text bg-light text-center p-4">
                            <div class="blog-meta">
                                <i class="fa fa-user text-primary ms-2 me-1"></i><a class="text-body"
                                    href="">Admin</a>
                                <i class="fa fa-folder text-primary ms-2 me-1"></i><a class="text-body"
                                    href="">Construction</a>
                            </div>
                            <p class="m-0">Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.6s">
                    <div class="blog-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="Image">
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">Lorem ipsum dolor sit</h5>
                            <a class="btn btn-primary ms-auto" href="">+</a>
                        </div>
                        <div class="blog-text bg-light text-center p-4">
                            <div class="blog-meta">
                                <i class="fa fa-user text-primary ms-2 me-1"></i><a class="text-body"
                                    href="">Admin</a>
                                <i class="fa fa-folder text-primary ms-2 me-1"></i><a class="text-body"
                                    href="">Construction</a>
                            </div>
                            <p class="m-0">Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeIn" data-wow-delay="0.9s">
                    <div class="blog-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="Image">
                        </div>
                        <div class="d-flex align-items-center bg-dark" style="height: 60px;">
                            <h5 class="fw-semi-bold text-primary text-truncate m-0 mx-4">Lorem ipsum dolor sit</h5>
                            <a class="btn btn-primary ms-auto" href="">+</a>
                        </div>
                        <div class="blog-text bg-light text-center p-4">
                            <div class="blog-meta">
                                <i class="fa fa-user text-primary ms-2 me-1"></i><a class="text-body"
                                    href="">Admin</a>
                                <i class="fa fa-folder text-primary ms-2 me-1"></i><a class="text-body"
                                    href="">Construction</a>
                            </div>
                            <p class="m-0">Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi.
                                Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row gy-5">
                <div class="col-md-6 col-lg-3">
                    <div class="section-header text-start pb-4">
                        <h6 class="h5 bg-dark px-2 fw-semi-bold text-uppercase text-primary">Office Contact</h6>
                    </div>
                    <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i><a href="/cdn-cgi/l/email-protection"
                            class="__cf_email__"
                            data-cfemail="721b1c141d32170a131f021e175c111d1f">[email&#160;protected]</a></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="section-header text-start pb-4">
                        <h6 class="h5 bg-dark px-2 fw-semi-bold text-uppercase text-primary">Services Areas</h6>
                    </div>
                    <a class="btn btn-link" href="">Building Construction</a>
                    <a class="btn btn-link" href="">House Renovation</a>
                    <a class="btn btn-link" href="">Architecture Design</a>
                    <a class="btn btn-link" href="">Interior Design</a>
                    <a class="btn btn-link" href="">Painting</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="section-header text-start pb-4">
                        <h6 class="h5 bg-dark px-2 fw-semi-bold text-uppercase text-primary">Useful Pages</h6>
                    </div>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Team</a>
                    <a class="btn btn-link" href="">Projects</a>
                    <a class="btn btn-link" href="">Testimonial</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="section-header text-start pb-4">
                        <h6 class="h5 bg-dark px-2 fw-semi-bold text-uppercase text-primary">Newsletter</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit
                        non vulpu</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-primary">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-menu">
                <a href="">Terms of use</a>
                <a href="">Privacy policy</a>
                <a href="">Cookies</a>
                <a href="">Help</a>
                <a href="">FQAs</a>
            </div>
        </div>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="m-md-0">&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="m-0">Designed By <a href="../../index.htm">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>


    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
            class="bi bi-arrow-up"></i></a>
</div>
@endsection
