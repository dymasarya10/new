@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Visi</th>
                <th scope="col">Misi</th>
                <th scope="col">Foto Header</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        {{ $item->visi }}
                    </td>
                    <td>
                        {{ $item->misi }}
                    </td>
                    <td>
                        <img src="{{ asset('storage/'.$item->pict) }}" alt="" class="img-thumbnail"
                            width="118">
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
                {{-- Detail --}}
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Cabang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Visi : </strong></p>
                                <p>{{$item->visi}}</p>
                                <p><strong>Misi : </strong></p>
                                <p>{{$item->misi}}</p>
                                <p><strong>Gambar :</strong></p>
                                <p><img src="{{ asset('storage/'.$item->pict) }}" alt="" class="img-fluid"
                                    width="118"></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Edit --}}
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
                                <form action="/editvisimisi/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Visi</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="visi">{{ $item->visi }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Misi</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="misi">{{ $item->misi }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="hidden" name="oldImage" value="{{$item->pict}}">
                                        <label for="exampleInputPassword1" class="form-label">Gambar</label>
                                        <img src="{{ asset('storage/'.$item->pict) }}" class="img-previewEdit img-fluid d-block" width="100%">
                                        <input class="form-control form-control-sm" id="formFileSmEdit" type="file" name="visimisiImage"
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
