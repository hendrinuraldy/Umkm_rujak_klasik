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
                            <li class="breadcrumb-item active">List Promo</li>
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
                                    <i class="bi bi-person-lines-fill mr-1"></i>
                                    List Promo
                                </h5>
                            </div>
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
                                                        <th scope="col">Nama Promo</th>
                                                        <th scope="col">Harga Promo</th>
                                                        <th scope="col">Deskripsi</th>
                                                        <th scope="col">Gambar</th>
                                                        <th scope="col" class="col-2">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>

                                                    @foreach ($datas as $data)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            {{-- Access nama menu --}}
                                                            <td>{{ $data->menu->nama }}</td>
                                                            <td>Rp.{{ number_format($data->harga, 2, ',', '.') }}
                                                            </td>
                                                            <td>
                                                                {{ $data->deskripsi }}
                                                            </td>
                                                            <td>
                                                                <img src="{{ asset('storage/promo/' . $data->gambar) }}"
                                                                    class="image-view">
                                                            </td>
                                                            <td>
                                                                <a class="btn btn-sm btn-success btn-update-promo"
                                                                    href="{{ route('admin.promo.show', ['slug' => $data->slug]) }}"
                                                                    role="button">Ubah</a>
                                                                <form
                                                                    action="{{ route('promo.destroy', ['slug' => $data->slug]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-danger btn-hapus-promo">Hapus</button>
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
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->


            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
