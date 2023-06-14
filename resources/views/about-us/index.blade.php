@extends('layouts.app')


@section('content')

<section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">About Us</h1>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#" title="Back to the frontpage" class="text-white md:text-5xl lg:text-lg text-gray-300 hover:text-[#b8784e]">Home <i class="fa fa-angle-right lg:text-lg" aria-hidden="true"></i></a>
                    <strong class="text-white lg:text-lg text-gray-300">About us</strong>
        </div>
    </div>
</section>

<section>
    
    <div class="2xl:container 2xl:mx-auto lg:py-16 lg:px-20 md:py-12 md:px-6 py-9 px-4">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">About Us</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">Didirikan pada tahun 2023, Kopi Balap 88 adalah usaha startup kopi yang bertujuan untuk menyeduh segelas kopi terbaik untuk pelanggan kami. Dengan passion terhadap kopi yang tak tergoyahkan sebagai inti kami, kami melanjutkan komitmen kami untuk menjadi sumber yang bertanggung jawab, bahan autentik, dan standar tertinggi untuk menghasilkan rasa dan kualitas di seluruh menu kami. Kami ingin keberadaan kami dapat meningkatkan kualitas kopi bagi masyarakat kami.</p> <br>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">Memanfaatkan internet dan pengalaman, kami menggunakan teknologi terbaru untuk alat dan campuran biji kopi kami. Langsung dari petani pilihan, biji berkualitas tinggi diproses dan dipanggang dengan sempurna oleh kami sendiri kemudian diteruskan ke barista terampil kami, dengan penuh semangat menyiapkan secangkir kebahagiaan untuk disajikan kepada anda secara khusus.</p>
            </div>
            <div class="w-full lg:w-8/12">
                <img class="w-full h-full" src="https://i.ibb.co/FhgPJt8/Rectangle-116.png" alt="A group of People" />
            </div>
        </div>

        <div class="flex lg:flex-row flex-col justify-between gap-8 pt-12">
            <div class="w-full lg:w-5/12 flex flex-col justify-center">
                <h1 class="text-3xl lg:text-4xl font-bold leading-9 text-gray-800 dark:text-white pb-4">Our Mission</h1>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">Kami melayani dengan hormat, pertimbangan dan cinta. Dengan tujuan dan nilai-nilai inti kami yang memimpin tindakan kami, kami fokus pada pengalaman membangun karier yang menginspirasi untuk tim dan mitra kami di tempat kerja yang adil, inklusif, dan beragam.</p> <br>
                <p class="font-normal text-base leading-6 text-gray-600 dark:text-white">Kami berbuat baik untuk komunitas global kami di sini, dekat dan jauh dengan mengintegrasikan praktik berkelanjutan yang membatasi jejak lingkungan kami dan berdampak positif bagi manusia dan planet ini.</p>
            </div>
            <div class="w-full lg:w-8/12 lg:pt-8">
                <div class="grid md:grid-cols-5 sm:grid-cols-2 grid-cols-1 lg:gap-4 shadow-lg rounded-md">
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="{{ asset('assets/images/our-team/foto.jpg') }}" alt="Alexa featured Image" />
                        <img class="md:hidden block" src="{{ asset('assets/images/our-team/foto.jpg') }}" alt="Alexa featured Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Syahrul</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="https://i.ibb.co/fGmxhVy/Rectangle-119.png" alt="Olivia featured Image" />
                        <img class="md:hidden block" src="https://i.ibb.co/NrWKJ1M/Rectangle-119.png" alt="Olivia featured Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Harry</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="https://i.ibb.co/Pc6XVVC/Rectangle-120.png" alt="Liam featued Image" />
                        <img class="md:hidden block" src="https://i.ibb.co/C5MMBcs/Rectangle-120.png" alt="Liam featued Image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Otniel</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="https://i.ibb.co/7nSJPXQ/Rectangle-121.png" alt="Elijah featured image" />
                        <img class="md:hidden block" src="https://i.ibb.co/ThZBWxH/Rectangle-121.png" alt="Elijah featured image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Arifin</p>
                    </div>
                    <div class="p-4 pb-6 flex justify-center flex-col items-center">
                        <img class="md:block hidden" src="https://i.ibb.co/7nSJPXQ/Rectangle-121.png" alt="Elijah featured image" />
                        <img class="md:hidden block" src="https://i.ibb.co/ThZBWxH/Rectangle-121.png" alt="Elijah featured image" />
                        <p class="font-medium text-xl leading-5 text-gray-800 dark:text-white mt-4">Riza</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection