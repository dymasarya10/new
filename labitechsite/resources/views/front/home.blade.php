@extends('layouts.main-layouts')
@section('section')
    <section class="section-homeland" style="background-image: url('{{ asset('assets/img/backgroundhome.svg') }}')">
        <div class="section-homeland-content pb-5">
            @include('layouts.partials.navbar')
            <div class="billybox billybox-height" id="billybox"></div>
            <div class="container-fluid ps-lg-5">
                <div class="row mt-5 pt-5">
                    <div class="col-12">
                        <h1 class="h1 homeland-title fw-bold display-4 text-light">Sekolah Laboratorium</h1>
                    </div>
                    <div class="col-12">
                        <h1 class="h1 homeland-title fw-bold display-4 text-light">Islamic Technology</h1>
                    </div>
                    <div class="col-12">
                        <h1 class="h5 homeland-subtitle fw-lighter text-light text-uppercase text-secondary">Sekolah Para
                            Hafizh dan Juara</h1>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="homeland-choices-container">
                            <div class="row row-cols-lg-4 row-cols-md-4 row-cols-1">
                                @foreach ($branches as $branch)
                                <div class="col mb-3">
                                    <div class="homeland-choices d-flex align-items-center justify-content-center p-md-4 p-3 rounded-3">
                                        {{-- DATABASE --}}
                                        <a href="{{ $branch->link }}"
                                            class="text-center fw-bolder fs-6 text-decoration-none text-light lh-1">{{ $branch->nama_cabang }}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-homeprom mb-3 mb-lg-0 pt-lg-0 pt-3">
        <div class="container-fluid">
            <div class="row row-cols-lg-5 row-cols-1">
                @foreach ($shortdescs as $shortdesc)
                <div class="col mb-lg-0 mb-2">
                    <div class="section-homeprom-content">
                        <div class="row pt-3 ps-3">
                            <div class="col-12 section-homeprom-shortdesc"><i class="{{ $shortdesc->icon }} fs-1" style="color: #{{ $shortdesc->color }};"></i></div>
                            <div class="col-12 fw-bold fs-3 text-capitalize section-homeprom-shortdesc">{{ $shortdesc->program }}</div>
                            {{-- DATABASE --}}
                            <div class="col-12 px-lg-3 g-0 section-homeprom-shortdesc">{{ $shortdesc->shortdesc }}</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section-homebanner container-fluid mt-lg-5 pt-lg-5 text-center px-lg-0">
        @foreach ($homebanners as $item)
         <img src="{{asset('storage/'.$item->gambar_banner)}}" alt="" class="img-fluid imghome-banner">
        @endforeach
    </section>
    <section class="section-homeprof container-fluid mt-lg-5 pt-lg-5 mt-3 pt-3">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1">
                <div class="col">
                    <div class="row row-cols-1">
                        @foreach ($homeprofs as $item)
                        <div class="col fs-3 title-homeprof">{{ $item->title }}</div>
                        <div class="col pt-lg-3 pt-4">
                            <p class="fw-light lh-lg">{{ $item->desc }}</p>
                        </div>
                        @endforeach
                        <div class="col">
                            <div class="row row-cols-lg-2 row-cols-1">
                                @foreach ($homeprof_items as $homeprof_item)
                                <div class="col mb-lg-3 mb-4 fs-6 "><i class="{{$homeprof_item->icon}}" style="color: #00B894;"></i></i>&nbsp; {{$homeprof_item->keunggulan}}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col pb-lg-5 p-0">
                    @foreach ($homeprofs as $item)
                    <img src="{{asset('storage/'.$item->pict)}}" alt="" class="img-fluid rounded-4">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="section-homecarousel container mt-lg-5 pt-lg-5 mt-5">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators carousel-indcustom">
                @foreach ($testimonials as $testimonial)
                @if($loop->iteration > 8)
                @break
                @endif
                    {{-- data-bs-slide-to ditambahkan dan slide --}}
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ ($loop->iteration) - 1 }}" class="{{ ($testimonial->id === 1) ? 'active' : '' }}"
                    aria-current="true" aria-label="Slide 1"></button>
                {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button> --}}
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach ($testimonials as $testimonial)
                @if($loop->iteration > 8)
                @break
                @endif
                <div class="carousel-item {{ ($testimonial->id === 1) ? 'active' : '' }}">
                    <div class="container-fluid cars-home">
                        <div class="row row-cols-1 text-center justify-content-center">
                            {{-- DATABASE --}}
                            <div class="col"><img src="{{asset('storage/'.$testimonial->foto)}}" alt=""
                                    class="img-thumbnail homeimg-cars" width="118"></div>
                            {{-- DATABASE --}}
                            <div class="col">
                                <h1 class="h1 fs-3 pt-lg-4 pt-3">{{ $testimonial->nama }}</h1>
                            </div>
                            {{-- DATABASE --}}
                            <div class="col">
                                <h1 class="h1 fs-5 pt-lg-2">{{ $testimonial->pekerjaan }}</h1>
                            </div>
                            {{-- DATABASE --}}
                            <div class="col-lg-7">
                                <p class="h6 fw-light lh-lg">{{ $testimonial->ulasan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="section-homeactivity container-fluid mt-lg-5 pt-lg-5 mt-3">
        <div class="container-fluid p-0">
            <div class="row row-cols-md-2 row-cols-1">
                <div class="col border p-0">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                            @foreach ($homeactivityfirsts as $item)
                              <div class="carousel-item {{ ($item->id === 1) ? 'active' : '' }}">
                                <div class="container-imgcars p-0">
                                    <img src="{{asset('storage/'.$item->pict)}}" alt="" class="img-fluid p-0 img-carsfirst">
                                </div>
                              </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon carousel-control-prev-icon-homeact" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon carousel-control-next-icon-homeact" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
                <div class="col p-0">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            @foreach ($homeactivitysecs as $item)
                            <button type="button" style="background-color: #00B894" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ ($item->id) - 1 }}" class="{{($item->id === 1) ? 'active' : ''}}" aria-current="true" aria-label="Slide 1"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($homeactivitysecs as $item)
                              <div class="carousel-item {{ ($item->id === 1) ? 'active' : '' }}" data-bs-interval="10000">
                                <div class="container-imgcars">
                                    <img src=" {{asset('storage/'.$item->pict)}}" class="carsimg" alt="...">
                                </div>
                                <div class="carousel-caption d-none d-md-block text-white">
                                  <h5>{{ $item->title }}</h5>
                                  <p>{{ $item->shortdesc }}</p>
                                </div>
                              </div>
                            @endforeach
                          {{-- <div class="carousel-item" data-bs-interval="2000">
                            <div class="container-imgcars">
                                <img src="assets/img/keg1.jpg" class="carsimg" alt="...">
                            </div>
                            <div class="carousel-caption d-none d-md-block text-white">
                              <h5>Second slide label</h5>
                              <p>Some representative placeholder content for the second slide.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <div class="container-imgcars">
                                <img src="assets/img/keg1.jpg" class="carsimg" alt="...">
                            </div>
                            <div class="carousel-caption d-none d-md-block text-white">
                              <h5>Third slide label</h5>
                              <p>Some representative placeholder content for the third slide.</p>
                            </div>
                          </div> --}}
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-homeartc container-fluid my-lg-5 p-lg-4 my-4 py-3">
        <h3 class="h2 text-center mb-lg-4">Berita Terbaru</h3>
        <div class="row row-cols-lg-3 row-cols-1">
            @foreach ($articles->reverse() as $item)
                @if ($loop->iteration > 3)
                @break
                @endif
                <div class="col my-lg-0 my-3">
                    <div class="card" style="width: 100%">
                        <img src="assets/img/{{ $item->pict }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$item->title}}</h5>
                          <p class="card-text">{{ $item->excerpt }}</p>
                          <a href="article/{{$item->slug}}" class="btn btn-primary">Lihat..</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
