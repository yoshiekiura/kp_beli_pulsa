@extends('layout.main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')

<div class="container tambah_bawah">
<h1 class="mt-5"> Testimoni Para Pelanggan </h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
    <li class="breadcrumb-item">Testimoni</li>
</ol>
<div class="row mt-5">


    <table class="table table-striped table-sm table-hover text-center">
        <thead>
          <tr class="bg-info text-center">
            <th scope="col">Nomor Telepon</th>
            <th scope="col">Komentar</th>
            <th scope="col">Tanggal</th>

          </tr>
        </thead>
        <tbody>

            @foreach ($join as $j)
          <tr class="text-center">
            <th scope="row">{{ $j->no_telpon }}</th>
            <th scope="row">{{ $j->komentar }}</th>
            <th scope="row">{{ $j->created_at }}</th>
          </tr>
          @endforeach

        </tbody>
      </table>
      {{ $join->links() }}
</div>


</div>
@endsection
