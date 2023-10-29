@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Instagram</th>
                    <th scope="col">Facebook</th>
                    <th scope="col">Map</th>
                    <th scope="col">Footer</th>
                    <th scope="col text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    <tr>
                        <td>
                            {{$item->email}}
                        </td>
                        <td>
                            <p style="width: 200px; overflow:hidden;white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                                {{$item->phone}}
                            </p>
                        </td>
                        <td>
                            <p style="width: 200px; overflow:hidden;white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                                {{$item->address}}
                            </p>
                        </td>
                        <td>
                            <p style="width: 200px; overflow:hidden;white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                                <a href="{{$item->instalink}}">{{$item->instalink}}</a>
                            </p>
                        </td>
                        <td>
                            <p style="width: 200px; overflow:hidden;white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                                <a href="{{$item->fblink}}">{{$item->fblink}}</a>
                            </p>
                        </td>
                        <td>
                            <p style="width: 200px; overflow:hidden;white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                                <a href="{{$item->maplink}}">{{$item->maplink}}</a>
                            </p>
                        </td>
                        <td>
                            <p style="width: 200px; overflow:hidden;white-space: nowrap;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                                {{$item->footerdesc}}
                            </p>
                        </td>
                        <td>
                            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Cabang</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Email : </strong></p>
                                    <p >{{$item->email}}</p>
                                    <p><strong>Phone : </strong></p>
                                    <p >{{$item->email}}</p>
                                    <p><strong>Alamat : </strong></p>
                                    <p >{{$item->email}}</p>
                                    <p><strong>Instagram : </strong></p>
                                    <p style="width: 200px; overflow:hidden;white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;"><a href="{{$item->instalink}}">{{$item->instalink}}</a></p>
                                    <p><strong>Facebook : </strong></p>
                                    <p style="width: 200px; overflow:hidden;white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;"><a href="{{$item->fblink}}">{{$item->fblink}}</a></p>
                                    <p><strong>Map : </strong></p>
                                    <p style="width: 200px; overflow:hidden;white-space: nowrap;
                                    overflow: hidden;
                                    text-overflow: ellipsis;"><a href="{{$item->maplink}}">{{$item->maplink}}</a></p>
                                    <p><strong>Footer : </strong></p>
                                    <p >{{$item->footerdesc}}</p>
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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Detail</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="/updatecontact/{{ $item->id }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" value="{{ $item->email }}"
                                                name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                aria-describedby="emailHelp"
                                                name="phone" rows="3">{{ $item->phone }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                aria-describedby="emailHelp"
                                                name="address" rows="3">{{ $item->address }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Instagram</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                aria-describedby="emailHelp"
                                                name="instalink" rows="3">{{ $item->instalink }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Facebook</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                aria-describedby="emailHelp"
                                                name="fblink" rows="3">{{ $item->fblink }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Map</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                aria-describedby="emailHelp"
                                                name="maplink" rows="3">{{ $item->maplink }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Footer</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                aria-describedby="emailHelp"
                                                name="footerdesc" rows="3">{{ $item->footerdesc }}</textarea>
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
    </div>
    <script src="{{ asset('adminassets/js/loadimage.js') }}"></script>
    <script src="{{asset('adminassets/js/confirm.js')}}"></script>
@endsection
