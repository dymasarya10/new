@extends('layouts.main-layouts')
@section('section')
    <section class="akreditasisec container py-lg-5">
        
        <div class="row row-cols-lg-3 row-cols-1 justify-content-center">
            @foreach ($akreditasicollections as $item)
            <div class="col pt-lg-0 py-3">
                  <div class="card" style="width: 100%;">
                    <img src="assets/img/{{$item->pict}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->title}}</h5>
                      <p class="card-text">{{$item->shortdesc}}</p>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">
                        Lihat...
                      </button>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">{{$item->title}}</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <center>
                            <img src="assets/img/{{$item->pict}}" alt="" class="img-fluid">
                          </center>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection