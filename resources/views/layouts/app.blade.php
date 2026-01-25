<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Cleanzy Team </title>
    {{--    title images   --}}
    <link rel="icon" type="images/x-icon" href="{{asset('images/logo.png')}}"/>

    <link href="{{asset('css/portfolio.css')}}" rel="stylesheet"/>
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Roboto:400,700&display=swap"
          rel="stylesheet"/>

    <!-- Custom styles for this template -->

    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

</head>
<body>

<div id="app" @if(Request::path() === 'admin/cleanzy') hidden @endif>
    <div class="hero_area" style="@if(Request::path() != '/' )   height: auto; @endif">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
                    <a class="navbar-brand" href="/">
                        <img style="width: 90px" src="{{asset('images/logo3.png')}}" alt=""/>
                    </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

{{--                        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                            <ul class="navbar-nav ml-auto mr-2">--}}
{{--                                <li class="nav-item active">--}}
{{--                                    <a class="nav-link pl-0" href="/">  {{ __('app.home')}} <span class="sr-only">(current)</span></a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="/about"> {{ __('app.about')}} </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="/portfolio">{{ __('app.portfolio')}} </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="/service"> {{ __('app.services')}}</a>--}}
{{--                                </li>--}}

{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="/contact">{{ __('app.contact')}}</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        <div class="call_btn">
                            <a style="color: white" href="tel:+37433340032">
                                {{ __('app.phone')}}: +374(33-34-00-32)
                            </a>
                        </div>


                        <div style="margin-left: 16px;" class="lang">
                            <select class="form-control changeLang">
                                <option value="am" {{ session()->get('locale') == 'am' ? 'selected' : '' }}>AM</option>
                                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>EN</option>
                                <option value="ru" {{ session()->get('locale') == 'ru' ? 'selected' : '' }}>RU</option>
                            </select>
                        </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->


    </div>
    @if(Session::has('success'))<div class="alert alert-success d-flex justify-content-center">
        <strong>{{session('success')}}</strong>
    </div>
    @endif
@yield('content')



<!-- info section -->
    <section class="info_section layout_padding-top layout_padding2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="info_links pl-lg-5">
                        <h4>
                            {{__('app.menu')}}
                        </h4>
                        <ul>
                            <li class="active">
                                <a href="/">
                                    {{ __('app.home')}}
                                </a>
                            </li>
                            <li>
                                <a href="/about">
                                    {{ __('app.about')}}
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a class="" href="/portfolio">--}}
{{--                                    {{ __('app.portfolio')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li>
                                <a class="" href="/service">
                                    {{ __('app.services')}}
                                </a>
                            </li>
                            <li>
                                <a href="/contact">
                                    {{ __('app.contact')}}
                                </a>
                            </li>
{{--                            <li>--}}
{{--                                <a class="" href="/partners">--}}
{{--                                    {{ __('app.partners')}}--}}
{{--                                </a>--}}
{{--                            </li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="info_contact">
                        <h4>
                            {{ __('app.location')}}
                        </h4>
                        <div>
                            <img src="{{asset('images/location.png')}}" alt=""/>
                            <p>
                                {{ __('app.for_location')}}
                            </p>
                        </div>
                        <div>
                            <img src="{{asset('images/envelope.png')}}" alt=""/>
                            <p>
                                cleanzyteam@gmail.com
                            </p>
                        </div>
                        <div >
                            <img src="{{asset('images/telephone.png')}}" alt=""/>
                            <a style="color: white;top" href="tel:+37433340032">
                                +374 (33-34-00-32)
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="info_social" style="">
                        <h4>
                            {{ __('app.social_link')}}
                        </h4>
                        <div class="social_container">
                            <div>
                                <a target="_blank" href="https://www.facebook.com/profile.php?id=61572488293280">
                                    <img src="{{asset('images/facebook-logo.png')}}" alt=""/>
                                </a>
                            </div>
                            <div>
                                <a target="_blank" href="https://www.instagram.com/cleanzy_team?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                    <img src="{{asset('images/instagram.png')}}" alt=""/>
                                </a>
                            </div>
                            <div>
                                <a target="_blank" href="https://www.tiktok.com/@cleanzy_team?is_from_webapp=1&sender_device=pc">
                                    <img src="{{asset('images/tik-tok.png')}}" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <footer class="container-fluid footer_section">

    </footer>
    <!-- footer section -->

</div>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('js/circles.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script>
    $('.navbar-toggler').on('click',function (){
        $('.lang').toggle()
    })


    let url = "{{ route('changeLang') }}";
    $(".changeLang").change(function () {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
</body>
</html>
