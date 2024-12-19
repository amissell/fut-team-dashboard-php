<?php
include "./config/db_connect.php";
// echo 'hello';
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Admin Template</title>
  <meta name="author" content="David Grzyb">
  <meta name="description" content="">
  <script src="https://kit.fontawesome.com/983fb12c47.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">



  <!-- Tailwind -->
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"> -->
  <style>
    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

    .font-family-karla {
      font-family: karla;
    }

    .bg-sidebar {
      background: #3d68ff;
    }

    .cta-btn {
      color: #3d68ff;
    }

    .upgrade-btn {
      background: #1947ee;
    }

    .upgrade-btn:hover {
      background: #0038fd;
    }

    .active-nav-link {
      background: #1947ee;
    }

    .nav-item:hover {
      background: #1947ee;
    }

    .account-link:hover {
      background: #3d68ff;
    }
  </style>
</head>

<body class="bg-gray-100 font-family-karla flex">

  <aside class="relative bg-sidebar h-screen w-64  sm:block shadow-xl">

    <nav class="text-white text-base font-semibold pt-3">
      <a href="index.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
        <i class="fas fa-tachometer-alt mr-3"></i>
        Dashboard
      </a>
      <a href="terrain.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-sticky-note mr-3"></i>
        terrain
      </a>
      <a href="tables.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-table mr-3"></i>
        Tables
      </a>
      <a href="forms.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-align-left mr-3"></i>
        Forms
      </a>
      <a href="tabs.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-tablet-alt mr-3"></i>
        Tabbed Content
      </a>
      <a href="calendar.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-calendar mr-3"></i>
        Calendar
      </a>
    </nav>
    <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
      <i class="fas fa-arrow-circle-up mr-3"></i>
      Upgrade to Pro!
    </a>
  </aside>

  <div class="w-full flex flex-col h-screen overflow-y-hidden">
    <!-- Desktop Header -->
    <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
      <div class="w-1/2"></div>
      <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
        <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
          <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
        </button>
        <button x-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
        <div x-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
          <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
          <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
          <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
        </div>
      </div>
    </header>



    <div class="w-full overflow-x-hidden border-t flex flex-col">
      <main class="w-full flex-col p-6">
        <div class="flex justify-evenly">
          <h1 class="text-3xl text-black pb-6">Dashboard</h1>
          <header class="navbar">
            <div class="menu__bar menu__bar2" id="toggle-form">
              <i class="fa-solid fa-bars"></i>
            </div>
          </header>
        </div>

        </p>
        <div class="bg-white overflow-auto">
          <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
              <tr>
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Player ID</th>
                <th class="w-1/8 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Photo</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Position</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">rating</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">pace</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">shooting</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">passing</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">dribbling</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">defending</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">physical</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm"></th>
              </tr>
            </thead>
            <tbody class="text-gray-700">
              <?php

              $sql = "SELECT player_id, name, photo, position, club_id, nationality_id, rating, physicalplayer_id FROM players"; //to fetch data
              $result = mysqli_query($connection, $sql); // to execute the data
              if ($result && mysqli_num_rows($result) > 0) { // to check the if data is present is db  and return the nb of rows
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "
                                        <tr>
                                            <td class='w-1/6 text-left py-3 px-4'>{$row['player_id']}</td>
                                            <td class='w-1/6 text-left py-3 px-4'>{$row['name']}</td>
                                            <td class='w-1/6 text-left py-3 px-4'>
                                                <img src='{$row['photo']}' alt='Player Photo' class='h-12 w-12 rounded-full'>
                                            </td>
                                            <td class='w-1/6 text-left py-3 px-4'>{$row['position']}</td>
                                            <td class='w-1/6 text-left py-3 px-4'>{$row['club_id']}</td>
                                            <td class='w-1/6 text-left py-3 px-4'>{$row['nationality_id']}</td>
                                            <td class='w-1/6 text-left py-3 px-4'>{$row['rating']}</td>
                                            <td class='w-1/6 text-left py-3 px-4'>{$row['physicalplayer_id']}</td>
                                        </tr>
                                        ";
                }
              } else {
                echo "No players found";
              }

              if ($result) {
                mysqli_free_result($result); // free result set 
              }

            // close connection 
              ?>
              <?php
              // $theName = "";
              // $thePosition = "";
              // $therating = "";
              $theName = "";
              $thePosition = "";
              $therating = "";
              $errorMessage = "";

              // if($_SERVER['REQUEST_METHOD'] == 'POST'){
              //     $theName = $_POST['theName'];
              //     $thePosition = $_POST['thePosition'];
              //     $therating = $_POST['theRating'];

              // };

              // if (empty($theName) || empty($thePosition) || empty($therating))
              // {
              //     $errorMessage = "All fields are required!";
              //     break;

              // };

              if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $theName = $_POST['theName'] ?? '';
                $thePosition = $_POST['thePosition'] ?? '';
                $therating = $_POST['theRating'] ?? '';

                if (empty($theName) || empty($thePosition) || empty($therating)) {
                  $errorMessage = "All fields are required!";
                } else {
                  // Process valid form data here
                  // You can add database insertion code here
                }
              }
              ?>

            </tbody>
          </table>
        </div>
    </div>





    <div style="display: none;" class="form-player ">
      <form id="add-player-form">
        <div class="flex">
          <h2>choose your formation</h2>
          <header class="navbar">
            <button class="menu__bar menu__bar1" id="toggle-form-x" >
              <i class="fa-solid fa-bars"></i>
            </button>
          </header>
        </div>


        <select id="formatio ">
          <option value="4-3-3" selected>4-3-3</option>
          <option value="4-4-2">4-4-2</option>
        </select>
        <h2>add a player</h2>

        <label for="player-photo">Player Photo URL:</label>
        <input type="url" id="player-photo" name="photo">

        <label for="player-name">the name:</label>
        <input type="text" id="player-name" required>

        <label for="player-postion">the postion:</label>
        <select id="player-position">
          <option value="">choose the postion</option>
          <option value="GK">Gardien de but (GK)</option>
          <option value="ST">Attaquant (ST)</option>
          <option value="RW">Ailier droit (RW)</option>
          <option value="LW">Ailier gauche (LW)</option>
          <option value="CB">Défenseur central (CB)</option>
          <option value="LB">Latéral gauche (LB)</option>
          <option value="RB">Latéral droit (RB)</option>
          <option value="CD">Défenseurs centraux (CD)</option>
          <option value="CM">Milieu central (CM)</option>
          <option value="LM">Milieu gauche (LM)</option>
          <option value="RM">Milieu droit (RM)</option>
        </select>

        <label for="player-flag">Player Nationality Flag:</label>
        <input type="url" id="player-nationality-flag" name="flag" accept="image/*">

        <label for="player-club">the club:</label>
        <input type="text" id="player-club" name="club">

        <label for="player-logo">Club Logo:</label>
        <input type="url" id="player-logo" name="logo" accept="image/*">

        <div class="input-group">
          <label for="player-rating">the rate:</label>
          <input type="number" id="player-rating" name="rating" min="10" max="99">
        </div>


        <div class="input-group" id="diving-section">
          <label for="player-diving">Diving:</label>
          <input type="number" id="player-diving" name="diving" min="10" max="99">
        </div>

        <div class="input-group" id="pace-section">
          <label for="player-pace">the pace:</label>
          <input type="number" id="player-pace" name="pacing" min="10" max="99">
        </div>

        <div class="input-group" id="handling-section">
          <label for="player-handling">Handling:</label>
          <input type="number" id="player-handling" name="handling" min="10" max="99">
        </div>

        <div class="input-group" id="shooting-section">
          <label for="player-shooting">the shooting:</label>
          <input type="number" id="player-shooting" name="shooting" min="10" max="99">
        </div>


        <div class="input-group" id="kicking-section">
          <label for="player-kicking">Kicking:</label>
          <input type="number" id="player-kicking" name="kicking" min="10" max="99">
        </div>

        <div class="input-group" id="passing-section">
          <label for="player-passing">the passing:</label>
          <input type="number" id="player-passing" name="passing" min="10" max="99">
        </div>


        <div class="input-group" id="reflex-section">
          <label for="player-reflexes">Reflexes:</label>
          <input type="number" id="player-reflexes" name="reflexes" min="10" max="99">
        </div>

        <div class="input-group" id="dribbling-section">
          <label for="player-dribbling">the dribbling:</label>
          <input type="number" id="player-dribbling" name="dribbling" min="10" max="99">
        </div>


        <div class="input-group" id="speed-section">
          <label for="player-speed">Speed:</label>
          <input type="number" id="player-speed" name="speed" min="10" max="99">
        </div>

        <div class="input-group" id="defending-section">
          <label for="player-defending">the defending:</label>
          <input type="number" id="player-defending" name="defending" min="10" max="99">
        </div>


        <div class="input-group" id="positioning-section">
          <label for="positioning">Positioning:</label>
          <input type="number" id="player-positioning" name="positioning" min="10" max="99">
        </div>

        <div class="input-group" id="physical-section">
          <label for="physical">the physical:</label>
          <input type="number" id="player-physical" name="physical" min="10" max="99">
        </div>

        <button id="submitbtn" type="submit">add palyer</button>

      </form>

    </div>

    </main>

    <!-- <footer class="w-full bg-white text-right p-4">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer> -->
  </div>

  </div>

  <!-- AlpineJS -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
  <!-- ChartJS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

  <script>
    var chartOne = document.getElementById('chartOne');
    var myChart = new Chart(chartOne, {
      type: 'bar',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    var chartTwo = document.getElementById('chartTwo');
    var myLineChart = new Chart(chartTwo, {
      type: 'line',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });
  </script>
  <script src="./assets/script/script.js"></script>

</body>
<?php
  mysqli_close($connection); 
?>
</html>