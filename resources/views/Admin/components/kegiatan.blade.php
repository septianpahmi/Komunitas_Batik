@include('Admin.partials.header')
@include('Admin.partials.navbar')
@include('Admin.partials.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> <i class="fas fa-image"></i> Kegiatan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Kegiatan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Data Kegiatan</h3>
                            <div class="text-right">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#kegiatan">
                                    Tambah Kegiatan
                                </button>
                            </div>
                        </div>
                        @extends('Admin.layouts.modals')
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Foto</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_kegiatan }}</td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#kegiatan{{ $item->id }}">
                                                    <img src="/kegiatan/{{ $item->foto }}" style="height: 80px"
                                                        alt="">
                                                </button>
                                            </td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>
                                                <div class="btn-block btn-group">
                                                    <button url="{{ route('kegiatan.delete', $item->id) }}"
                                                        type="button" class="btn btn-danger delete"
                                                        data-id="{{ $item->id }}">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    @foreach ($data as $item)
        <div class="modal fade" id="kegiatan{{ $item->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Foto Detail</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="/kegiatan/{{ $item->foto }}" class="img-fluid" alt="">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach

</div>
@include('Admin.partials.footer')
