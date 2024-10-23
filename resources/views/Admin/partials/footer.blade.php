<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; Komunitas Batik.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">

    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        // Function to handle form submission for any form
        function handleFormSubmit(formId, submitButtonId, url, successMessage) {
            $(formId).on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var formData = new FormData($(formId)[0]);

                // Disable submit button to prevent double submission
                $(submitButtonId).prop('disabled', true);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: successMessage,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location
                                    .reload(); // Reload the page after the notification is closed
                            }
                        });
                    },
                    error: function(response) {
                        var errors = response.responseJSON.errors;
                        var errorMessage = '';

                        // Collect all error messages
                        $.each(errors, function(key, value) {
                            errorMessage += value + '<br>';
                        });

                        Swal.fire({
                            icon: 'error',
                            title: 'Kesalahan!',
                            html: errorMessage,
                        });
                    },
                    complete: function() {
                        // Re-enable the submit button after the response is received
                        $(submitButtonId).prop('disabled', false);
                    }
                });
            });
        }

        // Store Galeri
        handleFormSubmit('#galeriForm', '#submitButtonId', "{{ route('galeri.store') }}",
            'Galeri berhasil disimpan.');

        // Store Kegiatan
        handleFormSubmit('#kegiatanForm', '#submitKegiatan', "{{ route('kegiatan.store') }}",
            'Kegiatan berhasil disimpan.');

        // Store Team
        handleFormSubmit('#teamForm', '#submitTeam', "{{ route('team.store') }}", 'Team berhasil disimpan.');

        // Store Produk
        handleFormSubmit('#produkForm', '#submitProduk', "{{ route('produk.store') }}",
            'Produk berhasil disimpan.');

    });
</script>

<script>
    $('.delete').click(function() {
        var dataid = $(this).attr('data-id');
        var url = $(this).attr('url')
        Swal.fire({
            title: "Anda Yakin?",
            text: "Setelah dihapus, Anda tidak akan dapat memulihkan data ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "" + url + ""

            }

        });
    });
</script>
<script>
    $('.status').click(function() {
        var dataid = $(this).attr('data-id');
        var url = $(this).attr('url')
        Swal.fire({
            title: "Anda Yakin?",
            text: "Setelah dirubah, Anda tidak akan dapat memulihkan data ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, change it!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "" + url + ""

            }

        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="toastr.js"></script>
<script>
    @if (Session::has('success'))
        Swal.fire({
            title: "Berhasil!",
            text: "{{ Session::get('success') }}",
            icon: "success"
        });
    @endif
    @if (Session::has('error'))
        toastr.options.closeButton = true;
        toastr.options.progressBar = true;
        toastr.error("{{ Session::get('error') }}", 'Gagal!')
    @endif
</script>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script>
    // Menentukan judul halaman berdasarkan route
    function updateTitleBasedOnRoute() {
        const path = window.location.pathname;

        let title;
        switch (path) {
            case '/m/dashboard':
                title = 'Dashboard | Komunitas Batik';
                break;
            case '/m/galeri':
                title = 'Galeri | Komunitas Batik';
                break;
            case '/m/kegiatan':
                title = 'Kegiatan | Komunitas Batik';
                break;
            case '/m/team':
                title = 'Team | Komunitas Batik';
                break;
            case '/m/produk':
                title = 'Produk | Komunitas Batik';
                break;
            case '/m/edit-profil/*':
                title = 'Profile | Komunitas Batik';
                break;
            default:
                title = 'Komunitas Batik';
        }

        // Mengubah tag <title>
        document.title = title;
    }

    // Update title pada saat pertama kali halaman dimuat
    updateTitleBasedOnRoute();

    // Menambahkan event listener untuk mendeteksi perubahan route (misalnya, saat menggunakan History API)
    window.addEventListener('popstate', updateTitleBasedOnRoute);
</script>
<script>
    const phoneInput = document.getElementById('phone');

    phoneInput.addEventListener('input', function(e) {
        // Mengganti semua karakter selain angka dengan string kosong
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    phoneInput.addEventListener('keypress', function(e) {
        // Menghentikan input jika bukan angka (ASCII code: 48-57)
        if (!/^\d$/.test(e.key) && e.key !== 'Backspace') {
            e.preventDefault();
        }
    });
</script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
</body>

</html>
