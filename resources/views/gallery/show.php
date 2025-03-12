<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto flex flex-col mt-4" style="max-width: 50%;">
        <img class="rounded drop-shadow-xl" src="/uploads/img/<?= $gallery['name'] ?>" alt="<?= $gallery['name'] ?>">
        <form class="row flex flex-col border border-grey-800 hover:border-black rounded mt-4 hover:bg-gray-800 transition duration-100 drop-shadow-lg" action="/gallery/<?= $gallery['id'] ?>/update" method="post"> <textarea class="outline-none p-2" type="text" name="description" placeholder="Enter a description or comment about your image..."><?= trim($gallery['description']) ?></textarea><button type="submit" class="flex justify-center text-center text-white gap-2 text-lg bg-gray-500 hover:bg-gray-800 transition duration-100 drop-shadow-lg p-2 border rounded outline-none"><img width="30" height="30" src="https://img.icons8.com/ios/50/FFFFFF/available-updates.png" alt="available-updates" />Update description</button></form>
        <div class="row flex flex-col-3 mt-4 gap-5 w-full mb-4">
            <form class="w-full" action="/gallery/<?= $gallery['id'] ?>/delete" method="post"> <button class="transition duration-100 drop-shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0,0,180,250"
                        style="fill:#737373;">
                        <g fill="#737373" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                            <g transform="scale(3.55556,3.55556)">
                                <path d="M32,11c-1.105,0 -2,0.895 -2,2v1h-13c-2.209,0 -4,1.791 -4,4c0,2.209 1.791,4 4,4h38c2.209,0 4,-1.791 4,-4c0,-2.209 -1.791,-4 -4,-4h-13v-1c0,-1.105 -0.895,-2 -2,-2zM16,24v25c0,5.514 4.486,10 10,10h20c5.514,0 10,-4.486 10,-10v-25zM24.5,29c0.828,0 1.5,0.671 1.5,1.5v19c0,0.829 -0.672,1.5 -1.5,1.5c-0.828,0 -1.5,-0.671 -1.5,-1.5v-19c0,-0.829 0.672,-1.5 1.5,-1.5zM36,29c1.104,0 2,0.896 2,2v18c0,1.104 -0.896,2 -2,2c-1.104,0 -2,-0.896 -2,-2v-18c0,-1.104 0.896,-2 2,-2zM47.5,29c0.828,0 1.5,0.671 1.5,1.5v19c0,0.829 -0.672,1.5 -1.5,1.5c-0.828,0 -1.5,-0.671 -1.5,-1.5v-19c0,-0.829 0.672,-1.5 1.5,-1.5z"></path>
                            </g>
                        </g>
                    </svg>
                </button></form>
            <a class="transition duration-100 drop-shadow-lg" href="/gallery"><img width="50" height="50" src="https://img.icons8.com/sf-regular/48/737373/return.png" alt="return" /></a>
        </div>
        <div>
            <?php
            if (isset($messages) && count($messages) > 0) : ?>
                <ul class="bg-green-200 font-bold py-2 rounded">
                    <?php foreach ($messages as $message) : ?>
                        <li class="text-green-500 text-center"><?= $message ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>