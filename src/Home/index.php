<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
    <link rel="stylesheet" href="./style.css">
    <script type="module" src="./index.js"></script>
    <title>Home</title>
</head>
    <body class="bg-primary">
        <header class=" flex flex-row justify-around pt-6 pb-4 bg-white font-bold">

            <div class="text-3xl">Jin80</div>

            <div class=" flex flex-row gap-14">
                <div class="hover">
                    <a href="./index.html"><p>Home</p></a>
                    <div class="hover_div border border-black w-full"></div>
                </div>
                <div class="hover">
                    <a href=""><p>About Us</p></a>
                    <div class="hover_div border border-black w-full"></div>
                </div>
                <div class="hover">
                    <a href=""><p>Actuality</p></a>
                    <div class="hover_div border border-black w-full"></div>
                </div>
                <div class="hover">
                    <a href=""><p>Contact</p></a>
                    <div class="hover_div border border-black w-full"></div>
                </div>
            </div>

            <div class="flex flex-row justify-center items-center">
                <?php
                    if(isset($_COOKIE['LOGGED_USER'])) {
                        $logged_user_surname = $_COOKIE['LOGGED_USER'];
                        echo '<div>Hello,' . " " . $logged_user_surname . "!</div>";
                        echo '<div class="ml-16"> <a href=""><p>Log Out</p></a> </div>';
                    } else {
                        echo '<div class="bg-primary rounded-md pt-2 pb-2 pl-5 pr-5 text-white hover:bg-blue-950 transition-colors duration-200 ease-in-out"><a href="../Login/index.html"><p>Login</p></a></div>';
                    }
                ?>
            </div>

        </header>

        <main class="flex flex-col gap-32">

            <div>
                <div class="carousel">
                    <div class="progress-bar progress-bar--primary hide-on-desktop">
                      <div class="progress-bar__fill"></div>
                    </div>
                  
                  <header class="main-post-wrapper">
                    
                    <div class="slides">
                      <article class="main-post main-post--not-active">
                            <div class="main-post__image relative overflow-hidden">
                                <div class="w-bubble h-bubble mt-32 rounded-full absolute right-0 -mr-96 bg-gray-200 flex items-center justify-center"></div>
                                <div class="w-bubble h-bubble mt-48 rounded-full absolute right-0 -mr-64 bg-white flex items-center justify-center text-6xl text-black font-bold"><p class="w-full ml-40">BMW I8</p></div>
                                <img src="../../assets/img/BMW/BMW_I8.jpg" alt="What To Watch For in the 2019 Hungarian Grand Prix" class="w-full h-full"/>
                            </div>
                            <div class="main-post__content">
                                <div class="main-post__tag-wrapper">
                                </div>
                                <a class="main-post__link" href="#">
                                        <svg
                                        class="main-post__link-icon main-post__link-icon--play-btn"
                                        width="30"
                                        height="30"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        >
                                        <circle
                                            cx="10"
                                            cy="10"
                                            r="9"
                                            stroke="#C20000"
                                            stroke-width="2"
                                        />
                                        <path d="M14 10L8 6V14L14 10Z" fill="white" />
                                        </svg>
                                    </a>
                            </div>
                      </article>

                        <article class="main-post main-post--not-active">
                            <div class="main-post__image relative overflow-hidden">
                                <div class="w-bubble h-bubble mt-32 rounded-full absolute right-0 -mr-96 bg-yellow-500 flex items-center justify-center"></div>
                                <div class="w-bubble h-bubble mt-48 rounded-full absolute right-0 -mr-64 bg-yellow-600 flex items-center justify-center text-6xl text-white font-bold"><p class="w-full ml-40">FERARI SPEC</p></div>
                                <img src="../../assets/img/FERARI/Ferari_spec.jpg" alt="What To Watch For in the 2019 Hungarian Grand Prix" class="w-full h-full"/>
                            </div>
                            <div class="main-post__content">
                                <div class="main-post__tag-wrapper">
                                </div>
                                <a class="main-post__link" href="#">
                                        <svg
                                        class="main-post__link-icon main-post__link-icon--play-btn"
                                        width="30"
                                        height="30"
                                        viewBox="0 0 20 20"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        >
                                        <circle
                                            cx="10"
                                            cy="10"
                                            r="9"
                                            stroke="#C20000"
                                            stroke-width="2"
                                        />
                                        <path d="M14 10L8 6V14L14 10Z" fill="white" />
                                        </svg>
                                    </a>
                            </div>
                        </article>
                    </div>
                  </header>
                  
                  <div class="posts-wrapper hide-on-mobile">
                    <article class="post post--active">
                      <div class="progress-bar">
                        <div class="progress-bar__fill"></div>
                      </div>
                      <header class="post__header">
                      </header>
                    </article>
                    <article class="post">
                      <div class="progress-bar">
                        <div class="progress-bar__fill"></div>
                      </div>
                    </article>
                  </div>
                  </div>
            </div>

            <div class="flex flex-col justify-center items-center gap-10">

                <div  class="flex flex-row justify-around w-full">
                    <div></div>
                    <div class="flex flex-col justify-center items-center text-white gap-4">
                        <p class="font-bold text-5xl">Collections</p>
                        <p>Enjoy new specification</p>
                    </div>
                    <div class="text-black bg-white h-10 flex flex-col justify-center pl-4 pr-4 rounded-md font-bold mt-8 hover:bg-blue-950 hover:text-white transition-colors duration-200 ease-in-out"><a href=""><p>See more</p></a></div>
                </div>

                <div class="flex flex-row justify-around items-center gap-14">

                    <div class="flex flex-col justify-center items-center text-white relative">
                        <div class="rounded-2xl overflow-hidden">
                            <img id="Rolls_royce" src="../../assets/img/marques/Rolls_royce.svg" alt="marque relative" class="hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                        </div>
                        <p class="absolute bottom-4 text-2xl">Rolls Royce</p>
                    </div>
                    <div class="flex flex-col justify-center items-center text-white relative">
                        <div class="rounded-2xl overflow-hidden">
                            <img id="Lexus" src="../../assets/img/marques/Lexus.svg" alt="marque" class="hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                        </div>
                        <p class="absolute bottom-4 text-2xl">Lexus</p>
                    </div>
                    <div class="flex flex-col justify-center items-center text-white relative">
                        <div class="rounded-2xl overflow-hidden">
                            <img id="Toyota" src="../../assets/img/marques/Toyota.svg" alt="marque" class="hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                        </div>
                        <p class="absolute bottom-4 text-2xl">Toyota</p>
                    </div>
                    <div class="flex flex-col justify-center items-center text-white relative">
                        <div class="rounded-2xl overflow-hidden">
                            <img id="BMW" src="../../assets/img/marques/BMW.svg" alt="marque" class="hover:scale-125 transition-all duration-300 ease-in-out cursor-pointer">
                        </div>
                        <p class="absolute bottom-4 text-2xl">BMW</p>
                    </div>

                </div>

            </div>

            <div class="flex flex-col gap-8">

                <div class="flex flex-col justify-center items-center text-white gap-4">
                    <h1 class="font-bold text-5xl">Special edition</h1>
                    <p>Enjoy new specification so special</p>
                </div>

                <div class="flex flex-col items-center text-white text-2xl gap-4 font-bold">
                    <div class="overflow-hidden h-special">
                        <img src="../../assets/img/FERARI/Ferari_spec.jpg" alt="car" class="-mt-96">
                    </div>
                    <h2>FERARI SPEC</h2>
                </div>

            </div>

            <div class="flex flex-col justify-center items-center gap-10 w-full">

                <div class="flex flex-row justify-around w-full gap-10">

                    <div class="flex flex-col justify-center items-start text-white gap-4">
                        <h1 class="font-bold text-5xl">Most popular</h1>
                        <p>Our popuular picks for most favorited Nike Men's & Womens shoes.</p>
                    </div>
                    <div class="text-black bg-white h-10 flex flex-col justify-center pl-4 pr-4 rounded-md font-bold mt-8 hover:bg-blue-950 hover:text-white transition-colors duration-200 ease-in-out"><a href=""><p>See more</p></a></div>

                </div>

                <div class="flex flex-row justify-center items-center gap-8">

                    <div class="flex flex-col justify-center items-center text-white text-2xl gap-4">
                        <div class="overflow-hidden w-popular_width h-popular_height rounded-xl">
                            <img src="../../assets/img/ROLLS_ROYCE/rolls_royce_cullinan.jpg" alt="car" class="scale-popular -ml-72">
                        </div>
                        <p>Rolls royce Cullinan</p>
                    </div>
                    <div class="flex flex-col justify-center items-center text-white text-2xl gap-4">
                        <div class="overflow-hidden w-popular_width h-popular_height rounded-xl">
                            <img src="../../assets/img/ROLLS_ROYCE/rolls_royce_cullinan.jpg" alt="car" class="scale-popular -ml-72">
                        </div>
                        <p>Rolls royce Cullinan</p>
                    </div>
                    <div class="flex flex-col justify-center items-center text-white text-2xl gap-4">
                        <div class="overflow-hidden w-popular_width h-popular_height rounded-xl">
                            <img src="../../assets/img/ROLLS_ROYCE/rolls_royce_cullinan.jpg" alt="car" class="scale-popular -ml-72">
                        </div>
                        <p>Rolls royce Cullinan</p>
                    </div>
                    <div class="flex flex-col justify-center items-center text-white text-2xl gap-4">
                        <div class="overflow-hidden w-popular_width h-popular_height rounded-xl">
                            <img src="../../assets/img/ROLLS_ROYCE/rolls_royce_cullinan.jpg" alt="car" class="scale-popular -ml-72">
                        </div>
                        <p>Rolls royce Cullinan</p>
                    </div>

                </div>
                
            </div>

            <div class="flex flex-row justify-around text-white gap-4">

                <div class="flex flex-col items-start text-white gap-4 w-text">
                    <h1  class="font-bold text-5xl">Model of the week</h1>
                    <p>Gegeoju ayobami, Omolayo isaac, tomilade, osalusi and olubusoye partnered with BMW to model for the series from the brand</p>
                    <div class="text-black bg-white h-10 flex flex-col justify-center pl-4 pr-4 rounded-md font-bold mt-8 hover:bg-blue-950 hover:text-white transition-colors duration-200 ease-in-out"><a href=""><p>View Interview</p></a></div>
                </div>
                <img src="../../assets/img/BMW/BMW.avif" alt="img" class="h-96 rounded-xl mr-48 mb-32">

            </div>

        </main>

        <footer>

        </footer>
    </body>
</html>