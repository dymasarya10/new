@extends('admin.templates.mainlayouts')
@section('container-admin')
<div class="row row-cols-4">
    @foreach ($rooms as $room)
    <div class="col">
        <!-- Collapsable Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#collapseCardExample{{$room->id}}" class="d-block card-header py-3" data-toggle="collapse"
                role="button" aria-expanded="true" aria-controls="collapseCardExample">
                <h6 class="m-0 font-weight-bold text-primary">{{$room->name.'-'.$room->room_number}}</h6>
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample{{$room->id}}">
                <div class="card-body">
                    <div class="table-responsive table-hover">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td class="text-center"><i class="fas fa-user"></i></td>
                                <td>Dymas Arya Nanda</td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="fas fa-info-circle"></i></td>
                                <td>Lunas</td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="fas fa-table"></i></td>
                                <td>28/10/2023</td>
                            </tr>
                            <tr>
                                <td class="text-center"><i class="fas fa-money-bill"></i></td>
                                <td>@currency($room->price)</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
