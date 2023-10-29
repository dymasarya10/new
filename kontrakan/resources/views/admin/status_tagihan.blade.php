@extends('admin.templates.mainlayouts')
@section('container-admin')
<div class="row">
    <div class="col-lg-3 mb-4">
        <div class="card bg-success text-white shadow">
            <div class="card-body">
                Lunas
                <div class="text-white-100 small mt-2">Status dengan warna ini diberikan jika tagihan telah
                    lunas dibayarkan</div>
                {{-- #1cc88a --}}
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card bg-info text-white shadow">
            <div class="card-body">
                Telah dipesan
                <div class="text-white-100 small mt-2">Status dengan warna ini diberikan jika kamar sudah
                    dipesan atau telah dibooked</div>
                {{-- #36b9cc --}}
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card bg-warning text-white shadow">
            <div class="card-body">
                Terlambat
                <div class="text-white-100 small mt-2">Status dengan warna ini diberikan jika tagihan telat
                    dibayarkan dalam jangka waktu <strong>KURANG</strong> dari 10 Hari</div>
                {{-- #f6c23e --}}
            </div>
        </div>
    </div>
    <div class="col-lg-3 mb-4">
        <div class="card bg-danger text-white shadow">
            <div class="card-body">
                Terlambat
                <div class="text-white-100 small mt-2">Status dengan warna ini diberikan jika tagihan telat
                    dibayarkan dalam jangka waktu <strong>LEBIH</strong> dari 10 Hari</div>
                {{-- #e74a3b --}}
            </div>
        </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tagihan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama Penghuni</th>
                        <th>Nomor Kamar</th>
                        <th>Nama Kamar</th>
                        <th>Tanggal Penempatan</th>
                        <th>Jumlah Tagihan</th>
                        <th>Status Tagihan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                {{-- <tfoot class="thead-dark">
                    <tr>
                        <th>Nama Penghuni</th>
                        <th>Nomor Kamar</th>
                        <th>Nama Kamar</th>
                        <th>Tanggal Penempatan</th>
                        <th>Jumlah Tagihan</th>
                        <th>Status Tagihan</th>
                    </tr>
                </tfoot> --}}
                <tbody>
                    <tr>
                        <td>Mamang Racing</td>
                        <td>M-230</td>
                        <td>Anggur Merah</td>
                        <td>24/10/2023</td>
                        <td>Rp.900,000</td>
                        <td>
                            <div class="card bg-warning text-white shadow">
                                <div class="card-body text-center">
                                    <i class="fas fa-exclamation-circle fa-lg" style="color: #ffffff;"></i>
                                    {{-- #f6c23e --}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-eye" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Mamang Racing</td>
                        <td>M-230</td>
                        <td>Anggur Merah</td>
                        <td>24/10/2023</td>
                        <td>Rp.900,000</td>
                        <td>
                            <div class="card bg-warning text-white shadow">
                                <div class="card-body text-center">
                                    <i class="fas fa-exclamation-circle fa-lg" style="color: #ffffff;"></i>
                                    {{-- #f6c23e --}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-eye" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Mamang Racing</td>
                        <td>M-230</td>
                        <td>Anggur Merah</td>
                        <td>24/10/2023</td>
                        <td>Rp.900,000</td>
                        <td>
                            <div class="card bg-warning text-white shadow">
                                <div class="card-body text-center">
                                    <i class="fas fa-exclamation-circle fa-lg" style="color: #ffffff;"></i>
                                    {{-- #f6c23e --}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-eye" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Mamang Racing</td>
                        <td>M-230</td>
                        <td>Anggur Merah</td>
                        <td>24/10/2023</td>
                        <td>Rp.900,000</td>
                        <td>
                            <div class="card bg-warning text-white shadow">
                                <div class="card-body text-center">
                                    <i class="fas fa-exclamation-circle fa-lg" style="color: #ffffff;"></i>
                                    {{-- #f6c23e --}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-eye" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Mamang Racing</td>
                        <td>M-230</td>
                        <td>Anggur Merah</td>
                        <td>24/10/2023</td>
                        <td>Rp.900,000</td>
                        <td>
                            <div class="card bg-warning text-white shadow">
                                <div class="card-body text-center">
                                    <i class="fas fa-exclamation-circle fa-lg" style="color: #ffffff;"></i>
                                    {{-- #f6c23e --}}
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="btn btn-primary btn-circle btn-sm">
                                <i class="fas fa-eye" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-warning btn-circle btn-sm">
                                <i class="fas fa-edit" style="color: #ffffff;"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash" style="color: #ffffff;"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
