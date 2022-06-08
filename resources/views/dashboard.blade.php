@extends('layout.main')

@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, WelcomeBack {{auth()->user()->name}}!</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="/tampilan">Guru</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        @if (auth()->user()->role == 'admin')
          <div class="col-xl-4 col-xxl-4 col-sm-6">
            <div class="widget-stat card bg-primary">
                <div class="card-body">
                    <div class="media">
                        <span class="mr-3">
                            <i class="la la-users"></i>
                        </span>
                        <div class="media-body text-white">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Guru</p>
                                <div class="div">{{ $jumlahguru }}</div>
                            </div>
                            <div class="progress mb-2 bg-secondary">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                            </div>
                            <div class="text-white">
                                <a href="/tampilan" class="text-white">Lihat Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-4 col-sm-6">
            <div class="widget-stat card bg-warning">
                <div class="card-body">
                    <div class="media">
                        <span class="mr-3">
                            <i class="la la-building"></i>
                        </span>
                        <div class="media-body text-white">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Kelas</p>
                                <div class="div">{{ $jumlahkelas }}</div>
                            </div>
                            <div class="progress mb-2 bg-primary">
                                <div class="progress-bar progress-animated bg-light" style="width: 50%"></div>
                            </div>
                            <div class="text-white">
                                <a href="/tampilankelas" class="text-white">Lihat Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-4 col-sm-6">
            <div class="widget-stat card bg-secondary">
                <div class="card-body">
                    <div class="media">
                        <span class="mr-3">
                            <i class="la la-calendar"></i>
                        </span>
                        <div class="media-body text-white">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Agenda</p>
                                <div class="div">{{ $jumlahagenda }}</div>
                            </div>
                            <div class="progress mb-2 bg-primary">
                                <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                            </div>
                            <div class="text-white">
                                <a href="/tampilanagenda" class="text-white">Lihat Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-xxl-4 col-sm-6">
            <div class="widget-stat card bg-danger">
                <div class="card-body">
                    <div class="media">
                        <span class="mr-3">
                            <i class="la la-graduation-cap"></i>
                        </span>
                        <div class="media-body text-white">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Total Mapel</p>
                                <div class="div">{{ $jumlahMapel }}</div>
                            </div>
                            <div class="progress mb-2 bg-primary">
                                <div class="progress-bar progress-animated bg-light" style="width: 96%"></div>
                            </div>
                            <div class="text-white">
                                <a href="/tampilanmapel" class="text-white">Lihat Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        @endif
        
        @if (auth()->user()->role == 'user')
          <div class="col-xl-4 col-xxl-4 col-sm-6">
            <div class="widget-stat card bg-secondary">
                <div class="card-body">
                    <div class="media">
                        <span class="mr-3">
                            <i class="la la-calendar"></i>
                        </span>
                        <div class="media-body text-white">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-uppercase font-weight-bold">Agenda</p>
                                <div class="div"></div>
                            </div>
                            <div class="progress mb-2 bg-primary">
                                <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                            </div>
                            <div class="text-white">
                                <a href="/gurutampil" class="text-white">Lihat Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        @endif
    </div>

    
</div>

@endsection