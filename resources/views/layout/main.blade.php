<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @tailwind base;
        @tailwind components;
        @tailwind utilities;
    </style>
</head>
<body>
    <?php
        $noHP = "087720681873";
        $sendMessage = "Hallo.., Kami tertarik dengan product anda!";
    ?>

    <!-- whatsapp -->
    <div class="fixed bottom-0 left-0 right-0 bg-black">
        <div class="relative container mx-auto max-w-[768px] md:max-w-[1020px] px-4">
            <div class="cursor-pointer absolute right-4 bottom-4 animate-bounce z-50">
                <a href="https://api.whatsapp.com/send?phone={{ $noHP }}&text={{ $sendMessage }}">
                    <img src="https://img.icons8.com/?size=512&id=16713&format=png" alt="" class="rounded-full w-[50px] h-[50px]">
                </a>
            </div>
        </div>
    </div>

    <!-- Navigasi -->
    <div id="navigasi" class="fixed top-0 right-0 left-0 z-50 bg-slate-500">
        <nav class="relative container mx-auto max-w-[768px] md:max-w-[1020px] py-5 px-4 text-white sm:flex sm:justify-between sm:items-center shadow-lg shadow-indigo-800 sm:shadow-none rounded-b-md">
            <div class="flex justify-between items-center">
                <u>
                    <h1 class="font-bold text-xl uppercase">@yield('namePage')<span class="text-cyan-500 capitalize">page</span>
                    </h1>
                </u>
    
                    <!-- search bar end -->
                <div class="sm:hidden">
                    <nav class="w-full flex  gap-5">
                        
                        <!-- search bar -->
                        <div class="">
                            <div class="">
                                <input type="checkbox" class="absolute opacity-0 px-3 py-1 mt-0.5 bg-cyan-500 text-white w-[26px] h-[26px] cursor-pointer peer">
                                <img src="https://img.icons8.com/?size=512&id=7695&format=png" alt="" class="w-[25px] h-[25px] mt-0.5">
                                <div class="absolute top-[70px] left-4 right-4 -z-50 peer-checked:block -translate-y-full peer-checked:translate-y-5 peer-checked:duration-500 transition-all duration-500 text-black">
                                    <form action="" class="w-full">
                                        <label for=""></label>
                                            <input type="search" class="italic w-full py-3 px-4 rounded-xl bg-slate-500" placeholder="search in">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- hamburger menu -->
                        <div class="relative space-y-1">
                            <input type="checkbox" class="absolute peer cursor-pointer z-10 opacity-0 w-[25px] h-[25px]">
                            
                            <!-- toggle inti -->
                            <div class="w-6 h-1 bg-white peer-checked:rotate-180 peer-checked:opacity-0 peer-checked:translate-y-2 peer-checked:duration-500 transition-all ease-in-out duration-500"></div>
                            <div class="w-6 h-1 bg-white peer-checked:opacity-0 peer-checked:scale-0 peer-checked:duration-500 transition-all ease-in-out duration-500"></div>
                            <div class="w-6 h-1 bg-white peer-checked:-rotate-180 peer-checked:opacity-0 peer-checked:-translate-y-2 peer-checked:duration-500 transition-all ease-in-out duration-500"></div>

                            <!-- toggle pengganti -->
                            <div class="w-6 h-1 bg-white translate-x-6 -translate-y-9 -rotate-45 opacity-0 peer-checked:translate-x-0 peer-checked:-translate-y-4 peer-checked:opacity-100 duration-300"></div>
                            <div class="w-6 h-1 bg-white translate-x-6 translate-y-0 rotate-45 opacity-0 peer-checked:translate-x-0 peer-checked:-translate-y-6 peer-checked:opacity-100 duration-300"></div>

                            <!-- side navbar -->
                            <div class="absolute top-10 -right-full h-screen bg-slate-500 transition-all duration-500 translate-x-full w-[250px] peer-checked:translate-x-0 peer-checked:-right-4 -z-50">
                                <ul class="relative flex flex-col items-center pt-5 text-left">
                                    <a href="/homepage" class="w-full">
                                        <li class="cursor-pointer text-black text-lg font-bold font-mono hover:text-orange-600 hover:bg-gray-200 py-4 px-6 focus:text-orange-500">Home</li>
                                    </a>
                                    <a href="/aboutpage" class="w-full">
                                        <li class="cursor-pointer text-black text-lg font-bold font-mono hover:text-orange-600 hover:bg-gray-200 py-4 px-6">About</li>
                                    </a>
                                    <a href="/contactpage" class="w-full">
                                        <li class="cursor-pointer text-black text-lg font-bold font-mono hover:text-orange-600 hover:bg-gray-200 py-4 px-6">Contact</li>
                                    </a>
                                    <a href="/productpage" class="w-full">
                                        <li class="cursor-pointer text-black text-lg font-bold font-mono hover:text-orange-600 hover:bg-gray-200 py-4 px-6">Product</li>
                                    </a>
                                </ul>
                            </div>
                            </input>
                        </div>
                        <!-- hamburger end -->

                    </nav>
                </div>
            </div>

            <!-- navbar -->
            <div class="hidden sm:flex">
                <ul class="bg-slate-500 -translate-x-4 px-4 pb-2 pt-8 sm:opacity-100 sm:transition-none sm:relative sm:flex sm:gap-5 sm:translate-x-0 sm:px-0 sm:pt-0 sm:pb-0">
                    <li class="cursor-pointer text-white text-lg font-bold font-mono hover:text-orange-600 hover:duration-500 transition-all duration-1000 pb-3 sm:pb-0 w-[40px] sm:w-auto"><a href="/homepage">Home</a></li>
                    <li class="cursor-pointer text-white text-lg font-bold font-mono hover:text-orange-600 hover:duration-500 transition-all duration-1000 pb-3 sm:pb-0 w-[40px] sm:w-auto"><a href="/aboutpage">About</a></li>
                    <li class="group hover:text-orange-600 hover:duration-500 transition-all duration-1000 relative cursor-pointer text-white text-lg font-bold font-mono pb-3 sm:pb-0 w-[100px] sm:w-auto">
                        <div class="hover:text-orange-600 group">
                            <a href="/contactpage">Contact</a>
                            <button class="-rotate-90 group-hover:rotate-90 group-hover:duration-700 hover:duration-500 transition-all duration-1000">></button>
                        </div>
                        <div class="sm:absolute hidden sm:right-0 group-hover:block dropdown-menu">
                            <ul class="sm:mt-6 bg-slate-500 min-w-full pl-2 pr-4 py-1 rounded-b-lg">
                                <li class="py-1">
                                    <a href="/contactpage" class="block text-cyan-500 hover:text-teal-300">email@gmail.com</a>
                                </li>
                                <li class="py-1">
                                    <a href="https://api.whatsapp.com/send?phone={{ $noHP }}&text={{ $sendMessage }}" class="block text-cyan-500 hover:text-teal-300">08123467890</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="group hover:text-orange-600 hover:duration-500 transition-all duration-1000 relative cursor-pointer text-white text-lg font-bold font-mono pb-3 sm:pb-0 w-[100px] sm:w-auto">
                        <div class="hover:text-orange-600 group">
                            <a href="/productpage">Product</a>
                            <button class="-rotate-90 group-hover:rotate-90 group-hover:duration-500 hover:duration-500 transition-all duration-1000">></button>
                        </div>
                        <div class="sm:absolute hidden sm:right-0 group-hover:block dropdown-menu">
                            <ul class="sm:mt-6 bg-slate-500 min-w-full pl-2 pr-4 py-1 rounded-b-lg">
                                <li class="py-1">
                                    <a href="/productpage" class="block text-cyan-500 hover:text-teal-300">Laptop</a>
                                </li>
                                <li class="py-1">
                                    <a href="/productpage" class="block text-cyan-500 hover:text-teal-300">SmartPhone</a>
                                </li>
                                <li href="/productpage" class="py-1">
                                    <a class="block text-cyan-500 hover:text-teal-300">Television</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- navbar end -->

        </nav>
    </div>

    @yield('container')

    <div class="bg-neutral-200 text-center text-white dark:bg-neutral-600">
        <footer class="container mx-auto  max-w-[752px] md:max-w-[1020px] py-5 px-4">
            <div class="container pt-9">
                <div class="mb-9 flex justify-center">
                    <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200 hover:scale-110 hover:duration-600">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                    <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200 hover:scale-110 hover:duration-600">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                        </svg>
                    </a>
                    <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200 hover:scale-110 hover:duration-600">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                            fill-rule="evenodd"
                            clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200 hover:scale-110 hover:duration-600">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    <a href="#!" class="mr-9 text-neutral-800 dark:text-neutral-200 hover:scale-110 hover:duration-600">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                        </svg>
                    </a>
                    <a href="#!" class="text-neutral-800 dark:text-neutral-200 hover:scale-110 hover:duration-600">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!--Copyright section-->
            <div
                class="bg-neutral-300 p-4 text-center text-neutral-700 dark:bg-neutral-700 dark:text-neutral-200">
                © 2023 Copyright:
                <i><a
                class="text-neutral-800 dark:text-neutral-400"
                href="https://zarriq22.github.io/CV---Azhar/">Azharrafiq_SJN</a></i>
            </div>
        </footer>
    </div>
</body>
</html>