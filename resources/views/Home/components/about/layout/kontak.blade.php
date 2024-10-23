<footer class="bg-red-900 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            <!-- Alamat -->
            <div>
                <h3 class="text-lg font-semibold">Our Address</h3>
                <p class="mt-4">
                    {!! $User->address && $User->district && $User->regency && $User->province && $User->zip_code
                        ? "{$User->address},<br> {$User->district}, {$User->regency}, {$User->province}<br> {$User->zip_code}"
                        : 'Alamat Kosong' !!}
                </p>
                <p class="mt-2">Phone: {{ $User->phone ? "+62 {$User->phone}" : 'Telpon Kosong' }}</p>
                <p>Email: {{ $User->email_perusahaan ? "{$User->email_perusahaan}" : 'Email Kosong' }}</p>
            </div>

            <!-- Peta -->
            <div>
                <h3 class="text-lg font-semibold">Our Location</h3>
                <div class="mt-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019926047639!2d144.96315761580314!3d-37.81627937975116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df0e0d4c5%3A0x5045675218ce7e33!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1602159635815!5m2!1sen!2sau"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

        </div>
    </div>
    <div class="text-center mt-8 text-gray-500 text-sm">
        &copy; 2024 Komunitas Batik. All rights reserved.
    </div>
</footer>
