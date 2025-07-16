@extends('website.main.layout.main')

@section('main_content')
<section id="latest-blog" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="section-header align-center">
                    <div class="title">
                        <span>Read our articles</span>
                    </div>
                    <h2 class="section-title">Latest Articles</h2>
                </div>

                <div class="row">
                    {{-- Article 1 --}}
                    <div class="col-md-4">
                        <article class="column" data-aos="fade-up">
                            <figure>
                                <a href="#" class="image-hvr-effect">
                                    <img src="{{ asset('assets/images/post-img1.jpg') }}" alt="post" class="post-image">
                                </a>
                            </figure>
                            <div class="post-item">
                               
                                <h3><a href="#">Reading books always makes the moments happy</a></h3>
                                <div class="links-element">
                                    <div class="categories">inspiration</div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                                            <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon icon-behance-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    {{-- Article 2 --}}
                    <div class="col-md-4">
                        <article class="column" data-aos="fade-up" data-aos-delay="200">
                            <figure>
                                <a href="#" class="image-hvr-effect">
                                    <img src="{{ asset('assets/images/post-img2.jpg') }}" alt="post" class="post-image">
                                </a>
                            </figure>
                            <div class="post-item">
                            
                                <h3><a href="#">Reading books always makes the moments happy</a></h3>
                                <div class="links-element">
                                    <div class="categories">inspiration</div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                                            <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon icon-behance-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    {{-- Article 3 --}}
                    <div class="col-md-4">
                        <article class="column" data-aos="fade-up" data-aos-delay="400">
                            <figure>
                                <a href="#" class="image-hvr-effect">
                                    <img src="{{ asset('assets/images/post-img3.jpg') }}" alt="post" class="post-image">
                                </a>
                            </figure>
                            <div class="post-item">
                        
                                <h3><a href="#">Reading books always makes the moments happy</a></h3>
                                <div class="links-element">
                                    <div class="categories">inspiration</div>
                                    <div class="social-links">
                                        <ul>
                                            <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                                            <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon icon-behance-square"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="row">
                    <div class="btn-wrap align-center">
                        <a href="#" class="btn btn-outline-accent btn-accent-arrow" tabindex="0">
                            Read All Articles <i class="icon icon-ns-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
