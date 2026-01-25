@extends('layouts.app')
@section('content')

    <x-navbar/>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <section class="slider_section" @if(Request::path() != '/') hidden @endif>
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="@media screen and (max-width: 479.98px) .carousel-item { width: 100%; padding: 10px; }
">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="img-box">
                                    <img src="{{asset('images/1.png')}}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="img-box">
                                    <img src="{{asset('images/2.png')}}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="img-box">
                                    <img src="{{asset('images/3.png')}}" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <br>
    <br>


    <x-about/>
    <br>
    <br>



    <!-- end about section -->

    <!-- do section -->
    <x-service/>

    <!-- end skill section -->

    <!-- portfolio section -->
    <x-portfolio/>

    <!-- end portfolio section -->

    <x-partners/>

    <!-- end client section -->

    <!-- contact section -->

    <x-contact/>


@endsection
