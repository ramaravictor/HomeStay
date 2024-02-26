@extends('layouts.main')

@section('layout')

<body class="bg-white" style="font-family: 'Lora', serif;">
    <main class="relative overflow-hidden">
        <section class="flex w-full relative h-screen bg-blue-800">
            <div class="w-full relative">
                <img src="https://1.bp.blogspot.com/-dPi8TAkoh1w/XmDFE_seyJI/AAAAAAAAG7M/aXUtLAkSYLk5sM13dEvJcvLoNcmG_W6EACLcBGAsYHQ/s1600/Gili%2BTrawangan%2B3.jpg" class="w-full h-screen object-cover filter brightness-50">
                <div class="absolute top-0 bottom-20 left-0 right-0 flex flex-col items-center justify-center mt-24 px-8 lg:px-32">
                    <div>
                        <p class="text-3xl lg:text-5xl text-white text-center font-lora uppercase">Lisa's Rental</p>
                    </div>
                    <div>
                        <p class="text-center mt-4 text-white font-openSans text-xs md:text-sm font-normal lg:max-w-lg leading-relaxed">Not only a ordinary homestay, we provide you the best things to do in Gili.</p>
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
        

        <section class="p-8 lg:p-32">
            <div class="main-container flex flex-col">
                <text class="text-2xl md:text-3xl text-center text-primaryDark font-medium">Unique stays and beyond. <br>Welcome to the perfect destination to make your holiday.</text>
                <div class="relative isolate">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="flex flex-col md:flex-row mt-8 md:mt-32">
                        <div class="relative basis-2/5 mr-8 md:mr-16">
                            <div class="w-full h-[22rem] md:h-[32rem] bg-gradient-to-r from-slate-900 to-slate-950"></div>
                            <div class="absolute top-0" style="width: 100%;"><img src="https://ik.imagekit.io/tvlk/xpe-asset/AyJ40ZAo1DOyPyKLZ9c3RGQHTP2oT4ZXW+QmPVVkFQiXFSv42UaHGzSmaSzQ8DO5QIbWPZuF+VkYVRk6gh-Vg4ECbfuQRQ4pHjWJ5Rmbtkk=/7944451879387/Island-Hopping-3-Gilis-Snorkeling-Trip-%2528Meeting-Point-at-Gili-Trawangan%2529-11162605-17d9-4936-b799-516e633f80bd.png?tr=q-60,c-at_max,w-1280,h-720&_src=imagekit" alt="" class="my-4 ml-8 md:ml-16 w-full h-[20rem] md:h-[28rem] object-cover"></div>
                        </div>
                        <div class="flex flex-col pl-0 md:pl-24 mt-8 basis-3/5"><text class="uppercase text-xs">accommodation</text>
                            <text class="text-2xl md:text-3xl mt-4 text-textPrimary">Snorkeling Trip 3 Gili</text>
                            <div class="w-24 h-0.5 bg-black mt-8 opacity-80"></div>
                            <div class="text-textPrimary  text-md font-semibold mt-8">
                                <div class="flex flex-row"><text class="w-32 md:w-48">VILLA SIZE</text><text>96 m2 (12m x 8m)</text></div>
                                <div class="flex flex-row mt-1 "><text class="w-32 md:w-48">BED TYPE</text><text>King Size</text></div>
                                <div class="flex flex-row mt-1"><text class="w-32 md:w-48">PRICE</text><text>Rp. 75.000/Person</text></div>
                            </div><text class="text-textSecondary mt-8 text-md tracking-wide">When you are on holiday on Gili Trawangan, snorkeling trips are one of the activities that many tourists are interested in. Snorkeling is indeed an exciting thing because you will see the unspoiled underwater beauty of Gili Trawangan. Cute fish and colorful coral reefs are the attraction during the 3 Gili snorkeling trip. On Gili Trawangan you can join the 3 Gili Snorkeling Trip which starts from 9 am to 3 pm and costs Rp. 75,000/person. If you want a Private Snorkeling Trip, you can rent a Snorkeling Boat at a cost of around 1 million Rupiah for one trip on 3 gili.</text>
                            <div class="flex flex-row justify-between mt-8"><button class="underline underline-offset-4 text-secondary">SEE DETAILS</button><button class="py-2 px-4 border border-secondary text-secondary hover:text-white hover:bg-secondary">BOOK NOW</button></div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>
                <div class="relative isolate">
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="flex flex-col-reverse md:flex-row mt-16">
                        <div class="flex flex-col pr-0 md:pr-24 mt-8 basis-3/5"><text class="uppercase text-xs">accommodation</text>
                            <text class="text-2xl md:text-3xl mt-4 text-textPrimary">Tour the Island by Bike</text>
                            <div class="w-24 h-0.5 bg-black mt-8 opacity-80"></div>
                            <div class="text-textPrimary text-md font-semibold mt-8">
                                <div class="flex flex-row"><text class="w-32 md:w-48">VILLA SIZE</text><text>160 m2 (16m x 10m)</text></div>
                                <div class="flex flex-row mt-1 "><text class="w-32 md:w-48">BED TYPE</text><text>King Size</text></div>
                                <div class="flex flex-row mt-1"><text class="w-32 md:w-48">PRICE</text><text>Rp. 30,000/Hour.</text></div>
                            </div><text class="text-textSecondary mt-8 text-md tracking-wide">For those of you who don't like sea activities, you can try to see the beauty of Gili Trawangan by getting around by bicycle. You can enjoy exploring villages on Gili Trawangan that few people know about. You can rent a bicycle for around Rp. 30,000/hour.</text>
                            <div class="flex flex-row justify-between mt-8"><button class="underline underline-offset-4 text-secondary">SEE DETAILS</button><button class="py-2 px-4 border border-secondary text-secondary hover:text-white hover:bg-secondary">BOOK NOW</button></div>
                        </div>
                        <div class="relative basis-2/5 ml-8 md:ml-16">
                            <div class=" w-full h-[22rem] md:h-[32rem] bg-gradient-to-r from-sky-950 to-sky-900"></div>
                            <div class="absolute top-0 right-0 my-4 mr-8 md:mr-16 w-full " style="width: 100%;"><img src="https://getlost.id/wp-content/uploads/2022/07/trawangan_1650335401.jpg" alt="" class="h-[20rem] md:h-[28rem]  object-cover"></div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>
                <div class="relative isolate">
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="flex flex-col md:flex-row mt-8 md:mt-32">
                        <div class="relative basis-2/5 mr-8 md:mr-16">
                            <div class="w-full h-[22rem] md:h-[32rem] bg-gradient-to-r from-slate-900 to-slate-950"></div>
                            <div class="absolute top-0" style="width: 100%;"><img src="https://www.bigbalitours.com/images/activities/glass-bottom-boat-Bali_20180810143121.jpg" alt="" class="my-4 ml-8 md:ml-16 w-full h-[20rem] md:h-[28rem] object-cover"></div>
                        </div>
                        <div class="flex flex-col pl-0 md:pl-24 mt-8 basis-3/5"><text class="uppercase text-xs">accommodation</text>
                            <text class="text-2xl md:text-3xl mt-4 text-textPrimary">Tour Glass Bottom Boat</text>
                            <div class="w-24 h-0.5 bg-black mt-8 opacity-80"></div>
                            <div class="text-textPrimary  text-md font-semibold mt-8">
                                <div class="flex flex-row"><text class="w-32 md:w-48">VILLA SIZE</text><text>96 m2 (12m x 8m)</text></div>
                                <div class="flex flex-row mt-1 "><text class="w-32 md:w-48">BED TYPE</text><text>King Size</text></div>
                                <div class="flex flex-row mt-1"><text class="w-32 md:w-48">PRICE</text><text>Rp. 850.000</text></div>
                            </div><text class="text-textSecondary mt-8 text-md tracking-wide">If you like seeing the beauty of the underwater world but you can't snorkel, you can try the Glass Bottom Boat Tour. Boatman will take you to beautiful, unspoiled spots where cute fish gather. You can see underwater life from a boat where the bottom is transparent or glass. making it easier for you to see the beautiful seabed of Gili Trawangan. Here you can rent a Glass Bottom Boat for around Rp. 850,000 for one trip to many beautiful spots.</text>
                            <div class="flex flex-row justify-between mt-8"><button class="underline underline-offset-4 text-secondary">SEE DETAILS</button><button class="py-2 px-4 border border-secondary text-secondary hover:text-white hover:bg-secondary">BOOK NOW</button></div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>
                <div class="relative isolate">
                    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                        <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                    <div class="flex flex-col-reverse md:flex-row mt-16">
                        <div class="flex flex-col pr-0 md:pr-24 mt-8 basis-3/5"><text class="uppercase text-xs">accommodation</text>
                            <text class="text-2xl md:text-3xl mt-4 text-textPrimary">GoPro for Diving</text>
                            <div class="w-24 h-0.5 bg-black mt-8 opacity-80"></div>
                            <div class="text-textPrimary text-md font-semibold mt-8">
                                <div class="flex flex-row"><text class="w-32 md:w-48">VILLA SIZE</text><text>160 m2 (16m x 10m)</text></div>
                                <div class="flex flex-row mt-1 "><text class="w-32 md:w-48">BED TYPE</text><text>King Size</text></div>
                                <div class="flex flex-row mt-1"><text class="w-32 md:w-48">PRICE</text><text>Rp. 250.000/Day</text></div>
                            </div><text class="text-textSecondary mt-8 text-md tracking-wide">Gili Snorkeling trip also offers GoPro rental services, allowing you to capture and preserve your snorkeling experience.</text>
                            <div class="flex flex-row justify-between mt-8"><button class="underline underline-offset-4 text-secondary">SEE DETAILS</button><button class="py-2 px-4 border border-secondary text-secondary hover:text-white hover:bg-secondary">BOOK NOW</button></div>
                        </div>
                        <div class="relative basis-2/5 ml-8 md:ml-16">
                            <div class=" w-full h-[22rem] md:h-[32rem] bg-gradient-to-r from-sky-950 to-sky-900"></div>
                            <div class="absolute top-0 right-0 my-4 mr-8 md:mr-16 w-full " style="width: 100%;"><img src="https://static.gopro.com/aem/en/us/news/how-to-use-gopro-as-snorkeling-diving-camera/images/GoPro_News_GoPro_as_a_snorkeling_dive_camera-handler.jpg" alt="" class="h-[20rem] md:h-[28rem]  object-cover"></div>
                        </div>
                    </div>
                    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>
</body>
@endsection
