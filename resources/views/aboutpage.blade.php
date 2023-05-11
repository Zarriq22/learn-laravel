@extends('layout/main')

@section('title', 'About')

@section('namePage', 'about')

@section('container')
<div class="pt-12 bg-gradient-to-r from-rose-600 via-fuchsia-500 to-pink-500">
    <div class="container mx-auto max-w-[752px] md:max-w-[1020px] py-5 px-4">
        <div>
            <h1 class="relative text-center uppercase font-bold py-5 text-2xl">Our Team</h1>
            <div class="flex flex-col justify-center sm:grid sm:grid-cols-3 gap-5">
                <div class="w-[350px] mx-auto sm:w-auto">
                    <img src="https://th.bing.com/th/id/OIP.2sJz_x0ciWkvSEfk9F9YpwHaEK?pid=ImgDet&rs=1" alt="" class="w-[350px] sm:h-[120px]">
                    <figcaption class="pt-3 text-center font-semibold">IT Consulting</figcaption>
                </div>
                <div class="w-[350px] mx-auto sm:w-auto">
                    <img src="https://th.bing.com/th/id/OIP.L_UoKqQdO0IxSvOBScxbhQHaEK?w=288&h=180&c=7&r=0&o=5&pid=1.7" alt="" class="w-[350px] sm:h-[120px]">
                    <figcaption class="pt-3 text-center font-semibold">Programmer</figcaption>
                </div>
                <div class="w-[350px] mx-auto sm:w-auto">
                    <img src="https://th.bing.com/th/id/OIP.fUadnTOyuIhx4jOek2M2xgHaEf?w=304&h=184&c=7&r=0&o=5&pid=1.7" alt="" class="w-[350px] sm:h-[120px]">
                    <figcaption class="pt-3 text-center font-semibold">Mobile Depelover</figcaption>
                </div>
            </div>
        </div>
        <div>
            <h1 class="relative text-center uppercase font-bold pb-5 pt-10 text-2xl">Our Project</h1>
            <div class="flex flex-col justify-center sm:grid sm:grid-cols-3 gap-5">
                <div class="w-[350px] mx-auto sm:w-auto">
                    <img src="https://th.bing.com/th/id/OIP.2sJz_x0ciWkvSEfk9F9YpwHaEK?pid=ImgDet&rs=1" alt="" class="w-[350px] sm:h-[120px]">
                    <figcaption class="pt-3 text-center font-semibold">IT Consulting</figcaption>
                </div>
                <div class="w-[350px] mx-auto sm:w-auto">
                    <img src="https://th.bing.com/th/id/OIP.L_UoKqQdO0IxSvOBScxbhQHaEK?w=288&h=180&c=7&r=0&o=5&pid=1.7" alt="" class="w-[350px] sm:h-[120px]">
                    <figcaption class="pt-3 text-center font-semibold">Programmer</figcaption>
                </div>
                <div class="w-[350px] mx-auto sm:w-auto">
                    <img src="https://th.bing.com/th/id/OIP.fUadnTOyuIhx4jOek2M2xgHaEf?w=304&h=184&c=7&r=0&o=5&pid=1.7" alt="" class="w-[350px] sm:h-[120px]">
                    <figcaption class="pt-3 text-center font-semibold">Mobile Depelover</figcaption>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

