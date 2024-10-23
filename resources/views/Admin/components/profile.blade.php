@include('Admin.partials.header')
@include('Admin.partials.navbar')
@include('Admin.partials.sidebar')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> <i class="fas fa-user"></i> Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="img-fluid img-circle" style="height: 150px; widht: 150px"
                                    src="{{ $data->foto ? asset('/Profile/' . $data->foto) : 'https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg' }}"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $data->name }}</h3>
                            <p class="text-muted text-center">{{ $data->email }}</p>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Tentang Perusahaan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-address-book mr-1"></i> Kontak</strong>

                            <p class="text-muted">
                                {{ $data->phone ? "+62 {$data->phone}" : 'Kosong' }}
                                {{ $data->email_perusahaan }}
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                            <p class="text-muted">
                                {{ $data->address && $data->district && $data->regency && $data->province && $data->zip_code
                                    ? "{$data->address}, {$data->district}, {$data->regency}, {$data->province} {$data->zip_code}"
                                    : 'Kosong' }}
                            </p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#settings"
                                        data-toggle="tab">Profile Perusahaan</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#akun" data-toggle="tab">Informasi
                                        Akun</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="settings">
                                    <form action="{{ route('profil.update', $data->id) }}" method="POST"
                                        class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label for="foto">Logo Perusahaan</label>
                                                    <div id="imagePreview" class="mt-2 mb-4">
                                                        <img src="" alt="Preview Foto" id="previewImage"
                                                            class="img-fluid d-none" />
                                                    </div>

                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="foto"
                                                            id="foto" accept="image/*" required>
                                                        <label class="custom-file-label" for="foto">Choose
                                                            File...</label>
                                                    </div>
                                                    <small class="form-text text-muted">Format: jpg, png,
                                                        jpeg</small>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="name">Nama Perusahaan</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukan nama" value="{{ $data->name }}"
                                                        minlength="3" maxlength="30" name="name" id="name"
                                                        autofocus required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email_perusahaan">Email Perusahaan</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="Masukan email"
                                                        value="{{ $data->email_perusahaan }}" minlength="3"
                                                        maxlength="30" name="email_perusahaan" id="email_perusahaan"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukan phone" value="{{ $data->phone }}"
                                                        inputmode="numeric" minlength="10" maxlength="13"
                                                        name="phone" id="phone" onclick="this.select();"
                                                        oninvalid="this.setCustomValidity('Min. 10 Karakter')"
                                                        oninput="setCustomValidity('');" required>
                                                    <small class="form-text text-muted">Format :
                                                        62812345678</small>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label for="address">Alamat</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Masukan alamat" value="{{ $data->address }}"
                                                        minlength="10" maxlength="50" name="address" id="address"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label for="zip_code">Kode Pos</label>
                                                    <input type="text" class="form-control" placeholder="Kode Pos"
                                                        value="{{ $data->zip_code }}" minlength="10" maxlength="25"
                                                        name="zip_code" id="zip_code" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="district">Kecamatan</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Kecamatan" value="{{ $data->district }}"
                                                        minlength="5" maxlength="30" name="district" id="district"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="regency">Kabupaten/ Kota</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Kabupaten/ Kota" value="{{ $data->regency }}"
                                                        minlength="5" maxlength="30" name="regency" id="regency"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="province">Provinsi</label>
                                                    <input type="text" class="form-control" placeholder="Provinsi"
                                                        value="{{ $data->province }}" minlength="5" maxlength="30"
                                                        name="province" id="province" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="akun">
                                    <form action="{{ route('akun.update', $data->id) }}" method="POST"
                                        class="form-horizontal">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" class="form-control"
                                                        placeholder="Masukan email" value="{{ $data->email }}"
                                                        minlength="3" maxlength="30" name="email" id="email"
                                                        required autofocus>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Ganti Password</label>
                                                    <input type="password" class="form-control"
                                                        placeholder="Ganti Password" minlength="8" maxlength="60"
                                                        name="password" id="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>
<style>
    .custom-file-label::after {
        content: "Pilih Foto";
        color: #ffffff;
        background-color: #007bff;
        padding: 0.375rem 0.75rem;
        border-radius: 0.25rem;
    }

    /* Style untuk image preview agar berbentuk circle */
    #imagePreview {
        width: 150px;
        height: 150px;
        overflow: hidden;
        border-radius: 50%;
        /* Membuat gambar menjadi bulat */
        border: 6px solid #f4f4f4;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg');
        background-size: 200px;
        background-position: center;
        background-repeat: no-repeat;
    }

    #previewImage {
        object-fit: cover;
        /* Agar gambar tidak terdistorsi dan tetap menjaga proporsi */
        width: 100%;
        height: 100%;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "Pilih file";
    }
</style>

<!-- JavaScript untuk preview gambar -->
<script>
    // Menampilkan preview gambar saat file diupload
    document.getElementById("foto").addEventListener("change", function(event) {
        const input = event.target;
        const label = input.nextElementSibling;
        const file = input.files[0];

        if (file) {
            // Mengubah label file
            label.textContent = file.name;

            // Menampilkan preview gambar
            const reader = new FileReader();
            reader.onload = function(e) {
                const previewImage = document.getElementById("previewImage");
                previewImage.src = e.target.result;
                previewImage.classList.remove("d-none"); // Menampilkan gambar preview

                // Menghapus background-image dan mengganti dengan gambar yang diupload
                const imagePreview = document.getElementById("imagePreview");
                imagePreview.style.backgroundImage = 'none';
            };
            reader.readAsDataURL(file);
        } else {
            // Jika tidak ada gambar yang diupload, tampilkan gambar latar belakang
            const imagePreview = document.getElementById("imagePreview");
            imagePreview.style.backgroundImage =
                'url("https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg")';
        }
    });
</script>
@include('Admin.partials.footer')
