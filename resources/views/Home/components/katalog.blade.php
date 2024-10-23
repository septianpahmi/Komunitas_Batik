@include('Home.partials.header')
@include('Home.partials.navbar')
<div class="container mx-auto py-6">
    <div id="search-container" class="flex justify-center mb-4">
        <input type="search" id="search-input" placeholder="Search product name here.."
            class="border-b-2 border-red-900 focus:border-red-900 p-2 w-1/2" />
        <button id="search" class="bg-red-900 text-white p-2 ml-2 rounded hover:bg-red-900">Search</button>
    </div>

    <div id="buttons" class="flex justify-center mb-4 space-x-2">
        <button
            class="button-value border-2 border-red-900 p-2 rounded-lg bg-white text-red-900 hover:bg-red-900 hover:text-white"
            onclick="filterProduct('Semua')">Semua</button>
        <button
            class="button-value border-2 border-red-900 p-2 rounded-lg bg-white text-red-900 hover:bg-red-900 hover:text-white"
            onclick="filterProduct('Atasan')">Atasan</button>
        <button
            class="button-value border-2 border-red-900 p-2 rounded-lg bg-white text-red-900 hover:bg-red-900 hover:text-white"
            onclick="filterProduct('Bawahan')">Bawahan</button>
        <button
            class="button-value border-2 border-red-900 p-2 rounded-lg bg-white text-red-900 hover:bg-red-900 hover:text-white"
            onclick="filterProduct('Aksesoris')">Aksesoris</button>
    </div>

    <div id="products" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4"></div>
</div>

<!-- Script -->
<script>
    // Mengambil data produk dari Laravel Blade dan mengonversinya ke dalam format JavaScript
    let products = @json($products);

    // Render produk ke halaman
    function renderProducts() {
        let productsContainer = document.getElementById("products");
        productsContainer.innerHTML = ''; // Clear previous product cards

        for (let product of products) {
            let card = document.createElement("div");
            card.classList.add("card", product.kategori, "hidden", "bg-white", "rounded", "shadow", "p-4");

            // Image div
            let imgContainer = document.createElement("div");
            imgContainer.classList.add("text-center");
            let image = document.createElement("img");
            image.setAttribute("src", "{{ asset('Produk') }}/" + product.gambar);
            image.classList.add("w-full", "h-60", "object-cover");
            imgContainer.appendChild(image);
            card.appendChild(imgContainer);

            // Product info container
            let container = document.createElement("div");
            container.classList.add("text-center", "mt-2");

            // Product name
            let name = document.createElement("h5");
            name.classList.add("font-semibold");
            name.innerText = product.nama_prod.toUpperCase();
            container.appendChild(name);

            // Product price with thousand separators
            let price = document.createElement("h6");
            let formattedPrice = Number(product.harga).toLocaleString(); // Format price with thousand separator
            price.innerText = "Rp. " + formattedPrice;
            container.appendChild(price);

            // Product description
            let description = document.createElement("p");
            description.innerText = product.deskripsi ? product.deskripsi : 'No description available';
            description.classList.add("text-sm", "text-gray-600");
            container.appendChild(description);

            card.appendChild(container);
            productsContainer.appendChild(card);
        }

        filterProduct("Semua"); // Display all products initially
    }

    // Filter berdasarkan kategori
    function filterProduct(value) {
        let buttons = document.querySelectorAll(".button-value");
        buttons.forEach((button) => {
            button.classList.remove("bg-transparent", "text-white");
            button.classList.add("bg-transparent", "text-red-300");
            if (value.toUpperCase() == button.innerText.toUpperCase()) {
                button.classList.add("bg-transparent", "text-white");
            }
        });

        let elements = document.querySelectorAll(".card");
        elements.forEach((element) => {
            if (value === "Semua") {
                element.classList.remove("hidden");
            } else {
                if (element.classList.contains(value)) {
                    element.classList.remove("hidden");
                } else {
                    element.classList.add("hidden");
                }
            }
        });
    }

    // Search button click
    document.getElementById("search").addEventListener("click", () => {
        let searchInput = document.getElementById("search-input").value;
        let elements = document.querySelectorAll(".card");
        let matchesFound = false;

        elements.forEach((element) => {
            let productName = element.querySelector("h5").innerText;
            if (productName.includes(searchInput.toUpperCase())) {
                element.classList.remove("hidden");
                matchesFound = true;
            } else {
                element.classList.add("hidden");
            }
        });

        if (!matchesFound) {
            alert("No products found!");
        }
    });

    // Initialize the page with all products displayed
    window.onload = renderProducts;
</script>


@include('Home.partials.footer')
