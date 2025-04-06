<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kempes</title>
</head>

<body class="bg-gray-600">
    <x-publicNavbar></x-publicNavbar>

    <div class="flex justify-center">
        <div class="grid grid-cols-1 gap-4 justify-center w-full h-auto pt-6 px-16">

            <!-- Hero Banner -->
            <div class="container mx-auto px-4 py-6">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 p-2 rounded-md bg-gray-900">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="Berita Utama" class="w-full h-64 object-cover rounded-md">
                        <div class="px-6 pb-6">
                            <h2 class="text-2xl font-bold mt-4 text-white">Berita Utama Hari Ini: Dunia Teknologi Bergerak Cepat</h2>
                            <p class="text-gray-600 mt-2">Diterbitkan: 05 April 2025 • Admin</p>
                            <p class="mt-4 text-gray-700">Industri teknologi berkembang pesat dengan inovasi terbaru di berbagai sektor. Perusahaan-perusahaan besar bersaing dalam menciptakan solusi yang memudahkan kehidupan masyarakat...</p>
                        </div>
                    </div>

                    <!-- Sidebar / Berita Populer -->
                    <div class="p-4 rounded-lg shadow rounded-md bg-gray-900">
                        <h3 class="text-lg font-bold text-white mb-3">Berita Populer</h3>
                        <ul class="space-y-3 text-gray-700 text-sm">
                            <li><a href="#" class="hover:text-blue-600">▶ Inovasi AI di Indonesia Semakin Pesat</a></li>
                            <li><a href="#" class="hover:text-blue-600">▶ Tips Mengamankan Data Pribadi Online</a></li>
                            <li><a href="#" class="hover:text-blue-600">▶ Startup Lokal Raih Pendanaan Seri B</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Daftar Berita -->
            <div class="container mx-auto px-4 py-6 rounded-md bg-gray-900">
                <h2 class="text-xl font-bold mb-4 text-white">Berita Terbaru</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" class="w-full h-40 object-cover rounded">
                        <h3 class="mt-3 font-semibold text-white">Isu Politik Terbaru di Asia Tenggara</h3>
                        <p class="text-sm text-gray-600 mt-2">Pemerintah negara-negara ASEAN berkumpul untuk membahas stabilitas kawasan.</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" class="w-full h-40 object-cover rounded">
                        <h3 class="mt-3 font-semibold text-white">Teknologi Masa Depan: Apa yang Bisa Kita Harapkan?</h3>
                        <p class="text-sm text-gray-600 mt-2">Teknologi seperti AI dan VR diperkirakan akan mengubah hidup kita 10 tahun ke depan.</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-lg shadow p-4">
                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" class="w-full h-40 object-cover rounded">
                        <h3 class="mt-3 font-semibold text-white">Ekonomi Global dan Dampaknya bagi Indonesia</h3>
                        <p class="text-sm text-gray-600 mt-2">Para ekonom menilai bahwa Indonesia memiliki potensi pertumbuhan yang stabil.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

</body>

</html>