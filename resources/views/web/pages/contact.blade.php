@extends('web.app.app')


@section('main-body')
<!-- Page Title -->
<div class="bread-crumb">
    <img src="{{ asset('') }}assets/web/images/top-banner.jpg" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>Contact Us</span> </h2>

        </div>
    </div>
</div>
<!-- End Page Title -->
<div class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
                <h4>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    Contact us
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                    <i class="icon_star_alt"></i>
                </h4>
                <p>Pellentesque sed posuere nisi. Nunc nec looreet mauris.</p>
            </div>
            <div class="offset-lg-2 offset-md-0 col-md-8 col-sm-8  col-xs-12">
                <form method="post"  enctype="multipart/form-data" class="form-horizontal">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="name" value="" id="input-name" class="form-control"
                                  placeholder="Name *" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="email" value="" id="input-email" class="form-control"
                                  placeholder="Email *" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="phone" value="" id="input-subject" class="form-control"
                                  placeholder="+88 01XXXXXXXX *" required="">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-xs-12">
                            <div class="form-group">
                                <i class="icofont icofont-pencil-alt-5"></i>
                                <textarea name="enquiry" id="input-enquiry" class="form-control"
                                  placeholder="Your Comment"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="buttons text-right">
                        <input class="btn btn-primary" type="submit" value="Send Message">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="address">
                <div class="row">
                    <div class="col-md-4">
                        <i class="icon_map_alt"></i>
                        {{ $content->website_address }}
                    </div>
                    <div class="col-md-4">
                        <i class="fa fa-envelope"></i>
                        {{ $content->website_email }}
                    </div>
                    <div class="col-md-4">
                        <i class="icon_mobile"></i>
                        {{ $content->website_phone }}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d219104.85983086875!2d75.71658808151895!3d30.90026973769041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1482266274532"></iframe>
</div>
@endsection
