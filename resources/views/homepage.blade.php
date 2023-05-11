@extends('layout/main')

<?php
    $noHP = "087720681873";
    $sendMessage = "Hallo.., Kami tertarik dengan product anda!"
    
?>

@section('title', 'Home Page')

@section('namePage', 'home')

@section('container')
    <div id="header" class="bg-gradient-to-r from-violet-500 to-fuchsia-500">
        <header class="container mx-auto px-4 max-w-[752px] md:max-w-[1020px] pt-28 mt-0 sm:flex sm:justify-between items-center pb-16">
            <div class="flex sm:justify-between items-center gap-7">
                <h1 class="uppercase text-4xl text-white font-extrabold">segar</h1>
                <p class="w-[1px] h-[55px] border-2 border-white"></p>
                <div>
                    <p class="text-white capitalize font-bold text-lg">coming soon</p>
                    <span class="text-white capitalize text-sm">website template</span>
                </div>
            </div>
            <div class="flex justify-end sm:justify-between gap-5 pr-4 items-center sm:gap-7">
                <div class="relative bg-slate-200 opacity-40 px-8 py-8 rounded-md sm:px-10 sm:py-10 hover:scale-110 hover:duration-500 transition-all duration-500">
                    <a href="https://www.figma.com/">
                        <div class="absolute px-6 py-5 -top-2 -right-3 bg-white rounded-md font-extrabold sm:px-8 sm:py-7">
                            Ps
                        </div>
                    </a>
                </div>
                <div class="relative bg-slate-200 opacity-40 px-8 py-8 rounded-md sm:px-10 sm:py-10 hover:scale-110 hover:duration-500 transition-all duration-500">
                    <a href="https://www.adobe.com/id_en/products/photoshop.html">
                        <div class="absolute px-6 py-5 -top-2 -right-3 bg-white rounded-md font-extrabold sm:px-8 sm:py-7">
                            Fg
                        </div>
                    </a>
                </div>
            </div>
        </header>
    </div>

    <!-- Content -->
    <div id="content" class="bg-gradient-to-r from-violet-500 to-fuchsia-500 pt-10">
        <section class="relative container mx-auto px-4 max-w-[752px] md:max-w-[1020px] pt-64 flex justify-between items-center">
            <div class="absolute bottom-0 right-0 bg-slate-500 opacity-60 w-[570px] rounded-tl-2xl">
                <div class="absolute right-0 bottom-0 px-8 py-8 bg-white text-black w-[400px] sm:w-[650px] md:w-[800px] rounded-tl-2xl">
                    <div>
                        <div class="absolute w-[60px] -top-7 right-40 grid grid-cols-5 gap-2">
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                            <p class="border-2 border-black w-[1px]"></p>
                        </div>
                        <div class="flex justify-between pb-14 items-center">
                            <h1 class="uppercase text-lg text-black font-bold sm:text-xl md:text-2xl">segar</h1>
                            <div class="flex justify-between gap-3 items-center">
                                <ul class="gap-3 sm:flex">
                                    <li class="cursor-pointer hover:text-cyan-500"><a href="/contactpage">email@gmail.com</a></li>
                                    <li class="cursor-pointer hover:text-cyan-500"><a href="https://api.whatsapp.com/send?phone={{ $noHP }}&text={{ $sendMessage }}">081234567890</a></li>
                                </ul>
                                <button class="px-6 py-2 bg-rose-700 rounded-md capitalize text-white active:bg-rose-900 hover:ring hover:ring-amber-400"><a href="/contactpage">notify me</a></button>
                            </div>
                        </div>
                    </div>
                    <p class="indent-8 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere at similique laborum repellat reprehenderit ut totam error et placeat, eius harum blanditiis, a natus recusandae quisquam laudantium dolor eaque expedita!</p>
                </div>
            </div>
        </section>
    </div>

    <!-- page product -->
    <section id="content" class="bg-pink-500 pt-10 text-white">
        <div class="container mx-auto px-4 max-w-[752px] md:max-w-[1020px]">
            <div class="flex justify-end pb-5">
                <a href="/productpage"><button class="px-5 py-2 rounded-full active:bg-pink-800 bg-rose-500 text-white">View All</button></a>
            </div>
            <div class="grid grid-cols-2 sm:grid sm:grid-cols-3 md:grid-cols-4 gap-3">
                <div class="flex flex-col items-center gap-3 pb-10">
                    <img src="https://media.ldlc.com/r1600/ld/products/00/05/82/02/LD0005820208_1.jpg" alt="" class="cursor-pointer">
                    <p>
                    Apple MacBook Pro M1 13.3
                    </p>
                    <label for="">Rp. 5.000.000</label>
                </div>
                <div class="flex flex-col items-center gap-3 pb-10">
                    <img src="https://i0.wp.com/static.bmdstatic.com/pk/product/large/5c4993b2b1d30.jpg" alt="" class="cursor-pointer">
                    <p>
                    Handphone
                    </p>
                    <label for="">Rp. 2.000.00</label>
                </div>
                <div class="flex flex-col items-center gap-3 pb-10">
                    <img src="https://media.ldlc.com/r1600/ld/products/00/05/82/02/LD0005820208_1.jpg" alt="" class="cursor-pointer">
                    <p>
                    Apple MacBook Pro M1 13.3
                    </p>
                    <label for="">Rp. 5.000.000</label>
                </div>
                <div class="flex flex-col items-center gap-3 pb-10">
                    <img src="https://i0.wp.com/static.bmdstatic.com/pk/product/large/5c4993b2b1d30.jpg" alt="" class="cursor-pointer">
                    <p>
                    Handphone
                    </p>
                    <label for="">Rp. 2.000.00</label>
                </div>
                <div class="flex flex-col items-center gap-3 pb-10">
                    <img src="https://media.ldlc.com/r1600/ld/products/00/05/82/02/LD0005820208_1.jpg" alt="" class="cursor-pointer">
                    <p>
                    Apple MacBook Pro M1 13.3
                    </p>
                    <label for="">Rp. 5.000.000</label>
                </div>
                <div class="flex flex-col items-center gap-3 pb-10">
                    <img src="https://i0.wp.com/static.bmdstatic.com/pk/product/large/5c4993b2b1d30.jpg" alt="" class="cursor-pointer">
                    <p>
                        Handphone
                    </p>
                    <label for="">Rp. 2.000.00</label>
                </div>
                <div class="flex flex-col items-center gap-3 pb-10">
                    <img src="https://media.ldlc.com/r1600/ld/products/00/05/82/02/LD0005820208_1.jpg" alt="" class="cursor-pointer">
                    <p>
                    Apple MacBook Pro M1 13.3
                    </p>
                    <label for="">Rp. 5.000.000</label>
                </div>
                <div class="flex flex-col items-center gap-3 pb-10">
                    <img src="https://i0.wp.com/static.bmdstatic.com/pk/product/large/5c4993b2b1d30.jpg" alt="" class="cursor-pointer">
                    <p>
                        Handphone
                    </p>
                    <label for="">Rp. 2.000.00</label>
                </div>
            </div>
        </div>
    </section>
@endsection