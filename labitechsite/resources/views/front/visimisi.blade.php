@extends('layouts.main-layouts')
@section('section')
    <section class="section-visimisi mt-lg-5 pt-lg-5 pt-3">
        <div class="container p-lg-0 px-3">
            <div class="row row-cols-md-2 row-cols-1">
                @foreach ($visimisicollections as $item)
                <div class="col">
                    <h3 class="fs-3 fw-bolder">VISI</h3>
                    {{-- DATABASE --}}
                    <p class="lh-lg fs-6 ps-lg-3">{{$item->visi}}</p>
                    <h3 class="fs-3 fw-bolder">MISI</h3>
                    {{-- DATABASE --}}
                    <p class="lh-lg fs-6 ps-lg-3">{{$item->misi}}</p>

                </div>
                <div class="col text-center">
                    <div class="visimisi-img">
                        <img src="{{asset('storage/'.$item->pict)}}" alt="" class="img-fluid">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
