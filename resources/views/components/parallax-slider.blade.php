<div class="swiper-container" id="swiper-parallax">
    <div class="parallax-bg" style="background-image:url('{{asset('img/slide_v2.jpeg')}}')" data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="container">
                <div class="slider-content left-holder">
                    <h2 class="animated " style="color:rgb( 66, 64,58)">
                        {!!trans('messages.parallax-head-1')!!}
                    </h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12">
                            <p class="animated fadeInDown" style="color:black">
                                {!!trans('messages.parallax-content-1')!!}
                                <br>
                                <b class="text-right">Jack William Palace, 1881</b>
                            </p>
                        </div>
                    </div>
                    <div class="animated fadeInUp mt-30">
                        <a href="{{url('contact')}}" class="dark-button button-md">{!!trans('messages.parallax-contact')!!}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="container">
                <div class="slider-content left-holder">
                    <h2 class="animated " style="color:rgb( 66, 64,58)">
                        {!!trans('messages.parallax-head-2')!!}
                    </h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12">
                            <p class="animated fadeInDown text-justify" style="color:black">
                                {!!trans('messages.parallax-content-2')!!} </p>
                        </div>
                    </div>
                    <div class="animated  mt-30">
                        <a href="{{url('contact')}}" class="dark-button button-md">{!!trans('messages.parallax-contact')!!}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="container">
                <div class="slider-content left-holder">
                    <h2 class="animated fadeInDown" style="color:rgb( 66, 64,58)">
                        {!!trans('messages.parallax-head-3')!!}
                    </h2>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-12">
                            <p class="animated fadeInDown" style="color:black">
                                {!!trans('messages.parallax-content-3')!!}
                        </div>
                    </div>
                    <div class="animated fadeInUp mt-30">
                        <a href="{{url('contact')}}" class="dark-button button-md">{!!trans('messages.parallax-contact')!!}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div> -->
</div>
