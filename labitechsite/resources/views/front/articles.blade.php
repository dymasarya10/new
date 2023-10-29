@extends('layouts.main-layouts')
@section('section')
<section class="articlessec p-lg-5 pt-5">
    <h2 class="h2 text-center mb-lg-4 mb-3">
        {{$title}}
    </h2>
    <div class="row row-cols-lg-4 row-cols-1 g-0 g-lg-4 p-3 p-lg-0">
        @foreach ($articles->reverse() as $item)
        <div class="col mb-lg-2 mb-3">
            <div class="card" style="width: 100%;">
                <img src="assets/img/{{$item->pict}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title fs-5">{{$item->title}}</h5>
                  <p class="card-text fs-6">{{$item->excerpt}}</p>
                  <a href="article/{{$item->slug}}" class="btn btn-primary fs-6">Lihat...</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</section>
@endsection