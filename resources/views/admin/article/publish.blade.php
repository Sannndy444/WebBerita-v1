<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publish Article</title>
</head>

<body class="bg-gray-600">
    <div class="flex">
        <x-admin-navbar></x-admin-navbar>

        <div class="flex-1 ml-64">
            <div class="p-6">
                <div class="block max-w-full p-6 bg-gray-800 border border-gray-800 rounded-lg shadow-sm ">
                    <div class="flex justify-start">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">List Publish Article</h5>
                    </div>

                    <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

                    <div>


                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Image
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Kategori
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Tag
                                        </th>
                                        <th scope="col" class="px-6 py-3 text-right">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($article as $a)
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $loop->iteration }}
                                        </th>
                                        <td class="px-6 py-4">
                                            image
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $a->title }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($a->kategori)
                                            <span class="bg-blue-200 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                                {{ $a->kategori->name }}
                                            </span>
                                            @else
                                            No Data Found
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            @foreach ($a->tag as $tag)
                                            <span class="bg-blue-200 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                                {{ $tag->name }}
                                            </span>
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Show</a>
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>