<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12">
                <div class="inner">
                    <img src="{{asset('')}}uploads/content/{{ $content->website_logo }}" class="img-fluid" title="logo"
                      alt="logo">
                    <p class="">{{ $content->website_description }}</p>

                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-lg-9 col-xs-12">

                <div class="row">

                    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 cat">
                        <h5>Categories</h5>
                        <hr>
                        <ul class="list-unstyled">
                            @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('service.details',$category->id) }}">{{ $category->title }}</a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 cat">
                        <h5>Menu</h5>
                        <hr>
                        <ul class="list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('index') }}">Home</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('service.index') }}">Service</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('product.index') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About us</a>
                            </li>

                            <li>
                                <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('blogs.all') }}">Blogs</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 col-xs-12 cat">
                        <h5>Stay Connected</h5>
                        <ul class="list-unstyled contact">
                            <li>
                                <a>
                                    <i class="fa fa-map-marker"></i> {{ $content->website_address }}
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="icon_phone"></i> {{ $content->website_phone }}
                                </a>
                            </li>
                            <li>
                                <a>
                                    <i class="fa fa-envelope"></i> {{ $content->website_email }}
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="list-unstyled social">
                            <li class="list-inline-item">
                                <a href="{{ $content->facebook }}" target="_blank">
                                    <i class="social_facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $content->whatsapp }}" target="_blank">
                                    <i class="icon_phone"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $content->youtube }}" target="_blank">
                                    <i class="social_youtube"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $content->linkdin }}" target="_blank">
                                    <i class="social_linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="powered">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 text-center">
                    <p>© Copyright 2023, <span>Monoputo.</span> All Rights Reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>