<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailwind Admin Template</title>
  <meta name="author" content="David Grzyb">
  <meta name="description" content="">
  <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->
  <!-- Tailwind -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
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
  <!-- <link rel="stylesheet" href="./assets/css/style.css"> -->

</head>

<body class="bg-gray-100 font-family-karla flex">

  <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
    <div class="p-6">
      <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
    </div>
    <nav class="text-white text-base font-semibold pt-3">
      <a href="index.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-tachometer-alt mr-3"></i>
        Dashboard
      </a>
      <a href="terrain.php" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-sticky-note mr-3"></i>
        Blank Page
      </a>
      <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-table mr-3"></i>
        Tables
      </a>
      <a href="forms.php" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
        <i class="fas fa-align-left mr-3"></i>
        Forms
      </a>
      <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-tablet-alt mr-3"></i>
        Tabbed Content
      </a>
      <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
        <i class="fas fa-calendar mr-3"></i>
        Calendar
      </a>
    </nav>
    <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
      <i class="fas fa-arrow-circle-up mr-3"></i>
      Upgrade to Pro!
    </a>
  </aside>

  <div class="relative w-full flex flex-col h-screen overflow-y-hidden">
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

    <!-- Mobile Header & Nav -->
    <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
      <div class="flex items-center justify-between">
        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
          <i x-show="!isOpen" class="fas fa-bars"></i>
          <i x-show="isOpen" class="fas fa-times"></i>
        </button>
      </div>

      <!-- Dropdown Nav -->
      <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="index.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-tachometer-alt mr-3"></i>
          Dashboard
        </a>
        <a href="blank.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-sticky-note mr-3"></i>
          Blank Page
        </a>
        <a href="tables.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-table mr-3"></i>
          Tables
        </a>
        <a href="forms.html" class="flex items-center active-nav-link text-white py-2 pl-4 nav-item">
          <i class="fas fa-align-left mr-3"></i>
          Forms
        </a>
        <a href="tabs.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-tablet-alt mr-3"></i>
          Tabbed Content
        </a>
        <a href="calendar.html" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-calendar mr-3"></i>
          Calendar
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-cogs mr-3"></i>
          Support
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-user mr-3"></i>
          My Account
        </a>
        <a href="#" class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item">
          <i class="fas fa-sign-out-alt mr-3"></i>
          Sign Out
        </a>
        <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
          <i class="fas fa-arrow-circle-up mr-3"></i> Upgrade to Pro!
        </button>
      </nav>
      <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button> -->
    </header>

    <div class="form-player">
      <form method="POST" id="player-form" class="space-y-4 p-6 bg-white shadow-md rounded-lg overflow-y-scroll max-h-[500px] mx-auto sm:max-w-md md:max-w-lg lg:max-w-xl h-screen">
        <div class="flex items-center justify-between">

          </header>

          </select>
        </div>
        <!-- <h2 class="text-xl font-semibold mt-6">Add a Player</h2> -->
        <div class="space-y-4">
          <div>
            <label for="player-photo" class="block text-sm font-medium text-gray-700">Player Photo URL:</label>
            <input type="url" id="player-photo" name="photo" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter photo URL">
          </div>

          <div>
            <label for="player-name" class="block text-sm font-medium text-gray-700">The Name:</label>
            <input type="text" id="player-name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter player name">
          </div>

          <!-- Player Position -->
          <div>
            <label for="player-position" class="block text-sm font-medium text-gray-700">The Position:</label>
            <select id="player-position" name="position" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
              <option value="">Choose the Position</option>
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
          </div>

          <!-- Player Nationality Flag -->
          <div>
            <label for="player-nationality-flag" class="block text-sm font-medium text-gray-700">Player Nationality Flag:</label>
            <input type="url" id="player-nationality-flag" name="flag" accept="image/*" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <!-- Player Club -->
          <div>
            <label for="player-club" class="block text-sm font-medium text-gray-700">The Club:</label>
            <input type="text" id="player-club" name="club" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the club name">
          </div>

          <!-- Club Logo -->
          <div>
            <label for="player-logo" class="block text-sm font-medium text-gray-700">Club Logo:</label>
            <input type="url" id="player-logo" name="logo" accept="image/*" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <!-- Player Rating -->
          <div class="input-group">
            <label for="player-rating" class="block text-sm font-medium text-gray-700">The Rate:</label>
            <input type="number" id="player-rating" name="rating" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
          </div>

          <div class="space-y-4">
            <div class="input-group" id="diving-section">
              <label for="player-diving" class="block text-sm font-medium text-gray-700">Diving:</label>
              <input type="number" id="player-diving" name="diving" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="input-group" id="pace-section">
              <label for="player-pace" class="block text-sm font-medium text-gray-700">The Pace:</label>
              <input type="number" id="player-pace" name="pacing" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="input-group" id="handling-section">
              <label for="player-handling" class="block text-sm font-medium text-gray-700">Handling:</label>
              <input type="number" id="player-handling" name="handling" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="input-group" id="shooting-section">
              <label for="player-shooting" class="block text-sm font-medium text-gray-700">The Shooting:</label>
              <input type="number" id="player-shooting" name="shooting" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="input-group" id="kicking-section">
              <label for="player-kicking" class="block text-sm font-medium text-gray-700">Kicking:</label>
              <input type="number" id="player-kicking" name="kicking" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="input-group" id="passing-section">
              <label for="player-passing" class="block text-sm font-medium text-gray-700">The Passing:</label>
              <input type="number" id="player-passing" name="passing" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="input-group" id="reflex-section">
              <label for="player-reflexes" class="block text-sm font-medium text-gray-700">Reflexes:</label>
              <input type="number" id="player-reflexes" name="reflexes" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="input-group" id="dribbling-section">
              <label for="player-dribbling" class="block text-sm font-medium text-gray-700">The Dribbling:</label>
              <input type="number" id="player-dribbling" name="dribbling" min="10" max="99" class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
          </div>
        </div>
        <div class="p-6">
          <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 mt-4 rounded-lg hover:bg-blue-700">Save Player</button>
        </div>
      </form>
    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>

</html>