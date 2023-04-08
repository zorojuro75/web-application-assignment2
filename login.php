<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>AniHealth</title>
</head>

<body>
  <?php 
  include "varification.php";
  ?>
    <div class="bgcover">
        <div class="flex w-1/3 justify-center items-center bg-white">
            <div class="w-full px-8 md:px-32 lg:px-24">
            <form class="bg-white rounded-md shadow-2xl p-5 text-center" method="POST">
              <h1 class="text-gray-800 font-bold text-2xl mb-1">Welcome to AniMedi</h1>
              <?php if ($error_msg != '') {
                  echo "<div class='text-red-500 text-sm mb-3'>$error_msg</div>";
              } ?>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                <input id="username" class=" pl-2 w-full outline-none border-none" type="text" name="username" placeholder="user name" />
              </div>
              <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                <input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password" placeholder="Password" />
              </div>
              <button type="submit" name="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>
            </form>
            </div>
            
          </div>

    </div>
</body>

</html>
