<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Administration - Home</title>
</head>

<body>
  <h1 class="mt-4 mb-6 flex flex-col items-center text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-dark">Welcome, Admin</h1>
  <div class="grid grid-cols-3">
    <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: fit-content;">
      <div class=" w-60 border rounded-lg flex flex-col mx-auto gap-3 p-4">
        <p><b>Title:</b> <br> Gallery </p>
        <p><b>Descrition: </b> <br> Here you can manage your gallery </p>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded self-center" href="/gallery"> Go to gallery </a>
      </div>
    </div>
    <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: fit-content;">
      <div class=" w-60 border rounded-lg flex flex-col mx-auto gap-3 p-4">
        <p><b>Title:</b> <br> Contacts </p>
        <p><b>Description:</b> <br> Here you can manage your contacts </p>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded self-center" href="/contacts"> Go to contacts </a>
      </div>
    </div>
    <div class="container mx-auto flex flex-col mt-4 gap-3" style="width: fit-content;">
      <div class=" w-60 border rounded-lg flex flex-col mx-auto gap-3 p-4">
        <p><b>Title:</b> <br> Files </p>
        <p><b>Description:</b> <br> Here you can manage your files </p>
        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded self-center" href="/"> Go to files </a>
      </div>
    </div>
  </div>
</body>

</html>