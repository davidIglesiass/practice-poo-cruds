<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Create contact</title>
</head>

<body>

    <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: fit-content;">

        <h1 class="mb-4 text-4xl leading-none text-gray-900 md:text-5xl lg:text-9xl">Create contact</h1>

        <form action="/contacts" method="post">
            <div class="grid gap-6 mb-6">

                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="name">Name</label>
                    <input type="text" name="name" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Name..." required>
                </div>

                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" name="email" id="email" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Email...">
                </div>

                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone number</label>
                    <input type="text" name="phone" id="phone" class="border border-gray-300 text-gray-900 text-sm rounded focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="Phone..." required>
                </div>

                <button class="flex justify-center text-center text-white gap-2 text-lg bg-gray-500 hover:bg-gray-800 transition duration-100 drop-shadow-lgrounded px-3 py-1 border rounded w-full" type="submit"><img width="30" height="30" src="https://img.icons8.com/pulsar-line/48/FFFFFF/user.png" alt="user" />Create</button>
            </div>

            <a class="transition duration-100 drop-shadow-lg" href="/"><img width="50" height="50" src="https://img.icons8.com/sf-regular/48/737373/return.png" alt="return" /></a>

        </form>
    </div>

</html>