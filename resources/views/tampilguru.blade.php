@extends('layout.main')
@section('')

@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Data Guru</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="/tampilan">Guru</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Guru</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Guru</h4>
                    <a href="/tambahguru" class="btn btn-primary mr-5">+ Add new</a>
                </div>
                <div class="card-body">
                    <hr>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Nama Guru</th>
                                        <th scope="col">NIK</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <th scope="row">{{$no++}}</th>
                                        <td>{{ $row->user_name}}</td>
                                        <td>{{ $row->password}}</td>
                                        <td>{{ $row->namaguru}}</td>
                                        <td>{{ $row->nik}}</td>
                                        <td>{{ $row->matapelajaran}}</td>
                                        <td>
                                            <a href="/tampildata/{{$row->id}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                            <a href="/deletedataguru/{{$row->id}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                            
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>
@endsection