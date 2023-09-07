@extends('web.app.app')


@section('main-body')
<div class="bread-crumb">
    <img src="{{ asset('') }}uploads/category/{{ $category->image }}" class="img-fluid" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>{{ $category->title }}</span> </h2>

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 commontop text-center">
            <h4>{{ $category->title }}</h4>
            <div class="img">
                <img src="{{ asset('') }}assets/web/images/header2/organic-icon.png" alt="icon" title="icon"
                  class="img-fluid" />
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-3 col-lg-3 col-sm-4 col-xs-6">
                    <div class="product-box">
                        <div class="product-thumb">
                            <div class="image">
                                <a href="{{ route('product.details',$product->slug) }}">
                                    <img src="{{ asset('') }}uploads/products/{{ $product->image }}" alt="image"
                                      title="image" class="img-fluid" />
                                </a>
                            </div>
                            <div class="caption text-center text-dark">

                                <h5><a href="{{ route('product.details',$product->slug) }}">{{ $product->title }}</a>
                                </h5>


                            </div>

                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
<!-- product end here -->
@endsection
