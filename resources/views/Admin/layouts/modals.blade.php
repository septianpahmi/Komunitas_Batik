<div class="modal fade" id="galeri">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Galeri</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="galeriForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <!-- Nama Kegiatan Input -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama_kegiatan">Nama Kegiatan</label>
                                <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan"
                                    placeholder="Masukan nama kegiatan" required maxlength="50"
                                    value="{{ old('nama_kegiatan') }}" autofocus>
                                <small class="text-muted">Maks: 50 karakter</small>
                                <span class="text-danger" id="error-nama_kegiatan"></span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="foto">Foto Kegiatan</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="foto"
                                            accept="image/*" required>
                                        <label class="custom-file-label" for="foto">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                <small class="text-muted">Maks: 5MB</small>
                                <span class="text-danger" id="error-foto"></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" id="submitButtonId" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="kegiatan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kegiatan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="kegiatanForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <!-- Nama Kegiatan Input -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama_kegiatan">Nama Kegiatan</label>
                                <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan"
                                    placeholder="Masukan nama kegiatan" required maxlength="50"
                                    value="{{ old('nama_kegiatan') }}" autofocus>
                                <small class="text-muted">Maks: 50 karakter</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="foto">Foto Kegiatan</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="foto"
                                            accept="image/*" required>
                                        <label class="custom-file-label" for="foto">Choose file</label>
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
                                <textarea type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukan deskripsi" required
                                    maxlength="500" value="{{ old('deskripsi') }}" rows="3" autofocus></textarea>
                                <small class="text-muted">Maks: 500 karakter</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" id="submitKegiatan" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="team">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Team</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="teamForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <!-- Nama Kegiatan Input -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukan nama" required maxlength="50" value="{{ old('nama') }}"
                                    autofocus>
                                <small class="text-muted">Maks: 50 karakter</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan"
                                    placeholder="Masukan jabatan" required maxlength="50"
                                    value="{{ old('jabatan') }}" autofocus>
                                <small class="text-muted">Maks: 50 karakter</small>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input"
                                            id="foto" accept="image/*" required>
                                        <label class="custom-file-label" for="foto">Choose file</label>
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
                                    required maxlength="500" value="{{ old('deskripsi') }}" rows="3" autofocus></textarea>
                                <small class="text-muted">Maks: 500 karakter</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" id="submitTeam" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="produk">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="produkForm" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <!-- Nama Kegiatan Input -->
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nama_prod">Nama Produk</label>
                                <input type="text" class="form-control" name="nama_prod" id="nama_prod"
                                    placeholder="Masukan nama produk" required minlength="3" maxlength="50"
                                    autofocus>
                                <small class="text-muted">Maks: 50 karakter</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" name="harga" id="harga"
                                    placeholder="Masukan harga" required inputmode="numeric" minlength="3"
                                    maxlength="50" onclick="this.select();"
                                    oninvalid="this.setCustomValidity('Min. 3 Karakter')"
                                    oninput="setCustomValidity('');">
                                <small class="text-muted">Contoh: 1000000(Tanpa Titik)</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <select type="text" class="form-control" name="kategori" id="kategori"
                                    placeholder="Masukan kategori" required>
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
                                            id="gambar" accept="image/*" required>
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
                                    required minlength="3" maxlength="500" value="{{ old('deskripsi') }}" rows="3"></textarea>
                                <small class="text-muted">Maks: 500 karakter</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" id="submitProduk" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
    const hargaInput = document.getElementById('harga');

    hargaInput.addEventListener('input', function(e) {
        // Mengganti semua karakter selain angka dengan string kosong
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    hargaInput.addEventListener('keypress', function(e) {
        // Menghentikan input jika bukan angka (ASCII code: 48-57)
        if (!/^\d$/.test(e.key) && e.key !== 'Backspace') {
            e.preventDefault();
        }
    });
</script>
