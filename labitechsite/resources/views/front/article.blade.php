@extends('layouts.main-layouts')
@section('section')
<div class="container-fluid mt-5 py-3" style="background-color: #eaeaeaea">
    <div class="fs-2 h1-art text-center">{{$article->title}}</div>
</div>
<div class="container article-section my-lg-3">
    <div class="row">
        <div class="col-12 text-center">
            <img src="{{asset('assets/img/')}}/{{$article->pict}}" alt="" class="img-fluid articlesec-img">
            <div class="row mt-lg-5">
                <div class="col-12 text-start">
                    <p class="text-secondary fs-6">
                        <i class="fa-regular fa-calendar-days"></i>&nbsp;{{ $article->date_made }}
                    </p>
                </div>
                <div class="col-12 text-start">
                    <p class="text-secondary fs-6">
                        <i class="fa-solid fa-user"></i>&nbsp;{{$article->author}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="articleparagraph fs-6">
                {!! nl2br(e($article->body)) !!}
            </p>
        </div>
    </div>
</div>
@endsection