@extends('layout.main')
@section('title','Beli Pulsa Murah Disini Aja :D')

@section('body')



<div class="row mt-5">
    <div class="col-3">
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
    </div>
    <div class="col-9">
    {{-- <form action="{{ url('Produk/Cek')}}" method="get">
            <input type="text" name="cari" placeholder="Cari Provider" value="{{ old('cari') }}">
		    <input type="submit" value="CARI">
    </form> --}}
    <div class="mt-2">
        {{ $price->links() }}
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
            @foreach ($price as $harga)
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

    	Halaman : {{ $price->currentPage() }} <br/>
	    Jumlah Data : {{ $price->total() }} <br/>
        Data Per Halaman : {{ $price->perPage() }} <br/>

    </div>
</div>



@endsection
