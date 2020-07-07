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
                <li><a href="#">{!!trans('messages.nav-services')!!}</a>
                    <ul class="nav-dropdown">
                        <li><a href="services.html">{!!trans('messages.nav-services-features')!!}</a></li>
                        <li><a href="services-2.html">{!!trans('messages.nav-services-administration')!!}</a></li>
                        <li><a href="services-3.html">{!!trans('messages.nav-services-results')!!}</a></li>
                    </ul>
                </li>
                <!--<li><a href="#">{!!trans('messages.nav-projects')!!}</a></li> -->
                <li><a href="{{url('about')}}">{!!trans('messages.nav-about')!!}</a></li>
                <li><a href="{{url('contact')}}">{!!trans('messages.nav-contact')!!}</a></li>
            </ul>
        </div>
    </nav>
</header>
