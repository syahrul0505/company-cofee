@extends('layouts.app')


@section('content')
<section>
  <div class="relative w-full my-[15px]">

    <!-- Section: Design Block -->
    <section class="mb-14 text-gray-800">
  
      <div class="relative overflow-hidden bg-no-repeat bg-cover"
        style="background-position: 100%; background-image: url({{ asset('assets/images/contact/4.jpg') }}); height: 420px;">
      </div>
      <div class="relative mx-5 sm:mx-12 my-10 text-gray-800 px-4 md:px-12">
        <div class="block rounded-lg shadow-lg py-10 md:py-12 px-2 md:px-6"
          style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
          <div class="flex justify-center">
            <div class="text-center lg:max-w-3xl md:max-w-xl">
              <h2 class="text-3xl font-bold mb-12 px-6">Contact us</h2>
            </div>
          </div>
          <div class="flex flex-wrap">
            <div class="grow-0 shrink-0 basis-auto w-full xl:w-5/12 px-3 lg:px-6 mb-12 xl:mb-0">
              <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12094.57348593182!2d-74.00599512526003!3d40.72586666928451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598f988156a9%3A0xd54629bdf9d61d68!2sBroadway-Lafayette%20St!5e0!3m2!1spl!2spl!4v1624523797308!5m2!1spl!2spl"
              class="h-56 w-full border-0 rounded-lg shadow-lg" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="grow-0 shrink-0 basis-auto w-full xl:w-7/12">
              <div class="flex flex-wrap">
                <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex items-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" class="w-5 text-white"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">Technical support</p>
                      <p class="text-gray-500">kopi88.support@gmail.com</p>
                      <p class="text-gray-500">+62 859-5946-8123</p>
                    </div>
                  </div>
                </div>
                <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex items-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign"
                          class="w-3 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512">
                          <path fill="currentColor"
                            d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">Sales questions</p>
                      <p class="text-gray-500">kopi88.sales@gmail.com</p>
                      <p class="text-gray-500">+62 823-4564-2389</p>
                    </div>
                  </div>
                </div>
                <div class="mb-12 md:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex align-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="newspaper"
                          class="w-5 text-white" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                          <path fill="currentColor"
                            d="M552 64H88c-13.255 0-24 10.745-24 24v8H24c-13.255 0-24 10.745-24 24v272c0 30.928 25.072 56 56 56h472c26.51 0 48-21.49 48-48V88c0-13.255-10.745-24-24-24zM56 400a8 8 0 0 1-8-8V144h16v248a8 8 0 0 1-8 8zm236-16H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm-208-96H140c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm208 0H348c-6.627 0-12-5.373-12-12v-8c0-6.627 5.373-12 12-12h152c6.627 0 12 5.373 12 12v8c0 6.627-5.373 12-12 12zm0-96H140c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h360c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">Join as Partner</p>
                      <p class="text-gray-500">kopi88.mitra@gmail.com</p>
                      <p class="text-gray-500">+62 859-5946-8910</p>
                    </div>
                  </div>
                </div>
                <div class="grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                  <div class="flex align-start">
                    <div class="shrink-0">
                      <div class="p-4 bg-blue-600 rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                          role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="currentColor"
                            d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                          </path>
                        </svg>
                      </div>
                    </div>
                    <div class="grow ml-6">
                      <p class="font-bold mb-1">Bug report</p>
                      <p class="text-gray-500">kopi88.bug@gmail.com</p>
                      <p class="text-gray-500">+1 234-567-89</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </section>
  </div>

<!-- component -->
<section class="text-gray-600 body-font relative">
 <!-- Container for demo purpose -->
<div class="container my-12 py-12 mx-auto px-4 md:px-6 lg:px-12">
    <h3 class="text-3xl font-bold text-center mb-4">Get in touch</h3>
    <p class="text-center text-gray-500 mb-10 md:mb-12 mx-auto max-w-3xl">
      please provide your best input for us so that our company can develop even further
    </p>
    <div class="md:flex md:flex-wrap">
      <div class="w-full md:pl-3">
            <form id="message">
              <div class="form-group mb-6">
                <input type="text" class="form-control block
                w-full
                px-3
                py-[1.5rem]
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="input-name"
                  placeholder="Name">
                <p id="alert-required" class="text-red-700 hidden">This Name field is required</p>
              </div>
              <div class="form-group mb-6">
                <input type="email" class="form-control block
                w-full
                px-3
                py-[1.5rem]
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="input-email"
                  placeholder="Email address">
                <p id="alert-required" class="text-red-700 hidden">This Email field is required</p>
              </div>
              <div class="form-group mb-6">
                <textarea required class="
                form-control
                block
                w-full
                px-3
                py-[1.5rem]
                text-base
                font-normal
                text-gray-700
                bg-white bg-clip-padding
                border border-solid border-gray-300
                rounded
                transition
                ease-in-out
                m-0
                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
              " id="input-message" rows="3" placeholder="Message"></textarea>
              <p id="alert-required" class="text-red-700 hidden">This Message field is required</p>
              </div>
              <button id="send"  type="button" class=" block w-full py-4 bg-blue-600 text-white font-medium text-md leading-tight uppercase text-center rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-modal-target="popup-modal" data-modal-toggle="popup-modal">Send</button>

            </form>
      </div>
    </div>
</div>



{{-- modal box ketika berhasil kirim message --}}
<div id="popup-modal" tabindex="-1" class="main-modal fixed top-0 left-0 right-0 z-50 hidden overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full animated fadeIn faster">
  <div class="relative w-full max-w-md max-h-full">
      <div id="success" class="main-modal relative bg-white rounded-lg shadow dark:bg-gray-700">
          <button id="main-close" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">Close modal</span>
          </button>
          <div class="p-6 text-center">
              <img src="{{ asset('assets/images/contact/checklist.png') }}" class="mx-auto mb-4 text-gray-400 w-14 h-14">
              <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Thank you, your message already sent</h3>
          </div>
      </div>

      <div id="failed" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button id="main-close2" type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Close modal</span>
        </button>
        <div class="p-6 text-center">
            <svg aria-hidden="true" class="mx-auto mb-4 text-red-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Please Fill Out All the Forms</h3>
        </div>
    </div>
  </div>
</div>
{{-- end modal box --}}
</section>

<!-- Container for demo purpose -->
</section>
@endsection