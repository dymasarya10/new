<footer class="container-fluid pt-lg-3 pb-lg-3 ps-lg-5 pt-md-4 pb-md-3 px-md-5">
    <div class="row px-lg-0 pe-5">
        <div class="col-lg-2 col-md-3 col-12 mx-lg-3 mx-md-2 ms-3 my-3">
            <div class="row">
                <div class="col-12 p-0 pt-lg-3 pt-md-2">
                    <p class="footer title fs-3">
                        Labitech
                    </p>
                </div>
                <div class="col-12 p-0 fw-lighter fs-6">
                    @foreach ($contacts as $item)
                    <p>{{ $item->footerdesc }}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-12 mx-lg-3 mx-md-2 pt-lg-0 pt-md-2 ms-3 my-3">
            <div class="row">
                <div class="col-12 p-0 pt-lg-3 pt-md-2">
                    <p class="footer title fs-5 fw-light">
                        Contact Us
                    </p>
                </div>
                <div class="col-12 p-0 fw-lighter fs-6">
                    <div class="row">
                        <div class="col-12">
                            @foreach ($contacts as $item)
                            <div class="row">
                                <div class="col-12 fw-bold">Email</div>
                                {{-- DATABASE --}}
                                <div class="col-lg-12 fs-6">{{ $item->email }}</div>
                            </div>
                            <div class="row">
                                <div class="col-12 fw-bold">Phone</div>
                                {{-- DATABASE --}}
                                <div class="col-lg-12 fs-6">{{ $item->phone }}</div>
                            </div>
                            <div class="row">
                                <div class="col-12 fw-bold">Address</div>
                                {{-- DATABASE --}}
                                <div class="col-lg-12 fs-6">{{ $item->address }}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-12 mx-lg-3 mx-md-2 pt-lg-0 pt-md-2 ms-3 my-3">
            <div class="row">
                <div class="col-12 p-0 pt-lg-3 pt-md-2">
                    <p class="footer title fs-5 fw-light">
                        Quick Link
                    </p>
                </div>
                <div class="col-12 p-0 fw-lighter fs-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="row row-cols-2">
                                @foreach ($branches as $branch)
                                {{-- <div class="col-1"><i class="fa-solid fa-chevron-right fs-6" style="color: #ffffff;">></i></div> --}}
                                <div class="col-lg-12 col-md-7 col-12 fw-medium"><a href="{{ $branch->link }}" class="fs-6"><i class="fa-solid fa-chevron-right fs-6" style="color: #ffffff;"></i> &nbsp; {{ $branch->nama_cabang }}</a></div>
                                @endforeach
                            </div>
                            <div class="row mt-md-2">
                                {{-- <div class="col-1"><i class="fa-solid fa-chevron-right fs-6" style="color: #ffffff;"></i></div> --}}
                                <div class="col-lg-9 col-md-7 col-12 fw-medium fs-6"><a href="/kemitraan"><i class="fa-solid fa-chevron-right fs-6" style="color: #ffffff;"></i> &nbsp; Kemitraan</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 col-12 mx-lg-3 mx-md-2 pt-lg-0 pt-md-2 ms-3 my-3">
            <div class="row">
                <div class="col-12 p-0 pt-lg-3 pt-md-2">
                    <p class="footer title fs-5 fw-light">
                        Follow Us
                    </p>
                </div>
                <div class="col-12 p-0 fw-lighter fs-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                @foreach ($contacts as $item)
                                <div class="col-2 fw-medium"><a href="{{ $item->fblink }}" class="fs-2"><i class="fa-brands fa-square-facebook" style="color: #ffffff;"></i></a></div>
                                <div class="col-2 fw-medium"><a href="{{ $item->instalink }}" class="fs-2"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></a></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col d-none d-lg-block d-md-flex align-self-center ps-md-5 pt-lg-0 pt-md-2 justify-content-end">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="">
        </div>
    </div>
</footer>

