@extends('layouts.main')
@section('layout')

<head>
    <title>Story</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/carousel.css"> --}}

</head>

<body class="bg-white" style="font-family: 'Lora', serif;">
    <main class="relative overflow-hidden">
        <section class="flex w-full relative h-screen">
            <div class="flex w-full relative h-screen" style="opacity: 1;">
                <div class="w-full relative">
                    <img src="https://res.cloudinary.com/da583h5sr/image/upload/v1670979608/web/cover/cover_story_g3lwul.png" class="w-full brightness-50 h-screen object-cover">
                    <!-- Adjust brightness-50 to your desired darkness level (0-100) -->
                    <div class="absolute top-0 bottom-20 left-0 right-0 flex flex-col items-center justify-center mt-24 px-8 lg:px-32">
                        <div style="opacity: 1;">
                            <p class="text-3xl lg:text-5xl text-white text-center tracking-wider font-lora uppercase">OUR STORY</p>
                        </div>
                        <div style="opacity: 1;">
                            <p class="text-center mt-4 text-white font-openSans text-xs md:text-sm tracking-wider font-normal lg:max-w-lg leading-relaxed">Not only a ordinary homestay, but a sweet escape for your holiday in Gili, Lombok.</p>
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

        <section class="flex flex-col section-p bg-white lg:py-20">
            <div class="relative isolate">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
                <div class="flex flex-col w-full items-center justify-center" style="font-family: 'Lora', serif;">
                    <div class="flex flex-col lg:w-2/4">
                        <div class="flex flex-col">
                            <div style="opacity: 1;">
                                <h3 class="text-center leading-relaxed text-xl md:text-3xl p-5 text-slate-950">Lisa Homestay is a modern property with beautiful village views in the rural village of Canggu, just 10-minutes drive to Canggu's cultural heartland. It is attuned to the surrounding environment through a thoughtful design that respects modern artistry and cultural heritage.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                </div>
            </div>
        </section>

        <section class="bg-gradient-to-r from-slate-900 to-slate-950 p-8 lg:p-16 px-6 lg:px-32">
            <!-- START THE FEATURETTES -->
            <div class="flex flex-col md:flex-row items-center lg:gap-10 py-8 lg:py-12">
                <div class="md:w-7/12">
                    <h2 class="text-3xl font-bold mb-4 text-white">First featurette heading. <span class="text-gray-500">It’ll blow your mind.</span></h2>
                    <p class="text-lg leading-7 text-white">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
                </div>
                <div class="md:w-5/12 mt-6 md:mt-0">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-300">
                        <!-- Your image goes here -->
                        <img class="object-cover" src="https://source.unsplash.com/1280x720?hotel" alt="Feature Image">
                    </div>
                </div>
            </div>

            {{-- <div class="border-t border-black w-full my-8"></div> --}}


            <div class="flex flex-col md:flex-row-reverse items-center lg:gap-10 py-8 lg:py-12">
                <div class="md:w-7/12">
                    <h2 class="text-3xl font-bold mb-4 text-white">Oh yeah, it’s that good. <span class="text-gray-500">See for yourself.</span></h2>
                    <p class="text-lg leading-7 text-white">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
                </div>
                <div class="md:w-5/12 mt-6 md:mt-0">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-300">
                        <!-- Your image goes here -->
                        <img class="object-cover" src="https://source.unsplash.com/1280x720?hotel" alt="Feature Image">
                    </div>
                </div>
            </div>

            {{-- <hr class="border-t my-8"> --}}

            <div class="flex flex-col md:flex-row items-center lg:gap-10 py-8 lg:py-12">
                <div class="md:w-7/12">
                    <h2 class="text-3xl font-bold mb-4 text-white">And lastly, this one. <span class="text-gray-500">Checkmate.</span></h2>
                    <p class="text-lg leading-7 text-white">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
                </div>
                <div class="md:w-5/12 mt-6 md:mt-0">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-300">
                        <!-- Your image goes here -->
                        <img class="object-cover" src="https://source.unsplash.com/1280x720?hotel" alt="Feature Image">
                    </div>
                </div>
            </div>
            <!-- /END THE FEATURETTES -->
        </section>

    </main>
</body>

@endsection
