<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    
  <div
  class="mt-36 relative mx-auto w-full max-w-md bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 sm:rounded-xl sm:px-10">
  <div class="w-full">
      <div class="text-center">
          <h1 class="text-3xl font-semibold text-gray-900">Sign in</h1>
          <p class="mt-2 text-gray-500">Sign in below to access your account</p>
      </div>
      <div class="mt-5">
          <form action="/singIn" method="POST">
            @csrf
              <div class="relative mt-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
                <input type="text" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="email" required="">
              </div>
              <div class="relative mt-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">password</label>
                <input type="text" name="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="password" required="">
              </div>
              <div class="my-6">
            <button type="submit" class="w-full rounded-md bg-black px-3 py-4 text-white focus:bg-gray-600 focus:outline-none">Sign in</button>
              </div>
             
          </form>
      </div>
  </div>
</div>
</body>
</html>