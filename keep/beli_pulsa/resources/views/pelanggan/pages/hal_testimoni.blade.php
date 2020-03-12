@extends('layout.main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')

<div class="container tambah_bawah">
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item">Testimoni</li>
</ol>
<div class="row mt-5">

      <div class="card mb-5" style="width:600px">
        <div class="card-header">
            <i class="fas fa-comment-dollar"></i> Testimoni
        </div>
        <div class="card-body">
            <div class="container">
            <div class="list-group">
                @foreach ($join as $k)
                <div class="list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 style="font-size:14px"><i class="fas fa-user"></i> {{$k->username}}</h5>
                    <small class="text-muted"><i class="far fa-clock"></i> {{$k->buat_komentar}}</small>
                </div>
                    <small class="text-muted">{{$k->no_telpon}}</small>
                    <p class="mb-1" style="font-size:16px">{{$k->komentar}}.</p>
                </div>
                <div class="dropdown-divider"></div>
                @endforeach
                {{-- <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                  <small class="text-muted">Donec id elit non mi porta.</small>
                </a> --}}
              </div>
        </div>
    </div>
    <div class="card-footer text-muted">
        {{ $join->links() }}
      </div>
      </div>
</div>


</div>
@endsection
