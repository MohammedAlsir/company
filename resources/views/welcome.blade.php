@extends('layout.main')
@section('title',' الرئيسية')
@section('home','active')
@section('content')
    <!-- ======= Hero Section ======= -->
    @if ($sections->count() > 0 )
        <section id="hero">
            <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    @foreach ($sections as $item)
                        <div class="carousel-item @if ($loop->first) active @endif " style="background: url({{asset('uploads/sections/'.$item->photo)}})">
                            <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">{{$item->name}}<span></span></h2>
                                <p class="animate__animated animate__fadeInUp">{{$item->brief}}</p>
                                <a href="{{route('services')}}" class="btn-get-started animate__animated animate__fadeInUp">المزيد</a>
                            </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
            </div>
        </section><!-- End Hero -->
    @endif

    <main id="main">

        @if ($services->count() > 0 )
            <!-- ======= Featured Section ======= -->
            <section id="featured" class="featured">
                <div class="container">

                    <div class="row">
                        @foreach ($services as $service)
                            <div class="col-lg-4 mb-4">
                                <div class="icon-box">
                                <i class="bi bi-card-checklist"></i>
                                <h3 class="d-inline-block"><a href="{{route('services')}}">{{$service->name}}</a></h3>
                                <p class="d-inline-block"> - {{$service->section->name}}</p>
                                <p>{{$service->brief}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
            <!-- End Featured Section -->
        @endif

    </main><!-- End #main -->
@endsection


