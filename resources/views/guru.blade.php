@extends('layout.mainview')

@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Hi, welcome!</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Agenda</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Input Data Agenda</h4>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="striped-rows-preview">
                            <div class="table-responsive-sm">
                                <table class="table table-striped table-centered mb-0">
                                    <form action="/insertdataguruview" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="mb-3 row">
                                                <label for="username" class="col-sm-2 col-form-label">Nama Guru</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="namaguru">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="nama" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="matapelajaran">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="nama" class="col-sm-2 col-form-label">Materi Pelajaran</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="materipelajaran">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="nama" class="col-sm-2 col-form-label">Jam Pelajaran</label>
                                                <div class="mb-3 col-3">
                                                    <select class="form-select" name="darijampelajaran" aria-label="Default select example">
                                                        <option selected>Mulai</option>
                                                        <option value="jam ke-1">Jam Ke-1</option>
                                                        <option value="jam ke-2">Jam Ke-2</option>
                                                        <option value="jam ke-3">Jam Ke-3</option>
                                                        <option value="jam ke-4">Jam Ke-4</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-1">
                                                    <p class="text-center">-</p>
                                                </div>
                                                <div class="mb-3 col-3">
                                                    <select class="form-select" name="sampejampelajaran" aria-label="Default select example">
                                                        <option selected>Selesai</option>
                                                        <option value="jam ke-1">Jam Ke-1</option>
                                                        <option value="jam ke-2">Jam Ke-2</option>
                                                        <option value="jam ke-3">Jam Ke-3</option>
                                                        <option value="jam ke-4">Jam Ke-4</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="namaguru" class="col-sm-2 col-form-label">Absensi</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="siswaabsen">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="matapelajaran" class="col-sm-2 col-form-label">Nama Kelas</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="namakelas">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="nama" class="col-sm-2 col-form-label">Metode Pembelajaran</label>
                                                <div class="mb-3 col-3">
                                                    <select class="form-select" name="metodepelajaran" aria-label="Default select example">
                                                        <option selected>Metode</option>
                                                        <option value="online">Online</option>
                                                        <option value="offline">Offline</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="matapelajaran" class="col-sm-2 col-form-label">Link Pembelajaran</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="linkpembelajaran">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="matapelajaran" class="col-sm-2 col-form-label">Dokumentasi</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-control" name="dokumentasi">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label for="matapelajaran" class="col-sm-2 col-form-label">Keterangan</label>
                                                <div class="mb-3 col-3">
                                                    <select class="form-select" name="keterangan" aria-label="Default select example">
                                                        <option selected>keterangan</option>
                                                        <option value="hadir">Hadir</option>
                                                        <option value="tidakhadir">Tidak Hadir</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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