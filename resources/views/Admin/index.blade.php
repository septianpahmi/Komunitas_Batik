@include('Admin.partials.header')
@include('Admin.partials.navbar')
@include('Admin.partials.sidebar')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="callout callout-info">
                        <h5>Selamat Datang, <strong>{{ Auth::user()->name }} !</strong></h5>
                        <p>Komunitas Batik CIanjur</p>
                    </div>
                </div>
                <div class="col-md-12">
                    @php
                        $profileCompletion = 0;
                        if (Auth::user()->foto) {
                            $profileCompletion += 10;
                        }
                        if (Auth::user()->address) {
                            $profileCompletion += 10;
                        }
                        if (Auth::user()->phone) {
                            $profileCompletion += 20;
                        }
                        if (Auth::user()->email_perusahaan) {
                            $profileCompletion += 10;
                        }
                        if (Auth::user()->district) {
                            $profileCompletion += 5;
                        }
                        if (Auth::user()->regency) {
                            $profileCompletion += 5;
                        }
                        if (Auth::user()->province) {
                            $profileCompletion += 5;
                        }
                        if (Auth::user()->zip_code) {
                            $profileCompletion += 5;
                        }
                        if (Auth::user()->email) {
                            $profileCompletion += 15;
                        }
                        if (Auth::user()->name) {
                            $profileCompletion += 15;
                        }
                    @endphp
                    @if ($profileCompletion < 100)
                        <div class="callout callout-warning alert">
                            <button type="button" class="close" data-dismiss="alert"
                                aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-info"></i> Lengkapi Profil Anda!</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{ $profileCompletion }}%;"
                                    aria-valuenow="{{ $profileCompletion }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ $profileCompletion }}% Profil Lengkap
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $kegiatan }}</h3>

                            <p>Kegiatan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-image"></i>
                        </div>
                        <a href="{{ route('kegiatan') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $team }}</h3>

                            <p>Team</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="{{ route('team') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small card -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $produk }}</h3>
                            <p>Produk</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tag"></i>
                        </div>
                        <a href="{{ route('produk') }}" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('Admin.partials.footer')
