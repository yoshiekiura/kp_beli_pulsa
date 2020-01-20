@extends('layout/tampilan_pelanggan')
@section('title','Profil Saya')

@section('body')

<table class="table table-hover table-dark" style="margin-top: 50px;">
  <thead>
      <tr>
          <th></th>
      <th><a href="/Pengaturan/{{ $panggil->id }}"><img src="{{ ('../../../images/gear.png') }}" style="float: right;height: 30px;width: 30px;" alt="Pengaturan"></a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>




        {{ $panggil->nama }}






    @if(!Session::get('nama'))
        @php
            Session::flash('CobaPaksa','Anda Harus Login Terlebih Dahulu!');
            header("Location: " . URL::to('/Login/create'), true, 302);
            exit();
        @endphp
    {{-- <script type="text/javascript">
        window.location.href = "{{url('/Login/create')}}";//here double curly bracket
    </script> --}}
    @endif



@endsection
