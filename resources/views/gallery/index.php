<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: fit-content;">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-800 md:text-5xl mx-auto lg:text-6xl text-dark-100">Gallery</h1>
        <div class="mt-5">
            <div class="flex gap-2 justify-between mx-4">
                <form action="/gallery/create" method="post" enctype="multipart/form-data">
                    <input type="file" name="image" class="text-slate-500
                    file:mr-1 file:py-2 file:px-4
                    file:rounded file:border-0
                    file:bg-blue-500 file:text-white
                    hover:file:bg-blue-700
                    file:font-bold
                    file:overflow-hidden
                    " />
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload image</button>
                </form>
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/">Back to homepage</a>
            </div>
            <ul class="w-full list-none list-inside mt-10 border rounded p-3 bg-blue-100 grid grid-cols-3 gap-4 place-items-center">
                <?php foreach ($gallery['data'] as $photo) : ?>
                    <li>
                        <?php if (isset($photo['name'])) : ?>
                            <img src="../../../public/img/uploads/<?= $photo['name'] ?>" alt="<?= $photo['name'] ?>" width="200" height="200" style="border: 1px solid black">
                        <?php endif; ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <?php
        $paginate = 'gallery';
        require_once '../resources/views/assets/pagination.php';
        ?>
    </div>
</body>

</html>