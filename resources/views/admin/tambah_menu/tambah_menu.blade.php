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
                            <li class="breadcrumb-item active">Tambah menu</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-lg-10 col-sm-12 mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="bi bi-file-earmark-plus mr-1"></i>
                                    Tambah Menu
                                </h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row d-lg-flex align-items-center justify-content-center">
                                        {{-- Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="nama" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Nama Menu</label>
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
                                            <label for="kategori" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Kategori</label>
                                            <div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kategori"
                                                        id="exampleRadios1" value="1">
                                                    <label class="form-check-label" for="exampleRadios1">
                                                        Rujak
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kategori"
                                                        id="exampleRadios2" value="2">
                                                    <label class="form-check-label" for="exampleRadios2">
                                                        Ubi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Col --}}
                                        {{-- Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="hargaMenu" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Harga Menu</label>
                                            <input type="number"
                                                class="form-control @error('harga')
                                                is-invalid
                                            @enderror"
                                                id="hargaMenu" name="harga" aria-describedby="hargaMenu"
                                                autocomplete="off" required value="{{ old('harga') }}">
                                            @error('harga')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- End Col --}}
                                        {{-- Start Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="deskripsi" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Deskripsi Menu</label>
                                            <textarea
                                                class="form-control @error('deskripsi')
                                        is-invalid
                                    @enderror cols="5"
                                                rows="4" name="deskripsi" id="deskripsi" required>{{ old('deskripsi') }}</textarea>
                                            @error('deskripsi')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        {{-- End Col --}}
                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <label for="foto" class="form-label"
                                                style="font-weight: normal; color:rgb(68, 68, 68)">Foto Menu</label>
                                            <input type="file" class="form-control" name="image" required
                                                id="foto" accept="image/*">
                                            @error('image')
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            @if ($errors->has('image'))
                                                <ul>
                                                    @foreach ($errors->get('image') as $e)
                                                        <li style="color: red">{{ $e }}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </div>

                                        <div class="col-lg-10 mb-3 mx-auto">
                                            <input class="btn btn-success btn-block" type="submit" value="Tambah Menu">
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
