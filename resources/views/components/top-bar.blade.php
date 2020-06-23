<div id="top-bar" class="hidden-sm-down">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12">
                <div class="top-bar-welcome">
                    <ul>
                        <li>{!!trans('messages.top_bar_msj')!!}</li>
                    </ul>
                </div>
                <div class="top-bar-info">
                    <ul>
                        <li><i class="fa fa-phone"></i>(+755) 557 0669
                        <li>
                        <li><i class="fa fa-envelope"></i>contacto@grscapital.com.mx
                        <li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-12">
                <ul class="social-icons hidden-md-down">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
            <div class="col-md-2 col-12">
                <ul class="social-icons hidden-md-down">
                    @if (config('locale.status') && count(config('locale.languages')) > 1)
                        <div class="links">
                            @foreach (array_keys(config('locale.languages')) as $lang)
                                <li style="padding-top: 5px !important; "><a  href="{!! route('lang.swap', $lang) !!}">
                                        <img @if ($lang !== App::getLocale()) style="opacity: 0.5" @endif src="{{ asset('img') .'/'.$lang . '.png' }}" alt="">
                                    </a>
                                </li>
                            @endforeach
                        </div>
                    @endif
                </ul>

            </div>
        </div>
    </div>
</div>
