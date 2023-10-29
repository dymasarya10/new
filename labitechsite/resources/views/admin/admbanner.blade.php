@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <img src="{{asset('storage/'.$item->gambar_banner)}}" alt="" class="img-fluid">
                    </td>
                    <td>
                        <div class="row row-cols-2 pe-3">
                            <div class="col">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $item->id }}edit">
                                    <i class="fas fa-edit" style="color: #ffffff;"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <div class="modal fade" id="exampleModal{{ $item->id }}edit" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Gambar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admbanner/update/{{$item->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <img class="img-preview img-fluid d-none" width="100%">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file" name="bannerImage" aria-describedby="passwordHelpBlock" onchange="previewImage()">
                                        <div id="passwordHelpBlock" class="form-text pt-3 ps-2">
                                            Disarankan untuk mengikuti arahan berikut agar lebih maksimal : <br>
                                            - Ekstensi File PNG <br>
                                            - Lebar minimal 1300 pixel <br>
                                            - Tinggi <strong>wajib 300 pixel</strong><br>
                                            - Rasio 13:3 <br>
                                            - Ukuran maksimal 2 mb <br>
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
    <script src="{{asset('adminassets/js/loadimage.js')}}"></script>
@endsection
