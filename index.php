<!DOCTYPE html>
<html>
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.16/dist/tailwind.min.css">
</head>
<body class="bg-center bg-cover" style="background-image: url('contact.png')">
<?php 
  
  function insertdata(){
    include "savedata.php";
  }
?>
  <div class="flex justify-between items-center h-16 bg-gray-900 px-8">
    <h1 class="text-white text-xl font-bold">AniHealth</h1>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="document.location.href='login.php'"
    ">
      Login
    </button>
  </div>
  <div class="flex justify-end items-center h-screen mx-32 ">
    <form class="bg-white bg-opacity-50 rounded-lg p-8 max-w-md w-full" action="index.php" method="POST">
      <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">
          Name:
        </label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Enter your name">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">
          Email:
        </label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" id="email" type="email" placeholder="Enter your email">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="pet">
          Pet Name:
        </label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="pet" id="pet" type="text" placeholder="Enter your pet name">
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 font-bold mb-2" for="problem">
          Problem Description:
        </label>
        <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="problem" id="problem" rows="4" placeholder="Enter your problem description"></textarea>
      </div>
      <div class="flex justify-end">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit" type="submit" onclick="<?php   insertdata();?>">
          Submit
        </button>
      </div>
    </form>
  </div>
</body>
</html>