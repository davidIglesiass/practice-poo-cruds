<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../../css/app.css">
</head>

<body>
  <div class="container mx-auto flex flex-col mt-4 gap-3">
    <h1 class="mb-4 text-4xl leading-none text-gray-900 md:text-5xl mx-auto lg:text-9xl">Contacts list</h1>
    <div class="container mx-auto flex flex-col mt-4" style="width: 60%;">
      <form action="/contacts">
        <label for="default-search" class="mb-2 text-md font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative w-full">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </div>
          <div class="flex flex-row">
            <input name="search" type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-s-lg bg-gray-50 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500 outline-none" placeholder="Enter some contact name ..." value="<?= $_GET['search'] ?? '' ?>" required">
            <button type="submit" class="transition duration-100 text-white flex self-end bg-gray-800 drop-shadow-lg hover:bg-blue-800 font-medium text-sm px-4 py-5 dark:bg-gray-600 dark:hover:bg-gray-800 drop-shadow-lg rounded-r-lg">Search</button>
          </div>
        </div>
      </form>
      <div class="mt-5 w-full">
        <div class="flex row justify-between">
          <a class="logoanimation transition duration-100 drop-shadow-lg" href="/contacts/create"><img width="50" height="50" src="https://img.icons8.com/fluency-systems-filled/50/737373/add-webpage.png" alt="addcontacticon" /></a>
          <form action="/contacts"> <?php $data = ''; ?> <button class="focus:animate-ping transition duration-100 drop-shadow-lg"><img width="50" height="50" src="https://img.icons8.com/ios-glyphs/60/737373/broom.png" alt="cleanfiltericon" /></button> </form>
          <a class="transition duration-100 drop-shadow-lg" href="/"><img width="50" height="50" src="https://img.icons8.com/sf-regular/48/737373/return.png" alt="returnhomeicon" /></a>
        </div>
        <table class="table-auto w-full border rounded">
          <tbody>
            <?php foreach ($contacts['data'] as $contact) : ?>
              <tr class="border">
                <td class="font-weight-400 px-4 py-4 leading-none text-lg text-4xl "><?= $contact['name'] ?></td>
                <td>
                  <a href="/contacts/<?= $contact['id'] ?>">
                    <img class="border rounded bg-gray-400 hover:bg-gray-800 transition duration-100 drop-shadow-lg px-2 py-1" src="https://img.icons8.com/?size=100&id=QADawoQS3Rcg&format=png&color=FFFFFF" width="30" height="30" alt="iconplus">
                  </a>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <?php
      $paginate = 'contacts';
      require_once '../resources/views/assets/pagination.php';
      ?>
    </div>
  </div>
</body>

</html>