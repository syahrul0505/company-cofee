@extends('layouts.app')

@section('content')
<section>
    <div class="bg-gray-50 flex items-center justify-center py-5 my-3">
        <div class="w-full bg-white border-t border-b border-gray-200 px-5 py-16 md:py-24 text-gray-800">
            <div class="w-full max-w-6xl mx-auto">
                <div class="text-center max-w-xl mx-auto">
                    <h1 class="text-6xl md:text-3xl font-bold mb-5 text-gray-600">Colaborating With Us</h3>
                    <div class="text-center mb-10">
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-40 h-1 rounded-full bg-indigo-500"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-indigo-500 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-indigo-500 ml-1"></span>
                    </div>
                </div>

                <div class="flex flex-row items-center justify-center">
                        <div class="flex flex-col justify-center items-center text-center border-solid border-2 border-[#EEEBE6] w-[30rem] h-[25rem] p-[20px] m-[10px]">
                            <span><img class="h-[6.25rem]" src="{{ asset('assets/images/icon/map.png') }}"></span>
                            <div class="flex flex-col justify-items-start">
                                <h1 class="text-[#06585C] font-semibold mt-4">Location Partnership</h1>
                                <p class="text-slate-500">Join With Us !</p>
                                <a class="mt-10 text-[#06585C] font-semibold btn-detail" href="#">See Detail</a>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center text-center border-solid border-2 border-[#EEEBE6] w-[30rem] h-[25rem] p-[20px] m-[10px]">
                            <span><img class="h-[6.25rem]" src="{{ asset('assets/images/icon/partnership.png') }}"></span>
                            <div class="flex flex-col justify-items-start">
                                <h1 class="text-[#06585C] font-semibold mt-4">Partnership</h1>
                                <p class="text-slate-500">join the big Kopi88 family</p>
                                <a class="mt-10 text-[#06585C] font-semibold btn-detail" href="#">See Detail</a>
                            </div>
                        </div>
                </div>
            </div>
    </div>
</div>

</section>
@endsection