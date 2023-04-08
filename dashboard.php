<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniHealth Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" /> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />
</head>

<body class="absolute md:relative lg:static bg-gray-100 bg-center bg-cover">
<div class="flex justify-between items-center w-full h-16 bg-gray-900 px-8">
    <h1 class="text-white text-xl font-bold">AniHealth</h1>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="document.location.href='index.php'"
    ">
      Logout
    </button>
  </div>
        <?php
        include "connection.php";

        $result = mysqli_query($conn, 'SELECT * FROM helpDesk');
        if (!$result) {
            die('Error retrieving data: ' . mysqli_error($conn));
        }
        echo '<div class="w-full bg-white shadow rounded-lg p-6 mb-8">';
        echo '<h3 class="text-xl font-bold mb-4">Help Request</h3>';
        echo '<table class="w-full">';
        echo '<thead>
            <tr class="bg-gray-200">
                <th class="py-2 px-4 text-left">Name</th>
                <th class="py-2 px-4 text-left">Email</th>
                <th class="py-2 px-4 text-left">Pet</th>
                <th class="py-2 px-4 text-left">Problem</th>
            </tr>
        </thead>';
        echo '<tbody>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td class="py-2 px-4">' . $row['name'] . '</td><td class="py-2 px-4">' . $row['email'] . '</td><td class="py-2 px-4">' . $row['pet'] . '</td><td class="py-2 px-4">' . $row['problem'] . '</td></tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';

        // Close database connection
        mysqli_close($conn);
        ?>
</body>

</html>