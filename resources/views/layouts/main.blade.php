<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include your CSS files -->
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap">

    <style>
        /* Menyesuaikan warna ikon kalender menjadi putih */
        .date::-webkit-calendar-picker-indicator {
            filter: invert(1);
        }

    </style>

    <!-- Your existing head content -->
    <title>Lisa Homestay</title>
</head>
<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="navbar bg-gradient-to-r from-slate-900 to-slate-950 flex items-center fixed w-full z-20 top-0 start-0 justify-between p-6 lg:px-8" style="font-family: 'Lora', serif;">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Lisa Homestay</span>
                        <img class="h-16 w-auto" src="/img/logo2.png" alt="">
                    </a>
                </div>
            
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="/" class="text-md leading-6 text-white {{ request()->is('/') ? 'border-b-2 border-white border-opacity-100' : '' }}">Home</a>
                    <ul class="flex flex-col text-md leading-6 text-white">
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between {{ request()->is('rooms') ? 'border-b-2 border-white border-opacity-100' : '' }}">
                                Rooms
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/rooms" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Double Room with Balcony</a>
                                    </li>
                                    <li>
                                        <a href="/rooms" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">King Room with Balcony</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    
                    <a href="/rental" class="text-md leading-6 text-white {{ request()->is('rental') ? 'border-b-2 border-white border-opacity-100' : '' }}">Rental</a>
                    <a href="/contact" class="text-md leading-6 text-white {{ request()->is('contact') ? 'border-b-2 border-white border-opacity-100' : '' }}">Location & Contact</a>
                </div>
            
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <a href="https://wa.me/6281234567890" target="_blank" type="button" class="inline-block border border-white text-white py-2 px-4 rounded-md text-center hover:bg-white hover:text-black focus:bg-white focus:text-black">Book Room</a>
                        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                </div>
            </nav>                        
        </header>


        {{-- WA BUTTON --}}
        <section class="fixed bottom-0 right-0 m-4 z-30">
            <a href="https://wa.me/6281234567890" class="py-2 px-6 bg-green-500 text-white rounded-full flex flex-row items-center" target="_blank">
                <div class="mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="22" height="22" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07c0 1.22.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"></path>
                    </svg>
                </div>
                <p class="text-lg">How can we help you?</p>
            </a>
    </div>

    @yield('layout')

    {{-- BOOK FORM --}}
    <div class="flex flex-col main-container text-white justify-center items-center lg:items-end lg:pr-48 bg-cover bg-center p-6 lg:py-12" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url(&quot;https://cf.bstatic.com/xdata/images/hotel/max1280x900/490034721.jpg?k=12d5f748565a0fd718e95cf1d69c1e29d9f431949672629467bcc00a7c8a9883&o=&hp=1&quot;);">
        <div class="flex flex-col mt-5 lg:mt-12"><text class="tracking-wider text-xs">CHECK AVAILABILITY</text><text class="text-xl md:text-2xl font-playfair tracking-wider mt-2">Come as you are and we will take care of the rest</text>
            <div class="w-24 h-0.5 bg-white mt-8"></div>
            <form class="mt-8 flex flex-col">
                <div class="flex flex-col md:flex-row md:space-x-8">
                    <div class="flex flex-col flex-1">
                        <text>Check In</text>
                        <input placeholder="Check In" name="check_in" type="date" class="form-input placeholder:text-gray-100 w-full bg-transparent border-white px-4 py-2 text-white border rounded-lg mt-1 focus:ring-secondary focus:border-secondary date">
                    </div>
                    <div class="flex flex-col flex-1">
                        <text>Check Out</text>
                        <input placeholder="Check Out" name="check_out" type="date" class="form-input placeholder:text-gray-100 w-full bg-transparent border-white px-4 py-2 text-white border rounded-lg mt-1 focus:ring-secondary focus:border-secondary date">
                    </div>
                </div>
                <div class="flex flex-col md:flex-row md:space-x-8 mt-4 md:mt-8">
                    <div class="flex flex-col flex-1"><text>Select Accommodation</text><select name="accommodation" class="form-select placeholder:text-white bg-transparent text-white border rounded-lg border-white px-4 py-2 mt-1 focus:ring-secondary focus:border-secondary">
                            <option value="" class="text-black">Select Accommodation</option>
                            <option value="1 Bedroom Private Pool" class="text-black">1 Bedroom Private Pool</option>
                            <option value="2 Bedroom Private Pool" class="text-black">2 Bedroom Private Pool</option>
                        </select></div>
                    <div class="flex flex-col flex-1 mt-4 md:mt-0"><text>Guest</text><input name="guest" min="1" class="form-input placeholder:text-gray-100 bg-transparent text-white border rounded-lg border-white px-4 py-2 mt-1 focus:ring-secondary focus:border-secondary" placeholder="Guest" type="number" value=""></div>
                </div>
                <button type="submit" class="bg-white text-black hover:bg-blue-100 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 my-6 md:my-10 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">CHECK AVAILABILITY</button>
            </form>
        </div>
        </section>

        {{-- <section class="flex flex-col section-p bg-white px-6">
            <div class="flex justify-center items-center mb-8">
                <div class="h-[10rem] lg:h-[10rem] w-[2px] flex">
                    <div style="height: 100%;">
                        <div class="bg-gray-500 w-[2px] h-full"></div>
                    </div>
                </div>
            </div>
            <div class="relative isolate">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="flex flex-col w-full items-center justify-center my-4 z-20" style="font-family: 'Lora', serif;">
                    <div class="flex flex-col lg:w-2/4">
                        <div class="flex flex-col">
                            <div style="opacity: 1;">
                                <h2 class="text-center text-slate-950 dark:text-slate-950 text-xl md:text-4xl font-lora leading-loose mx-0">COME AS YOU ARE AND WE WILL TAKE CARE OF THE REST</h2>
                            </div>
                        </div>
                        <div style="opacity: 1;">
                            <form>
                                <div class="mt-8 md:mt-16">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                        <div class="flex flex-col space-y-2 ">
                                            <p class="font-semiBold text-md text-black">Check In</p>
                                            <input name="check_in" type="date" class="w-full input-form rounded-lg" value="">
                                        </div>
                                        <!-- Kurangi ruang di sekitar elemen input dan atur ukuran teks -->
                                        <div class="flex flex-col space-y-2">
                                            <p class="font-semiBold text-md text-black">Check Out</p>
                                            <input name="check_out" type="date" class="w-full input-form rounded-lg" value="">
                                        </div>
                                        <!-- Kurangi ruang di sekitar elemen input dan atur ukuran teks -->
                                        <div class="flex flex-col space-y-2">
                                            <p class="font-semiBold text-md text-black">Room Type</p>
                                            <select name="room_type" class="w-full md:w-auto input-form focus:text-black rounded-lg">
                                                <option>Room Type</option>
                                                <option value="Double Room with Balcony">Double Room with Balcony</option>
                                                <option value="King Room with Balcony">King Room with Balcony</option>
                                            </select>
                                        </div>

                                        <!-- Kurangi ruang di sekitar elemen input dan atur ukuran teks -->
                                        <div class="flex flex-col space-y-2">
                                            <p class="font-semiBold text-md text-black">Guest</p>
                                            <input name="guest" type="number" class="w-full input-form rounded-lg" placeholder="Enter guest number" value="1">
                                        </div>
                                    </div>
                                    <button type="submit" class="w-full text-white bg-gradient-to-r from-slate-900 to-slate-950 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 my-6 md:my-10 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Check Availability</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
            </div> --}}
        </section>

    </div>
    {{-- footer --}}
    <footer class="bg-gradient-to-r from-slate-900 to-slate-950 px-6 py-12">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto w-full max-w-screen-xl" style="font-family: 'Lora', serif;">
            <div class="md:flex md:justify-between mb-5">
                <div class="mb-6 md:mb-0">
                    <div class="text-white dark:text-white">
                        <div id="clock" class="text-4xl font-semibold"></div>
                    </div>
                    <div class="flex py-7">
                        <a href="#" class="text-white hover:text-white dark:hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                            <span class="sr-only">Facebook page</span>
                        </a>
                        <a href="#" class="text-white hover:text-white dark:hover:text-white ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                            <span class="sr-only">Instagram Page</span>
                        </a>
                        <a href="#" class="text-white hover:text-white dark:hover:text-white ms-5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5">
                                <path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                            </svg>
                            <span class="sr-only">Tiktok page</span>
                        </a>
                    </div>

                    <a href="/" class="flex mt-2">
                        <img class="h-16 w-auto" src="/img/logo2.png" alt="Lisa Homestay Logo">
                    </a>
                </div>
                <div class="grid">
                    <div>
                        <h2 class="mb-3 text-sm font-semibold text-white uppercase dark:text-white">Our Address</h2>
                        <h3 class="mb-3 text-sm font-medium text-white dark:text-white">Gili Trawangan, Gili Indah, Kec. Pemenang, Kabupaten Lombok Utara, Nusa Tenggara Barat. 83352</h3>
                        <ul class="text-white dark:text-gray-400 font-medium">
                            <li class="mb-6">
                                <a href="https://www.google.com/maps/place/Lisa+Homestay/@-8.3555065,116.0382679,17z/data=!3m1!4b1!4m9!3m8!1s0x2dcde755fda85a49:0x95d9ab145e8c7369!5m2!4m1!1i2!8m2!3d-8.3555065!4d116.0408428!16s%2Fg%2F11clsg87y4?entry=ttu" class="hover:underline" target="blank">See On Map</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Mobile : 081237595208</a>
                            </li>
                            <li>
                                <a href="" class="hover:underline">Email : lisahomestay@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script>
        function updateClock() {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const seconds = now.getSeconds().toString().padStart(2, '0');

            const timeString = `${hours}:${minutes}:${seconds}`;
            document.getElementById('clock').textContent = timeString;
        }

        // Memperbarui jam setiap detik
        setInterval(updateClock, 1000);

        // Memanggil fungsi untuk memperbarui jam saat halaman dimuat
        updateClock();

        let lastScrollTop = 0;

        window.addEventListener("scroll", function() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScroll > lastScrollTop) {
                // Scroll ke bawah, sembunyikan navbar
                document.querySelector('.navbar').classList.add('hidden');
            } else {
                // Scroll ke atas, tampilkan kembali navbar
                document.querySelector('.navbar').classList.remove('hidden');
            }

            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        });

    </script>
</body>


</html>
