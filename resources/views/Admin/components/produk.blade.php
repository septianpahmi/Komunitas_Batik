@include('Admin.partials.header')
@include('Admin.partials.navbar')
@include('Admin.partials.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> <i class="fas fa-tag"></i> Produk</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Produk</li>
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
                            <h3 class="card-title">Tabel Data Produk</h3>
                            <div class="text-right">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#produk">
                                    Tambah Produk
                                </button>
                            </div>
                        </div>
                        @extends('Admin.layouts.modals')
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Kategori</th>
                                        <th>Gambar</th>
                                        <th style="width: 20%">Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_prod }}</td>
                                            <td>{{ 'Rp. ' . number_format($item->harga, 0, ',', '.') }}</td>
                                            <td>{{ $item->kategori }}</td>
                                            <td>
                                                <button type="button" class="btn btn-default" data-toggle="modal"
                                                    data-target="#produk{{ $item->id }}">
                                                    <img src="/Produk/{{ $item->gambar }}" style="height: 80px;"
                                                        alt="">
                                                </button>
                                            </td>
                                            <td>{{ \Illuminate\Support\Str::limit($item->deskripsi, 80) }}</td>
                                            <td>
                                                <div class="btn-block btn-group">
                                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                                        data-target="#produkupdate{{ $item->id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button url="{{ route('produk.delete', $item->id) }}" type="button"
                                                        class="btn btn-danger delete" data-id="{{ $item->id }}">
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
        <div class="modal fade" id="produk{{ $item->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Foto Detail</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="/Produk/{{ $item->gambar }}" class="img-fluid" style="width: 100%" alt="">
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach
    @foreach ($data as $item)
        <div class="modal fade" id="produkupdate{{ $item->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Produk</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('produk.update', $item->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <!-- Nama Kegiatan Input -->
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="nama_prod">Nama Produk</label>
                                        <input type="text" class="form-control" name="nama_prod" id="nama_prod"
                                            placeholder="Masukan nama produk" required maxlength="50"
                                            value="{{ $item->nama_prod }}" autofocus>
                                        <small class="text-muted">Maks: 50 karakter</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="text" class="form-control" name="harga" id="harga"
                                            placeholder="Masukan harga" required value="{{ $item->harga }}"
                                            inputmode="numeric" minlength="3" maxlength="50" onclick="this.select();"
                                            oninvalid="this.setCustomValidity('Min. 3 Karakter')"
                                            oninput="setCustomValidity('');">
                                        <small class="text-muted">Contoh: 1000000(Tanpa Titik)</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select type="text" class="form-control" name="kategori" id="kategori"
                                            placeholder="Masukan kategori" required value="{{ $item->kategori }}">
                                            <option value="" selected>Pilih Kategori</option>
                                            <option value="Atasan">Atasan</option>
                                            <option value="Bawahan">Bawahan</option>
                                            <option value="Aksesoris">Aksesoris</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="gambar">Gambar</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="gambar" class="custom-file-input"
                                                    id="gambar" accept="image/*" value="{{ $item->gambar }}"
                                                    required>
                                                <label class="custom-file-label" for="gambar">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        <small class="text-muted">Maks: 5MB</small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan deskripsi"
                                            required maxlength="500" value="{{ old('deskripsi') }}" rows="3" autofocus>{{ $item->deskripsi }}</textarea>
                                        <small class="text-muted">Maks: 500 karakter</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach

</div>
@include('Admin.partials.footer')
