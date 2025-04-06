<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
</head>

<body class="bg-gray-600">
    <div class="flex">
        <x-admin-navbar></x-admin-navbar>

        <div class="flex-1 ml-64">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="p-6">
                <div class="block max-w-full p-6 bg-gray-800 border border-gray-800 rounded-lg shadow-sm ">
                    <div class="flex justify-between">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Create Article</h5>
                    </div>

                    <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

                    <div class="">
                        <form action="{{ route('admin.article.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title Article</label>
                                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                            <div class="mb-6">
                                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slug Article</label>
                                <input type="text" name="slug" id="slug" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                            <div class="mb-6">
                                <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Kategori</label>
                                <select name="kategori_id" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option value="" disabled selected>Choose Kategori</option>
                                    @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Tag</label>
                                <select name="tag_id" id="tag" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                    <option disabled selected>Choose Tag</option>
                                    @foreach ($tag as $t)
                                    <option value="{{ $t->id }}">{{ $t->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-6">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Cover Article</label>
                                <input name="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="file_input" type="file" required />
                            </div>
                            <div class="mb-6">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content Article</label>
                                <textarea id="message" name="content" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..." required></textarea>
                            </div>
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-16 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
</body>

</html>