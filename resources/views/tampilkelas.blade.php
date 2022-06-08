@extends('layout.main')

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
                <li class="breadcrumb-item active"><a href="/tampilan">Kelas</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kelas</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title;">Data Kelas</h4>
                    <hr>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="basic-datatable-preview">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Wali Kelas</th>
                                        <th scope="col">Nama Kelas</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->walikelas}}</td>
                                        <td>{{ $row->namakelas}}</td>
                                        <td>
                                            <a href="/tampilkelas/{{$row->id}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                            <a href="/deletedatakelas/{{$row->id}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
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