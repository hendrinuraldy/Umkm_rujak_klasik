@extends('admin.layouts.master')
@section('title', 'Admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Testimoni</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <!-- Left col -->
                    <div class="col-lg-8 col-sm-12 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="bi bi-file-earmark-plus mr-1"></i>
                                    Tambah Testimoni
                                </h5>

                            </div>
                            <div class="card-body">
                                <form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row d-lg-flex align-items-center justify-content-center">
                                        {{-- Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="nama" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Nama</label>
                                            <input type="text"
                                                class="form-control @error('nama')
            is-invalid
        @enderror"
                                                name="nama" id="nama" aria-describedby="nama" autocomplete="off"
                                                value="{{ old('nama') }}" required>
                                            @error('nama')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- End Col --}}
                                        {{-- Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="no_telp" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">No. Telepon</label>
                                            <input type="text"
                                                class="form-control @error('no_telp')
            is-invalid
        @enderror"
                                                name="no_telp" id="no_telp" aria-describedby="no_telp" autocomplete="off"
                                                value="{{ old('no_telp') }}" required>
                                            @error('no_telp')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- End Col --}}
                                        {{-- Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="image" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Gambar</label>
                                            <input type="file"
                                                class="form-control @error('image')
            is-invalid
        @enderror"
                                                name="image" id="image" aria-describedby="image" autocomplete="off"
                                                value="{{ old('image') }}" required accept="image/*">
                                            @error('image')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- End Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <input class="btn btn-success btn-block" type="submit"
                                                value="Tambah Testimoni">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->




            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
