<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Update contact</title>
</head>

<body>

    <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: fit-content;">

        <h1 class="mb-4 text-4xl leading-none text-gray-900 md:text-5xl lg:text-8xl">Update contact</h1>

        <form action="/contacts/<?= $contact['id'] ?>" method="post">

            <div class="grid gap-6 mb-6">

                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input value="<?= $contact['name'] ?>" type="text" name="name" id="name" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input value="<?= $contact['email'] ?>" type="email" name="email" id="email" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                    <input value="<?= $contact['phone'] ?>" type="text" name="phone" id="phone" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>

                <button type="submit" onclick="updt()" class="flex justify-center text-center text-white gap-2 text-lg bg-gray-500 hover:bg-gray-800 transition duration-100 drop-shadow-lgrounded px-3 py-1 border rounded w-full"><img class="hover:animate-spin " width="30" height="30" src="https://img.icons8.com/ios/50/FFFFFF/available-updates.png" alt="available-updates" />Update</button>
            </div>

        </form>
    </div>

</html>