@extends('layouts.app')

@section('content')
<section>
<div
class="relative bg-repeat-x bg-top"
style="background-image: url('{{ asset('assets/images/home/bg-hero.jpg') }}'); background-position: 10% 40%; height: 350px; "></div>

{{-- Carousel section --}}
<div class="relative mb-[10rem]">
    <div class="slider_div owl-carousel mt-[-150px]">
            <div class="item-hero cursor-pointer" style="width: 1100px"> 
                <img class="object-fill w-full h-full rounded animate-slideIn" src="{{ asset('assets/images/home/1.jpg') }}">
            </div>
            <div class="item-hero cursor-pointer" style="width: 1100px"> 
                <img class="object-fill w-full h-full rounded animate-slideIn" src="{{ asset('assets/images/home/2.jpg') }}">
            </div>
            <div class="item-hero cursor-pointer" style="width: 1100px"> 
                <img class="object-fill w-full h-full rounded animate-slideIn" src="{{ asset('assets/images/home/3.jpg') }}">
            </div>
    </div>
</div>
{{-- End Carousel Section --}}
</section>

<section>

    <div class="flex justify-center items-center">
            <h1 class="relative text-3xl pt-[15px] gill_font text-center text-[#07585C] capitalize line_">Our Brand</h1>
    </div>
    <div class="wrapper">
        <div class="carousel owl-carousel">
            <div class="card">
                    <img class="mt-3" src="{{ asset('assets/images/brand/bager.png') }}" alt=""> 
                    <div class="my-5">
                        <h1 class="text-[#06585C] font-semibold">Balap Geber</h1>
                        <p class="text-slate-500">Sekali minum jrenggg</p>
                        <a class="mt-7 text-[#06585C] font-semibold btn-detail" href="#">See Detail</a>
                    </div>
            </div>
            <div class="card">
                    <img class="mt-3" src="{{ asset('assets/images/brand/batos.png') }}" alt=""> 
                    <div class="my-5">
                        <h1 class="text-[#06585C] font-semibold">Balap Toast</h1>
                        <p class="text-slate-500">Sekali minum jrenggg</p>
                        <a class="mt-7 text-[#06585C] font-semibold btn-detail" href="#">See Detail</a>
                    </div>
            </div>
            <div class="card">
                    <img class="mt-3" src="{{ asset('assets/images/brand/nyaneut.png') }}" alt=""> 
                    <div class="my-5">
                        <h1 class="text-[#06585C] font-semibold">Kopi Nyaneut</h1>
                        <p class="text-slate-500">Sekali minum jrenggg</p>
                        <a class="mt-7 text-[#06585C] font-semibold btn-detail" href="#">See Detail</a>
                    </div>
            </div>
        </div>
    </div>
</section>


<section class="mx-[10px]">
    <div class="container px-6 py-12 mx-auto my-5">
        <div class="relative line_h ml-[150px]">
            {{-- <span class="line_h"></span> --}}
            <h1 class="text-3xl pt-[15px] gill_font text-[#07585C] capitalize leading-[0] ml-[85px] mb-5">Kopi88 On The Air</h1>
        </div>
    </div>

    <div>

    <div class="home-demo relative">
        <div class="on_the_air owl-carousel">
            <div class="item flex flex-col">
                <img src="{{ asset('assets/images/promotion/pmt1.jpg') }}" class="w-[500px] h-[300px]">
                <h1 class="text-[#06585C] font-semibold mt-3 mb-2">Segenggam-Cerita Cup</h1>
                <p class="text-slate-500 font-light font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veritatis repellendus repellat tempore quisquam explicabo voluptates beatae labore deleniti sapiente! Eos temporibus nostrum aperiam iste nesciunt, ab rerum pariatur laboriosam.</p>
            </div>

            <div class="item flex flex-col">
                <img src="{{ asset('assets/images/promotion/pmt2.jpg') }}" class="w-[500px] h-[300px]">
                <h1 class="text-[#06585C] font-semibold mt-3 mb-2">Segenggam-Cerita Cup</h1>
                <p class="text-slate-500 font-light font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veritatis repellendus repellat tempore quisquam explicabo voluptates beatae labore deleniti sapiente! Eos temporibus nostrum aperiam iste nesciunt, ab rerum pariatur laboriosam.</p>
            </div>
            <div class="item flex flex-col">
                <img src="{{ asset('assets/images/promotion/pmt3.jpg') }}" class="w-[500px] h-[300px]">
                <h1 class="text-[#06585C] font-semibold mt-3 mb-2">Segenggam-Cerita Cup</h1>
                <p class="text-slate-500 font-light font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veritatis repellendus repellat tempore quisquam explicabo voluptates beatae labore deleniti sapiente! Eos temporibus nostrum aperiam iste nesciunt, ab rerum pariatur laboriosam.</p>
            </div>
            <div class="item flex flex-col">
                <img src="{{ asset('assets/images/promotion/pmt4.jpg') }}" class="w-[500px] h-[300px]">
                <h1 class="text-[#06585C] font-semibold mt-3 mb-2">Segenggam-Cerita Cup</h1>
                <p class="text-slate-500 font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae veritatis repellendus repellat tempore quisquam explicabo voluptates beatae labore deleniti sapiente! Eos temporibus nostrum aperiam iste nesciunt, ab rerum pariatur laboriosam.</p>
            </div>
        </div>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto flex justify-center mt-3 px-6 py-10 mx-auto gap-4">
        <div class="flex flex-col w-[30%]">
                <img src="{{ asset('assets/images/logo/kopi88.png') }}" class="w-[100px] h-[80px] justify-center items_center">
            <p class="worksans my-2">Temukan postingan dan info terbaru lewat Instagram Kopi88</p>
            <a href="{{ route('partnership') }}" class="flex gap-2 transition ease-in-out  text-[#07585C]text-center justify-center items-center w-[12rem] h-[2rem] worksans py-[25px] bg-white border-2 border-[#07585C] hover:bg-[#07585C] hover:text-white duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg> Kopi88</a>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 gap-1 w-[60%]">
            <div>
                <img class="h- max-w-full rounded-lg" src="{{ asset('assets/images/ig/1.jpg') }}" alt="">
            </div>
            <div>
                <img class="h- max-w-full rounded-lg" src="{{ asset('assets/images/ig/2.jpg') }}" alt="">
            </div>
            <div>
                <img class="h- max-w-full rounded-lg" src="{{ asset('assets/images/ig/3.jpg') }}" alt="">
            </div>
            <div>
                <img class="h- max-w-full rounded-lg" src="{{ asset('assets/images/ig/4.jpg') }}" alt="">
            </div>
            <div>
                <img class="h- max-w-full rounded-lg" src="{{ asset('assets/images/ig/5.jpg') }}" alt="">
            </div>
            <div>
                <img class="h- max-w-full rounded-lg" src="{{ asset('assets/images/ig/6.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/ig/7.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('assets/images/ig/1.jpg') }}" alt="">
            </div>
        </div>

    </div>
</section>

<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <div class="my-4 text-center">
                <h1 class="relative text-3xl font-semibold pt-[15px] text-center text-[#07585C] capitalize line_">Best Seller</h1>
        </div>
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex justify-center flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg" id="kopi-susu-tab" data-tabs-target="#kopi-susu" type="button" role="tab" aria-controls="kopi-susu" aria-selected="false">Kopi Susu</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="red-velvet-tab" data-tabs-target="#red-velvet" type="button" role="tab" aria-controls="red-velvet" aria-selected="false">Red Velvet</button>
                </li>
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="matcha-tab" data-tabs-target="#matcha" type="button" role="tab" aria-controls="matcha" aria-selected="false">Matcha</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="vanilla-tab" data-tabs-target="#vanilla" type="button" role="tab" aria-controls="vanilla" aria-selected="false">Vanilla</button>
                </li>
            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="kopi-susu" role="tabpanel" aria-labelledby="kopi-susu-tab">
                <div class="grid grid-cols-2">
                    <div class="w-full px-3 rounded-[20px]">
                        <div class="relative w-full h-[26rem] bg-center bg-no-repeat bg-cover rounded-[20px]"
                            style="background-image: url('{{ asset('assets/images/logo/1.jpeg') }}');">
                            <a class="absolute inset-0 flex items-end justify-center rounded-[20px]" href="#">
                                <div class="text-center pb-3">
                                    <h2 class="mb-2 text-3xl font-bold text-white ">Cappucino</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- review item -->
                    <div class="bg-white w-full shadow-lg rounded-lg px-4 text-center">
                        <div class="tracking-wide px-4 py-4" >
                        <h2 class="text-gray-800 font-semibold mt-1">67 Users reviews</h2>
                        <div class="border-b -mx-8 px-8 pb-3">
                            <div class="flex items-center mt-1">
                                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                                    <span>5 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    <div class=" w-11/12 bg-indigo-600 rounded-lg h-2"></div>
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">98%</span>
                                </div>
                            </div><!-- first -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>4 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    <div class="w-1/5 bg-indigo-600 rounded-lg h-2"></div>
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">2%</span>
                                </div>
                            </div><!-- second -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>3 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- thierd -->
                            <div class="flex items-center mt-1">
                                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                                    <span>2 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- 4th -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>1 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- 5th -->
                        </div>
                        </div>
                        <div class="w-full px-4">
                        <h3 class="font-medium tracking-tight">Review this item</h3>
                        <p class="text-gray-700 text-sm py-1">
                            give your opinion about this item.
                        </p>
                        <button class="border-gray-400 p-4 text-white rounded  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 mt-2">write a review</button>
                        </div>
                    </div>

                </div> 
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="red-velvet" role="tabpanel" aria-labelledby="red-velvet-tab">
                <div class="grid grid-cols-2">
                    <div class="w-full px-3 rounded-[20px]">
                        <div class="relative w-full h-[26rem] bg-center bg-no-repeat bg-cover rounded-[20px]"
                            style="background-image: url('{{ asset('assets/images/logo/17.jpg') }}');">
                            <a class="absolute inset-0 flex items-end justify-center rounded-[20px]" href="#">
                                <div class="text-center pb-3">
                                    <h2 class="mb-2 text-3xl font-bold text-white ">Red Velvet</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- review item -->
                    <div class="bg-white w-full shadow-lg rounded-lg px-4 text-center">
                        <div class="tracking-wide px-4 py-4" >
                        <h2 class="text-gray-800 font-semibold mt-1">67 Users reviews</h2>
                        <div class="border-b -mx-8 px-8 pb-3">
                            <div class="flex items-center mt-1">
                                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                                    <span>5 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    <div class=" w-11/12 bg-indigo-600 rounded-lg h-2"></div>
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">98%</span>
                                </div>
                            </div><!-- first -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>4 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    <div class="w-1/5 bg-indigo-600 rounded-lg h-2"></div>
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">2%</span>
                                </div>
                            </div><!-- second -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>3 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- thierd -->
                            <div class="flex items-center mt-1">
                                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                                    <span>2 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- 4th -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>1 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- 5th -->
                        </div>
                        </div>
                        <div class="w-full px-4">
                        <h3 class="font-medium tracking-tight">Review this item</h3>
                        <p class="text-gray-700 text-sm py-1">
                            give your opinion about this item.
                        </p>
                        <button class="border-gray-400 p-4 text-white rounded  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 mt-2">write a review</button>
                        </div>
                    </div>

                </div> 
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="matcha" role="tabpanel" aria-labelledby="matcha-tab">
                <div class="grid grid-cols-2">
                    <div class="w-full px-3 rounded-[20px]">
                        <div class="relative w-full h-[26rem] bg-center bg-no-repeat bg-cover rounded-[20px]"
                            style="background-image: url('{{ asset('assets/images/logo/18.jpeg') }}');">
                            <a class="absolute inset-0 flex items-end justify-center rounded-[20px]" href="#">
                                <div class="text-center pb-3">
                                    <h2 class="mb-2 text-3xl font-bold text-white ">Matcha</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- review item -->
                    <div class="bg-white w-full shadow-lg rounded-lg px-4 text-center">
                        <div class="tracking-wide px-4 py-4" >
                        <h2 class="text-gray-800 font-semibold mt-1">67 Users reviews</h2>
                        <div class="border-b -mx-8 px-8 pb-3">
                            <div class="flex items-center mt-1">
                                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                                    <span>5 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    <div class=" w-11/12 bg-indigo-600 rounded-lg h-2"></div>
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">98%</span>
                                </div>
                            </div><!-- first -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>4 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    <div class="w-1/5 bg-indigo-600 rounded-lg h-2"></div>
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">2%</span>
                                </div>
                            </div><!-- second -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>3 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- thierd -->
                            <div class="flex items-center mt-1">
                                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                                    <span>2 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- 4th -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>1 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- 5th -->
                        </div>
                        </div>
                        <div class="w-full px-4">
                        <h3 class="font-medium tracking-tight">Review this item</h3>
                        <p class="text-gray-700 text-sm py-1">
                            give your opinion about this item.
                        </p>
                        <button class="border-gray-400 p-4 text-white rounded  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 mt-2">write a review</button>
                        </div>
                    </div>

                </div> 
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="vanilla" role="tabpanel" aria-labelledby="vanilla-tab">
                <div class="grid grid-cols-2">
                    <div class="w-full px-3 rounded-[20px]">
                        <div class="relative w-full h-[26rem] bg-center bg-no-repeat bg-cover rounded-[20px]"
                            style="background-image: url('{{ asset('assets/images/logo/6.jpeg') }}');">
                            <a class="absolute inset-0 flex items-end justify-center rounded-[20px]" href="#">
                                <div class="text-center pb-3">
                                    <h2 class="mb-2 text-3xl font-bold text-white ">Vanilla</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- review item -->
                    <div class="bg-white w-full shadow-lg rounded-lg px-4 text-center">
                        <div class="tracking-wide px-4 py-4" >
                        <h2 class="text-gray-800 font-semibold mt-1">67 Users reviews</h2>
                        <div class="border-b -mx-8 px-8 pb-3">
                            <div class="flex items-center mt-1">
                                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                                    <span>5 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    <div class=" w-11/12 bg-indigo-600 rounded-lg h-2"></div>
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">98%</span>
                                </div>
                            </div><!-- first -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>4 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    <div class="w-1/5 bg-indigo-600 rounded-lg h-2"></div>
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">2%</span>
                                </div>
                            </div><!-- second -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>3 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- thierd -->
                            <div class="flex items-center mt-1">
                                <div class=" w-1/5 text-indigo-500 tracking-tighter">
                                    <span>2 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- 4th -->
                            <div class="flex items-center mt-1">
                                <div class="w-1/5 text-indigo-500 tracking-tighter">
                                    <span>1 star</span>
                                </div>
                                <div class="w-3/5">
                                    <div class="bg-gray-300 w-full rounded-lg h-2">
                                    </div>
                                </div>
                                <div class="w-1/5 text-gray-700 pl-3">
                                    <span class="text-sm">0%</span>
                                </div>
                            </div><!-- 5th -->
                        </div>
                        </div>
                        <div class="w-full px-4">
                        <h3 class="font-medium tracking-tight">Review this item</h3>
                        <p class="text-gray-700 text-sm py-1">
                            give your opinion about this item.
                        </p>
                        <button class="border-gray-400 p-4 text-white rounded  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 mt-2">write a review</button>
                        </div>
                    </div>

                </div> 
            </div>
        </div>
    </div>
</section>

<section>
    <div class="min-w-screen min-h-screen bg-white flex items-center justify-center py-5">
        <div class="w-full bg-white px-5 py-16 md:py-24 text-gray-800">
            <div class="w-full max-w-6xl mx-auto">
                <div class="text-center max-w-xl mx-auto">
                    <h1 class="text-6xl md:text-7xl font-bold mb-5 text-gray-600">What people <br>are saying.</h1>
                    <h3 class="text-xl mb-5 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <div class="text-center mb-10">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                </div>
                <div class="-mx-3 md:flex items-start">
                    <div class="px-3 md:w-1/3">
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=1" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Kenzie Edgar.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sunt ratione dolor exercitationem minima quas itaque saepe quasi architecto vel! Accusantium, vero sint recusandae cum tempora nemo commodi soluta deleniti.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=2" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Stevie Tifft.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Dolore quod necessitatibus, labore sapiente, est, dignissimos ullam error ipsam sint quam tempora vel.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/3">
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=3" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Tommie Ewart.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, obcaecati ullam excepturi dicta error deleniti sequi.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=4" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Charlie Howse.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto inventore voluptatum nostrum atque, corrupti, vitae esse id accusamus dignissimos neque reprehenderit natus, hic sequi itaque dicta nisi voluptatem! Culpa, iusto.<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="px-3 md:w-1/3">
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=5" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Nevada Herbertson.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, voluptatem porro obcaecati dicta, quibusdam sunt ipsum, laboriosam nostrum facere exercitationem pariatur deserunt tempora molestiae assumenda nesciunt alias eius? Illo, autem!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                        <div class="w-full mx-auto rounded-lg bg-white border border-gray-200 p-5 text-gray-800 font-light mb-6">
                            <div class="w-full flex mb-4 items-center">
                                <div class="overflow-hidden rounded-full w-10 h-10 bg-gray-50 border border-gray-200">
                                    <img src="https://i.pravatar.cc/100?img=6" alt="">
                                </div>
                                <div class="flex-grow pl-3">
                                    <h6 class="font-bold text-sm uppercase text-gray-600">Kris Stanton.</h6>
                                </div>
                            </div>
                            <div class="w-full">
                                <p class="text-sm leading-tight"><span class="text-lg leading-none italic font-bold text-gray-400 mr-1">"</span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem iusto, explicabo, cupiditate quas totam!<span class="text-lg leading-none italic font-bold text-gray-400 ml-1">"</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container px-6 py-12 mx-auto my-5">
        <div class="relative bg-repeat-x bg-top p-[4.5rem]" style="background-image: url('{{ asset('assets/images/home/bg-hero.jpg') }}'); background-position: 10% 40%; height: 400px; ">
            <div class="flex flex-row justify-between">
                <div class="flex flex-col text-4xl text-white">
                    <h1 class="gill_font">Nikmati brand favoritmu tanpa antre & <br/> dapatkan banyak promo menarik hanya di <br/> Kopi88 Apps</h1>
                    <span class="mt-8 mb-3 text-base"> Download Sekarang!</span>
                    <div class="flex fle-col gap-3">
                        <span class="mb-2">
                            <img class="w-[150px] cursor-pointer transition ease-in-out delay-150 hover:scale-110 duration-300" src="{{ asset('assets/images/icon/app-google.png') }}">
                        </span>
                        <span>
                            <img class="w-[150px] cursor-pointer transition ease-in-out delay-150 hover:scale-110 duration-300" src="{{ asset('assets/images/icon/app-apple.png') }}">
                        </span>
                    </div>
                </div>

                <div class="flex flex-row mx-3">
                    <span>
                        <img class="w-[220px] rounded" src="{{ asset('assets/images/icon/hp1.png') }}">
                    </span>
                    <span>
                        <img class="w-[220px] rounded" src="{{ asset('assets/images/icon/hp2.png') }}">
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection