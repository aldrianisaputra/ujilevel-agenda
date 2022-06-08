@extends('layout.main')

@section('content')
<div class="container-fluid">

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Data Mapel</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="/tampilan">Mapel</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Mapel</a></li>
            </ol>
        </div>
    </div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title;">Data Mapel</h4>
                <hr>
                <br>
                <div class="tab-content">
                    <div class="tab-pane show active" id="basic-datatable-preview">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
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
                                    <th scope="row">{{ $no++ }}</th>
                                    <td>{{ $row->mapel}}</td>
                                    <td>
                                        <a type="button" href="/tampilkandatamapel/{{$row->id}}" ><i class="mdi mdi-pencil"></i></button>
                                        <a type="button" href="/deletedatamapel/{{$row->id}}" ><i class="mdi mdi-delete"></button>
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