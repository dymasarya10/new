@extends('admin.templates.mainlayouts')
@section('container-admin')
    <div class="row">
        <div class="col-4">
            <div class="card-cust bg-white rounded p-4 px-5 mb-5 text-dark text-center">
                <img src="{{ asset('assets/admin/img/sample.png') }}" alt="" class="img-fluid rounded-circle"
                    width="200">
            </div>
        </div>
        <div class="col-8">
            <div class="card-cust bg-white rounded p-4 px-5 mb-5 text-dark">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ratione quidem tempora, atque quisquam
                aspernatur distinctio quasi dolor velit eos, quas minus ipsum reiciendis, repellendus autem magnam.
                Laboriosam fugiat odit dolorum quasi, earum voluptas consequatur possimus molestias molestiae incidunt, sint
                ducimus blanditiis veritatis et itaque excepturi vitae, quas consequuntur! Magni?
            </div>
        </div>
    </div>
@endsection
