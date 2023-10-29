@extends('layouts.main-layouts')
@section('section')
<section class="section-appsection py-lg-4 py-3">
    <div class="container">
        <div class="row row-cols-lg-2 row-cols-1">
            @foreach ($apps as $app)
            <div class="col mb-3">
                <div class="appsection-appcontainer rounded-4 py-3 px-3">
                    {{-- DATABASE --}}
                    <div class="row">
                        <div class="col-3 pt-4 text-center">
                            <img src="{{asset('storage/'.$app->pict)}}" alt="" class="img-fluid">
                        </div>
                        <div class="col-9 py-3">
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="fs-5">{{ $app->nama_aplikasi }}</h1>
                                </div>
                                <div class="col-12">
                                    <p class="appcontainer-text fs-6">{{ $app->shortdesc }}</p>
                                </div>
                                <div class="col-12">
                                    <a href="{{ $app->link }}" class="btn btn-primary">Go to App</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
{{-- APLIKASI LANJUT --}}
