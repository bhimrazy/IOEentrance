@extends('layouts.home')

@section('content')
<div class="container text-center">
    <section class="site-title">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>IOEentrance | Practice and Aim Higher</h1>
                    <p>An online based entrance platform with an aim and approach to help students.</p>
                    <button class="btn btn-light px-5 py-2 mt-3">Register Now</button>
                </div>
            </div>           
        </div>
    </section>
</div>
@endsection
@section('main')
<section class="section py-4">
    <div class="container text-center">
        <h1 class="text-dark">What our Reader's Say About us</h1>
    </div>
   <div class="container m-4">
       @foreach ($reviews as $review)
        <div class="card m-2">
            <div class="card-header">
                <h2>{{$review->name}}&nbsp;&nbsp;&nbsp;&nbsp;<small class="text-secondary">{{$review->email}}</small></h2>
                 
            </div>
            <div class="card-body">
                <p>{{$review->content}}</p>
                <small>{{$review->created_at->diffForHumans()}}</small>
            </div>
           <div class="card-footer">
            @auth
            @if(Auth::user()->role->name=='Admin')
            <div class="nav-item">
                <a class="btn btn-danger" type="submit" href="{{route('reviews.destroy',$review->id)}}">Delete</a>
            </div>
            @endif
            @endauth
           </div>
        </div>
       @endforeach
       <div class="text-center">
           {{$reviews->links()}}
       </div>
   </div>
</section>

<section class="single-section contact-area" id="contact-area">
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center" data-wow-duration="1s" data-wow-delay="1s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: bounceInUp;">
                    <h2 class="section-title">Get in Touch with Us</h2>
                    <p class="section-description">Please send your review and message to us.</p>
                </div>
            </div>
        </div>
        <div class="row " data-wow-duration="1s" data-wow-delay="1s"
            style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInUp;">
            <div class="col-12 col-lg-7">
                <form class="contact-form" id="contact-form" method="post" action="{{route('reviews.store')}}">
                    @csrf
                    <h4 class="form-title">Write Your Review. </h4>
                    <div class="row">
                        <div class="col-12 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="contact-name" placeholder="Name"
                                required="">
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email"
                                required="">
                        </div>
                        <div class="col-12 form-group custom-margin">
                            <textarea name="message" class="form-control" id="contact-message" placeholder="Message"
                                rows="5" required=""></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn button-scheme" id="contact-submit">Submit</button>
                            <p class="feedback-error">Oops! Something went wrong. Please try again.</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-5">
                <div class="contact-info " data-wow-duration="1s" data-wow-delay="1s"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: slideInUp;">
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
@section('script')
<script src="{{ asset('/js/main.js') }}"></script>
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
@endsection