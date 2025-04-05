<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center rtl:space-x-reverse">
                <i class="ri-news-line text-3xl text-white self-center"></i>
                <span class="self-start text-2xl font-semibold whitespace-nowrap dark:text-white">Kempes</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button" class="flex text-sm bg-gray-800 rounded-md md:me-0 hover:bg-gray-400">
                    <span class="sr-only">Open user menu</span>
                    <p class="font-semibold py-2 px-6 text-white hover:text-gray-800">Login</p>
                </button>
            </div>
        </div>
    </nav>
</body>

</html>