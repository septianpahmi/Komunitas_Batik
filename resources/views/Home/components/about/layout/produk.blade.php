<section class="gallery bg-gray-100 py-16" id="gallery">
    <h2 class="section_title text-3xl font-bold text-center mb-12">Produk Kami</h2>
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($Produk as $pd)
                @if ($pd == null)
                    <div class="gallery_items text-center">
                        <img src="/assets/images/no-image.png" alt="no-image"
                            class="w-full h-64 object-cover rounded-lg shadow-md" />
                    </div>
                @else
                    <div class="gallery_items text-center">
                        <img src="/Produk/{{ $pd->gambar }}" alt="{{ $pd->nama_prod }}"
                            class="w-full h-64 object-cover rounded-lg shadow-md" />
                        <h3 class="font-bold text-lg mt-2">{{ $pd->nama_prod }}</h3>
                        <p class="text-gray-700">{{ 'Rp. ' . number_format($pd->harga, 0, ',', '.') }}</p>
                        <p class="text-gray-600 mt-1">{{ $pd->deskripsi }}</p><br>
                        <a href="https://wa.me/{{ preg_replace('/^0/', '62', $pd->userId->phone) }}?text=Halo%2C%20Saya%20tertarik%20untuk%20membeli%20{{ urlencode($pd->nama_prod) }}%2E%20Gambar%20produk%20%3A%20{{ asset('Produk/' . $pd->gambar) }}"
                            class="mt-12 px-6 py-2 bg-red-500 text-white rounded hover:bg-red-600"
                            target="_blank">Beli</a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
