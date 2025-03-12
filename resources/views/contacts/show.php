<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Contact details</title>
</head>

<body>

    <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: 50%;">

        <h1 class="mb-4 text-4xl leading-none text-gray-900 md:text-5xl lg:text-8xl mx-auto my-4">Contact details</h1>

        <div class="flex flex-row justify-between">
            <a class="transition duration-100 drop-shadow-lg" href="/contacts"><img width="50" height="50" src="https://img.icons8.com/sf-regular/48/737373/return.png" alt="return" /></a>
            <a href="/contacts/<?= $contact['id'] ?>/edit" class="transition duration-100 drop-shadow-lg"><img width="50" height="50" src="https://img.icons8.com/sf-black-filled/64/737373/create-new.png" alt="create-new" /></a>
        </div>

        <a href="tel:+<?= $contact['phone'] ?>">make a call</a>
        <a href="mailto:<?= $contact['email'] ?>">send a email</a>

        <table class="table-auto w-full border rounded">
            <thead>
                <th class="text-lg">Name</th>
                <th class="text-lg">Phone</th>
                <th class="text-lg">Email</th>
            </thead>
            <tbody>
                <tr class="border text-center">
                    <td class="font-weight-400 px-4 py-4 leading-none text-lg text-4xl "><?= $contact['name'] ?></td>
                    <td class="font-weight-400 px-4 py-4 leading-none text-lg text-4xl "><?= $contact['phone'] ?></td>
                    <td class="font-weight-400 px-4 py-4 leading-none text-lg text-4xl "><?= $contact['email'] ?></td>
                </tr>
            </tbody>
        </table>

        <form action="/contacts/<?= $contact['id'] ?>/delete" method="post" class="w-full mt-4">
            <button class="bg-gray-500 hover:bg-gray-800 transition duration-100 drop-shadow-lg w-full rounded flex justify-center text-center gap-3 text-lg text-white">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,180,250"
                    style="fill:#FFFFFF;">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                        <g transform="scale(3.55556,3.55556)">
                            <path d="M32,11c-1.105,0 -2,0.895 -2,2v1h-13c-2.209,0 -4,1.791 -4,4c0,2.209 1.791,4 4,4h38c2.209,0 4,-1.791 4,-4c0,-2.209 -1.791,-4 -4,-4h-13v-1c0,-1.105 -0.895,-2 -2,-2zM16,24v25c0,5.514 4.486,10 10,10h20c5.514,0 10,-4.486 10,-10v-25zM24.5,29c0.828,0 1.5,0.671 1.5,1.5v19c0,0.829 -0.672,1.5 -1.5,1.5c-0.828,0 -1.5,-0.671 -1.5,-1.5v-19c0,-0.829 0.672,-1.5 1.5,-1.5zM36,29c1.104,0 2,0.896 2,2v18c0,1.104 -0.896,2 -2,2c-1.104,0 -2,-0.896 -2,-2v-18c0,-1.104 0.896,-2 2,-2zM47.5,29c0.828,0 1.5,0.671 1.5,1.5v19c0,0.829 -0.672,1.5 -1.5,1.5c-0.828,0 -1.5,-0.671 -1.5,-1.5v-19c0,-0.829 0.672,-1.5 1.5,-1.5z"></path>
                        </g>
                    </g>
                </svg>
                Delete</button>
        </form>

    </div>

</body>

</html>