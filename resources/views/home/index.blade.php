@extends('layouts.home')

@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <h6>AUTHOR:BHIMRAJ YADAV</h6>
            <h1>IOEentrance | Practice and Aim Higher</h1>
            <p>IOEentrance is an online based entrance system which tends to provide a platform to the students 
                to practice for the entrance and help them in improving thier skills.</p>
            <button class="btn btn-light px-5 py-2 mt-3 shadow">Register Now</button>
        </div>
        <div class="col-md-5 col-sm-12 h-10">
            <img src="/assets/practice.png" alt="Practice">
        </div>
    </div>
</div>
@endsection
@section('main')

<main>
    <section class="section-1">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="side-img">
                        <img src="/assets/hero-section.png" class="img-fluid" alt="Hero-section">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel text-left">
                        <h1>Mr.Bhimraj Yadav</h1>
                        <p class="pt-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor fuga vitae porro dolores,
                            delectus exercitationem repudiandae voluptates quibusdam sequi vel maxime ea magni ex
                            temporibus laudantium eum deserunt dolorem optio.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aperiam saepe error magnam
                            culpa corporis soluta ipsam nesciunt voluptatibus iste magni quo ab cupiditate fugit eos
                            accusamus omnis, voluptate libero.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <section id="features" class="section-2 container-fluid">
        <div class="cover">
            <div class="content text-center">
                <h1>Some Features That Made Us Unique</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, suscipit.
                </p>
            </div>
        </div>
        <div class="container-fluid text-center">
            <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                <div class="rect">
                    <h1>2345</h1>
                    <p>Happy Client</p>
                </div>
                <div class="rect">
                    <h1>2345</h1>
                    <p>Happy Client</p>
                </div>
                <div class="rect">
                    <h1>2345</h1>
                    <p>Happy Client</p>
                </div>
                <div class="rect">
                    <h1>2345</h1>
                    <p>Happy Client</p>
                </div>
            </div>
        </div>

        <div id="services" class="service text-center">
            <h1>The Services that we provide.</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            <div class="cards">
                <div class="d-flex flex-row justify-content-center flex-wrap">
                    <div class="card">
                        <div class="card-body">
                            <div class="title">
                                <span><i class="fas fa-atom fa-3x"></i></span>
                                <h5 class="card-title">GROUP DISCUSSION</h5>
                            </div>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet.</p>
                            <div class="pricing">
                                <h1>100</h1>
                                <a href="#" class="btn btn-dark px-5 py-2 mt-1 mb-2">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title">
                                <span><i class="fab fa-500px fa-3x"></i></span>
                                <h5 class="card-title">ONLINE TEST</h5>
                            </div>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet.</p>
                            <div class="pricing">
                                <h1>100</h1>
                                <a href="#" class="btn btn-dark px-5 py-2 mt-1 mb-2">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="title">
                                <span><i class="fas fa-users fa-3x"></i></span>
                                <h5 class="card-title">GROUP DISCUSSION</h5>
                            </div>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet.</p>
                            <div class="pricing">
                                <h1>100</h1>
                                <a href="#" class="btn btn-dark px-5 py-2 mt-1 mb-2">Purchase Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section-3 container-fluid p-0 text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1>Add to Homescreen For All Platforms.</h1>
                <p>This is a progressive web application and it can be added to homescreen of desktop and native environment.</p>
            </div>
        </div>
        <div class="platform row">
            <div class="col-md-6 col-sm-12 text-right">
                <div class="desktop shadow-lg">
                    <div class="d-flex flex-row justify-content-center">
                        <i class="fas fa-desktop fa-3x py-2 pr-3"></i>
                        <div class="text text-left">
                            <h3 id="desktop" class="pt-1 m-0">On Desktop</h3>
                            <p class="p-0 m-0">Install now</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 text-left">
                <div class="desktop shadow-lg">
                    <div class="d-flex flex-row justify-content-center">
                        <i class="fas fa-mobile fa-3x py-2 pr-3"></i>
                        <div class="text text-left">
                            <h3 id="mobile" class="pt-1 m-0">On Mobile</h3>
                            <p class="p-0 m-0">Install now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partners">       
        <div class="container">
            <h1 class="text-center">In Association With</h1>
             <div class="row">
                 <div class="col-sm-12 col-md-6 col-lg-6 text-center">
                 <img src="{{ asset('assets/bcr-white.png') }}" class="img-fluid" width="40%" alt="IOEentrance | Aim Higher">
                 </div>
                 <div class="col-sm-12 col-md-6 col-lg-6 text-center mt-4">
                     <img src="{{ asset('assets/prabhuhost-white.png') }}" class="img-fluid" width="50%" alt="IOEentrance | Aim Higher">
                 </div>
             </div>
        </div>
        {{-- <div class="container text-center">
         <img src="{{ asset('assets/IOEentrance.png') }}" class="img-fluid" width="40%" alt="IOEentrance | Aim Higher">
         </div> --}}
     </section>
    <section class="section-4">
        <div class="container text-center">
            <h1 class="text-dark">What our Reader's Say About us</h1>
        </div>
        <div class="team d-flex flex-row">
            <div class="col-md-4 col-12 text-center">
                <!--Card 1-->
                <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-img-top pt-3">
                        <img src="/assets/UI-face-4.jpg" alt="Member" width="20%"
                            class="img-fluid border-radius p-4">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">John Doe</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat
                            quaerat cumque esse odit sint!</p>
                        <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                        <p class="text-black-50">CEO at Google</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <!--Carousel Started-->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active text-center">
                            <!--Card 2-->
                            <div class="card mr-2 d-inline-block shadow-sm">
                                <div class="card-img-top pt-3">
                                    <img src="/assets/UI-face-1.jpg" alt="Member" width="20%"
                                        class="img-fluid rounded-circle w-50 p-4">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">John Doe</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Optio placeat
                                        quaerat cumque esse odit sint!</p>
                                    <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                                    <p class="text-black-50">CEO at Google</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center">
                            <!--Card 3-->
                            <div class="card mr-2 d-inline-block shadow-sm">
                                <div class="card-img-top pt-3">
                                    <img src="/assets/UI-face-1.jpg" alt="Member" width="20%"
                                        class="img-fluid rounded-circle w-50 p-4">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">John Doe</h3>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Optio placeat
                                        quaerat cumque esse odit sint!</p>
                                    <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                                    <p class="text-black-50">CEO at Google</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center">
                <!--Card 4-->
                <div class="card mr-2 d-inline-block shadow-lg">
                    <div class="card-img-top pt-3">
                        <img src="/assets/UI-face-4.jpg" alt="Member" width="20%"
                            class="img-fluid border-radius p-4">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">John Doe</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio placeat
                            quaerat cumque esse odit sint!</p>
                        <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                        <p class="text-black-50">CEO at Google</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="single-section contact-area" id="contact-area">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: bounceInUp;">
                        <h2 class="section-title">Get in Touch with Us</h2>
                        <p class="section-description">Please send your review and message to us.</p>
                    </div>
                </div>
            </div>
            <div class="row " data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInUp;">
                <div class="col-12 col-lg-7">
                <form class="contact-form" id="contact-form" method="post" action="{{route('reviews.store')}}">
                        @csrf
                        <h4 class="form-title">Write Your Review. </h4>
                        <div class="row">
                            <div class="col-12 col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="contact-name" placeholder="Name" required="">
                            </div>
                            <div class="col-12 col-md-6 form-group">
                                <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email" required="">
                            </div>
                           <div class="col-12 form-group custom-margin">
                                <textarea name="message" class="form-control" id="contact-message" placeholder="Message" rows="5" required=""></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn button-scheme" id="contact-submit">Submit</button>
                                <p class="feedback-error">Oops! Something went wrong. Please try again.</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="contact-info " data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInUp;">
                        <h4 class="info-title">Contact Info</h4>
                        <p class="info-description">Always available to help you.Contact us for any issue.</p>
                        <ul class="list-unstyled">
                            <li>
                                <div class="media align-items-center">
                                    <span class="info-icon">
                                    <i class="fas fa-map-marked-alt"></i>
                                </span>
                                    <div class="media-body">
                                        <h6 class="info-type">Location</h6>
                                        <span class="info-details">Balkumari , Lalitpur</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media align-items-center">
                                    <span class="info-icon">
                                        <i class="fas fa-phone-alt"></i>
                                </span>
                                    <div class="media-body">
                                        <h6 class="info-type">Contact us</h6>
                                        <span class="info-details"><a href="tel:+9779800000000">+977 9800000000</a></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media align-items-center">
                                    <span class="info-icon">
                                    <i class="fas fa-paper-plane"></i>
                                </span>
                                    <div class="media-body">
                                        <h6 class="info-type">Email Us</h6>
                                        <span class="info-details"><a href="mailto: 
                                            ioeentrance@bhimraj.com.np"> 
                                            ioeentrance@bhimraj.com.np</a></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>

@endsection