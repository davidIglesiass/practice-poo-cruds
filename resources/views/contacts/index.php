<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
<body>
  <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: fit-content;">
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl mx-auto lg:text-6xl dark:text-dark">Contacts list</h1>
    <form class="ms-4 me-4" action="/contacts">
      <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
      <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
          </svg>
        </div>
        <div class="flex flex-row">
          <input name="search" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-s-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingresa el nombre de un contacto..." required>
          <button type="submit" class="text-white flex self-end bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-4 py-5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 rounded-r-lg">Buscar</button>
        </div>
      </div>
    </form>
    <div class="mt-5">
      <div class="flex gap-2 justify-between mx-4">
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/contacts/create">create contact</a>
        <form action="/contacts"> <?php $data = ''; ?> <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Clean filter</button> </form>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="/">Back to homepage</a>
      </div>
      <ul class="w-full list-none list-inside mt-10 border rounded p-3 bg-blue-100 flex gap-3 flex-col items-center content-center justify-items-center p-8 mx-0">
        <?php foreach ($contacts['data'] as $contact) : ?>
          <li>
            <a class="btn-link border rounded bg-white p-1 flex w-60 justify-center justify-items-center my-2" href="/contacts/<?= $contact['id'] ?>">
                <?= "{$contact['name']}" ?>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
    <?php
    $paginate = 'contacts';
    require_once '../resources/views/assets/pagination.php';
    ?>
  </div>
</body>
</html>