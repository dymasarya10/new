@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createtestimon">
        Tambah Data
    </button>
    <!-- Modal -->
    <div class="modal fade" id="createtestimon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/admlab/admprogram/admcreatepartprogram" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Program</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Singkat</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="shortdesc"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Gambar</label>
                            <img class="img-preview img-fluid d-none" width="100%">
                            <input class="form-control form-control-sm" id="formFileSm" type="file" name="pict"
                                aria-describedby="passwordHelpBlock" onchange="previewImage()">
                            <div id="passwordHelpBlock" class="form-text pt-3 ps-2">
                                Disarankan untuk mengikuti arahan berikut agar lebih maksimal : <br>
                                - Ekstensi File PNG <br>
                                - Rasio 4:3 <br>
                                - Ukuran maksimal 1 mb <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi Singkat</th>
                <th scope="col">Gambar</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        <p
                            style="width: 200px; overflow:hidden;white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;">
                            {{ $item->shortdesc }}
                        </p>
                    </td>
                    <td>
                        <img src="{{ asset('storage/'.$item->pict) }}" alt="" class="img-fluid"
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
                        @if ($loop->iteration>3)
                        <button type="button" class="btn btn-danger"><a href="/admlab/admprogram/admdeletepartprogram/{{ $item->id }}"
                            onclick="return confirmDelete()"><i class="fas fa-trash"
                                style="color: #ffffff;"></i></a></button>
                        @endif
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
                                <p><strong>Nama Program : </strong></p>
                                <p>{{$item->name}}</p>
                                <p><strong>Deskripsi Singkat : </strong></p>
                                <p>{{$item->shortdesc}}</p>
                                <p><strong>Gambar : </strong></p>
                                <p><img src="{{ asset('storage/'.$item->pict) }}" alt="" class="img-fluid"></p>
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
                                <form action="/admlab/admprogram/admupdatepartprogram/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nama Program</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $item->name }}"
                                            name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Deskripsi Singkat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            aria-describedby="emailHelp"
                                            name="shortdesc" rows="3">{{ $item->shortdesc }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="oldImage" value="{{$item->pict}}">
                                        <label for="exampleInputPassword1" class="form-label">Foto Profil</label>
                                        <img src="{{ asset('storage/'.$item->pict) }}" class="img-previewEdit img-fluid d-block" width="100%">
                                        <input class="form-control form-control-sm" id="formFileSmEdit" type="file" name="pict"
                                            aria-describedby="passwordHelpBlock" onchange="previewImageEdit()">
                                        <div id="passwordHelpBlock" class="form-text pt-3 ps-2">
                                            Disarankan untuk mengikuti arahan berikut agar lebih maksimal : <br>
                                            - Ekstensi File PNG <br>
                                            - Rasio 16:9 <br>
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
