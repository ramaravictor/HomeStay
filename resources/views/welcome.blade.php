    @extends('layouts.main')
    @section('layout')


    <body class="bg-white" style="font-family: 'Lora', serif;">
        <main class="relative overflow-hidden">
            <section class="flex w-full relative h-screen" style="opacity: 1;">
                <div class="w-full relative">
                    <img src="img/gili.jpg" class="w-full brightness-50 h-screen object-cover">
                    <!-- Adjust brightness-50 to your desired darkness level (0-100) -->
                    <div class="absolute top-0 bottom-20 left-0 right-0 flex flex-col items-center justify-center mt-24 px-8 lg:px-32">
                        <div style="opacity: 1;">
                            <p class="text-3xl lg:text-5xl text-white text-center tracking-wider font-lora uppercase">A SWEET ESCAPES IN GILI</p>
                        </div>
                        <div style="opacity: 1;">
                            <p class="text-center mt-4 text-white font-openSans text-xs md:text-sm tracking-wider font-normal lg:max-w-lg leading-relaxed">Lisa Homestay is all about Modern aesthetics and is the perfect sweet escape with a soul.</p>
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
            </section>

            {{-- <section class="flex w-full relative h-screen bg-blue80">
                    <div class="flex w-full relative h-screen bg-blue80" style="opacity: 1;">
                        <div class=" w-full relative"><img src="img/bg.png" class="w-full brightness-40 h-screen object-cover">
                            <div class="absolute top-0 bottom-20 left-0 right-0 flex flex-col items-center justify-center  mt-24 px-8 lg:px-32" style="font-family: 'Lora', serif; letter-spacing: 0.05em;">
                                <div style="opacity: 1;">
                                    <h1 class="text-4xl font-reguler tracking-tight text-white sm:text-4xl uppercase">A SWEET ESCAPES IN GILI</h1>
                                </div>
                                <div style="opacity: 1;">
                                    <p class="mt-6 text-lg leading-8 text-white">Lisa Homestay is all about Modern aesthetics and is the perfect sweet escape with a soul.</p>
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 left-0 z-30">
                            <div class="flex flex-col items-center justify-center">
                                <p class="text-white tracking-widest text-sm" style="font-family: 'Lora', serif; letter-spacing: 0.05em;">SCROLL TO DISCOVER</p>
                                <div class="w-0.5 h-16 lg:h-24 mt-4">
                                    <div style="height: 100%;">
                                        <div class="w-0.5 bg-white h-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
            <section class="bg-white">
                <div class="relative isolate">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="main-container flex flex-col p-8 lg:p-32" data-aos="fade-up">
                        <text class="text-2xl lg:mx-16 md:text-3xl text-center font-playfair text-primaryDark tracking-wider font-medium">Experience The Lisa Homestay where our guests can enjoy service, privacy and our unique delivery of Lombok hospitality</text>
                        <div class="flex flex-col md:flex-row mt-8 lg:mt-28">
                            <div class="relative basis-2/5 mr-8 md:mr-16">
                                <div class="w-full h-[22rem] md:h-[32rem] bg-gradient-to-r from-slate-900 to-slate-950"></div>
                                <div class="absolute top-0" style="width: auto;"><img src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/176669307.jpg?k=5d80679037555ed8dd6b4aadac6dc013272d3efef706f78f034113d582702ac4&o=&hp=1" alt="" class="my-4 ml-8 md:ml-16 w-full h-[20rem] md:h-[28rem] object-cover"></div>
                            </div>
                            <div class="flex flex-col pl-0 md:pl-24 mt-8 basis-3/5"><text class="uppercase tracking-wider">your holiday begin here</text><text class="font-playfair text-2xl md:text-3xl mt-4 tracking-wider text-textPrimary">Discover a paradise of your own at The Lisa Homestay</text>
                                <div class="w-24 h-0.5 bg-black my-4 md:my-8 opacity-80"></div>
                                <text class="text-textSecondary">Relax in the comfort of The Lisa Homestay, we are offering the best one bedroom villa and tow bedroom villa design to guest who wants to stay here. Travelers can enjoy luxurious comfort from two different villa categories, in Taman Sari Villa we provide seven one bedroom villas with the same design and one type of two bedroom villa.<br><br>Each of our villas features their own private pool, modern, fashionable interior, private living room and private kitchen.</text>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>
            </section>

            {{-- STORY --}}
            {{-- <section class="bg-white p-8 lg:p-16 px-6 lg:px-32">
                <div class="container lg:gap-10 mx-auto flex flex-col lg:flex-row items-center">
                    <!-- Kolom untuk gambar -->
                    <div class="flex-1">
                        <img class="w-full h-[28rem] rounded-sm object-cover" src="https://cf.bstatic.com/xdata/images/hotel/max1024x768/176669307.jpg?k=5d80679037555ed8dd6b4aadac6dc013272d3efef706f78f034113d582702ac4&o=&hp=1" alt="">
                    </div>
                    <!-- Kolom untuk teks -->
                    <div class="flex-1 mt-6 lg:mt-0" style="font-family: 'Lora', serif;">
                        <h1 class="text-4xl font-reguler md:text-4xl tracking-tight text-slate-950 mb-4">THE HOMESTAY</h1>
                        <p class="text-lg leading-8 text-black">Lisa Homestay is a modern property with a beautiful view of Canggu village, perfect for your summer holiday. It is designed with respect for Bali’s rich artistry and cultural heritage, attuned to the surrounding environment.</p>
                        <!-- Button -->
                        <a href="/" class="button inline-block border border-black text-black py-2 px-4 mt-5 rounded-md text-center hover:bg-black hover:text-white focus:bg-black focus:text-white">Read Full Story</a>
                    </div>
                </div>
            </section> --}}

            {{-- CARD ROOM --}}
            <section class="bg-white p-6 px-6 lg:px-32 lg:mb-24">
                <div class="relative isolate">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="main-container flex flex-col aos-init aos-animate mb-6 lg:mb-16" data-aos="fade-up">
                        <text class="text-textPrimary text-3xl font-playfair text-center">Stay &amp; Accomodation</text>
                        <text class="text-textSecondary font-dmSans text-sm mt-4 text-center tracking-wider">Relax, Enjoy and Work in one of the world's most stunning and luxurious locations. Immerse yourself in Taman Sari Villa views to experience the epitome of relaxed living.</text>
                    </div>
                    <div class="container gap-10 mt-5 mx-auto flex flex-col lg:flex-row items-center">
                        <div class="flex-1 relative">
                            <div style="opacity: 1;"><img src="https://res.cloudinary.com/da583h5sr/image/upload/v1670978652/web/room/room_1_cover_xzinof.png" class="w-full aspect-[3/4] md:aspect-[4/3] brightness-50 object-cover">
                                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-8">
                                    <p class="text-white text-2xl md:text-3xl tracking-wider">Standard Room</p>
                                    <div class="flex flex-row flex-wrap space-x-4 text-sm mt-2 md:mt-4 text-white">
                                        <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ph" width="1em" height="1em" viewBox="0 0 256 256">
                                                <path fill="currentColor" d="m223.68 66.15l-88-48.15a15.88 15.88 0 0 0-15.36 0l-88 48.17a16 16 0 0 0-8.32 14v95.64a16 16 0 0 0 8.32 14l88 48.17a15.88 15.88 0 0 0 15.36 0l88-48.17a16 16 0 0 0 8.32-14V80.18a16 16 0 0 0-8.32-14.03M128 32l80.34 44L128 120L47.66 76ZM40 90l80 43.78v85.79l-80-43.75Zm96 129.57v-85.75L216 90v85.78Z"></path>
                                            </svg>
                                            <p>10 m²/108 ft²</p>
                                        </div>
                                        <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ph" width="1em" height="1em" viewBox="0 0 256 256">
                                                <path fill="currentColor" d="M117.25 157.92a60 60 0 1 0-66.5 0a95.83 95.83 0 0 0-47.22 37.71a8 8 0 1 0 13.4 8.74a80 80 0 0 1 134.14 0a8 8 0 0 0 13.4-8.74a95.83 95.83 0 0 0-47.22-37.71M40 108a44 44 0 1 1 44 44a44.05 44.05 0 0 1-44-44m210.14 98.7a8 8 0 0 1-11.07-2.33A79.83 79.83 0 0 0 172 168a8 8 0 0 1 0-16a44 44 0 1 0-16.34-84.87a8 8 0 1 1-5.94-14.85a60 60 0 0 1 55.53 105.64a95.83 95.83 0 0 1 47.22 37.71a8 8 0 0 1-2.33 11.07"></path>
                                            </svg>
                                            <p>1 queen bed</p>
                                        </div>
                                        <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--material-symbols" width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm0-2h14V5H5zm1-2h12l-3.75-5l-3 4L9 13zm-1 2V5z"></path>
                                            </svg>
                                            <p>Balcony/Terrace View</p>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex"><a href="/rooms" class="button border border-white text-white px-4 py-2 rounded-md hover:bg-white hover:text-gray-900">Discover More</a></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-1 relative">
                            <div style="opacity: 1;"><img src="https://res.cloudinary.com/da583h5sr/image/upload/v1670978652/web/room/room_2_cover_gghitl.png" class="w-full aspect-[3/4] md:aspect-[4/3] brightness-50 object-cover">
                                <div class="absolute bottom-0 left-0 right-0 p-4 md:p-8">
                                    <p class="text-white text-2xl md:text-3xl tracking-wider">Superior Double or Twin Room with Air Conditioning</p>
                                    <div class="flex flex-row flex-wrap space-x-4 text-sm mt-2 md:mt-4 text-white">
                                        <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ph" width="1em" height="1em" viewBox="0 0 256 256">
                                                <path fill="currentColor" d="m223.68 66.15l-88-48.15a15.88 15.88 0 0 0-15.36 0l-88 48.17a16 16 0 0 0-8.32 14v95.64a16 16 0 0 0 8.32 14l88 48.17a15.88 15.88 0 0 0 15.36 0l88-48.17a16 16 0 0 0 8.32-14V80.18a16 16 0 0 0-8.32-14.03M128 32l80.34 44L128 120L47.66 76ZM40 90l80 43.78v85.79l-80-43.75Zm96 129.57v-85.75L216 90v85.78Z"></path>
                                            </svg>
                                            <p>12 m²/129 ft²</p>
                                        </div>
                                        <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ph" width="1em" height="1em" viewBox="0 0 256 256">
                                                <path fill="currentColor" d="M117.25 157.92a60 60 0 1 0-66.5 0a95.83 95.83 0 0 0-47.22 37.71a8 8 0 1 0 13.4 8.74a80 80 0 0 1 134.14 0a8 8 0 0 0 13.4-8.74a95.83 95.83 0 0 0-47.22-37.71M40 108a44 44 0 1 1 44 44a44.05 44.05 0 0 1-44-44m210.14 98.7a8 8 0 0 1-11.07-2.33A79.83 79.83 0 0 0 172 168a8 8 0 0 1 0-16a44 44 0 1 0-16.34-84.87a8 8 0 1 1-5.94-14.85a60 60 0 0 1 55.53 105.64a95.83 95.83 0 0 1 47.22 37.71a8 8 0 0 1-2.33 11.07"></path>
                                            </svg>
                                            <p>1 single bed and 1 queen bed</p>
                                        </div>
                                        <div class="flex items-center space-x-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--material-symbols" width="1em" height="1em" viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M5 21q-.825 0-1.412-.587T3 19V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v14q0 .825-.587 1.413T19 21zm0-2h14V5H5zm1-2h12l-3.75-5l-3 4L9 13zm-1 2V5z"></path>
                                            </svg>
                                            <p>Garden View</p>
                                        </div>
                                    </div>
                                    <div class="mt-8 flex"><a href="/rooms" class="button border border-white text-white px-4 py-2 rounded-md hover:bg-white hover:text-gray-900">Discover More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>
            </section>
        </main>
    </body>
    @endsection
