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
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Menu</span>
                                <span class="info-box-number">
                                    {{ $menu }}
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Review</span>
                                <span class="info-box-number">{{ count($reviews) }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Testimoni</span>
                                <span class="info-box-number">{{ count($testimonis) }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Jumlah Promo</span>
                                <span class="info-box-number">{{ count($promos) }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="fas fa-pie-chart mr-1"></i>
                                    List Menu Rujak
                                </h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content p-0">
                                            <table id="all_menu"
                                                class="table table-striped table-bordered text-center table-responsive-sm"
                                                cellpadding="0" cellspacing="0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Harga</th>
                                                        <th scope="col">Deskripsi</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col" class="col-2">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $i = 1; ?>

                                                    @foreach ($menuRujak as $data)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            <td>{{ $data->nama }}</td>
                                                            <td>Rp.{{ number_format($data->harga, 2, ',', '.') }}
                                                            </td>
                                                            <td>
                                                                {{ $data->deskripsi }}
                                                            </td>
                                                            <td>
                                                                <img src="{{ asset('storage/menu/' . $data->gambar) }}"
                                                                    class="image-view">
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-sm btn-success btn-update"
                                                                    href="{{ route('menu.show', ['slug' => $data->slug]) }}"
                                                                    role="button">Ubah</a>
                                                                <form
                                                                    action="{{ route('menu.destroy', ['slug' => $data->slug]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-danger btn-hapus">Hapus</button>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                        <?php $i++; ?>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->

                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">
                                    <i class="fas fa-pie-chart mr-1"></i>
                                    List Menu Ubi
                                </h5>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content p-0">
                                            <table id="all_menu"
                                                class="table table-striped table-bordered text-center table-responsive-sm"
                                                cellpadding="0" cellspacing="0" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Harga</th>
                                                        <th scope="col">Deskripsi</th>
                                                        <th scope="col">Image</th>
                                                        <th scope="col" class="col-2">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $i = 1; ?>

                                                    @foreach ($menuUbi as $data)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            <td>{{ $data->nama }}</td>
                                                            <td>Rp.{{ number_format($data->harga, 2, ',', '.') }}
                                                            </td>
                                                            <td>
                                                                {{ $data->deskripsi }}
                                                            </td>
                                                            <td>
                                                                <img src="{{ asset('storage/menu/' . $data->gambar) }}"
                                                                    class="image-view">
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-sm btn-success btn-update"
                                                                    href="{{ route('menu.show', ['slug' => $data->slug]) }}"
                                                                    role="button">Ubah</a>
                                                                <form
                                                                    action="{{ route('menu.destroy', ['slug' => $data->slug]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-danger btn-hapus">Hapus</button>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                        <?php $i++; ?>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->

                        </div>
                        <!-- /.card -->
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
