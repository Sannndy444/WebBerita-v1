<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="bg-gray-600">
    <x-user-navbar></x-user-navbar>

    <div class="flex justify-center">
        <div class="grid grid-cols-3 gap-4 justify-center w-full h-auto pt-6 px-16">
            <div class="col-span-3 w-full h-full p-6 rounded-md bg-gray-900">
                <div class="mb-4">
                    <img class="w-full h-96 object-cover rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
                    <p class="text-white">*Foto Ilustrasi</p>
                </div>
                <div>
                    <h3 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white">We invest in the world’s potential</h3>
                </div>
                <div class="flex justify-end">
                    <span class="flex items-center text-sm font-medium text-gray-900 dark:text-white me-3"><span class="flex w-2.5 h-2.5 bg-blue-600 rounded-full me-1.5 shrink-0"></span>Kategori</span>
                </div>
                <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="flex justify-start">
                    <p class="text-white pl-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur minus accusantium animi veritatis labore quasi tempora sed esse exercitationem! Minus optio modi harum animi architecto a, neque accusamus ipsum amet labore dolor. Commodi esse nulla doloribus a, quaerat est soluta aut adipisci, exercitationem tenetur quo ad accusamus eos officia fuga.
                        Quae doloremque ducimus, dolores nostrum aspernatur neque, totam repellat consectetur ullam, laudantium corporis? Est distinctio magnam ratione tempora necessitatibus laboriosam praesentium quis hic, qui optio nesciunt unde nam a quasi veritatis? Consequatur adipisci corporis quisquam perspiciatis nostrum similique, dolorum, voluptate a rerum atque ab ipsum unde porro vel corrupti placeat.
                        In id blanditiis omnis animi asperiores, obcaecati earum? Optio tenetur odit reiciendis perferendis! Nostrum ipsam vero fugiat magni blanditiis aut exercitationem perspiciatis cumque nesciunt voluptate perferendis, eius est doloribus facilis voluptas veritatis odio incidunt, nemo inventore molestiae ab? Dolores blanditiis magnam nisi neque provident eos debitis? Aliquam adipisci natus magnam.
                        Dicta nam sequi distinctio inventore, quidem tempore modi aliquid repudiandae ipsum autem repellat, officia incidunt quae odio. Ut molestiae illo explicabo odio ex voluptatum et, tenetur, quos delectus quod provident quibusdam facilis at magnam quidem animi obcaecati corporis excepturi vero quam doloremque, nulla natus aut! Saepe totam et error aperiam.
                        Non hic consectetur laborum, praesentium pariatur reprehenderit itaque voluptatibus fugit officiis, distinctio placeat iste dolore quam? Quas itaque, dignissimos pariatur maiores eos aperiam illum repellendus natus modi distinctio architecto eaque possimus in magnam nobis labore autem fuga unde voluptatem voluptas? Voluptatum rerum ullam itaque quidem veritatis eveniet! Inventore, error repellat?
                    </p>
                </div>
                <hr class="h-px mt-8 mb-4 bg-gray-200 border-0 dark:bg-gray-700">
                <div class="flex text-sm justify-start text-white">
                    Kaisar , 10/09/2025 14.50 WIB
                </div>
            </div>
            <div class="col-span-3 w-full h-auto rounded-lg bg-gray-900">
                <div>
                    <section class="bg-white dark:bg-gray-900 rounded-md p-6 antialiased">
                        <div class="w-full mx-auto px-4">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (20)</h2>
                            </div>
                            <form class="mb-6">
                                <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                    <label for="comment" class="sr-only">Your comment</label>
                                    <textarea id="comment" rows="6"
                                        class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                        placeholder="Write a comment..." required></textarea>
                                </div>
                                <button type="submit"
                                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                    Post comment
                                </button>
                            </form>
                            <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
                                <footer class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">
                                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                                class="mr-2 w-6 h-6 rounded-full"
                                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                alt="Michael Gough">Michael Gough</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                                title="February 8th, 2022">Feb. 8, 2022</time></p>
                                    </div>
                                    <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                        type="button">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>

                                </footer>
                                <p class="text-gray-500 dark:text-gray-400">Very straight-to-point article. Really worth time reading. Thank you! But tools are just the
                                    instruments for the UX designers. The knowledge of the design tools are as important as the
                                    creation of the design strategy.</p>
                            </article>
                            <article class="p-6 text-base bg-white rounded-lg dark:bg-gray-900">
                                <footer class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">
                                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold"><img
                                                class="mr-2 w-6 h-6 rounded-full"
                                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                alt="Michael Gough">Michael Gough</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                                title="February 8th, 2022">Feb. 8, 2022</time></p>
                                    </div>
                                    <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                        type="button">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>

                                </footer>
                                <p class="text-gray-500 dark:text-gray-400">Very straight-to-point article. Really worth time reading. Thank you! But tools are just the
                                    instruments for the UX designers. The knowledge of the design tools are as important as the
                                    creation of the design strategy.</p>
                            </article>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>