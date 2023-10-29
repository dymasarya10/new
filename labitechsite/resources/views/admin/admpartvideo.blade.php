@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Video</th>
                <th scope="col">Deskripsi Singkat</th>
                <th scope="col">Link</th>
                <th scope="col">Selengkapnya</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        {{ $item->titlevid }}
                    </td>
                    <td>
                        <p
                            style="width: 200px; overflow:hidden;white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;">
                            {{ $item->shortdescvid }}
                        </p>
                    </td>
                    <td>
                        <p
                            style="width: 200px; overflow:hidden;white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;">
                            <a href="https://www.youtube.com/watch?v={{$item->linkvid}}">https://www.youtube.com/embed/{{$item->linkvid}}</a>
                        </p>
                    </td>
                    <td>
                        <p
                            style="width: 200px; overflow:hidden;white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;">
                            <a href="{{$item->link}}">{{$item->link}}</a>
                        </p>
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
                                <p><strong>Judul Video : </strong></p>
                                <p>{{$item->titlevid}}</p>
                                <p><strong>Deksripsi Singkat : </strong></p>
                                <p>{{$item->shortdescvid}}</p>
                                <p><strong>Link : </strong></p>
                                <p><a href="https://www.youtube.com/watch?v={{$item->linkvid}}">https://www.youtube.com/watch?v={{$item->linkvid}}</a></p>
                                <p><strong>Selengkapnya : </strong></p>
                                <p><a href="{{$item->link}}">{{$item->link}}</a></p>
                                <p><strong>Preview Video</strong></p>
                                <iframe class="container-fluid" src="https://www.youtube.com/embed/{{$item->linkvid}}" height="400px"></iframe>
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
                                <form action="/admlab/admvideo/editvideo/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Judul Video</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" value="{{ $item->titlevid }}"
                                            name="titlevid">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Deskripsi Singkat</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            aria-describedby="emailHelp"
                                            name="shortdescvid" rows="3">{{ $item->shortdescvid }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Link</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            aria-describedby="emailHelp"
                                            name="linkvid" rows="3">https://www.youtube.com/watch?v={{$item->linkvid}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Link</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                            aria-describedby="emailHelp"
                                            name="link" rows="3">{{$item->link}}</textarea>
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
