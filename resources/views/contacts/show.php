<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Contact details</title>
</head>

<body>

    <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: fit-content;">

        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Contact details</h1>

        <div class="flex flex-row justify-between">
            <a href="/contacts" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-20">Go back</a>
            <a href="/contacts/<?= $contact['id'] ?>/edit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-20">Edit</a>
        </div>

        <div class="mx-auto">

            <p><b>Name:</b> <?= $contact['name'] ?></p>
            <p><b>Email:</b> <?= $contact['email'] ?></p>
            <p><b>Phone number:</b> <?= $contact['phone'] ?></p>

        </div>

        <form action="/contacts/<?= $contact['id'] ?>/delete" method="post" class="w-full mt-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">
                Delete
            </button>
        </form>

    </div>

</body>

</html>