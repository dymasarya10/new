@extends('layouts.main-layouts')
@section('section')
<div class="container-fluid py-lg-5 py-4">
    <section class="kemitraansec-1 mb-lg-5 container-fluid">
        <div class="row row-cols-md-2 row-cols-1 justify-content-center text-lg-start text-center">
            @foreach ($partnerships as $item)
            <div class="col-md-7 p-0">
                {{-- DATABASE --}}
                <img src="{{asset('storage/'.$item->pictheader)}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-5 pt-md-5 pt-3">
                {{-- DATABASE --}}
                <h1 class="h1 fw-bold pt-lg-5 ps-lg-3">{{$item->title}}</h1>
            </div>
            @endforeach
        </div>
    </section>
    <section class="kemitraan2 container pt-lg-3 mt-lg-4 mt-3 pt-2">
        <div class="row row-cols-lg-2 row-cols-1 mt-lg-5 mb-lg-5">
            @foreach ($partnerships as $item)
            <div class="col">
                <iframe class="container-fluid" src="https://www.youtube.com/embed/{{$item->linkvid}}" height="300px"></iframe>
            </div>
            <div class="col pt-lg-5 pt-3">
                {{-- DATABASE --}}
                <h5 class="h5 kemitraantitle pt-lg-4">{{$item->titlevid}}</h5>
                {{-- DATABASE --}}
                <p class="kemitraantextdesc fs-6 fw-light lh-base">{{$item->shortdescvid}}</p>
                    {{-- DATABASE --}}
                <a href="{{$item->link}}" class="btn btn-primary">Selengkapnya...</a>
            </div>
            @endforeach
        </div>
    </section>
    <section class="kemitraan3 container pt-lg-3 mt-lg-4 text-center mt-4 pt-2">
        <h2 class="h2">PROGRAM</h2>
        <div class="row row-cols-lg-3 row-cols-1 justify-content-center pt-lg-4 pt-1">
            @foreach ($partnershipprograms as $item)
            <div class="col mb-lg-5 pt-lg-4 pt-4">
                <div class="kemitraansec-program">
                    <div class="row row-cols-1">
                        <div class="col"><img src="{{asset('storage/'.$item->pict)}}" alt="" class="img-fluid"></div>
                        <div class="col px-lg-3 pt-lg-4 text-center pt-3"><h6 class="h6">{{$item->name}}</h6></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <section class="kemitraan4 container pt-lg-3 mt-lg-4 text-center mt-4 pt-2">
        <div class="row row-cols-1">
            @foreach ($partnerships as $item)
            <div class="col">
                <img src="{{asset('storage/'.$item->pictfooter)}}" alt="" class="img-fluid imgprom" width="50%">
            </div>
            <div class="col mt-lg-5 mt-3">
                <h3 class="h3 mb-lg-3 mb-4">{{$item->promotiontext}}</h3>
                <a href="{{$item->link}}" class="btn btn-primary">Hubungi Kami !!</a>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
