<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>

<body>
    <div class="flex">
        <x-admin-navbar></x-admin-navbar>

        <div class="flex-1 ml-64">

            <div class="flex justify-center">
                <div class="grid grid-cols-3 gap-4 justify-center w-full h-auto py-6 px-16">
                    <div class="col-span-3 w-full h-full p-6 rounded-md bg-gray-900">
                        <div class="mb-4">
                            <img class="w-full h-96 object-cover rounded-lg" src="{{ asset('storage/image/' . $article->image) }}" alt="">
                            <p class="text-white">*Foto Ilustrasi</p>
                        </div>
                        <div>
                            <h3 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white">{{ $article->title }}</h3>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <p class="text-white">@foreach ($article->tag as $tag)
                                    #{{ $tag->name }}
                                    @endforeach
                                </p>
                            </div>
                            <div>
                                <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-blue-600 rounded-full me-1.5 shrink-0"></span>{{ $article->kategori->name }}</span>
                            </div>
                        </div>
                        <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="flex justify-start">
                            <p class="text-white pl-2">
                                {{ $article->content }}
                            </p>
                        </div>
                        <hr class="h-px mt-8 mb-4 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="flex text-sm justify-start text-white">
                            {{ $article->user->name }} , {{ $article->created_at }} WIB
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>