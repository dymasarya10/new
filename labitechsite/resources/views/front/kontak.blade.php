@extends('layouts.main-layouts')
@section('section')
    <section class="kontaksec container-fluid">
        <div class="row row-cols-lg-2 row-cols-1 mt-lg-3 py-5">
            @foreach ($contacts as $item)
            <div class="col text-center">
                <div class="row row-cols-1">
                    <div class="col">
                        <img src="{{ asset('assets/img/icon/envelope-svgrepo-com.svg') }}" alt="" class="icon-kontak"
                            width="50">
                    </div>
                    {{-- DATABASE --}}
                    <div class="col my-3">
                        <p class="kontak-subtitle fs-5 fw-light">{{$item->email}}</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/img/icon/phone-svgrepo-com.svg') }}" alt="" class="icon-kontak"
                            width="50">
                    </div>
                    {{-- DATABASE --}}
                    <div class="col my-3">
                        <p class="kontak-subtitle fs-5 fw-light">{{$item->phone}}</p>
                    </div>
                    <div class="col">
                        <img src="{{ asset('assets/img/icon/location-pin-alt-1-svgrepo-com.svg') }}" alt=""
                            class="icon-kontak" width="50">
                    </div>
                    {{-- DATABASE --}}
                    <div class="col my-3">
                        <p class="kontak-subtitle fs-5 fw-light lh-lg px-lg-5 px-4">{{$item->address}}</p>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <iframe
                    {{-- DATABASE --}}
                    src="{{$item->maplink}}"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="kontakmap">
                </iframe>
            </div>
            @endforeach
        </div>
    </section>
@endsection
