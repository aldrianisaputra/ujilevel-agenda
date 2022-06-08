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
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Edit Data Mapel</h4>
                <div class="tab-content">
                    <div class="tab-pane show active" id="striped-rows-preview">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-centered mb-0">
                                <form action="/updatedatamapel/{{$data->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="username" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="mapel">
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
</div>
@endsection
