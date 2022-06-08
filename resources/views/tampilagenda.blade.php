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
                <li class="breadcrumb-item active"><a href="/tampilan">Guru</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Guru</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title;">Data Agenda</h4>
                    <hr>
                    <br>
                    <div class="tab-content">
                        <div class="tab-pane show active table-responsive" id="scroll-horizontal-preview">
                            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nama Guru</th>
                                        <th scope="col">Mata Pelajaran</th>
                                        <th scope="col">Materi Pelajaran</th>
                                        <th scope="col">Jam Mulai</th>
                                        <th scope="col">Jam Selesai</th>
                                        <th scope="col">Absensi</th>
                                        <th scope="col">Nama Kelas</th>
                                        <th scope="col">Metode Pelajaran</th>
                                        <th scope="col">Link Pembelajaran</th>
                                        <th scope="col">Dokumentasi</th>
                                        <th scope="col">Keterangan</th>
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
                                        <td>{{ $row->namaguru}}</td>
                                        <td>{{ $row->matapelajaran}}</td>
                                        <td>{{ $row->materipelajaran}}</td>
                                        <td>{{ $row->darijampelajaran}}</td>
                                        <td>{{ $row->sampejampelajaran}}</td>
                                        <td>{{ $row->siswaabsen}}</td>
                                        <td>{{ $row->namakelas}}</td>
                                        <td>{{ $row->metodepelajaran}}</td>
                                        <td>{{ $row->linkpembelajaran}}</td>
                                        <td>
                                            <img src="{{ asset('fotodokumentasi/' .$row->dokumentasi)}}" alt="" style="width:80px;">
                                        </td>
                                        <td>{{ $row->keterangan}}</td>
                                        <td>
                                            <a href="/tampilkandataagenda/{{$row->id}}" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                            <a href="/deletedataagenda/{{$row->id}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
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