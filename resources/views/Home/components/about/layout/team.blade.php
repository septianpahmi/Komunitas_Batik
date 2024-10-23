<section class="bg-gray-50 py-16">
    <div class="max-w-screen-lg mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">
            Tim Kami
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($Team as $td)
                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                    <img src="/Team/{{ $td->foto }}" alt="{{ $td->nama }}"
                        class="h-32 w-32 object-cover rounded-full mx-auto">
                    <h3 class="text-xl font-bold text-gray-800 mt-4">{{ $td->nama }}</h3>
                    <p class="mt-2 text-gray-600">{{ $td->jabatan }}</p>
                    <p class="mt-2 text-gray-500">{{ Str::limit($td->deskripsi, 80) }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>
