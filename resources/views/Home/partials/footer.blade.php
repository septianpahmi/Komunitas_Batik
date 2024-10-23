<script>
    // JavaScript to toggle the mobile menu
    const hamburgerButton = document.getElementById('hamburgerButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const aboutDropdownButton = document.getElementById('aboutDropdownButton');
    const aboutDropdownButtonMobile = document.getElementById('aboutDropdownButtonMobile');
    const aboutDropdown = document.getElementById('aboutDropdown');
    const aboutDropdownMobile = document.getElementById('aboutDropdownMobile');

    hamburgerButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Toggle the About dropdown
    aboutDropdownButton.addEventListener('click', (event) => {
        event.stopPropagation();
        aboutDropdown.classList.toggle('hidden');
    });
    aboutDropdownButtonMobile.addEventListener('click', (event) => {
        event.stopPropagation();
        aboutDropdownMobile.classList.toggle('hidden');
    });
    // Close mobile menu and dropdown when clicking outside
    document.addEventListener('click', (event) => {
        if (!event.target.closest('#hamburgerButton') && !event.target.closest('#mobileMenu')) {
            mobileMenu.classList.add('hidden');
        }
        if (!event.target.closest('#aboutDropdownButton') && !event.target.closest('#aboutDropdown')) {
            aboutDropdown.classList.add('hidden');
        }
    });

    // Prevent clicks inside the dropdown from closing it
    aboutDropdown.addEventListener('click', (event) => {
        event.stopPropagation();
    });
</script>
<script>
    // Menentukan judul halaman berdasarkan route
    function updateTitleBasedOnRoute() {
        const path = window.location.pathname;

        let title;
        switch (path) {
            case '/':
                title = 'Home | Komunitas Batik';
                break;
            case '/about/dahlia':
                title = 'Dahlia Batik | Komunitas Batik';
                break;
            case '/about/rajava':
                title = 'Rajava Creation | Komunitas Batik';
                break;
            case '/about/viena':
                title = 'Viena Crafts | Komunitas Batik';
                break;
            case '/katalog':
                title = 'Katalog | Komunitas Batik';
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
    document.addEventListener("contextmenu", function(event) {
        event.preventDefault(); // Menghentikan menu konteks (klik kanan)
    });
</script>
<script>
    document.addEventListener("keydown", function(event) {
        // Mendeteksi F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
        if (event.keyCode === 123 || // F12
            (event.ctrlKey && event.shiftKey && event.keyCode === 73) || // Ctrl+Shift+I
            (event.ctrlKey && event.shiftKey && event.keyCode === 74) || // Ctrl+Shift+J
            (event.ctrlKey && event.keyCode === 85)) { // Ctrl+U
            event.preventDefault(); // Mencegah aksi default
            alert("Akses ke Developer Tools diblokir.");
        }
    });
</script>
</body>

</html>
<!-- end Header -->
