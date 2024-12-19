<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUT Team Builder</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://kit.fontawesome.com/983fb12c47.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>

<body>
    <!-- <header class="navbar">
        <div class="menu__bar" id="toggle-form" display = 'none'>
            <i class="fa-solid fa-bars"></i>
        </div>
    </header> -->
    <main>


    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.php" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> add player
            </button>
        </div>
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


        <div class="background-container">
            <div class="forwards-row">
                <div id="card-1" class="card">
                    <div class="player-info">

                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name" data-field="name"></h3>

                        <p class="player-position" data-field="position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating" data-field="rating"></span></li>
                            <li><span class="pace" data-field="pace"></span></li>
                            <li><span class="shooting" data-field="shooting"></span></li>
                            <li><span class="passing" data-field="passing"></span></li>
                            <li><span class="dribbling" data-field="dribbling"></span></li>
                            <li><span class="defending" data-field="defending"></span></li>
                            <li><span class="physical" data-field="physical"></span></li>
                        </ul>

                    </div>
                </div>
                <div id="card-2" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
                <div id="card-3" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="Cmidfielders-row">
                <div id="card-4" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
                <div id="card-5" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
                <div id="card-6" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="defenders-row">
                <div id="card-7" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
                <div id="card-8" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
                <div id="card-9" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
                <div id="card-10" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div id="card-11" class="card">
                    <div class="player-info">
                        <div class="player-image">
                            <img src="" alt="">
                        </div>

                        <h3 class="player-name"></h3>

                        <p class="player-position"></p>

                        <div class="logos">
                            <div class="country-logo">
                                <img src="" alt="">
                            </div>
                            <div class="team-logo">
                                <img src="" alt="">
                            </div>
                        </div>

                        <div class="stats-names">
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p></p>

                        </div>

                        <ul class="player-stats">
                            <li><span class="rating"></span></li>
                            <li><span class="pace"></span></li>
                            <li><span class="shooting"></span></li>
                            <li><span class="passing"></span></li>
                            <li><span class="dribbling"></span></li>
                            <li><span class="defending"></span></li>
                            <li><span class="physical"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


       

    </main>
    <!-- <div class="extra-cards-section">
        <div class="extra-cards-container">
            <div class="extra-card" id="extra-card-1">

                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-2">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-3">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-4">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-5">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-6">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-7">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-8">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-9">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
            <div class="extra-card" id="extra-card-10">
                <div class="player-info">
                    <div class="player-image">
                        <img src="" alt="">
                    </div>

                    <h3 class="player-name"></h3>

                    <p class="player-position"></p>

                    <div class="logos">
                        <div class="country-logo">
                            <img src="" alt="">
                        </div>
                        <div class="team-logo">
                            <img src="" alt="">
                        </div>
                    </div>

                    <div class="stats-names">
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>
                        <p></p>

                    </div>

                    <ul class="player-stats">
                        <li><span class="rating"></span></li>
                        <li><span class="pace"></span></li>
                        <li><span class="shooting"></span></li>
                        <li><span class="passing"></span></li>
                        <li><span class="dribbling"></span></li>
                        <li><span class="defending"></span></li>
                        <li><span class="physical"></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <script src="./assets/script/script.js"></script>
</body>

</html>