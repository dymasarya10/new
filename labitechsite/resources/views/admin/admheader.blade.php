@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Pict</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <p style="width: 200px; overflow:hidden;white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;">
                            {{$item->title}}
                        </p>
                    </td>
                    <td>
                        <img src="{{ asset('storage/'.$item->pictheader) }}" alt="" class="img-fluid" width="500">
                    </td>
                    <td>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $item->id }}">
                            <i class="far fa-eye" style="color: #ffffff;"></i>
                        </button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $item->id }}edit">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </button>
                    </td>
                </tr>
                {{-- DETAIL --}}
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Title : </strong></p>
                                <p>{{$item->title}}</p>
                                <p><strong>Pict :</strong></p>
                                <p><img src="{{ asset('storage/'.$item->pictheader) }}" alt="" class="img-fluid"></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- EDIT --}}
                <div class="modal fade" id="exampleModal{{ $item->id }}edit" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admlab/admheader/updateheader/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Title</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            aria-describedby="emailHelp"
                                            name="title" rows="3">{{ $item->title }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="oldImage" value="{{$item->pictheader}}">
                                        <label for="exampleInputPassword1" class="form-label">Thumbnail App</label>
                                        <img src="{{ asset('storage/'.$item->pictheader) }}" class="img-previewEdit img-thumbnail d-block" width="100%">
                                        <input class="form-control form-control-sm" id="formFileSmEdit" type="file" name="pictheader"
                                            aria-describedby="passwordHelpBlock" onchange="previewImageEdit()">
                                        <div id="passwordHelpBlock" class="form-text pt-3 ps-2">
                                            Disarankan untuk mengikuti arahan berikut agar lebih maksimal : <br>
                                            - Ekstensi File PNG <br>
                                            - Background Transparan <br>
                                            - Rasio 4:3 <br>
                                            - Ukuran maksimal 1 mb <br>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Ubah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
    <script src="{{ asset('adminassets/js/loadimage.js') }}"></script>
    <script src="{{asset('adminassets/js/confirm.js')}}"></script>
@endsection
