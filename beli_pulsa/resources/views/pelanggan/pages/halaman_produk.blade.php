@extends('layout.main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')



<div class="row mt-5">
    <div class="col-3 mt-1">
        <div class="text-center">
            <span class="badge badge-info mt-3 center-block">
            Jumlah Data : {{ $arr['price']->total() }}
            </span>
        </div>
        <div class="list-group-sm mt-4">
            @foreach ($arr['price'] as $list)
            @endforeach
            @if ($arr['all'] == "semua" )
                <a href="#" class="list-group-item list-group-item-action">Cras justo odio</a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            @elseif ($list->detail_produk == "Pulsa Reguler" and $list->detail_produk != "Paket Internet")
                <a href="#" class="list-group-item list-group-item-action">Cras justo odio</a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
            @elseif ($list->detail_produk == "Paket Internet" and $list->detail_produk != "Pulsa Reguler")
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            @endif
        </div>
    </div>
    <div class="col-9">
    <div class="mt-2">
        {{ $arr['price']->links() }}
    </div>
        <table class="table mt-2">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">Detail Produk</th>
                <th scope="col" class="text-center">Provider</th>
                <th scope="col" class="text-center">Keterangan</th>
                <th scope="col" class="text-center">Harga</th>
                <th scope="col" class="text-center">Stok</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($arr['price'] as $harga)
                @if ($harga->status == "Ada")
                    <tr class="table-success">
                        <th scope="row">{{ $harga->detail_produk }}</th>
                        <td>{{ $harga->provider }}</td>
                        <td>{{ $harga->keterangan }}</td>
                        <td>@currency($harga->harga)</td>
                        <td>{{$harga->status}}</td>
                    </tr>
                @elseif ($harga->status == "Kosong")
                    <tr class="table-danger">
                        <th scope="row">{{ $harga->detail_produk }}</th>
                        <td>{{ $harga->provider }}</td>
                        <td>{{ $harga->keterangan }}</td>
                        <td>@currency($harga->harga)</td>
                        <td>{{$harga->status}}</td>
                    </tr>
                @endif
              @endforeach
            </tbody>
          </table>

    </div>
</div>



@endsection
