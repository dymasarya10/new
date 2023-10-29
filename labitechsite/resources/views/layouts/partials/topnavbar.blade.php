<div class="top-navbar d-none d-xl-block" id="topnavbar">
    <div class="container-fluid">
        <div class="row pt-2 px-3">
            @foreach ($contacts as $item)
            <div class=" col-6">
                <i class="fa-solid fa-envelope fs-6" style="color: #00B894;"></i>&nbsp;&nbsp;{{ $item->email }}
            </div>
            <div class=" col-6 text-end">
                <i class="fa-solid fa-phone" style="color: #00B894;"></i>&nbsp;&nbsp;{{ $item->phone }}
            </div>
            @endforeach
        </div>
    </div>
</div>