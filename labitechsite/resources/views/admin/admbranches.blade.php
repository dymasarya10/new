@extends('layouts.main-layoutsadmin')
@section('sectionadmin')
    <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createbranches">
        Tambah Data
    </button>
    <!-- Modal -->
    <div class="modal fade" id="createbranches" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="/createbranches">
                    @csrf
                    <div class="modal-body">
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Cabang</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_cabang">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Link</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="link">
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
                <th scope="col">Nama Cabang</th>
                <th scope="col">Link</th>
                <th scope="col text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($collection as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        {{ $item->nama_cabang }}
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
                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $item->id }}">
                            <i class="far fa-eye" style="color: #ffffff;"></i>
                        </button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $item->id }}edit">
                            <i class="fas fa-edit" style="color: #ffffff;"></i>
                        </button>
                        <button type="button" class="btn btn-danger"><a href="/deletebranches/{{$item->id}}" onclick="return confirmDelete()"><i class="fas fa-trash"
                                    style="color: #ffffff;"></i></a></button>
                    </td>
                </tr>
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
                                <p>Nama Cabang : {{ $item->nama_cabang }}</p>
                                <p>Link Cabang : <a href="{{ $item->link }}">{{ $item->link }}</a></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning"><a href="#"><i class="fas fa-edit"
                                            style="color: #ffffff;"></i></a></button>
                                <button type="button" class="btn btn-danger"><a href="#"><i class="fas fa-trash"
                                            style="color: #ffffff;"></i></a></button>
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
                                <form action="/updatebranches/{{$item->id}}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Nama Cabang</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $item->nama_cabang }}" name="branches_name">
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Link</label>
                                      <input type="text" class="form-control" id="exampleInputPassword1" value="{{ $item->link }}" name="branches_link">
                                      <div id="emailHelp" class="form-text">Pastikan hanya memasukkan link sekolah</div>
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
@endsection
