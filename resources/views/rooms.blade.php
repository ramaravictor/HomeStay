@extends('layouts.main')

@section('layout')

<body class="bg-white" style="font-family: 'Lora', serif;">
    <main class="relative overflow-hidden">
        <div>
            <section class="flex w-full relative h-screen">
                <div class="flex w-full relative h-screen" style="opacity: 1;">
                    <div class="w-full relative">
                        <img src="https://res.cloudinary.com/da583h5sr/image/upload/v1670978652/web/room/room_1_cover_xzinof.png" class="w-full brightness-50 h-screen object-cover">
                        <!-- Adjust brightness-50 to your desired darkness level (0-100) -->
                        <div class="absolute top-0 bottom-20 left-0 right-0 flex flex-col items-center justify-center mt-24 px-8 lg:px-32">
                            <div style="opacity: 1;">
                                <p class="text-3xl lg:text-5xl text-white text-center tracking-wider font-lora uppercase">Double Room with Balcony</p>
                            </div>
                            <div style="opacity: 1;">
                                <p class="text-center mt-4 text-white font-openSans text-xs md:text-sm tracking-wider font-normal lg:max-w-lg leading-relaxed">Designed in a contemporary modern and minimalistic house style with a super king bed.</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0 left-0 z-30">
                        <div class="flex flex-col items-center justify-center">
                            <p class="text-white tracking-widest text-sm font-lora">SCROLL TO DISCOVER</p>
                            <div class="w-0.5 h-16 lg:h-24 mt-4">
                                <div style="height: 100%;">
                                    <div class="w-0.5 bg-white h-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="flex flex-col section-p bg-white lg:pt-20">
                <div class="relative isolate">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="flex flex-col w-full items-center justify-center" style="font-family: 'Lora', serif;">
                        <div class="flex flex-col lg:w-2/4">
                            <div class="flex flex-col">
                                <div style="opacity: 1;">
                                    <h3 class="text-center leading-relaxed text-xl md:text-3xl p-5 text-slate-950">Perfect for a romantic & famility getaway or some relaxing me-time, your generously sized accommodation features everything you need for some downright serious pampering.</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>

                {{-- SLIDE --}}
                <div id="gallery" class="relative w-screen lg:pt-20" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://source.unsplash.com/1280x720?programmer" class="absolute block w-screen h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="https://source.unsplash.com/1280x720?home" class="absolute block w-screen h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://source.unsplash.com/1280x720?room" class="absolute block w-screen h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://source.unsplash.com/1280x720?hotel" class="absolute block w-screen h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://source.unsplash.com/1280x720?programmer" class="absolute block w-screen h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </section>


            {{-- ROOM FEATURES --}}
            <section class="flex flex-col section-p bg-gradient-to-r from-slate-900 to-slate-950 text-white px-6 py-10">
                {{-- <div class="relative isolate">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div> --}}
                <div class="flex flex-col w-full items-center justify-center my-4 z-20" style="font-family: 'Lora', serif;">
                    <div class="flex flex-col lg:w-2/4">
                        <div style="opacity: 1;">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="flex flex-col space-y-2 ">
                                    <h1 class="text-4xl font-reguler md:text-4xl tracking-tight mb-4">ROOM FEATURES</h1>
                                    <div style="opacity: 1;">
                                        <div class="flex items-center pt-4 space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ph" width="1em" height="1em" viewBox="0 0 256 256">
                                                <path fill="currentColor" d="m223.68 66.15l-88-48.15a15.88 15.88 0 0 0-15.36 0l-88 48.17a16 16 0 0 0-8.32 14v95.64a16 16 0 0 0 8.32 14l88 48.17a15.88 15.88 0 0 0 15.36 0l88-48.17a16 16 0 0 0 8.32-14V80.18a16 16 0 0 0-8.32-14.03M128 32l80.34 44L128 120L47.66 76ZM40 90l80 43.78v85.79l-80-43.75Zm96 129.57v-85.75L216 90v85.78Z"></path>
                                            </svg>
                                            <p class="font-openSans text-neutral90">30 m2</p>
                                        </div>
                                    </div>
                                    <div style="opacity: 1;">
                                        <div class="flex items-center py-3 space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ph" width="1em" height="1em" viewBox="0 0 256 256">
                                                <path fill="currentColor" d="M117.25 157.92a60 60 0 1 0-66.5 0a95.83 95.83 0 0 0-47.22 37.71a8 8 0 1 0 13.4 8.74a80 80 0 0 1 134.14 0a8 8 0 0 0 13.4-8.74a95.83 95.83 0 0 0-47.22-37.71M40 108a44 44 0 1 1 44 44a44.05 44.05 0 0 1-44-44m210.14 98.7a8 8 0 0 1-11.07-2.33A79.83 79.83 0 0 0 172 168a8 8 0 0 1 0-16a44 44 0 1 0-16.34-84.87a8 8 0 1 1-5.94-14.85a60 60 0 0 1 55.53 105.64a95.83 95.83 0 0 1 47.22 37.71a8 8 0 0 1-2.33 11.07"></path>
                                            </svg>
                                            <p class="font-openSans">2 Adults</p>
                                        </div>
                                    </div>
                                    <div style="opacity: 1;">
                                        <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--material-symbols" width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm0-2h14V5H5zm1-2h12l-3.75-5l-3 4L9 13zm-1 2V5z"></path>
                                            </svg>
                                            <p class="font-openSans">Village View</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col space-y-2">
                                    <ul class="list-disc font-openSans space-y-4 px-4">
                                        <div style="opacity: 1;">
                                            <li>Accommodate up to 2 Adults with 1 Child sharing bed with parents.</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>Share balcony</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>Full inner bathroom</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>Complementary wireless internet access</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>Daily housekeeping and evening turndown service.</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>24-hour butler service</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>Individually controlled air-conditioning</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>Kitchen facilities</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>Coffee and tea making facilities</li>
                                        </div>
                                        <div style="opacity: 1;">
                                            <li>Gym facilities</li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div> --}}
        </div>
        </section>
        </div>
    </main>
</body>
@endsection
