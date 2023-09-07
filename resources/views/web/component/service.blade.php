<section class="services-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                @foreach ($services as $service)
                <div class="services-block col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="icon flaticon-file"></div>
                            <h4><a href="{{ route('service.details',$service->id) }}">{{ $service->title }}</a></h4>
                            <div class="text">{{ $service->details }}</div>
                        </div>
                        <a href="{{ route('service.details',$service->id) }}" class="arrow flaticon-right"></a>
                    </div>
                </div>
                @endforeach
                <!-- Services Block -->



            </div>
        </div>
    </div>
</section>