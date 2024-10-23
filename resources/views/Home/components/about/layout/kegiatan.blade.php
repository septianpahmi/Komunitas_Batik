<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($Kegiatan as $kd)
        @if ($kd == null)
            <h3 class="text-xl text-center text-gray-800 mt-4">
                <img src="/assets/images/no-image.png" alt="" class="h-48 w-full object-cover rounded-lg">
            </h3>
            <h3 class="text-xl text-center text-gray-800 mt-4">
                <img src="/assets/images/no-image.png" alt="" class="h-48 w-full object-cover rounded-lg">
            </h3>
            <h3 class="text-xl text-center text-gray-800 mt-4">
                <img src="/assets/images/no-image.png" alt="" class="h-48 w-full object-cover rounded-lg">
            </h3>
        @else
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="/kegiatan/{{ $kd->foto }}" alt="{{ $kd->nama_kegiatan }}"
                    class="h-48 w-full object-cover rounded-lg">
                <h3 class="text-xl font-bold text-center text-gray-800 mt-4">{{ $kd->nama_kegiatan }}</h3>
                <p class="mt-2 text-gray-600 text-justify">
                    {{ Str::limit($kd->deskripsi, 200) }}
                </p>
            </div>
        @endif
    @endforeach
</div>
