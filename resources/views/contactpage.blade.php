@extends('layout/main')

<?php
     $noHP = "087720681873";
     $sendMessage = "Hallo.., Kami tertarik dengan product anda!"

?>

@section('title', 'Contact')

@section('namePage', 'contact')

@section('container')

<div class="pt-16 bg-gradient-to-r from-violet-500 to-fuchsia-500">
    <div class="container mx-auto max-w-[752px] md:max-w-[1020px] py-5 px-4">
        <div class="select-none">
            <div class="pb-10 flex flex-col items-center justify-center">
                <h1>Contact we are via WhatsApp</h1>
                <button class="flex justify-center text-center px-4 py-2 mt-3 border shadow-md shadow-slate-500 bg-green-600 text-white rounded-3xl hover:-translate-y-1 hover:shadow-xl hover:shadow-slate-500 hover:animate-pulse"><a href="https://api.whatsapp.com/send?phone={{ $noHP }}&text={{ $sendMessage }}">WhatsApp We</a></button>
            </div>
            <div>
                <h1 class="text-center">Form Kritik dan Saran</h1>
                <div class="w-full max-w-xs mx-auto">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Nama Lengkap
                            </label>
                            <input class="shadow appearance-none border border-slate-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">No Handphone
                            </label>
                            <input class="shadow appearance-none border border-slate-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="text" placeholder="+628**7865***">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Email
                            </label>
                            <input class="shadow appearance-none border border-slate-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="email" placeholder="contoh@gmail.com">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="alamat">Alamat
                            </label>
                            <textarea class="shadow appearance-none border border-slate-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="alamat" type="text" placeholder="alamat"></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="masukan">Kritik dan Saran
                            </label>
                            <textarea class="shadow appearance-none border border-slate-700 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="masukan" type="text" placeholder="masukan"></textarea>
                        </div>
                        <div class="flex items-center justify-center">
                            <a href="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">Send Message</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection