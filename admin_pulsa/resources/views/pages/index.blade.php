@extends('layouts.admin')
@section('title',"TUKUPULSA.COM | Admin Dasboard")
@section('header',"Dasboard")
@section('content')

@if (Session::has('alert'))

<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Selamat!</h5>
    {!! session('alert') !!}
</div>
@endif
<div class="row">
    <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
        <div class="inner">
        <h3>{{$harga}}</h3>
        <p>Daftar Harga</p>
        </div>
        <div class="icon">
        <i class="ion ion-bag"></i>
        </div>
        <a href="/update-harga" class="small-box-footer">Update Harga <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
        <div class="inner">
        <h3>{{$bank}}</h3>
        <p>Bank Terdaftar</p>
        </div>
        <div class="icon">
            <i class="fas fa-university"></i>
        </div>
        <a href="/update-bank" class="small-box-footer">Update Info Bank <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-4 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
        <div class="inner">
        <h3>{{$customer}}</h3>

        <p>Pelanggan Terdaftar</p>
        </div>
        <div class="icon">
        <i class="ion ion-person-add"></i>
        </div>
        <a href="/daftar-pelanggan" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
    </div>
    </div>
    <!-- ./col -->
</div>

<div class="row">
          <div class="col-md-12">
            <div class="card card-default  card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>

                <div class="card-tools">

                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                    </p>

                    <div class="chart">
                      <!-- Sales Chart Canvas -->
                      <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Banyak Rating Didapatkan</strong>
                    </p>

                    <div class="progress-group">
                      Rating 5
                        <span class="float-right"><b>{{$rating5}}</b></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: {{$rating5}}px"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Rating 4
                      <span class="float-right"><b>{{$rating4}}</b></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: {{$rating4}}px"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Rating 3</span>
                      <span class="float-right"><b>{{$rating3}}</b></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: {{$rating3}}px"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                        Rating 2
                      <span class="float-right"><b>{{$rating2}}</b></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: {{$rating2}}px"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                        Rating 1
                      <span class="float-right"><b>{{$rating1}}</b></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-info" style="width: {{$rating1}}px"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <!-- /.col -->
                  <div class="col-sm-4 col-6">
                    <div class="description-block border-right">
                      {{-- <span class="description-percentage text-warning"><i class="fas fa-caret-left"></i> 0%</span> --}}
                      <h5 class="description-header">@currency($pendapatan)</h5>
                      <span class="description-text">TOTAL PENDAPATAN</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 col-6">
                    <div class="description-block border-right">
                      {{-- <span class="description-percentage text-success"><i class="fas fa-caret-up"></i> 20%</span> --}}
                        <h5 class="description-header">{{ $pembeli }} orang</h5>
                      <span class="description-text">BANYAK PEMBELI</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 col-6">
                    <div class="description-block">
                      {{-- <span class="description-percentage text-danger"><i class="fas fa-caret-down"></i> 18%</span> --}}
                      <h1 class="description-header">{{ $rataratarating }}</h1>
                      <span class="description-text">RATA-RATA RATING</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
</div>

@endsection
