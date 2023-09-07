@extends('web.app.app')


@section('main-body')
<!-- Page Title -->
<style>
    img.thumbanail {
        height: 100px;
        width: auto;
        margin: 4px;
    }

    img.preview {
        height: auto;
        width: 100%;
    }

    .swiper-button-next {
        background: #686868;
        padding: 10px;
        opacity: 0.5;
    }

    .swiper-button-prev {
        background: #686868;
        padding: 10px;
        opacity: 0.5;
    }
</style>
<div class="bread-crumb">
    <img src="{{ asset('') }}uploads/category/{{ $product->category->image }}" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>{{ $product->title }}</span> </h2>

        </div>
    </div>
</div>
<!-- End Page Title -->
<div class="shopdetail pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                          class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img id="zoom_main" src="{{ asset('') }}uploads/products/{{ $product->image }}"
                                      title="img" alt="img" class="preview">
                                    <script>
                                        $("#zoom_main").ezPlus();
                                    </script>
                                </div>
                                @if($productPhotos)
                                @foreach ($productPhotos as $k=>$thumbnail)
                                <div class="swiper-slide">
                                    <img id="zoom_{{ $k }}"
                                      src="{{ asset('') }}uploads/productphoto/{{ $thumbnail->image }}"
                                      class="preview" />
                                    <script>
                                        $("#zoom_{{ $k }}").ezPlus();
                                    </script>
                                </div>

                                @endforeach
                                @endif

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        @if($productPhotos)
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('') }}uploads/products/{{ $product->image }}" title="img"
                                      class="thumbanail" alt="img">
                                </div>
                                @foreach ($productPhotos as $k=>$thumbnail)
                                <div class="swiper-slide">
                                    <img src="{{ asset('') }}uploads/productphoto/{{ $thumbnail->image }}"
                                      class="thumbanail" />
                                </div>

                                @endforeach


                            </div>
                        </div>

                        @endif

                    </div>

                    <!--thumb image code end-->

                    <!--Product detail code start-->
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xs-12">
                        <h5><span>{{ $product->title }}</span></h5>
                        {{-- <h6>
                            <p class="text-dark">Nature: {{ $product->nature }}</p>
                        </h6>
                        <h6>
                            <p class="text-dark">Weight: {{ $product->weight }}</p>
                        </h6>
                        <h6>
                            <p class="text-dark">Price: {{ $product->price_range }}
                            </p>
                        </h6>
                        <h6>
                            <p class="text-dark">Minimum Order: {{ $product->min_order_qty }}
                            </p>
                        </h6> --}}
                        <p class="shortdes">
                            {!!$product->description !!}
                        </p>
                        {{-- <button data-bs-toggle="modal" data-bs-target="#inquiryModal{{ $product->id }}" class="btn btn-lg btn-success" type="submit">Contact Supplier</button> --}}
                        <hr>

                    </div>
                </div>
            </div>
            <hr>

        </div>

    </div>
</div>

@push('script')

<script>
    $(function () {

        initEZPlus();

        //Triggered when window width is changed.
        $( window ).on( "resize", function() {
            var windowWidth = $( window ).width(), // get window width
                imgWidth = $( "#responsive_img").width(); // get image width
            //Init elevateZoom
            initEZPlus();
            //display status
            $( "#status" ).html("Status: Window resized!.");
            //display image and window width
            $( "#imgWidth" ).html("Image width: " + imgWidth + "px" + "<br />" + "Window width: " + windowWidth + "px");
        });

        function initEZPlus() {
            $("#responsive_img").ezPlus({
                responsive : true,
                scrollZoom : false,
                showLens: true,

                tint: true,
                tintColour: '#0F0',
                tintOpacity: 0.5,
                respond: [
                    {
                        range: '600-799',
                        tintColour: '#F00',
                        zoomWindowHeight: 100,
                        zoomWindowWidth: 100
                    },
                    {
                        range: '800-1199',
                        tintColour: '#00F',
                        zoomWindowHeight: 200,
                        zoomWindowWidth: 200
                    },
                    {
                        range: '100-599',
                        enabled: false,
                        showLens: false
                    }
                ]
            });
        }
    })
</script>
@endpush
@endsection
