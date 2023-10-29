@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <h3 class="h3 mb-3">Hero</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi Singkat</th>
                <th scope="col">Gambar</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <td>
                        {{ $item->title }}
                    </td>
                    <td>
                        <p
                            style="width: 200px; overflow:hidden;white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;">
                            {{ $item->desc }}
                        </p>
                    </td>
                    <td>
                        <img src="{{asset('storage/'.$item->pict)}}" alt="" width="200" class="img-fluid">
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Hero</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Judul :</strong></p>
                                <p>{{ $item->title }}</p>
                                <p><strong>Deskripsi Singkat :</strong></p>
                                <p>{{$item->desc}}</p>
                                <p><img src="{{asset('storage/'.$item->pict)}}" alt="" class="img-fluid"></p>
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
                                <form action="/updateHeropromotion/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Judul</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $item->title }}" name="promotion_title">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Deskripsi Singkat</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $item->desc }}" name="promotion_desc">
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="oldImage" value="{{$item->pict}}">
                                        <label for="exampleInputPassword1" class="form-label">Foto Hero</label>
                                        <img src="{{ asset('storage/'.$item->pict) }}" class="img-previewEdit img-fluid d-block" width="100%">
                                        <input class="form-control form-control-sm" id="formFileSmEdit" type="file" name="promotionImage"
                                            aria-describedby="passwordHelpBlock" onchange="previewImageEdit()">
                                        <div id="passwordHelpBlock" class="form-text ps-2">
                                            Disarankan untuk mengikuti arahan berikut agar lebih maksimal : <br>
                                            - Ekstensi File PNG <br>
                                            - Rasio 16:9 <br>
                                            - Ukuran maksimal 3 mb <br>
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
    <h3 class="h3 mb-3">Child</h3>
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createpromotion">
        Tambah Data Item
    </button>
    <!-- Modal -->
    <div class="modal fade" id="createpromotion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/createChildpromotion">
                    @csrf
                    <div class="modal-body">
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="item">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Class Icon</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="icon">
                            <div id="passwordHelpBlock" class="form-text">
                                gunakan <a href="https://fontawesome.com/icons">fontawesome</a> untuk melihat daftar icon
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
                <th scope="col">Title</th>
                <th scope="col">Class Icon</th>
                <th scope="col">Simbol</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        {{ $item->keunggulan }}
                    </td>
                    <td>
                        <p>
                            {{ $item->icon }}
                        </p>
                    </td>
                    <td>
                        <i class="{{$item->icon}}"></i>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $item->id }}childedit">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </button>
                        <button type="button" class="btn btn-danger"><a href="/deleteChildpromotion/{{$item->id}}" onclick="return confirmDelete()"><i class="fas fa-trash"
                                    style="color: #ffffff;"></i></a></button>
                    </td>
                </tr>
                <div class="modal fade" id="exampleModal{{ $item->id }}childedit" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Detail</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/updateChildpromotion/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Title</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $item->keunggulan }}" name="title">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Class Icon</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $item->icon }}" name="classIcon">
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
    <script src="{{asset('adminassets/js/confirm.js')}}"></script>
    <script src="{{asset('adminassets/js/loadimage.js')}}"></script>
    <script src="https://kit.fontawesome.com/30c68318e6.js" crossorigin="anonymous"></script>
@endsection
