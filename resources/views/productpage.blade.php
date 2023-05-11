@extends('layout/main')

@section('title', 'Product Page')

@section('namePage', 'product')

@section('container')
    <div class="bg-lime-500 text-white pt-24">
        <div class="container mx-auto  max-w-[752px] md:max-w-[1020px] py-5 px-4 mb-2 flex justify-end gap-2">
            <button class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 group transition-all duration-300">add</button>
            <button class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">custom</button>

            <div class="absolute hidden w-[350px] bg-cyan-500">
                <form action="" class="text-black px-4 py-2 flex flex-col items-center">
                    <div class="flex flex-col mb-3">
                        <label for="nomor">Nomor</label>
                        <input type="text" name="nomor" class="mx-4 px-2 rounded">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="name_product">Nama Product</label>
                        <input type="text" name="name_product" class="mx-4 px-2 rounded">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="mx-4 px-2 rounded">
                    </div>
                    <div class="flex flex-col mb-3">
                        <label for="picture">Picture</label>
                        <input type="file" name="picture" class="mx-2 px-2 rounded">
                    </div>
                    <button class="px-5 py-2 bg-violet-800 rounded-xl">Add</button>
                </form>
            </div>
        </div>
        <div class="flex flex-col container mx-auto max-w-[752px] md:max-w-[1020px] py-5">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden ">
                        <table class="min-w-full text-left text-sm font-light">
                            <thead class="border-b font-medium dark:border-light text-white bg-neutral-700 text-left">
                                <tr>
                                    <th scope="col" class="px-6 py-4">No</th>
                                    <th scope="col" class="px-6 py-4">Name product</th>
                                    <th scope="col" class="px-6 py-4">Price</th>
                                    <th scope="col" class="px-6 py-4">Picture</th>
                                    <th scope="col" class="px-10 py-4">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-light text-black transition duration-300 ease-in-out hover:bg-slate-600 hover:text-white">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-4">Apple MacBook Pro M1 13.3</td>
                                    <td class="whitespace-nowrap px-6 py-4">Rp. 5.000.000</td>
                                    <td class="whitespace-nowrap px-6 py-4"><img src="https://media.ldlc.com/r1600/ld/products/00/05/82/02/LD0005820208_1.jpg" alt="" class="w-[100px]"></td>
                                    <td class="">
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">edit</button>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-light text-black transition duration-300 ease-in-out hover:bg-slate-600 hover:text-white ">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                    <td class="whitespace-nowrap px-6 py-4">Handphone</td>
                                    <td class="whitespace-nowrap px-6 py-4">Rp. 2.000.000</td>
                                    <td class="whitespace-nowrap px-6 py-4"><img src="https://i0.wp.com/static.bmdstatic.com/pk/product/large/5c4993b2b1d30.jpg" alt="" class="w-[100px]"></td>
                                    <td>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">edit</button>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">delete</button>   
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-light text-black transition duration-300 ease-in-out hover:bg-slate-600 hover:text-white">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                    <td class="whitespace-nowrap px-6 py-4">Apple MacBook Pro M1 13.3</td>
                                    <td class="whitespace-nowrap px-6 py-4">Rp. 5.000.000</td>
                                    <td class="whitespace-nowrap px-6 py-4"><img src="https://media.ldlc.com/r1600/ld/products/00/05/82/02/LD0005820208_1.jpg" alt="" class="w-[100px]"></td>
                                    <td class="">
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">edit</button>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">delete</button>
                                <tr class="border-b dark:border-light text-black transition duration-300 ease-in-out hover:bg-slate-600 hover:text-white">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">4</td>
                                    <td class="whitespace-nowrap px-6 py-4">Handphone</td>
                                    <td class="whitespace-nowrap px-6 py-4">Rp. 2.000.000</td>
                                    <td class="whitespace-nowrap px-6 py-4"><img src="https://i0.wp.com/static.bmdstatic.com/pk/product/large/5c4993b2b1d30.jpg" alt="" class="w-[100px]"></td>
                                    <td>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">edit</button>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-light text-black transition duration-300 ease-in-out hover:bg-slate-600 hover:text-white">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">5</td>
                                    <td class="whitespace-nowrap px-6 py-4">Apple MacBook Pro M1 13.3</td>
                                    <td class="whitespace-nowrap px-6 py-4">Rp. 5.000.000</td>
                                    <td class="whitespace-nowrap px-6 py-4"><img src="https://media.ldlc.com/r1600/ld/products/00/05/82/02/LD0005820208_1.jpg" alt="" class="w-[100px]"></td>
                                    <td class="">
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">edit</button>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">delete</button>
                                    </td>
                                <tr class="border-b dark:border-light text-black transition duration-300 ease-in-out hover:bg-slate-600 hover:text-white">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">6</td>
                                    <td class="whitespace-nowrap px-6 py-4">Handphone</td>
                                    <td class="whitespace-nowrap px-6 py-4">Rp. 2.000.000</td>
                                    <td class="whitespace-nowrap px-6 py-4"><img src="https://i0.wp.com/static.bmdstatic.com/pk/product/large/5c4993b2b1d30.jpg" alt="" class="w-[100px]"></td>
                                    <td>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">edit</button>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">delete</button>
                                    </td>
                                </tr>
                                <tr class="border-b dark:border-light text-black transition duration-300 ease-in-out hover:bg-slate-600 hover:text-white">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">7</td>
                                    <td class="whitespace-nowrap px-6 py-4">Apple MacBook Pro M1 13.3</td>
                                    <td class="whitespace-nowrap px-6 py-4">Rp. 5.000.000</td>
                                    <td class="whitespace-nowrap px-6 py-4"><img src="https://media.ldlc.com/r1600/ld/products/00/05/82/02/LD0005820208_1.jpg" alt="" class="w-[100px]"></td>
                                    <td class="">
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">edit</button>
                                        <button href="" class="bg-green-500 px-2 py-1 rounded hover:scale-110 hover:duration-300 transition-all duration-300">delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    