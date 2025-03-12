<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto flex flex-col mt-4" style="width: 60%;">
        <h1 class="mb-4 text-4xl leading-none text-gray-800 md:text-5xl mx-auto lg:text-9xl py-4">Gallery</h1>
        <div>
            <?php if (isset($messages) && count($messages) > 0) : ?>
                <ul class="bg-red-200 font-bold py-2 my-2 rounded">
                    <?php foreach ($messages as $message) : ?>
                        <li class="text-red-500 text-center"><?= $message ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="mt-5 mb-5">
            <div class="flex gap-2 justify-between mx-auto text-center justify-center">
                <form class="flex gap-2" action="/gallery/create" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" class="text-slate-300
                    file:px-4 file:p-4
                    file:rounded file:border-0
                    file:bg-gray-500 file:text-white
                    hover:file:bg-gray-800 transition duration-100 drop-shadow-lg
                    file:font-bold
                    file:overflow-hidden
                    " />
                    <button type="submit" class="bg-gray-500 hover:bg-gray-800 transition duration-100 drop-shadow-lg text-white font-bold px-4 rounded"><img width="25" height="25" src="https://img.icons8.com/ios/50/FFFFFF/upload--v1.png" alt="upload--v1" /></button>
                </form>
                <a class="transition duration-100 drop-shadow-lg" href="/"><img width="50" height="50" src="https://img.icons8.com/sf-regular/48/737373/return.png" alt="return" /></a>
            </div>
            <div id="default-carousel" class="relative w-full mt-4" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96 drop-shadow-lg">
                    <!-- Items -->
                    <?php foreach ($gallery['data'] as $photo) : ?>
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <?php if (isset($photo['name']) && file_exists(__DIR__ . "/../../../public/uploads/img/" . $photo['name'])) : ?>
                                <img class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" src="/uploads/img/<?= $photo['name'] ?>">
                            <?php endif; ?>
                            </li>
                        </div>
                    <?php endforeach ?>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-white-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-white-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="border rounded p-3 bg-gray-100 grid grid-cols-6 gap-4 place-items-center" style="width: 90%; margin: 0 auto">
        <?php foreach ($gallery['data'] as $photo) : ?>
            <div>
                <?php if (isset($photo['name']) && file_exists(__DIR__ . "/../../../public/uploads/img/" . $photo['name'])) : ?>
                    <a href="/gallery/<?= $photo['id'] ?>"><img class="rounded hover:shadow-2xl transition duration-200 filter hover:brightness-50" src="/uploads/img/<?= $photo['name'] ?>" alt="<?= $photo['name'] ?>"></a>
                <?php endif; ?>
            </div>
        <?php endforeach ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>