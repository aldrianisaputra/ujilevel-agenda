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
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Edit Data Guru</h4>
                <div class="tab-content">
                    <div class="tab-pane show active" id="striped-rows-preview">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <form method="POST" action="/updatedataguru/{{$data->id}}">
                                @csrf
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="user_name" value="{{$data->user_name}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nama" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="password" value="{{$data->password}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="namaguru" class="col-sm-2 col-form-label">Nama Guru</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="namaguru" value="{{$data->namaguru}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" name="nik" value="{{$data->nik}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="matapelajaran" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="matapelajaran" value="{{$data->matapelajaran}}">
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <input type="submit"  class="btn btn-primary">
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
</div>
@endsection
