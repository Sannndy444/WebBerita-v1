@php
use Illuminate\Support\Str;
@endphp

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
                        <a href="{{ route('public.article.detail', $randomArticle->id) }}">

                            <img src="{{ asset('storage/image/' . $randomArticle->image) }}" alt="Berita Utama" class="w-full h-64 object-cover rounded-md">
                            <div class="px-6 pb-6">
                                <h2 class="text-2xl font-bold mt-4 text-white">Berita Random Hari Ini: {{ $randomArticle->kategori->name }}</h2>
                                <p class="text-gray-600 mt-2">Diterbitkan: {{ $randomArticle->created_at }} • {{ $randomArticle->user->name }}</p>
                                <p class="mt-4 text-gray-700">{{ Str::limit($randomArticle->content, 100) }}</p>
                            </div>
                        </a>
                    </div>

                    <!-- Sidebar / Berita Populer -->
                    <div class="p-4 rounded-lg shadow rounded-md bg-gray-900">
                        <h3 class="text-lg font-bold text-white mb-3">Berita Terlama</h3>
                        <ul class="space-y-3 text-gray-700 text-sm">
                            @foreach ($old as $o)

                            <li><a href="{{ route('public.article.detail', $o->id) }}" class="hover:text-blue-600">▶ {{ $o->title }}</a></li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Daftar Berita -->
            <div class="container mx-auto px-4 py-6 rounded-md bg-gray-900">
                <h2 class="text-xl font-bold mb-4 text-white">Berita Terbaru</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($article as $a)
                    <a href="{{ route('public.article.detail', $a->id) }}" class="bg-white rounded-lg shadow p-4 hover:bg-gray-600 ">
                        <img src="{{ asset('storage/image/' . $a->image) }}" alt="" class="w-full h-40 object-cover rounded">
                        <h3 class="mt-3 font-semibold text-black">{{ $a->title }}</h3>
                        <p class="text-sm text-gray-600 mt-2 hover:text-white">{{ Str::limit($a->content, 100) }}</p>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>

</body>

</html>