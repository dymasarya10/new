@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Footer Teks</th>
                <th scope="col">Link</th>
                <th scope="col">Gambar</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        {{ $item->promotiontext }}
                    </td>
                    <td>
                        <p
                            style="width: 200px; overflow:hidden;white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;">
                            {{ $item->link }}
                        </p>
                    </td>
                    <td>
                        <img src="{{ asset('storage/'.$item->pictfooter) }}" alt="" class="img-fluid"
                            width="100">
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
                                <p><strong>Footer Text : </strong></p>
                                <p>{{$item->promotiontext}}</p>
                                <p><strong>Link : </strong></p>
                                <p>{{$item->link}}</p>
                                <p><strong>Gambar : </strong></p>
                                <p><img src="{{ asset('storage/'.$item->pictfooter) }}" alt="" class="img-fluid"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal{{ $item->id }}edit" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Detail</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admlab/admbanner/admupdatebanner/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Footer Teks</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $item->promotiontext }}"
                                            name="promotiontext">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Link</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            aria-describedby="emailHelp"
                                            name="link" rows="3">{{ $item->link }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="oldImage" value="{{$item->pictfooter}}">
                                        <label for="exampleInputPassword1" class="form-label">Foto Profil</label>
                                        <img src="{{ asset('storage/'.$item->pictfooter) }}" class="img-previewEdit img-fluid d-block" width="100%">
                                        <input class="form-control form-control-sm" id="formFileSmEdit" type="file" name="pictfooter"
                                            aria-describedby="passwordHelpBlock" onchange="previewImageEdit()">
                                        <div id="passwordHelpBlock" class="form-text pt-3 ps-2">
                                            Disarankan untuk mengikuti arahan berikut agar lebih maksimal : <br>
                                            - Ekstensi File PNG <br>
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
