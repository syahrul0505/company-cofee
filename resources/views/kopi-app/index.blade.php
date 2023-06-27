@extends('layouts.app')


@section('content')


<section class="bg-white dark:bg-gray-900">
   <div class="flex flex-row gap-[2rem] justify-center items-center mt-[6rem] px-6 py-10 mx-auto bg-hero">
      <div class="relative line_h mt-6 px-[80px]">
         <h2 class="mb-4 text-4xl tracking-tight text-[#06585C] dark:text-white gill_font">
            Nikmati brand favoritmu tanpa<br/> antre & nikmati promo menarik<br/> hanya di Kopi88+</h2><br>
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
      <div class="relative">
         <img src="{{ asset('assets/images/icon/hp1.png') }}" class="w-[600px] h-auto">
      </div>
   </div>
</section>

<section class="mx-[250px]">
   <div class="container px-6 py-12 mx-auto my-5">
         <div class="relative line_h ml-[60px]">
            {{-- <span class="line_h"></span> --}}
            <div class="flex flex-col">
               <h1 class="text-3xl pt-[15px] gill_font text-[#07585C] capitalize leading-[0] ml-[85px] mb-5">Kenapa Kopi88+ ?</h1>
               <p class="gillff_font ml-[85px] pt-4 text-base">Kopi88+ hadir untuk memberikan kemudahan bagi #sobatKopi88 menikmati menu favorit di jilid pilihan!</p>
            </div>
         </div>
   </div>

   <div class="wrapper">
        <div class="features owl-carousel owl-theme">
            <div class="card_features flex flex-col justify-center items-center">
                    <img class="mt-3" src="{{ asset('assets/images/features/1.png') }}" alt="" style="width: 100px"> 
                    <div class="my-5 text-center">
                        <h1 class="text-[#06585C] text-2xl font-semibold">Promo Menarik</h1>
                        <p class="gillff_font">Promo seru setiap hari! di Kopi88+ kamu bisa menikmati promo menu favoritmu, tidak hanya itu ada juga promo ekslusif untuk menu terbaru dari brand favoritmu</p>
                    </div>
            </div>
            <div class="card_features flex flex-col justify-center items-center"">
                    <img class="mt-3" src="{{ asset('assets/images/features/2.png') }}" style="width: 100px"> 
                    <div class="my-5 text-center">
                        <h1 class="text-[#06585C] text-2xl font-semibold">Tanpa Antre</h1>
                        <p class="gillff_font">Aplikasi tanpa antre! Kamu bisa melakukan pemesanan dari tempar dudukmu, tunggu beberapa saat dan meny favoritmu siap dinikmati!</p>
                    </div>
            </div>
            <div class="card_features flex flex-col justify-center items-center"">
                    <img class="mt-3" src="{{ asset('assets/images/features/3.png') }}" style="width: 100px"> 
                    <div class="my-5 text-center">
                        <h1 class="text-[#06585C] text-2xl font-semibold">Atur Waktu Ambil Pesanan</h1>
                        <p class="gillff_font">Kamu bisa mengatur jadwal pengambilan pesananmu dengan fleksibel. Kapan pun dan dimana pun!</p>
                    </div>
            </div>
            <div class="card_features flex flex-col justify-center items-center"">
                    <img class="mt-3" src="{{ asset('assets/images/features/4.png') }}" style="width: 100px"> 
                    <div class="my-5 text-center">
                        <h1 class="text-[#06585C] text-2xl font-semibold">Transaksi Mudah</h1>
                        <p class="gillff_font">Gapake ribet! Kopi88+ menawarkan berbagai pilihan pembayaran mulai dari OVO, Shopee pay, dan Gopay. Semua ada di Kopi88+</p>
                    </div>
            </div>
            <div class="card_features flex flex-col justify-center items-center"">
                    <img class="mt-3" src="{{ asset('assets/images/features/5.png') }}" style="width: 100px"> 
                    <div class="my-5 text-center">
                        <h1 class="text-[#06585C] text-2xl font-semibold">Pesan Antar</h1>
                        <p class="gillff_font">Kemudahan melalukan pemesanan. Dengan satu sentuhan, pesananmu dapat tiba di lokasi tujuanmu. Nikmati menu favoritmu dan kumpulkan pointnya!</p>
                    </div>
            </div>
        </div>
    </div>

</section>

@endsection