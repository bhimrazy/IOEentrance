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
<main>
   
    <!-- --------------------- Blog Carousel ----------------- -->

    <section>
        <div class="blog">
            <div class="container">
                <h2 class="text-center">Some Popular Posts</h2>
                <div class="owl-carousel owl-theme blog-post">
                    <div class="blog-content shadow" data-aos="fade-right" data-aos-delay="200">
                        <img src="./assets/Blog-post/post-1.jpg" class="img-fluid" alt="post-popular">
                        <div class="blog-title">
                            <h3>London Fashion week's continued the evolution</h3>
                            <button class="btn btn-blog">Fashion</button>
                            <span>2 minutes</span>
                        </div>
                    </div>
                    <div class="blog-content shadow" data-aos="fade-in" data-aos-delay="200">
                        <img src="./assets/Blog-post/post-7.jpg" class="img-fluid" alt="post-popular">
                        <div class="blog-title">
                            <h3>London Fashion week's continued the evolution</h3>
                            <button class="btn btn-blog">Fashion</button>
                            <span>2 minutes</span>
                        </div>
                    </div>
                    <div class="blog-content shadow">
                        <img src="./assets/Blog-post/post-4.png" class="img-fluid" alt="post-popular">
                        <div class="blog-title">
                            <h3>London Fashion week's continued the evolution</h3>
                            <button class="btn btn-blog">Fashion</button>
                            <span>2 minutes</span>
                        </div>
                    </div>
                    <div class="blog-content shadow" data-aos="fade-right" data-aos-delay="200">
                        <img src="./assets/Blog-post/post-4.png" class="img-fluid" alt="post-popular">
                        <div class="blog-title">
                            <h3>London Fashion week's continued the evolution</h3>
                            <button class="btn btn-blog">Fashion</button>
                            <span>2 minutes</span>
                        </div>
                    </div>
                </div>
                <div class="owl-navigation">
                    <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                    <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------x---------- Blog Carousel --------x-------- -->

    <!-- ---------------------- Site Content -------------------------->

    <section class="container">
        <div class="site-content">
            <div class="posts">
               @foreach ($posts as $post)
               <div class="post-content">
                <div class="post-image">
                    <div>
                        <img src="{{$post->imgUrl()}}" class="img" alt="blog1">
                    </div>
                    <div class="post-info flex-row">
                        <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                            2019</span>
                        <span>2 Comments</span>
                    </div>
                </div>
                <div class="post-title">
                <a href="#">{{$post->title}}</a>
                    {!!str_limit($post->content,400)!!}
                    <button class="btn post-btn">Read More &nbsp; <i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
            <hr>
               @endforeach
                                
                                    
                    <div class="text-center">
                        {{$posts->links()}}
                    </div>
            </div>
            <aside class="sidebar">
                <div class="category">
                    <h2>Category</h2>
                    <ul class="category-list">
                        <li class="list-items">
                            <a href="#">Software</a>
                            <span>(05)</span>
                        </li>
                        <li class="list-items">
                            <a href="#">Techonlogy</a>
                            <span>(02)</span>
                        </li>
                        <li class="list-items">
                            <a href="#">Lifestyle</a>
                            <span>(07)</span>
                        </li>
                        <li class="list-items">
                            <a href="#">Shopping</a>
                            <span>(01)</span>
                        </li>
                        <li class="list-items">
                            <a href="#">Food</a>
                            <span>(08)</span>
                        </li>
                    </ul>
                </div>
                <div class="popular-post">
                    <h2>Popular Post</h2>
                    <div class="post-content">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/m-blog-1.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/m-blog-2.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/m-blog-3.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/m-blog-4.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="post-image">
                            <div>
                                <img src="./assets/popular-post/m-blog-5.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                    2019</span>
                                <span>2 Commets</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                    <h2>Newsletter</h2>
                    <div class="form-element">
                        <input type="text" class="input-element" placeholder="Email">
                        <button class="btn form-btn">Subscribe</button>
                    </div>
                </div> --}}
                <div class="popular-tags">
                    <h2>Popular Tags</h2>
                    <div class="tags">
                        <span class="tag">Software</span>
                        <span class="tag">technology</span>
                        <span class="tag">travel</span>
                        <span class="tag">illustration</span>
                        <span class="tag">design</span>
                        <span class="tag">lifestyle</span>
                        <span class="tag">love</span>
                        <span class="tag">project</span>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <!-- -----------x---------- Site Content -------------x------------>


</main>

@endsection
@section('script')
<script src="{{ asset('/js/main.js') }}"></script>
<script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
@endsection