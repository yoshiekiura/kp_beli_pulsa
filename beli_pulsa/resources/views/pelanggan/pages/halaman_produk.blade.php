@extends('layout.tampilan_pelanggan')
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

        <br>
        <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>


    </div>
    <div class="col-9">
    <div class="mt-2">
        {{ $arr['price']->links() }}
    </div>

    <div class="table-responsive">
        <table class="table table-sm mt-2">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="">Detail Produk</th>
                <th scope="col" class="">Kode</th>
                <th scope="col" class="">Provider</th>
                <th scope="col" class="">Keterangan</th>
                <th scope="col" class="">Harga</th>
                <th scope="col" class="">Stok</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($arr['price'] as $harga)
                @if ($harga->status == "Ada")
                    <tr class="table-success">
                        <th scope="row">{{ $harga->detail_produk }}</th>
                        <td>{{ $harga->kode }}</td>
                        <td>{{ $harga->provider }}</td>
                        <td>{{ $harga->keterangan }}</td>
                        <td>@currency($harga->harga)</td>
                        <td>{{$harga->status}}</td>
                    </tr>
                    @elseif ($harga->status == "Kosong")
                    <tr class="table-danger">
                        <th scope="row">{{ $harga->detail_produk }}</th>
                        <td>{{ $harga->kode }}</td>
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
</div>



@endsection
