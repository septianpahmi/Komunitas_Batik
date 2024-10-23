@include('Home.partials.header')
@include('Home.partials.navbar')
<section id="aboutus" class="aboutus">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
            <div class="relative h-64 overflow-hidden rounded-lg sm:h-80 lg:order-last lg:h-full">
                <img alt="About Us" src="/Profile/{{ $User->foto }}"
                    class="absolute inset-0 h-full w-full object-cover" />
            </div>

            <div class="lg:py-24">
                <h2 class="text-3xl font-bold sm:text-4xl">TENTANG KAMI</h2>

                <p class="mt-4 text-gray-600">
                    Perkembangan batik yang telah diaku oleh unites Nations Educational, Scientific and Cultural
                    Organization
                    (UNESCO) berkembang di seluruh nusantara dan menjadi karya budaya yang mewakili identitas indonesia
                    di mata dunia.
                </p>
                <p class="mt-4 text-gray-600">
                    Perkembangan batik yang telah diaku oleh unites Nations Educational, Scientific and Cultural
                    Organization
                    (UNESCO) berkembang di seluruh nusantara dan menjadi karya budaya yang mewakili identitas indonesia
                    di mata dunia.
                </p>
                <p class="mt-4 text-gray-600">
                    Perkembangan batik yang telah diaku oleh unites Nations Educational, Scientific and Cultural
                    Organization
                    (UNESCO) berkembang di seluruh nusantara dan menjadi karya budaya yang mewakili identitas indonesia
                    di mata dunia.
                </p>
                <p class="mt-4 text-gray-600">
                    Perkembangan batik yang telah diaku oleh unites Nations Educational, Scientific and Cultural
                    Organization
                    (UNESCO) berkembang di seluruh nusantara dan menjadi karya budaya yang mewakili identitas indonesia
                    di mata dunia.
                </p>


                </a>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-16">
    <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">
            Visi dan Misi
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- Visi -->
            <div
                class="bg-[url('https://example.com/batik-background.jpg')] bg-cover bg-center p-6 rounded-lg shadow-lg relative">
                <div class="bg-white bg-opacity-75 p-4 rounded-lg">
                    <h3 class="text-2xl font-bold text-gray-800">Visi</h3>
                    <p class="mt-2 text-gray-600">
                        <b>Rajava Creations</b> memiliki visi untuk perkembangannya di masa depan, yakni melestarikan
                        dan menumbuhkan batik sebagai salahsatu upaya untuk meningkatkan kesejahteraan masyarakat, dan
                        menumbuhkan industri kerajinan batik di cianjur dengan menjadi perusahaan penghasil dan pengolah
                        batik yang memiliki nilai seni dan nilai jual tinggi, serta dapat bersaing dan dikenal oleh
                        masyarakat dalam dan luar negeri.
                    </p>
                </div>
            </div>

            <!-- Misi -->
            <div
                class="bg-[url('https://example.com/batik-background.jpg')] bg-cover bg-center p-6 rounded-lg shadow-lg relative">
                <div class="bg-white bg-opacity-75 p-4 rounded-lg">
                    <h3 class="text-2xl font-bold text-gray-800">Misi</h3>
                    <ul class="mt-2 list-disc list-inside text-gray-600">
                        <li>Meningkatkan kesadaran dan kecintaan masyarakat terhadap batik di Cianjur.</li>
                        <li>Mendorong potensi dan partisipasi masyarakat Cianjur menjadi lebih kreatif dengan
                            memanfaatkan batik.</li>
                        <li>Menempatkan produk-produk batik roduk yang dekat dengan keseharian masyarakat.</li>
                        <li>Memperkaya motif batik Cianjuran untuk menambah perbendaharaan motif-motif yang sudah ada.
                        </li>
                        <li>Melakukan inovasi dalam hal desain produk dengan mengikuti perkembangan yang ada</li>
                        <li>Meningkatkan kualitas sumber daya manusia dengan cara mendidik tenaga-tenaga terampil dan
                            produktif</li>
                        <li>Meningkatkan kesejahteraan karyawan melalui lingkungan tempat kerja dan tempat tinggal yang
                            bersih dan sehat, memberikan upah sesuai dengan keahlian dan prestasi kerja</li>
                        <li>Meningkatkan kualitas dan daya saing yang berpotensi untuk memasuki pasar global.</li>
                        <li>Memperluas jaringan melalui kerjasama dengan pusat-pusat kerajinan batik melalui pertukaran
                            informasi desain dan proses produksi</li>
                        <li>Berbagi ilmu dan informasi kepada masyarakat mengenai batik</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="why_us bg-white py-16" id="why">
    <h2 class="section_title text-3xl font-bold text-center mb-12">Kenapa Kami?</h2>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="why_items bg-gray-100 rounded-lg p-6 shadow-md">
                <img src="https://images.unsplash.com/photo-1560780552-ba54683cb263?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="icon" class="w-16 h-16 mx-auto mb-4" />
                <div class="why_us_text text-center">
                    <h3 class="text-xl font-semibold mb-2">Kualitas dan Keaslian</h3>
                    <p class="text-gray-700">
                        Perusahaan kami berkomitmen untuk menyediakan batik berkualitas tinggi yang dibuat dengan teknik
                        tradisional dan bahan terbaik. Setiap motif dan corak yang dihasilkan merupakan hasil karya
                        tangan para pengrajin berpengalaman, memastikan bahwa setiap produk mencerminkan keaslian dan
                        nilai budaya yang mendalam.
                    </p>
                </div>
            </div>
            <div class="why_items bg-gray-100 rounded-lg p-6 shadow-md">
                <img src="https://images.unsplash.com/photo-1560780552-ba54683cb263?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="icon" class="w-16 h-16 mx-auto mb-4" />
                <div class="why_us_text text-center">
                    <h3 class="text-xl font-semibold mb-2">Dukungan Terhadap Pengrajin Lokal</h3>
                    <p class="text-gray-700">
                        Dengan membeli batik dari perusahaan kami, Anda tidak hanya mendapatkan produk yang indah,
                        tetapi juga berkontribusi pada perekonomian lokal. Kami bekerja sama dengan pengrajin lokal
                        untuk memastikan mereka mendapatkan penghasilan yang layak dan mendukung kelestarian seni batik
                        yang telah diwariskan turun-temurun.
                    </p>
                </div>
            </div>
            <div class="why_items bg-gray-100 rounded-lg p-6 shadow-md">
                <img src="https://images.unsplash.com/photo-1560780552-ba54683cb263?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Hospitality" class="w-16 h-16 mx-auto mb-4" />
                <div class="why_us_text text-center">
                    <h3 class="text-xl font-semibold mb-2">Varian dan Desain yang Beragam:</h3>
                    <p class="text-gray-700">
                        Kami menawarkan berbagai koleksi batik dengan desain yang beragam, mulai dari motif klasik
                        hingga modern. Ini memungkinkan pelanggan untuk menemukan batik yang sesuai dengan selera
                        pribadi mereka, baik untuk penggunaan sehari-hari, acara formal, atau sebagai hadiah spesial.
                        Kami juga menerima pesanan khusus untuk memenuhi kebutuhan desain yang unik.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-100 py-16">
    <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">
            Kegiatan Rajava Creations
        </h2>

        @include('Home.components.about.layout.kegiatan')
    </div>
</section>
@include('Home.components.about.layout.produk')
@include('Home.components.about.layout.team')
@include('Home.components.about.layout.kontak')

@include('Home.partials.footer')
