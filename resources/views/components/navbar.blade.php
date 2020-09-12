<header>
    <nav id="navigation4" class="container navigation">
        <div class="nav-header">
            <a class="nav-brand" href="{{url('/')}}">
                <img src="{{asset('img/logos/logo-grs.png')}}" class="main-logo" alt="logo" id="main_logo">
            </a>
            <div class="nav-toggle"></div>
        </div>
        <div class="nav-menus-wrapper">
            <ul class="nav-menu align-to-right">
                <li><a href="/">{!!trans('messages.nav-home')!!}</a></li>
                <li><a href="{{url('investment-fund')}}">{!!trans('messages.nav-services')!!}</a></li>
                <li><a href="{{url('about')}}">{!!trans('messages.nav-about')!!}</a></li>
                <li><a href="{{url('contact')}}">{!!trans('messages.nav-contact')!!}</a></li>
                <li class="li-hidden">
                @foreach (array_keys(config('locale.languages')) as $lang)
                 <a  href="{!! route('lang.swap', $lang) !!}">
                            <img @if ($lang !== App::getLocale()) style="opacity: 0.7" @endif src="{{ asset('img') .'/'.$lang . '.png' }}" width="30" alt="">
                        </a>

                    @endforeach
                </li>
            </ul>
        </div>
    </nav>
</header>
