@extends('layouts.main-layouts')
@section('section')
<section class="laykarsec py-5">
    <div class="container">
        <div class="row row-cols-lg-3 row-cols-1">
            @foreach ($vacancies as $item)
            <div class="col my-lg-4 mb-lg-0 mb-4">
                <div class="card" style="width: 100%">
                    <img src="{{asset('storage/'.$item->pict)}}" class="card-img-top" alt="..." height="200">
                    <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <a href="{{ $item->link }}" class="btn btn-warning">Lamar</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
